<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['name'=>'Cà phê Việt Nam'],
            ['name'=>'Cà phê máy'],
            ['name'=>'Cold brew'],
            ['name'=>'Trà trái cây'],
            ['name'=>'Trà sữa macchiato'],
            ['name'=>'Cà phê đá xay'],
            ['name'=>'Thức uống trái cây'],
        ];
        DB::table('categories')->insert($data);
    }
}
