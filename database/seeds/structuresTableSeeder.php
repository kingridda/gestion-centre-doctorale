<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        DB::table('admins')->insert([
            'name' => 'Superadmin',
            'email' => 'admin@admin.com',
            'cin' => 'L121315',
            'password' => Hash::make('123456789'),
        ]);

        //structures
        DB::table('structures')->insert([[
        	'titre' => 'Information Security Research Team',
        	],[
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
            'filiere' => 'e-ISEM',
            'sujet' => 'lisage d\'alimentation des capteurs ',
            'structure_id'=> 3
            ],[
            'domaine' => 'Réseau Informatique',
            'filiere' => '2RI',
            'sujet' => 'Routage multicast par Qos sous environment IPv6',
            'structure_id'=>1
            ],[
            'domaine' => 'Réseau Informatique',
            'filiere' => '2RI',
            'sujet' => 'Architecture service pour e-Gov',
            'structure_id'=>1
            ],[
            'domaine' => 'Réseau Informatique',
            'filiere' => 'IOT',
            'sujet' => 'Load balancing security in cloud',
            'structure_id'=>1
            ],[
            'domaine' => 'Réseau Informatique',
            'filiere' => '2RI',
            'sujet' => 'Performance des réseau viruelles',
            'structure_id'=>1
            ],[
            'domaine' => 'Recherche d\' Information',
            'filiere' => 'I2M',
            'sujet' => 'Indexation des API',
            'structure_id'=>2
            ],[
            'domaine' => 'MULTIMÉDIA',
            'filiere' => 'I2M',
            'sujet' => 'traitement des données MULTIMÉDIA',
            'structure_id'=>2
            ],[
            'domaine' => 'MULTIMÉDIA',
            'filiere' => 'I2M',
            'sujet' => 'Traitement d\'images',
            'structure_id'=>2
            ],[
            'domaine' => 'Recherche d\' Information',
            'filiere' => 'I2M',
            'sujet' => 'Indexation des documents multimédia',
            'structure_id'=>2
            ],[
            'domaine' => 'management',
            'filiere' => 'e-BM',
            'sujet' => 'analyse strategique orienté data',
            'structure_id'=>3
            ],[
            'domaine' => 'management',
            'filiere' => 'e-BM',
            'sujet' => 'modélisation des systemes de décision',
            'structure_id'=>3
            ],[
            'domaine' => 'management',
            'filiere' => 'e-BM',
            'sujet' => 'gestion des opérations complexes',
            'structure_id'=>3
            ],[
            'domaine' => 'management',
            'filiere' => 'e-BM',
            'sujet' => 'simulation des systemes d\'analyse',
            'structure_id'=>3
            ],[
            'domaine' => 'management',
            'filiere' => 'e-BM',
            'sujet' => 'analyse des systemes basées sur les réseaux sociaux',
            'structure_id'=>3
            ],[
            'domaine' => 'optimization logistique',
            'filiere' => 'OLI',
            'sujet' => 'distribution de produits pétroliers en grand quantité',
            'structure_id'=>4
            ],[
            'domaine' => 'optimization logistique',
            'filiere' => 'OLI',
            'sujet' => 'planification des avoins',
            'structure_id'=>4
            ],[
            'domaine' => 'optimization logistique',
            'filiere' => 'OLI',
            'sujet' => 'gestion des risques de transport marins',
            'structure_id'=>4
            ],[
            'domaine' => 'optimization logistique',
            'filiere' => 'OLI',
            'sujet' => 'contribution au systems de recommandation',
            'structure_id'=>4
            ],[
            'domaine' => 'Business Intelligence',
            'filiere' => 'B2IA',
            'sujet' => 'detection des profiles web',
            'structure_id'=>5
            ],[
            'domaine' => 'Business Intelligence',
            'filiere' => 'B2IA',
            'sujet' => 'systeme de gestion des connaissance',
            'structure_id'=>5
            ]]);

        //encadrants
        DB::table('encadrants')->insert([[
            'name' => 'Nassar Mahmoud',
            'cin' => 'K151230',
            'email' => 'nassar@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'default.png'
            ],
            [
            'name' => 'Mouhamed Janati',
            'cin' => 'L451123',
            'email' => 'janati@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'default.png'
            ],[
            'name' => 'louakili Sanaa',
            'cin' => 'M128923',
            'email' => 'sanaa@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'default.png'
            ],[
            'name' => 'Adil Alaoui',
            'cin' => 'F158497',
            'email' => 'adil@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'default.png'
            ],[
            'name' => 'Anas Rezzoq',
            'cin' => 'H555123',
            'email' => 'anas@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'default.png'
            ],[
            'name' => 'Walid bouraya',
            'cin' => 'I152322',
            'email' => 'walid@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'default.png'
            ],[
            'name' => 'simohammed brika',
            'cin' => 'K551211',
            'email' => 'brika@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'default.png'
            ],[
            'name' => 'younes laarbi',
            'cin' => 'D912357',
            'email' => 'younes@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'default.png'
            ],[
            'name' => 'houssain Rezzoq',
            'cin' => 'H547123',
            'email' => 'houssain@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'default.png'
            ],[
            'name' => 'asmaa alami',
            'cin' => 'J124756',
            'email' => 'asmaa@gcd.com',
            'password'=>Hash::make('123456789'),
            'avatar'=> 'default.png'
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
            'these_id' => 2,
            'password'=>Hash::make('123456789'),
            'avatar'=> 'anas.png',
            'validation'=> 1,
            'created_at' => Carbon::now()
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
            'these_id' => 3,
            'password'=>Hash::make('123456789'),
            'avatar'=>'ridda.png',
            'validation'=> 1,
            'created_at' => Carbon::now()
            ],[
            'name' => 'barhmi',
            'prenom' => 'simohamed',
            'cin' => 'K456399',
            'email' => 'barhmi@gmail.com',
            'gsm' => '0666803001',
            'adresse' => 'quartier saada 2',
            'ville' => 'BENIMELLAL',
            'salarie' => 1,
            'encadrant_id' => 1,
            'these_id' => 1,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'name' => 'Outaleb',
            'prenom' => 'Mouad',
            'cin' => 'J154420',
            'email' => 'outaleb@gmail.com',
            'gsm' => '0638225175',
            'adresse' => 'quartier oulymp chraybi bloc 5 n 8',
            'ville' => 'FES',
            'salarie' => 1,
            'encadrant_id' => 2,
            'these_id' => 4,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'name' => 'Naoumi',
            'prenom' => 'Ilham',
            'cin' => 'F9511442',
            'email' => 'naoumi@gmail.com',
            'gsm' => '0618563921',
            'adresse' => 'BD El adarisa Bloc 5',
            'ville' => 'MARRAKECH',
            'salarie' => 0,
            'encadrant_id' => 3,
            'these_id' => 5,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'name' => 'Fredirick',
            'prenom' => 'simohammed',
            'cin' => 'H1666621',
            'email' => 'fredirick@gmail.com',
            'gsm' => '0618565841',
            'adresse' => 'quartier el woroud rue 5',
            'ville' => 'CASABLANCA',
            'salarie' => 0,
            'encadrant_id' =>4 ,
            'these_id' => 6,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' =>Carbon::create(2019,6,9,0)
            ],[
            'name' => 'el ouardi',
            'prenom' => 'imane',
            'cin' => 'KE12354',
            'email' => 'imane@gmail.com',
            'gsm' => '0618512841',
            'adresse' => 'quartier mohammed 5 bloc 2',
            'ville' => 'CASABLANCA',
            'salarie' => 0,
            'encadrant_id' => 5,
            'these_id' => 7,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::now()
            ],[
            'name' => 'modafir',
            'prenom' => 'naima',
            'cin' => 'H1666521',
            'email' => 'naima@gmail.com',
            'gsm' => '0652175841',
            'adresse' => 'bloc 15 N 30 el asfa',
            'ville' => 'CASABLANCA',
            'salarie' => 0,
            'encadrant_id' => 6,
            'these_id' => 8,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::now()
            ],[
            'name' => 'silloumi',
            'prenom' => 'nazih',
            'cin' => 'H1666621',
            'email' => 'nazih@gmail.com',
            'gsm' => '0619815841',
            'adresse' => 'quartier safaa bloc 24 N 15',
            'ville' => 'Tanger',
            'salarie' => 0,
            'encadrant_id' => 7,
            'these_id' => 9,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::now()
            ],[
            'name' => 'saber',
            'prenom' => 'mourad',
            'cin' => 'K516512',
            'email' => 'mourad@gmail.com',
            'gsm' => '0615765841',
            'adresse' => 'malak 2 N 15',
            'ville' => 'Rabat',
            'salarie' => 1,
            'encadrant_id' => 8,
            'these_id' => 10,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'name' => 'hosni',
            'prenom' => 'moaad',
            'cin' => 'K516512',
            'email' => 'hosni@gmail.com',
            'gsm' => '068565841',
            'adresse' => 'quartier saada 2 bloc 6 N 12',
            'ville' => 'Kenetra',
            'salarie' => 1,
            'encadrant_id' => 9,
            'these_id' => 11,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'name' => 'saber',
            'prenom' => 'mohammed',
            'cin' => 'K518812',
            'email' => 'momed@gmail.com',
            'gsm' => '0602765841',
            'adresse' => 'rahma 2 N 7',
            'ville' => 'oujda',
            'salarie' => 0,
            'encadrant_id' => 10,
            'these_id' => 12,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::now()
            ],[
            'name' => 'mouatasim',
            'prenom' => 'ahmed',
            'cin' => 'J156512',
            'email' => 'moutasim@gmail.com',
            'gsm' => '0615765841',
            'adresse' => 'DB El bacha N 17',
            'ville' => 'Rabat',
            'salarie' => 0,
            'encadrant_id' => 2,
            'these_id' => 13,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::now()
            ],[
            'name' => 'benhassan',
            'prenom' => 'yahya',
            'cin' => 'L716512',
            'email' => 'yahya@gmail.com',
            'gsm' => '0678765888',
            'adresse' => 'agdal N 15',
            'ville' => 'Rabat',
            'salarie' => 0,
            'encadrant_id' => 3,
            'these_id' => 14,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'name' => 'rida',
            'prenom' => 'hajar',
            'cin' => 'K516512',
            'email' => 'hajar@gmail.com',
            'gsm' => '0788765841',
            'adresse' => 'wifaq 2 rue 5 N 4',
            'ville' => 'Meknes',
            'salarie' => 0,
            'encadrant_id' => 3,
            'these_id' => 15,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'name' => 'el moritani',
            'prenom' => 'rabii',
            'cin' => 'K516512',
            'email' => 'rabii@gmail.com',
            'gsm' => '0745765841',
            'adresse' => 'DB jaich el malaki 2 N 15',
            'ville' => 'Meknes',
            'salarie' => 0,
            'encadrant_id' => 4,
            'these_id' => 16,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 1,
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'name' => 'el ahmadi',
            'prenom' => 'ossama',
            'cin' => 'K555512',
            'email' => 'ossama@gmail.com',
            'gsm' => '0748465841',
            'adresse' => 'DB mouloudi Bloc 6',
            'ville' => 'FES',
            'salarie' => 0,
            'encadrant_id' => null,
            'these_id' => null,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 0,
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'name' => 'wasmi',
            'prenom' => 'ahmad',
            'cin' => 'I145512',
            'email' => 'wasmi@gmail.com',
            'gsm' => '0625765841',
            'adresse' => 'lot baraka N 8',
            'ville' => 'TADLA',
            'salarie' => 0,
            'encadrant_id' =>null,
            'these_id' => null,
            'password'=>Hash::make('123456789'),
            'avatar'=>'default.png',
            'validation'=> 0,
            'created_at' => Carbon::create(2019,6,9,0)
            ]]);

        //messages
         DB::table('messages')->insert([[
            'encadrant_id' => 1,
            'user_id' => 1,
            'source' => 0,
            'objet'=> 'consultation de progrés',
            'contenu'=>'veulliez m\'envoyer un rapport sur votre progrés',
            ],[
            'encadrant_id' => 1,
            'user_id' => 2,
            'source' => 0,
            'objet'=> 'reunion',
            'contenu'=>'on aura réunion la jeudi à 19:00 heure à propos des nouveaux changements',
            ],[
            'encadrant_id' => 1,
            'user_id' => 1,
            'source' => 1,
            'objet'=>'rapport de progrés',
            'contenu'=>'On va essayer de le préparer d\'ici vendredi si vous permettez',
            ],[
            'encadrant_id' => 1,
            'user_id' => 3,
            'source' => 1,
            'objet'=> 'justification absence',
            'contenu'=>'je m\'excuse monsieur je suis trés malade ces jours je peut pas assister dans reunion',
            ],[
            'encadrant_id' =>1 ,
            'user_id' => 2,
            'source' => 1,
            'objet'=> 'accord',
            'contenu'=>'Bien recu je vais distribuer la nouvelle',
            ]]);
        //forums
         DB::table('forums')->insert([[
            'user_id' =>1 ,
            'question'=>'comment je peut postuler pour le dossier du bourse ?',
            'image'=>null,
            ],[
            'user_id' => 2,
            'question'=> 'je n\'arrive pas à contacter le directeur du laboratoire quelqu\'un peut m\'aider ',
            'image'=>null,
            ],[
            'user_id' => 3,
            'question'=> 'mon Pc s\'arrete quand je lance matlab',
            'image'=>'error.jpg',
            ],[
            'user_id' => 4,
            'question'=> 'ou je peut trouver d\'informations à propos de distribution des systemes inforatiques ',
            'image'=>null,
            ]]);
        //reponses
         DB::table('rep_forums')->insert([[
            'user_id' => 1,
            'forum_id' => 3,
            'reponse'=>'essayer d\'installer java sdk 8 au lieu de sdk 13',
            'image'=> 'error_sol.jpg',
            ],[
            'user_id' => 2,
            'forum_id' => 3,
            'reponse'=>'meme probleme',
            'image'=>null,
            ],[
            'user_id' => 3,
            'forum_id' => 3,
            'reponse'=> 'probleme de compatibilité de version essayer avec une autre version',
            'image'=>null,
            ],[
            'user_id' => 5,
            'forum_id' => 1,
            'reponse'=>'demmander à monsier adil mourabit il va te diriger',
            'image'=>null,
            ]]);
        //soutenances 
            
        DB::table('soutenances')->insert([[
            'user_id' => 5,
            'demande_soutenance' => 'soutenance_sample.pdf',//lien ...
            'amphi' =>'A3',
            'heure'=> '09:15', 
            'date'=>null,
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'user_id' => 6,
            'demande_soutenance' => 'soutenance_sample.pdf',//lien uploads/...
            'amphi' => null,
            'heure'=>null, 
            'date'=>null, //null
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'user_id' => 7,
            'demande_soutenance' => 'soutenance_sample.pdf',//lien uploads/...
            'amphi' => null,
            'heure'=>null, 
            'date'=>null, //null
            'created_at' => Carbon::create(2019,6,9,0)
            ],[
            'user_id' => 8,
            'demande_soutenance' => 'soutenance_sample.pdf',//lien uploads/...
            'amphi' => null,
            'heure'=>null, 
            'date'=>null, //null
            'created_at' => Carbon::create(2020,6,9,0)
            ],[
            'user_id' => 9,
            'demande_soutenance' => 'soutenance_sample.pdf',//lien uploads/...
            'amphi' => 'A2',
            'heure'=> '08:15', 
            'date'=>null, //null
            'created_at' => Carbon::create(2020,6,9,0)
            ]]);
        //rapports
        DB::table('rapports')->insert([[
            'user_id' => 1 ,
            'title' => 'rapport progres',
            'description' => 'initialisation des traveaux',
            'attachment'=>'rapport_sample.pdf', 
            ],[
            'user_id' =>1 ,
            'title' => 'probleme de laboratoire',
            'description' => 'en attente d\'certificat d\'accès au laboratoire ' ,
            'attachment'=>'rapport_sample.pdf', 
            ],[
            'user_id' => 2,
            'title' => 'finalisation du phase 1 ',
            'description' => 'phase 1 du projet fini avec secces et sans retard',
            'attachment'=>'rapport_sample.pdf', 
            ]]);

                    
    }
}
