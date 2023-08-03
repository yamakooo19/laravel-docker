<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 12,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@hanako.jp',
            'age' => 34,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'sachiko',
            'mail' => 'sachiko@sachiko.jp',
            'age' => 56,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'yon',
            'mail' => 'yon@yamada.jp',
            'age' => 12,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'go',
            'mail' => 'go@hanako.jp',
            'age' => 34,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'roku',
            'mail' => 'roku@sachiko.jp',
            'age' => 56,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'nana',
            'mail' => 'nana@yamada.jp',
            'age' => 22,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'hachi',
            'mail' => 'hachi@hanako.jp',
            'age' => 38,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'kyu',
            'mail' => 'kyu@sachiko.jp',
            'age' => 9,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'ju',
            'mail' => 'ju@yamada.jp',
            'age' => 19,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'juichi',
            'mail' => 'juichi@hanako.jp',
            'age' => 64,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'juni',
            'mail' => 'juni@sachiko.jp',
            'age' => 96,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'jusan',
            'mail' => 'jusan@yamada.jp',
            'age' => 32,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'juyon',
            'mail' => 'juyon@hanako.jp',
            'age' => 4,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'jugo',
            'mail' => 'sachiko@sachiko.jp',
            'age' => 55,
        ];

        DB::table('people')->insert($param);
    }
}
