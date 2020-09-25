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
                'id' => 3,
                'title' => 'etudiant sminth',
                'description' => 'photo de l\'etudiant sminth a la ji 2020',
                'keywords' => 'l2, sminth, ji',
                'lien' => 'images/sminth.jpg',
                'type' => 'image',
                'created_at' => '2020-09-23 05:49:00',
                'updated_at' => '2020-09-23 05:49:01',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'licence 3 2020',
                'description' => 'photo de la licence 3, organisateur de la ji 2020',
                'keywords' => 'ji, journee d\'integration,l3',
                'lien' => 'images/l3.jpg',
                'type' => 'image',
                'created_at' => '2020-09-23 06:05:44',
                'updated_at' => '2020-09-23 06:05:47',
            ),
            3 => 
            array (
                'id' => 7,
                'title' => 'Malan Emmanuel',
                'description' => 'Etudiant Malan Emmanuel, co fondateur de nucleus',
                'keywords' => 'sminth, nucleus',
                'lien' => 'images/sm.jpg',
                'type' => 'image',
                'created_at' => '2020-09-23 05:50:50',
                'updated_at' => '2020-09-23 05:50:51',
            ),
            4 => 
            array (
                'id' => 8,
                'title' => 'Mr Duurand',
                'description' => 'mr Durand a la journée d\'integration 2020',
                'keywords' => 'mr durand, ji',
                'lien' => 'images/d.jpg',
                'type' => 'image',
                'created_at' => '2020-09-23 05:52:43',
                'updated_at' => '2020-09-23 05:52:44',
            ),
            5 => 
            array (
                'id' => 9,
                'title' => 'mr Diarra',
                'description' => 'Mr diarra a la journée d\'integration 2020',
                'keywords' => 'ji, mr diarra',
                'lien' => 'images/diarra.jpg',
                'type' => 'image',
                'created_at' => '2020-09-23 05:57:02',
                'updated_at' => '2020-09-23 05:57:03',
            ),
            6 => 
            array (
                'id' => 10,
                'title' => 'Mr Malan Nindjin',
                'description' => 'Mr Malan Nindjin a la journée d\'integration 2020',
                'keywords' => 'ji, mr malan',
                'lien' => 'images/nindjin.jpg',
                'type' => 'image',
                'created_at' => '2020-09-23 05:58:07',
                'updated_at' => '2020-09-23 05:58:06',
            ),
            7 => 
            array (
                'id' => 11,
                'title' => 'Mr Diarra',
                'description' => 'Mr Diarra Mamadou a la ji 2k20',
                'keywords' => 'ji, mr diarra',
                'lien' => 'images/diarra_2.jpg',
                'type' => 'image',
                'created_at' => '2020-09-23 06:01:58',
                'updated_at' => '2020-09-23 06:01:59',
            ),
            8 => 
            array (
                'id' => 12,
                'title' => 'TD 1 génie logiciel l2',
                'description' => 'TD de génie logiciel licence 2 2019-2020',
                'keywords' => 'licence 2,l2, génie logiciel',
                'lien' => 'documents/TD 1 Genie logiciel.docx',
                'type' => 'document',
                'created_at' => '2020-09-23 06:38:43',
                'updated_at' => '2020-09-23 06:38:43',
            ),
            9 => 
            array (
                'id' => 13,
                'title' => 'cour controle budgetaire l2',
                'description' => ' cour de contrôle budgetaire,  semestre 2 licence 2',
                'keywords' => 'controle budgetaire, l2',
                'lien' => 'documents/controle.pdf',
                'type' => 'document',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 14,
                'title' => 'base de donnee relationnel',
                'description' => 'cour de base de donnee relationnel licence 2 2019-2020',
                'keywords' => 'bdr,l2',
                'lien' => 'documents/Bases de donnees.pdf',
                'type' => 'document',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 15,
                'title' => 'photo de sminth',
                'description' => 'photo de l\'etudiant sminth a droite a la JI assis pres de l\'etudiant Andersion a gauche',
                'keywords' => 'sminth,anderson,l2',
                'lien' => 'images/sm_and.jpg',
                'type' => 'image',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 16,
                'title' => 'licence 1 sujets',
                'description' => 'recueil de devoirs et examen licence 1 2017-2018',
                'keywords' => 'licence 1',
                'lien' => 'documents/licence 1 sujet.pdf',
                'type' => 'document',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 17,
                'title' => 'Cours Java',
                'description' => 'Les fondamentaux de la programmation java SE
Prof. Bi Tra GOORE Maître de conférences, Docteur Ingénieur en informatique',
                'keywords' => 'java, l2',
                'lien' => 'documents/Formation Java SE - Les fondamentaux.pdf',
                'type' => 'document',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 18,
                'title' => 'TD 1 Arithmétique',
                'description' => 'td d\'arithmetique licence 2 2019-2020 Prof Mr.Kouakou Mathias',
                'keywords' => 'Arithmetique',
                'lien' => 'documents/Fiche de TD 1.pdf',
                'type' => 'document',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 19,
                'title' => 'travaux dirigé de statistique ',
                'description' => 'travaux dirigé de statistique inférentielle licence 2',
                'keywords' => 'stastistique',
                'lien' => 'documents/Statistique_inferentielle_Licence_2.pdf',
                'type' => 'document',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 20,
                'title' => 'cours de génie logiciel',
                'description' => 'cours de génie logiciel licence 2 2019-2020',
                'keywords' => 'génie logiciel,l2',
                'lien' => 'documents/genie logiciel.pdf',
                'type' => 'document',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 21,
                'title' => 'travaux dirigé d\'outils formels ',
                'description' => 'travaux dirigé d\'outils formels pour licence 2 miage 2019-2020',
                'keywords' => 'outils formels, l2',
            'lien' => 'documents/TD L2  ofi 2020 (1).pdf',
                'type' => 'document',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 22,
                'title' => 'photo de juniOr TanO',
                'description' => 'etudiant de miage en licence 2 il est humble ,sincère, jovial, ',
                'keywords' => 'JuniOr TanO,l2',
                'lien' => 'images/AMIO0055.JPG',
                'type' => 'image',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 23,
                'title' => 'tous les sujets du semestre 1',
                'description' => 'Devoirs et Examens du semestre 1 session 1',
                'keywords' => 'sujet',
                'lien' => 'documents/sujet.pdf',
                'type' => 'document',
                'created_at' => '2020-09-25 11:40:42',
                'updated_at' => '2020-09-25 11:40:42',
            ),
            20 => 
            array (
                'id' => 24,
                'title' => 'contrôle budjetaire',
                'description' => 'Cours ,Devoirs et Examens de contrôle budgétaire du semestre 2',
                'keywords' => 'L2 de contrôle budgétaire',
                'lien' => 'documents/DEVOIR DE CONTROLE DE GESTION.docx',
                'type' => 'document',
                'created_at' => '2020-09-25 11:44:35',
                'updated_at' => '2020-09-25 11:44:35',
            ),
        ));
        
        
    }
}