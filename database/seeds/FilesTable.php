<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files')->insert([
            ['path' => 'ss',
            'size' => '11',
            'extension' => 'docx',
            'name' => '8_1608310803.docx',
            'created_at' => '2020-09-20 13:53:15',
            'updated_at' => '2020-09-20 13:53:15',
            ],
            ['path' => 'ss',
            'size' => '11',
            'extension' => 'docx',
            'name' => '7_1612975132.docx',
            'created_at' => '2020-12-18 15:00:03',
            'updated_at' => '2020-12-18 15:00:03',
            ],
        ]);
    }
}
