<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create seeder user data
        User::create([
            'token_id'     => 'RbknRQ3to0PMts0QU6QWMIprjqL2',
            'address'      => 'address111', 
            'email'        => 'persona1@iqbit.ec',   
            'password'     => bcrypt('Person1'),
            'name'         => 'Persona 1',    
            'phone'        => '111',   
            'position'     => 'admin',
        ]);

        User::create([
            'token_id'     => 'ZlhNvJosBEhrINKOEMZm8WkNWO73',
            'address'      => 'address222', 
            'email'        => 'persona2@iqbit.ec',  
            'avatar'       => 'https://firebasestorage.googleapis.com/v0/b/hydra-proinvestec.appspot.com/o/users%2FZlhNvJosBEhrINKOEMZm8WkNWO73?alt=media&token=2febecd9-40b0-404b-b0a8-b56f9364a513', 
            'password'     => bcrypt('Person2'),
            'name'         => 'Persona 2',    
            'phone'        => '222',   
            'position'     => 'user',
        ]);

        User::create([
            'token_id'     => 'lVTtIc5gZFXIyYIm8XXkxEysko03',
            'address'      => 'address333', 
            'email'        => 'persona3@iqbit.ec',  
            'avatar'       => 'https://firebasestorage.googleapis.com/v0/b/hydra-proinvestec.appspot.com/o/users%2FlVTtIc5gZFXIyYIm8XXkxEysko03?alt=media&token=0f588d5a-ed80-4fb6-a662-e37473302ca2', 
            'password'     => bcrypt('Person3'),
            'name'         => 'Persona 3',    
            'phone'        => '333',   
            'position'     => 'user',
        ]);

        User::create([
            'token_id'     => '84388700153047484344',
            'address'      => 'address444', 
            'email'        => 'persona4@iqbit.ec',  
            'avatar'       => 'https://firebasestorage.googleapis.com/v0/b/hydra-proinvestec.appspot.com/o/users%2FlVTtIc5gZFXIyYIm8XXkxEysko03?alt=media&token=0f588d5a-ed80-4fb6-a662-e37473302ca2', 
            'password'     => bcrypt('Person4'),
            'name'         => 'Persona 4',    
            'phone'        => '444',   
            'position'     => 'admin',
        ]);

        
    }
}
