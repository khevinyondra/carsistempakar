<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hasil;
use App\Models\Rules;
use App\Helpers\Helpers;

class DiagnosaController extends Controller
{
    public function diagnosisresult(Request $request)
    {
        if (! $request->ajax()) {
            abort(404);
        } 
        else {
            DB::beginTransaction();
            try {
                $kesimpulan = Rules::where('pertanyaan1', $request->pertanyaan1)
                    ->orWhere('pertanyaan_a', $request->pertanyaanA)
                    ->orWhere('pertanyaan_b', $request->pertanyaanB)
                    ->orWhere('pertanyaan_c', $request->pertanyaanC)
                    ->orWhere('pertanyaan_d', $request->pertanyaanD)
                    ->first();

                $data =  new Hasil();
                $data->Nama = $request->nama;
                $data->Plat_Nomor = $request->plat_nomor;
                $data->pertanyaan1 = $request->pertanyaan1;
                $data->pertanyaan_a = $request->pertanyaanA;
                $data->pertanyaan_b = $request->pertanyaanB;
                $data->pertanyaan_c = $request->pertanyaanC;
                $data->pertanyaan_d = $request->pertanyaanD;
                $data->kesimpulan = $kesimpulan->kesimpulan;

                $data->save();
                DB::commit();
                return Helpers::response(200, true, 'Successfully retrieve data', compact('kesimpulan'));
            }
            catch (\Exception $e) {
                DB::rollBack();
                return Helpers::response(500, false, 'Failed to retrieve data');
            }
        }
    }

    public function hapus(Request $request)
    {
        $data = Hasil::findOrFail($request->id);
        $data->delete();
        return redirect('home_user');
    }
}
