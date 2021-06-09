<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Questions;
use App\Models\Hasil;
use App\Models\Rules;
use App\Helpers\Helpers;

class QuestionsController extends Controller
{
    public function index() {
        $data = Questions::orderBy('kode')->orderBy('urutan')->get();
        return view('questions.index', compact('data'));
    }

    public function create() {
        return view('questions.form');
    }

    public function store(Request $request) {
        DB::beginTransaction();
        $redirect = redirect()->route('questions.index');
        try {
            $data = $request->only(['urutan', 'pertanyaan']);
            $data['kode'] = ucwords($request->input('kode'));
            if (Questions::where(['kode' => $data['kode'], 'urutan' => $data['urutan']])->count()) {
                return redirect()->back()->with('error', 'Kode dengan urutan tersebut sudah digunakan')->withInput();
            }
            Questions::create($data);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            // dd($e);
            return $redirect->with('error', 'Gagal menambahkan data');
        }
        return $redirect->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id) {
        $data = Questions::find($id);
        if ($data) {
            return view('questions.form', compact('data'));
        } else {
            abort(404);
        }
    }

    public function update(Request $request, $id) {
        DB::beginTransaction();
        $redirect = redirect()->route('questions.index');
        try {
            $data = $request->only(['urutan', 'pertanyaan']);
            $data['kode'] = ucwords($request->input('kode'));

            $question = Questions::find($id);
            if ($question) {
                if (Questions::where(['kode' => $data['kode'], 'urutan' => $data['urutan']])->count() && 
                        !($data['kode'] == $question->kode && $data['urutan'] == $question->urutan)) {
                    return redirect()->back()->with('error', 'Kode dengan urutan tersebut sudah digunakan')->withInput();
                }
                $question->update($data);
                DB::commit();
            } else {
                abort(404);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            // dd($e);
            return $redirect->with('error', 'Gagal menyimpan data');
        }
        return $redirect->with('success', 'Berhasil menyimpan data');
    }

    public function destroy($id) {
        $question = Questions::find($id);
        $redirect = redirect()->route('questions.index');
        if (! $question) {
            abort(404);
        }
        if ($question->delete()) {
            return $redirect->with('success', 'Berhasil menghapus data');
        } 
        return $redirect->with('error', 'Gagal menghapus data');
    }

    public function getQuestion(Request $request)
    {
        if (! $request->ajax()) {
            abort(404);
        } 
        else {
            $request->validate(['member_id' => 'required']);
            DB::beginTransaction();
            try {
                $prev_question_code = $request->input('previous_question_code');
                $prev_question_sequence = $request->input('previous_question_sequence');
                $prev_question_answer = $request->input('previous_question_answer');

                if ($prev_question_code != null && $prev_question_sequence != null && $prev_question_answer !== null) {
                    $next_question = $this->getNextQuestion($prev_question_code, $prev_question_sequence, $prev_question_answer);
                    if ($next_question == null) {
                        $next_question = [
                            'kode' => null,
                            'urutan' => null,
                            'pertanyaan' => null
                        ];
                    }

                    $hasil = Hasil::findOrFail($request->input('member_id'));
                    if ($prev_question_sequence === 1 && $prev_question_answer === true) {
                        $rules = Rules::where('kode_pertanyaan', ucwords($prev_question_code))->first();
                        $hasil->update([
                            'rules_id' => $rules->id,
                            'jawaban' => [true],
                        ]);
                    }

                    $jawaban = $hasil->jawaban;
                    $jawaban[$prev_question_sequence-1] = $prev_question_answer;
                    if ($prev_question_sequence > 1) {
                        $hasil->update([
                            'jawaban' => $jawaban
                        ]);
                    }
                } else {
                    $next_question = $this->getFirstQuestion();
                }

                $next_question = [
                    'code' => $next_question['kode'],
                    'sequence' => $next_question['urutan'],
                    'question' => $next_question['pertanyaan'],
                ];

                DB::commit();
                return Helpers::response(200, true, 'Successfully retrieve data', compact('next_question'));
            }
            catch(\Exception $e) {
                DB::rollback();
                // dd($e);
                return Helpers::response(500, false, 'Failed to retrieve data');
            }
            
        }
    }

    private function getFirstQuestion() {
        return Questions::where(['kode' => 'A', 'urutan' => 1])->first();
    }

    private function getNextQuestion($prev_question_code, $prev_question_sequence, $prev_question_answer) {
        $question = new Questions();
        if ($prev_question_sequence === 1 && $prev_question_answer === false) {
            $next_question_code = chr(ord($prev_question_code) + 1); // misal A -> B
            return $question->where(['kode' => $next_question_code, 'urutan' => 1])->first();
        } 
        else {
            $next_question_sequence = $prev_question_sequence + 1;
            return $question->where(['kode' => $prev_question_code, 'urutan' => $next_question_sequence])->first();
        }
    }
}
