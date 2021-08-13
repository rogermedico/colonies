<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Family;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /* three known users one for each role */
      User::factory()->create([
          'email' => 'admin@gmail.com',
          'user_type_id' => 1,
          'family_id' => null,
          'email_verified_at' => Carbon::now()
      ]);
      User::factory()->create([
          'email' => 'monitor@gmail.com',
          'user_type_id' => 2,
          'family_id' => null,
          'email_verified_at' => Carbon::now()
      ]);
      $family = Family::create();
      User::factory()->create([
          'email' => 'familia@gmail.com',
          'user_type_id' => 3,
          'family_id' => $family->id,
          'email_verified_at' => Carbon::now()
      ]);

      /* fifty more random users */
      //User::factory()->times(50)->create();
    }
}
