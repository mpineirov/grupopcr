<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        DB::table('users')->delete();

        $users = array(
                ['name' => 'Ryan Chenkie', 'email' => 'ryanchenkie@gmail.com', 'password' => Hash::make('secret')],
                ['name' => 'Chris Sevilleja', 'email' => 'chris@scotch.io', 'password' => Hash::make('secret')],
                ['name' => 'Holly Lloyd', 'email' => 'holly@scotch.io', 'password' => Hash::make('secret')],
                ['name' => 'Adnan Kukic', 'email' => 'adnan@scotch.io', 'password' => Hash::make('secret')],
                ['name' => 'Yair', 'email' => 'yair.rodriguez1000@gmail.com', 'password' => Hash::make('marcosesputo')],
                ['name' => 'yair.rodriguez1000@gmail.com', 'email' => 'yair.rodriguez1000@gmail.com', 'password' => Hash::make('marcosesputo')],
                ['name' => 'PABLO', 'last_name' => 'MONTES', 'email' => 'pablo.montes@gmail.com', 'password' => Hash::make('marcosesputo')],

        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        Model::reguard();
    }
}
