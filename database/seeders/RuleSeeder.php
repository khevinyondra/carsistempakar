<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rules;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rules::create([
            'pertanyaan1' => 'A1',
            'pertanyaan_a' => 'A1',
            'pertanyaan_b' => 'A2',
            'pertanyaan_c' => 'A3',
            'pertanyaan_d' => 'A4',
            'kesimpulan' => 'Kerusakan pada busi',
            'solusi' => 'ganti busi serta cari tahu penyebab pembakaran kurang sempurna dengan memperiksa setelan atau injeks',
        ]);
        
        Rules::create([
            'pertanyaan1' => 'B1',
            'pertanyaan_a' => 'B1',
            'pertanyaan_b' => 'B2',
            'pertanyaan_c' => 'B3',
            'pertanyaan_d' => 'B4',
            'kesimpulan' => 'Injektor Bermasalah',
            'solusi' => 'Bersihkan injektor dengan cairan pembersih injektor atau injector cleaner. Cairan ini dijual dengan',
        ]);
        
        Rules::create([
            'pertanyaan1' => 'C1',
            'pertanyaan_a' => 'C1',
            'pertanyaan_b' => 'C2',
            'pertanyaan_c' => 'C3',
            'pertanyaan_d' => 'C4',
            'kesimpulan' => 'Premature Ignition',
            'solusi' => 'Bersihkan Ruang Bakar Dengan Menggunakan Carbon Cleaner',
        ]);
        
        Rules::create([
            'pertanyaan1' => 'D1',
            'pertanyaan_a' => 'D1',
            'pertanyaan_b' => 'D2',
            'pertanyaan_c' => 'D3',
            'pertanyaan_d' => 'D4',
            'kesimpulan' => 'Kerusakan AC / Freon AC habis',
            'solusi' => 'Silahkan periksa westarn / resistor / tahanan blower. Kemungkinan besar ada yang putus.Untuk yang ma',
        ]);

        Rules::create([
            'pertanyaan1' => 'E1',
            'pertanyaan_a' => 'E1',
            'pertanyaan_b' => 'E2',
            'pertanyaan_c' => 'E3',
            'pertanyaan_d' => 'E4',
            'kesimpulan' => 'Kerusakan Pada Rem',
            'solusi' => 'Ganti kampas rem atau menambah minyak pelumas rem',
        ]);
        
        Rules::create([
            'pertanyaan1' => 'F1',
            'pertanyaan_a' => 'F1',
            'pertanyaan_b' => 'F2',
            'pertanyaan_c' => 'F3',
            'pertanyaan_d' => 'F4',
            'kesimpulan' => 'Mesin Overheat',
            'solusi' => 'menambah air pada radiator mobil',
        ]);

        Rules::create([
            'pertanyaan1' => 'G1',
            'pertanyaan_a' => 'G1',
            'pertanyaan_b' => 'G2',
            'pertanyaan_c' => 'G3',
            'pertanyaan_d' => 'G4',
            'kesimpulan' => 'Kerusakan Transmisi',
            'solusi' => 'mengganti kampas kopling atau menambah kembali cairan dengan ukuran yang sesuai',
        ]);

        Rules::create([
            'pertanyaan1' => 'H1',
            'pertanyaan_a' => 'H1',
            'pertanyaan_b' => 'H2',
            'pertanyaan_c' => 'H3',
            'pertanyaan_d' => 'H4',
            'kesimpulan' => 'Kerusakan Accu & engine mounting',
            'solusi' => 'mengganti accu mobil dan mengganti engine mounting',
        ]);

        Rules::create([
            'pertanyaan1' => 'I1',
            'pertanyaan_a' => 'I1',
            'pertanyaan_b' => 'I2',
            'pertanyaan_c' => 'I3',
            'pertanyaan_d' => 'I4',
            'kesimpulan' => 'Tangki bahan bakar mengalami kerusakan',
            'solusi' => 'Menguras tangki bahan bakar dan melakukan pengecekan tangki tersebut',
        ]);

        Rules::create([
            'pertanyaan1' => 'J1',
            'pertanyaan_a' => 'J1',
            'pertanyaan_b' => 'J2',
            'pertanyaan_c' => 'J3',
            'pertanyaan_d' => 'J4',
            'kesimpulan' => 'Pompa oli mengalami kerusakan',
            'solusi' => 'Lakukan penggantian seal hingga tidak ada oli yang merembes lagi',
        ]);

        Rules::create([
            'pertanyaan1' => 'K1',
            'pertanyaan_a' => 'K1',
            'pertanyaan_b' => 'K2',
            'pertanyaan_c' => 'K3',
            'pertanyaan_d' => 'K4',
            'kesimpulan' => 'Radiator mengalami kebocoran',
            'solusi' => 'isi radiator dengan air mineral untuk sementara',
        ]);

        Rules::create([
            'pertanyaan1' => 'L1',
            'pertanyaan_a' => 'L1',
            'pertanyaan_b' => 'L2',
            'pertanyaan_c' => 'L3',
            'pertanyaan_d' => 'L4',
            'kesimpulan' => 'Alternator rusak',
            'solusi' => 'Bersihkan komponen alternator',
        ]);

        Rules::create([
            'pertanyaan1' => 'M1',
            'pertanyaan_a' => 'M1',
            'pertanyaan_b' => 'M2',
            'pertanyaan_c' => 'M3',
            'pertanyaan_d' => 'M4',
            'kesimpulan' => 'Kopling rusak dan kampas koling sudah aus',
            'solusi' => 'mengganti kampas kopling dengan yang baru',
        ]);
    }
}
