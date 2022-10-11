<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $user_ids = DB::table('users')->pluck('id');

        // DB::table('products')->insert([
        //     'name' => Str::random(10),
        //     'category' => Str::random(10),
        //     // 'status' => boolval('favicon')->default(0),
        //     // 'user_id' => Integer::random($user_ids),
        //     "user_id" => '1',
        //     'status' => Str::random(10),
        // ]);
        Product::factory()->count(10)->create();
    }
}
