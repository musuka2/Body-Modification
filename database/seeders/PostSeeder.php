<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => '上腕三頭筋',
            'body' => 'ナロープッシュアップ',
            'category_id' => 1,
            'user_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '腹筋',
            'body' => 'クランチ',
            'category_id' => 1,
            'user_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'ダイエット飯',
            'body' => 'オートミール',
            'category_id' => 2,
            'user_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '胸筋',
            'body' => 'ベンチプレス',
            'category_id' => 1,
            'user_id' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '夜に食べていいもの',
            'body' => 'こんにゃく',
            'category_id' => 2,
            'user_id' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '広背筋',
            'body' => '懸垂',
            'category_id' => 1,
            'user_id' => 6,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '脂肪燃焼トレーニング',
            'body' => 'HIIT',
            'category_id' => 2,
            'user_id' => 7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '大腿四頭筋',
            'body' => 'スクワット',
            'category_id' => 1,
            'user_id' => 8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'ダイエットに効く運動',
            'body' => '有酸素運動',
            'category_id' => 2,
            'user_id' => 9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '痩せるためには',
            'body' => '朝食は必ず食べる',
            'category_id' => 2,
            'user_id' => 10,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
