<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateSuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superUser = User::create([
            'name' => 'Admin',
            'email' => 'greenmoroder@gmail.com',
            'password' => Hash::make('Izai69kai'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $alex = User::create([
            'name' => 'Александр',
            'email' => 'aleksandr653@mail.ru',
            'password' => Hash::make('qrt8B48SjatY'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $tester = User::create([
            'name' => 'Тестировщик',
            'email' => 'test@mail.ru',
            'password' => Hash::make('qrt8B48SjatY'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Role::create([
            'name' => 'super-user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $superUser->assignRole('super-user');
        $alex->assignRole('super-user');
        $tester->assignRole('super-user');
    }
}
// php artisan db:seed --class=CreateSuperUserSeeder