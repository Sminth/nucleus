<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FichiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fichiers')->delete();
        
        \DB::table('fichiers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'cour de java l2',
                'description' => 'cour de java licence 2 du prof Diarra, année scolaire 2019-2020',
                'keywords' => 'l2, java, mr Diarra',
                'lien' => 'documents/cours_java_eclipse_Doudoux.pdf',
                'type' => 'document',
                'created_at' => '2020-09-23 04:22:35',
                'updated_at' => '2020-09-23 04:22:35',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'professeur de compta licence 2',
                'description' => 'photo du prof de comptabilité lors de son dernier cour',
                'keywords' => 'compta, l2',
                'lien' => 'images/prof.png',
                'type' => 'image',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'etudiant sminth',
                'description' => 'photo de sminth au cour de compta',
                'keywords' => 'l2',
                'lien' => 'images/sm.jpg',
                'type' => 'image',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'journée d\'integration 2020',
                'description' => 'defilé de mode de la ji 2020',
                'keywords' => 'ji, journee d\'integration',
                'lien' => 'videos/vid.mp4',
                'type' => 'video',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'parainage ji 2020',
                'description' => 'parainage des etudiants de la licence 1 a la ji 2020',
                'keywords' => 'ji, parainage',
                'lien' => 'videos/ji2.mp4',
                'type' => 'video',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'comptabilite l2 2016',
                'description' => 'cour de compta 2015-2016',
                'keywords' => 'compta',
                'lien' => 'document/compta2.pdf',
                'type' => 'document',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'bla bla car',
                'description' => 'blablablabla',
                'keywords' => 'compta',
                'lien' => 'images/c.png',
                'type' => 'image',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'bla bla car',
                'description' => 'blablablabla',
                'keywords' => 'compta',
                'lien' => 'images/c.png',
                'type' => 'image',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}