<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rules;

class RulesController extends Controller
{
    public function index() {
        $data = Rules::orderBy('kode_pertanyaan')->get();
        return view('rules.index', compact('data'));
    }

    public function create() {
        $question_code_list = $this->getQuestionCodeList();
        return view('rules.form', compact('question_code_list'));
    }

    public function store(Request $request) {
        DB::beginTransaction();
        $redirect = redirect()->route('rules.index');
        try {
            $data = $request->only(['kesimpulan', 'solusi', 'kode_pertanyaan']);
            if (Rules::where('kode_pertanyaan', $data['kode_pertanyaan'])->count()) {
                return redirect()->back()->with('error', 'Kode pertanyaan tersebut sudah digunakan')->withInput();
            }
            Rules::create($data);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            // dd($e);
            return $redirect->with('error', 'Gagal menambahkan data');
        }
        return $redirect->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id) {
        $data = Rules::find($id);
        $question_code_list = $this->getQuestionCodeList();
        if ($data) {
            return view('rules.form', compact('data', 'question_code_list'));
        } else {
            abort(404);
        }
    }

    public function update(Request $request, $id) {
        DB::beginTransaction();
        $redirect = redirect()->route('rules.index');
        try {
            $data = $request->only(['kesimpulan', 'solusi', 'kode_pertanyaan']);
            $rule = Rules::find($id);
            if ($rule) {
                if (Rules::where('kode_pertanyaan', $data['kode_pertanyaan'])->count() 
                    && $data['kode_pertanyaan'] != $rule->kode_pertanyaan) {
                    return redirect()->back()->with('error', 'Kode pertanyaan tersebut sudah digunakan')->withInput();
                }
                $rule->update($data);
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
        $rule = Rules::find($id);
        $redirect = redirect()->route('rules.index');
        if (! $rule) {
            abort(404);
        }
        if ($rule->delete()) {
            return $redirect->with('success', 'Berhasil menghapus data');
        } 
        return $redirect->with('error', 'Gagal menghapus data');
    }

    private function getQuestionCodeList() {
        return \App\Models\Questions::groupBy('kode')->pluck('kode');
    }
}
