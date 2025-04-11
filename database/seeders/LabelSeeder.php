<?php

namespace Database\Seeders;

use App\Models\Label;
use App\Models\User;
use Illuminate\Database\Seeder;

class LabelSeeder extends Seeder
{
     /**
      * Run the database seeds.
      *
      * @return void
      */
     public function run()
     {
          User::all()->each(function ($user) {
               Label::factory(rand(5, 10))->create([
                    'user_id' => $user->id,
               ]);
          });
     }
}
