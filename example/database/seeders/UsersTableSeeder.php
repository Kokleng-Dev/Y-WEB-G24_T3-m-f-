<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Aracely Carroll',
                'last_name' => 'Emanuel Quigley',
                'username' => 'Test User',
                'email' => 'test@example.com',
                'email_verified_at' => '2024-08-01 11:58:51',
                'password' => '$2y$12$gNmH.dLPmfUdZJn9kJ6OL.Zbk73zL3xNSZKkmz.in08yb3H0bzyLW',
                'remember_token' => 'kj8HvSzg0H',
                'created_at' => '2024-08-01 11:58:51',
                'updated_at' => '2024-08-01 11:58:51',
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Fabian Jones IV',
                'last_name' => 'Alisha Senger',
                'username' => 'Abdiel Schamberger DVM',
                'email' => 'casimir50@example.com',
                'email_verified_at' => '2024-08-01 11:59:48',
                'password' => '$2y$12$w3D22YgPoeQkdfsZI3kbfeZkqD86VpVlgqcZaNt5GmbnH5TKst0Oa',
                'remember_token' => '0LxQCxDujG',
                'created_at' => '2024-08-01 11:59:48',
                'updated_at' => '2024-08-01 11:59:48',
            ),
            2 => 
            array (
                'id' => 3,
                'first_name' => 'Baby Rowe',
                'last_name' => 'Ansley Hauck IV',
                'username' => 'Yesenia Auer',
                'email' => 'mmonahan@example.net',
                'email_verified_at' => '2024-08-01 11:59:48',
                'password' => '$2y$12$w3D22YgPoeQkdfsZI3kbfeZkqD86VpVlgqcZaNt5GmbnH5TKst0Oa',
                'remember_token' => 'deFqZxh0OG',
                'created_at' => '2024-08-01 11:59:48',
                'updated_at' => '2024-08-01 11:59:48',
            ),
            3 => 
            array (
                'id' => 4,
                'first_name' => 'Liana Leannon',
                'last_name' => 'Reanna Rau',
                'username' => 'Vincenza Dickens IV',
                'email' => 'adan.wiegand@example.net',
                'email_verified_at' => '2024-08-01 11:59:48',
                'password' => '$2y$12$w3D22YgPoeQkdfsZI3kbfeZkqD86VpVlgqcZaNt5GmbnH5TKst0Oa',
                'remember_token' => 'dxFr9H6Dqd',
                'created_at' => '2024-08-01 11:59:48',
                'updated_at' => '2024-08-01 11:59:48',
            ),
            4 => 
            array (
                'id' => 5,
                'first_name' => 'Marquis Cartwright',
                'last_name' => 'Mrs. Drew Rice',
                'username' => 'Prof. Marisol Zemlak',
                'email' => 'will.stephany@example.net',
                'email_verified_at' => '2024-08-01 11:59:48',
                'password' => '$2y$12$w3D22YgPoeQkdfsZI3kbfeZkqD86VpVlgqcZaNt5GmbnH5TKst0Oa',
                'remember_token' => 'Yp6tzixrT1',
                'created_at' => '2024-08-01 11:59:48',
                'updated_at' => '2024-08-01 11:59:48',
            ),
            5 => 
            array (
                'id' => 6,
                'first_name' => 'Terence King',
                'last_name' => 'Dr. Clyde Hessel II',
                'username' => 'Joshua Schmitt',
                'email' => 'rosenbaum.bernardo@example.net',
                'email_verified_at' => '2024-08-01 11:59:48',
                'password' => '$2y$12$w3D22YgPoeQkdfsZI3kbfeZkqD86VpVlgqcZaNt5GmbnH5TKst0Oa',
                'remember_token' => 'qR4Jxmo5uP',
                'created_at' => '2024-08-01 11:59:48',
                'updated_at' => '2024-08-01 11:59:48',
            ),
        ));
        
        
    }
}