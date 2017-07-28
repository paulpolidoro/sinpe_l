<?php

use Illuminate\Database\Seeder;

class ClientsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name'=> strtoupper(str_random()),
            'fantasy_name'=> str_random(),
            'cnpj'=> (string)rand(11111111111111, 99999999999999),
            'address'=> str_random().', '.(string)rand(10, 9999),
            'state'=> 'São Paulo',
            'city'=> 'São Paulo',
            'district'=> str_random(),
            'cep'=> (string)rand(11111111, 99999999),
            'contact'=> str_random(7).' '.str_random('4'),
            'email'=> strtolower(str_random(9).'@gmail.com'),
            'phone'=> (string)rand(1111111111, 9999999999)
        ]);
    }
}
