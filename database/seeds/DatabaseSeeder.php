<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->insert([
            'name'=>'Erik Figueiredo',
            'email'=>'contato@webdevbr.com.br',
            'password'=>bcrypt('1234'),
        ]);

        Model::reguard();
    }
}
