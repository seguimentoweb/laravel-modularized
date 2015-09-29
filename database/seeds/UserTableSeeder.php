<?php

use Illuminate\Database\Seeder;
use App\Domain\Users\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = mt_rand(10, 30);

        factory(User::class, $count)->create([
            'password' => bcrypt('1234567890')
        ]);

        $this->command->comment($count. ' users created');
    }
}
