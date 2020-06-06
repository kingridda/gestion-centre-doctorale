<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class structuresTableSeeder extends Seeder
{       
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Superadmin
        /*DB::table('admins')->insert([
            'name' => 'Superadmin',
            'email' => 'admin@admin.com',
            'cin' => 'L121315',
            'password' => Hash::make('123456789'),
        ]);*/

        //structures
        DB::table('structures')->insert([[
        	'titre' => 'Information Security Research Team',
        	],
            [
        	'titre' => 'RECHERCHE D\' INFORMATION ET INDEXATION DES DOCUMENTS TEXTES ET MULTIMÉDIA',
        	],[
        	'titre' => 'TECHNOLOGIES D\'INFORMATION ET MANAGEMENT D\'ENTREPRISE',
        	],[
        	'titre' => 'EQUIPE RECHERCHE OPÉRATIONNELLE ET LOGISTIQUE',
        	],[
        	'titre' => 'Business Intelligence on Networked Information',
        	]]);
        //theses
        DB::table('theses')->insert([[
            'domaine' => 'Information Security Research Team',
            'filiere' => ,
            'sujet' => ,
            'structure_id'=>
            ],
            [
            'domaine' => 'Information Security Research Team',
            'filiere' => ,
            'sujet' => ,
            'structure_id'=>
            ],[
            'domaine' => 'Information Security Research Team',
            'filiere' => ,
            'sujet' => ,
            'structure_id'=>
            ],[
            'domaine' => 'Information Security Research Team',
            'filiere' => ,
            'sujet' => ,
            'structure_id'=>
            ],[
            'domaine' => 'Information Security Research Team',
            'filiere' => ,
            'sujet' => ,
            'structure_id'=>
            ]]);

        //encadrants
        DB::table('encadrants')->insert([[
            'name' => '',
            'cin' => ,
            'email' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=>
            ],
            [
            'name' => '',
            'cin' => ,
            'email' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=>
            ],[
            'name' => '',
            'cin' => ,
            'email' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=>
            ],[
            'name' => '',
            'cin' => ,
            'email' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=>
            ],[
            'name' => '',
            'cin' => ,
            'email' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=>
            ]]);
        //users

        DB::table('users')->insert([[
            'name' => '',
            'prenom' => '',
            'cin' => ,
            'email' => ,
            'gsm' => ,
            'adresse' => ,
            'ville' => ,
            'salarie' => ,
            'encadrant_id' => ,
            'these_id' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=>,
            'validation'=> 1
            ],
            [
            'name' => '',
            'prenom' => '',
            'cin' => ,
            'email' => ,
            'gsm' => ,
            'adresse' => ,
            'ville' => ,
            'salarie' => ,
            'encadrant_id' => ,
            'these_id' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=>,
            'validation'=> 1
            ],[
            'name' => '',
            'prenom' => '',
            'cin' => ,
            'email' => ,
            'gsm' => ,
            'adresse' => ,
            'ville' => ,
            'salarie' => ,
            'encadrant_id' => ,
            'these_id' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=>,
            'validation'=> 1
            ],[
            'name' => '',
            'prenom' => '',
            'cin' => ,
            'email' => ,
            'gsm' => ,
            'adresse' => ,
            'ville' => ,
            'salarie' => ,
            'encadrant_id' => ,
            'these_id' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=>,
            'validation'=> 1
            ],[
            'name' => '',
            'prenom' => '',
            'cin' => ,
            'email' => ,
            'gsm' => ,
            'adresse' => ,
            'ville' => ,
            'salarie' => ,
            'encadrant_id' => ,
            'these_id' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=>,
            'validation'=> 1
            ]]);

        //messages
         DB::table('messages')->insert([[
            'encadrant_id' => ,
            'user_id' => ,
            'source' => ,
            'objet'=>,
            'contenu'=>,
            ],[
            'encadrant_id' => ,
            'user_id' => ,
            'source' => ,
            'objet'=>,
            'contenu'=>,
            ],[
            'encadrant_id' => ,
            'user_id' => ,
            'source' => ,
            'objet'=>,
            'contenu'=>,
            ],[
            'encadrant_id' => ,
            'user_id' => ,
            'source' => ,
            'objet'=>,
            'contenu'=>,
            ],[
            'encadrant_id' => ,
            'user_id' => ,
            'source' => ,
            'objet'=>,
            'contenu'=>,
            ]]);
        //forums
         DB::table('forums')->insert([[
            'user_id' => ,
            'question'=>,
            'image'=>,
            ],[
            'user_id' => ,
            'question'=>,
            'image'=>,
            ],[
            'user_id' => ,
            'question'=>,
            'image'=>,
            ],[
            'user_id' => ,
            'question'=>,
            'image'=>,
            ],[
            'user_id' => ,
            'question'=>,
            'image'=>,
            ]]);
        //reponses
         DB::table('rep_forums')->insert([[
            'user_id' => ,
            'forum_id' => ,
            'reponse'=>,
            'image'=>,
            ],[
            'user_id' => ,
            'forum_id' => ,
            'reponse'=>,
            'image'=>,
            ],[
            'user_id' => ,
            'forum_id' => ,
            'reponse'=>,
            'image'=>,
            ],[
            'user_id' => ,
            'forum_id' => ,
            'reponse'=>,
            'image'=>,
            ],[
            'user_id' => ,
            'forum_id' => ,
            'reponse'=>,
            'image'=>,
            ]]);
        //soutenances 
            
        DB::table('soutenances')->insert([[
            'user_id' => ,
            'demande_soutenance' => ,//lien uploads/...
            'amphi' => ,
            'heure'=>, 
            'date'=>, //null
            ],[
            'user_id' => ,
            'demande_soutenance' => ,//lien uploads/...
            'amphi' => ,
            'heure'=>, 
            'date'=>, //null
            ],[
            'user_id' => ,
            'demande_soutenance' => ,//lien uploads/...
            'amphi' => ,
            'heure'=>, 
            'date'=>, //null
            ],[
            'user_id' => ,
            'demande_soutenance' => ,//lien uploads/...
            'amphi' => ,
            'heure'=>, 
            'date'=>, //null
            ],[
            'user_id' => ,
            'demande_soutenance' => ,//lien uploads/...
            'amphi' => ,
            'heure'=>, 
            'date'=>, //null
            ]]);
        //rapports
        DB::table('rapports')->insert([[
            'user_id' => ,
            'title' => ,
            'description' => ,
            'attachment'=>, 
            ],[
            'user_id' => ,
            'title' => ,
            'description' => ,
            'attachment'=>, 
            ],[
            'user_id' => ,
            'title' => ,
            'description' => ,
            'attachment'=>, 
            ],[
            'user_id' => ,
            'title' => ,
            'description' => ,
            'attachment'=>, 
            ],[
            'user_id' => ,
            'title' => ,
            'description' => ,
            'attachment'=>, 
            ]]);

                    
    }
}
