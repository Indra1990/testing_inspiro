<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Items;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $dbitems = [
            [
               'name' => 'Biskuit',
               'unit' => 'Satuan',
               'stock' => '10',
               'harga' => '6000',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Chips',
                'unit' => 'Satuan',
                'stock' => '10',
                'harga' => '8000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Oreo',
                'unit' => 'Satuan',
                'stock' => '10',
                'harga' => '10000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tango',
                'unit' => 'Satuan',
                'stock' => '10',
                'harga' => '12000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Cokelat',
                'unit' => 'Satuan',
                'stock' => 0,
                'harga' => '15000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ]
       ];

       DB::table('items')->insert($dbitems);

    }
}
