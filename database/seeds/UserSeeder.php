<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\Profesion;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       //Método donde armo la consulta previendo inyección sql		
       $profesion = DB::select('SELECT id FROM profesiones WHERE nombre = ?',['Desarrollador C++']); 	  	

       DB::table('users')->insert([
						       	'nombre'       => 'Marcos Alejandro Bocchio',
						       	'email'        => 'marcosbocchio@gmail.com',
						       	'password'     => bcrypt('idkfa1264'),
						       	'profesion_id' => $profesion[0]->id
						       ]);

       	//Todos los siguientes métodos previenen la inyección sql


		// $profesion=DB::table('profesiones')->select('id')->take('1')->get();		

       	//otra forma, puedo traer el id con el select, también puedo traer más datos. Ej: select ('id','nombre')
         $profesion = DB::table('profesiones')
			         ->select('id')
			         ->where('nombre','=','Desarrollador .NET')
			         ->first();	 


        DB::table('users')->insert([
						       	'nombre'       => 'Pablo Martín Bocchio',
						       	'email'        => 'Pablo_bocchio@rusoft.com',
						       	'password'     => bcrypt('Rusesqui'),
						       	'profesion_id' => $profesion->id
						       ]);

       //si no pongo el select en la consulta me va traer todos los campos equivalente al *from 	
        $profesion = DB::table('profesiones')	       
				       ->where(['nombre' => 'Desarrollador .NET'])
				       ->first();

        DB::table('users')->insert([
						       	'nombre'       => 'Sofía Aílin Battafarano',
						       	'email'        => 'Sofia_battafarano@hotmail.com',
						       	'password'     => bcrypt('Sofía'),
						       	'profesion_id' =>$profesion->id
						       ]); 

       //Método usádo cuando quiero traer un valor de la consulta 
        $profesionId = DB::table('profesiones')
        				->where(['nombre' => 'Desarrollador C++'])
        				->value('id');

        DB::table('users')->insert([
						       	'nombre'       => 'Angel Carlos Bocchio',
						       	'email'        => 'carlosbocchio@hotmail.com',
						       	'password'     => bcrypt('carlitos'),
						       	'profesion_id' =>$profesionId
      							 ]); 

       //Método ,mágico de laravel 

	   $profesionId = DB::table('profesiones')
	    				->wherenombre('Diseñador Web')
	    				->value('id');

	    DB::table('users')->insert([
								   'nombre'       => 'Eva Elsa Alvarez',
								   'email'        => 'alvareztau@hotmail.com',
								   'password'     => bcrypt('eva'),
								   'profesion_id' =>$profesionId
	   								]);
  

    //usando eloquent

    $profesionId = Profesion::wherenombre('Diseñador Web')
	    				     ->value('id');

	 user::create([
								   'nombre'       => 'Matías Castro',
								   'email'        => 'mariascastro@hotmail.com',
								   'password'     => bcrypt('castrito'),
								   'profesion_id' =>$profesionId
	   								]);

	}

}
