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
            $request->validate([
                'member_id' => 'required',
            ]);
            try {
                $hasil = Hasil::with('rules')->findOrFail($request->input('member_id'));
                $result = [
                    'name' => $hasil->nama,
                    'license_plate' => $hasil->plat_nomor,
                    'conclusion' => $hasil->rules->kesimpulan,
                    'solution' => $hasil->rules->solusi,
                ];

                return Helpers::response(200, true, 'Successfully retrieve data', $result);
            }
            catch (\Exception $e) {
                // dd($e);
                return Helpers::response(500, false, 'Failed to retrieve data');
            }
        }
    }

    public function hapus(Request $request)
    {
        $data = Hasil::findOrFail($request->id);
        $data->delete();
        return redirect()->route('dashboard');
    }

    public function addMember(Request $request) {
        if (! $request->ajax()) {
            abort(404);
        } 
        else {
            $request->validate([
                'name' => 'required',
                'license_plate' => 'required'
            ]);
            DB::beginTransaction();
            try {
                $data = [
                    'nama' => $request->input('name'),
                    'plat_nomor' => $request->input('license_plate'),
                ];
                $hasil = Hasil::create($data);
                $result = [
                    'member_id' => $hasil->id,
                    'name' => $hasil->nama,
                    'license_plate' => $hasil->plat_nomor,
                ];

                DB::commit();
                return Helpers::response(200, true, 'Successfully added new member', $result);
            } 
            catch (\Exception $e) {
                DB::rollBack();
                // dd($e);
                return Helpers::response(500, false, 'Failed to add new member');
            }
        }
    }
}
