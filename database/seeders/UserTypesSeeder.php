<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $userTypes = [
          ['rank' => 1, 'name' => 'admin'],
          ['rank' => 2, 'name' => 'monitor'],
          ['rank' => 3, 'name' => 'familia']
      ];

      foreach($userTypes as $userType){
          UserType::create($userType);
      }
    }
}
