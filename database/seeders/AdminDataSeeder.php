<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Profile;


class AdminDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
        	'title' => 'user',
        	'description' => 'user Role'
        ]);
 
        $role = Role::create([
        	'title' => 'admin',
        	'description' => 'Admin Role'
        ]);

        $user = User::create([
            'role_id' => $role->id,
            'name' => 'Admin',
        	'email'=> 'admin@gmail.com',
        	'password' => bcrypt('admin'),
        ]);

        Profile::create([
        	'user_id' => $user->id,
        ]);
    }
}
