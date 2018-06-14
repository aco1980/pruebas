<?php

use Illuminate\Database\Seeder;
use App\Model\Profesion;

class ProfesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  	   public function run()    {	

	    	//Agrego los registros a la tabla
	        DB::table('profesiones')->insert([
	          'nombre'=>'Desarrollador Front-End'   	

	        ]);

	        DB::table('profesiones')->insert([
	          'nombre'=>'Desarrollador Back-End'   	

	        ]);	        
	       
	        //Agrego un registro en la base usando mysql	
	        DB::insert('INSERT INTO profesiones (nombre) VALUES ("Desarrollador Java Script")');

	        //Agrego un registro en la base usando mysql previniendo inyección sql	
	        DB::insert('INSERT INTO profesiones (nombre) VALUES (?)',['Desarrollador All-End']);

	        //Agrego más un registro en la base usando mysql previniendo inyección sql	
	        DB::insert('INSERT INTO profesiones (nombre) VALUES (:nombre)',[
	        	'nombre'=>'Desarrollador Java',
	        	'nombre'=>'Desarrollador C++'
	        ]);

	       //agrego un registro utilizando ELOQUENT	

	       Profesion::create([
	        	'nombre'=>'Desarrollador .NET'
	        ]);
	       Profesion::create([
	          'nombre'=>'Diseñador Web'   	

	        ]);
	    
	         
       }
}
