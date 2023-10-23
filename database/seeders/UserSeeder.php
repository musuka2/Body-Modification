<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;


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
            'name' => 'ユーザー1',
            'email' => 'contact@gmail.com',
            'password' => Hash::make('password'),
            'height' => '180cm',
            'weight' => '72kg',
            'birth' => '1999年7月24日',
            'gender' => '男性',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'ユーザー2',
            'email' => 'saels@gmail.com',
            'password' => Hash::make('password'),
            'height' => '158cm',
            'weight' => '48kg',
            'birth' => '1996年10月30日',
            'gender' => '女性',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'ユーザー3',
            'email' => 'shopping@gmail.com',
            'password' => Hash::make('password'),
            'height' => '170cm',
            'weight' => '53kg',
            'birth' => '2001年3月16日',
            'gender' => '女性',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'ユーザー4',
            'email' => 'order@gmail.com',
            'password' => Hash::make('password'),
            'height' => '174cm',
            'weight' => '78kg',
            'birth' => '1989年4月21日',
            'gender' => '男性',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'ユーザー5',
            'email' => 'news@gmail.com',
            'password' => Hash::make('password'),
            'height' => '166cm',
            'weight' => '70kg',
            'birth' => '1992年9月19日',
            'gender' => '男性',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'ユーザー6',
            'email' => 'no-reply@gmail.com',
            'password' => Hash::make('password'),
            'height' => '142cm',
            'weight' => '35kg',
            'birth' => '1996年2月10日',
            'gender' => '女性',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'ユーザー7',
            'email' => 'support@gmail.com',
            'password' => Hash::make('password'),
            'height' => '189cm',
            'weight' => '79kg',
            'birth' => '1998年1月27日',
            'gender' => '男性',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'ユーザー8',
            'email' => 'recruit@gmail.com',
            'password' => Hash::make('password'),
            'height' => '168cm',
            'weight' => '55kg',
            'birth' => '1995年6月24日',
            'gender' => '女性',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'ユーザー9',
            'email' => 'press@gmail.com',
            'password' => Hash::make('password'),
            'height' => '152cm',
            'weight' => '42kg',
            'birth' => '2002年12月17日',
            'gender' => '女性',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'ユーザー10',
            'email' => 'media@gmail.com',
            'password' => Hash::make('password'),
            'height' => '172cm',
            'weight' => '58kg',
            'birth' => '2003年11月11日',
            'gender' => '男性',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
