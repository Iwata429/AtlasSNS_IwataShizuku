<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('users')->insert([
            ['username' => 'User1',
            'mail' => 'user1@mail',
            'password' => bcrypt('password')]
            //初期ユーザー①
        ]);
}
}


//         DB::table('users')->truncate();
// $users = [
//         ['id' => 'user1',
//         'username' => User1,
//         'mail' => 'user1@mail',
//         'password' => User1password,],
//         ['id' => 'user2',
//         'username' => User2,
//         'mail' => 'user2@mail',
// 		'password' => User2password,],
//         ['id' => 'user3',
//         'username' => User3,
//         'mail' => 'user3@mail',
// 		'password' => User3passwoed,]
// ];

// // 登録
// foreach($users as $user) {
//     \App\User::create($user);
//     }
// }
