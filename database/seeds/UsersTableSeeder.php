<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Fakorede Abiola',
            'email' => 'abiolafakorede@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/avatar.png',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, hic!',
            'facebook' => 'facebook.com',
            'twitter' => 'twitter.com',
            'linkedin' => 'linkedin.com',
            'medium' => 'medium.com',
            'github' => 'github.com'
        ]);
    }
}
