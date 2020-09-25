<?php

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
                'name' => 'sminth',
                'email' => NULL,
                'password' => NULL,
                'titre_fichier_ajouter' => 'cour de java l2',
                'remember_token' => NULL,
                'created_at' => '2020-09-23 04:20:09',
                'updated_at' => '2020-09-23 04:20:09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'sminth',
                'email' => NULL,
                'password' => NULL,
                'titre_fichier_ajouter' => 'cour de java l2',
                'remember_token' => NULL,
                'created_at' => '2020-09-23 04:21:36',
                'updated_at' => '2020-09-23 04:21:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'sminth',
                'email' => NULL,
                'password' => NULL,
                'titre_fichier_ajouter' => 'cour de java l2',
                'remember_token' => NULL,
                'created_at' => '2020-09-23 04:22:35',
                'updated_at' => '2020-09-23 04:22:35',
            ),
        ));
        
        
    }
}