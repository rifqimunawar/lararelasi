<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenghuniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penghuni')->insert([
            'name' => 'rifqi',
            'domisili' =>'bandung',
            'kamar_id' =>'1',
        ]);
        DB::table('penghuni')->insert([
            'name' => 'munawar',
            'domisili' =>'kab. bandung',
            'kamar_id' =>'1',
        ]);
        DB::table('penghuni')->insert([
            'name' => 'ridwan',
            'domisili' =>'kab. bandung barat',
            'kamar_id' =>'2',
        ]);
    }
}
