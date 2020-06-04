<?php

use Illuminate\Database\Seeder;
use DB;
class structuresTableSeeder extends Seeder
{       
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*DB::table('admins')->insert([
            'name' => 'Superadmin',
            'email' => 'admin@admin.com',
            'cin' => 'L121315',
            'password' => Hash::make('123456789'),
        ]);*/
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
    }
}
