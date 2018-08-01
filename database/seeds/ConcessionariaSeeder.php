<?php

use Illuminate\Database\Seeder;

class ConcessionariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $this->call(UsersTableSeeder::class);
        DB::table('concessionarias')->insert([
            'nome'=>'Fiori',
            'endereco'=>'Rua João Ivo da Silva',
            'numero'=>'220',
            'bairro'=>'Madalena',
            'cidade'=>'Recife',
            'uf'=>'PE',
            'complemento'=>'',
            'cep'=>'52720100',
            'telefone'=>'',
        ]);
        DB::table('concessionarias')->insert([
            'nome'=>'Italiana',
            'endereco'=>'Avenida Marechal Mascarenha de Moraes',
            'numero'=>'2156',
            'bairro'=>'Imbiribeira',
            'cidade'=>'Recife',
            'uf'=>'PE',
            'complemento'=>'',
            'cep'=>'51180001',
            'telefone'=>'',
        ]);
        DB::table('concessionarias')->insert([
            'nome'=>'Via Sul',
            'endereco'=>' Av. Prof. José dos Anjos',
            'numero'=>'1775',
            'bairro'=>'Arruda',
            'cidade'=>'Recife',
            'uf'=>'PE',
            'complemento'=>'',
            'cep'=>'52110130',
            'telefone'=>'',
        ]);
    }
}
