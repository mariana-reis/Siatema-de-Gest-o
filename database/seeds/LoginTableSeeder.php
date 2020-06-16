<?php

use Illuminate\Database\Seeder;

class LoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SistemaControleBar\User::truncate();
        factory(App\User::class,10)->create();

        SistemaControleBar\User::create([
            'name' => "Mariana Pereira",
            'email' => "mariana_pereira15@yahoo.com",
            'password' => bcrypt("mari123"),
        ]);

    }
}
