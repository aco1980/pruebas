<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	   	

    	//Cargo el arregle con las tablas que hay que truncar

    	$this->truncateTables([
    		'profesiones',
    		'users'	
    	]);	

        //Acá llamo a los seeder
        		
        // $this->call(UsersTableSeeder::class);
        $this->call(ProfesionesSeeder::class);
        $this->call(UserSeeder::class);
    }



    protected function truncateTables(array $tables)
    {

    	//Método para desactivar las FK
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');

    	//Método para vaciar la tabla 
    	foreach ($tables as $table) {

			DB::table($table)->truncate();
    	}

    	//Método para activar las FK
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');	

    }
}
