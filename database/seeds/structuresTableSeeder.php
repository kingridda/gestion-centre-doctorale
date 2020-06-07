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
            'domaine' => 'Electronique',
            'filiere' => 'ISEM',
            'sujet' => 'lisage d\'alimentation des capteurs ',
            'structure_id'=> ''
            ],
            [
            'domaine' => 'Information Security Research Team',
            'filiere' => ,
            'sujet' => '',
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
            'name' => 'Nassar Mahmoud',
            'cin' => 'K151230',
            'email' => 'nassar@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'uploads/default.jpg'
            ],
            [
            'name' => 'Mouhamed Janati',
            'cin' => 'L451123',
            'email' => 'janati@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'uploads/default.jpg'
            ],[
            'name' => 'Benjbara Sanaa',
            'cin' => 'M128923',
            'email' => 'sanaa@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'uploads/default.jpg'
            ],[
            'name' => 'Adil Alaoui',
            'cin' => 'F158497',
            'email' => 'adil@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'uploads/default.jpg'
            ],[
            'name' => 'Anas Rezzoq',
            'cin' => 'H555123',
            'email' => 'anas@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'uploads/default.jpg'
            ]]);
        //users

        DB::table('users')->insert([[
            'name' => 'ABOU ALI',
            'prenom' => 'Anas',
            'cin' => 'I805236',
            'email' => 'anas@gmail.com',
            'gsm' => '0612354811',
            'adresse' => '4 Bloc 5 quartier elmorabitin',
            'ville' => 'Tanger',
            'salarie' => 0,
            'encadrant_id' => 1,
            'these_id' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=> 'uploads/default.jpg',
            'validation'=> 1
            ],
            [
            'name' => 'RIDDA',
            'prenom' => 'abdelghani',
            'cin' => 'I863214',
            'email' => 'ridda@gmail.com',
            'gsm' => '0612123687',
            'adresse' => '6 qurtier inas BD mohammed 5',
            'ville' => 'BENI MELLAL',
            'salarie' => 0,
            'encadrant_id' => 1,
            'these_id' => ,
            'password'=>Hash::make('123456789'),
            'avatar'=>'uploads/default.jpg',
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
