<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id_user' => 1,
            'name' => 'Rosario',
            'last_name' => 'Carnelli',
            'birthday' => "1994-08-24 13:30:00",
            'address' => 'Juramento 5099',
            'dni' => 38536309,
            'nationality' => 'Argentina',
            'email' => 'rosario@carnelli.com',
            'phone' => 1550580506,
            'id_team' => 1,
            'comments' => 'todo ok.',
            'event_question' => 'Instagram',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id_user' => 2,
            'name' => 'Simon',
            'last_name' => 'Diaz',
            'birthday' => "1994-01-08 13:30:00",
            'address' => 'Av Diaz Velez 234',
            'dni' => 72569852,
            'nationality' => 'Venezolana',
            'email' => 'simon@diaz.com',
            'phone' => 1573634810,
            'id_team' => 1,
            'comments' => 'Keloke',
            'event_question' => 'Instagram',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
