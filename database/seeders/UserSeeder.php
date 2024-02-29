<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'NAK',
                'email' =>'nak@gmail.com',
                'password' => Hash::make('5803'),
                'type' => 'super_staff'
            ],
            [
                'name' => 'MFF',
                'email' =>'mff@gmail.com',
                'password' => Hash::make('8330'),
                'type' => 'super_staff'
            ],
            [
                'name' => 'IMA',
                'email' =>'ima@gmail.com',
                'password' => Hash::make('4325'),
                'type' => 'super_staff'
            ],
            [
                'name' => 'AAS',
                'email' =>'aas@gmail.com',
                'password' => Hash::make('1604'),
                'type' => 'super_staff'
            ],
            [
                'name' => 'MRO',
                'email' => 'mro@gmail.com',
                'password' => Hash::make('1606'),
                'type' => 'super_staff'
            ],
            [
                'name' => 'Staff',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('staff'),
                'type' => 'staff'
            ],
            [
                'name' => 'Export',
                'email' => 'export@gmail.com',
                'password' => Hash::make('export'),
                'type' => 'export'
            ]
            


            ];
        foreach($data as $d){
            User::create($d);
        }
    }
}
