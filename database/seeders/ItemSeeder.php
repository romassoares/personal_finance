<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $bms = [
            'açucar',
            'leite',
            'arroz',
            'feijão',
            'oleo',
            'chocolate em pó',
            'margarina',
            'floção',
            'linguiça',
            'papel higiênico',
            'desinfetante',
            'agua sanitária',
            'sabão em pó',
            'sabonete',
            'biscoito agua e sal',
            'creme de leite',
            'nissin',
        ];
        foreach ($bms as $bm)
            DB::table('items')->insert([
                'name' => $bm
            ]);
    }
}
