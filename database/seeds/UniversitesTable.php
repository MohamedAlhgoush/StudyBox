<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            ['name' => 'Lebanese International University',
            'descritption' => 'The Lebanese International University (LIU) was first founded as the Bekaa University under Presidential Decree No. 5294 in April 2001, with its first two campuses in Al-Khyara, in the western Bekaa valley and the capital Beirut. The name was later changed to the Lebanese International University (LIU), for the founders had a vision of making the university a true national university with a presence in all six administrative district which so comprise Lebanon. As career-oriented institution with the mission of creating access to higher education for first generation students who otherwise would not have the opportunity to join the professional workforce. With a commitment to democratize higher education and empowerment, the university since 2003 and until 2013 established seven additional campuses in: Saida, Nabatieh, Tripoli, Mount Lebanon, Tyre, Rayak, and Halba-Akkar',
            'short_name' => 'LIU',
            'created_at' => '2020-09-20 13:45:04',
            'updated_at' => '2020-09-20 13:45:04',  
            ],
            ['name' => 'American University of Beirut',
            'descritption' => 'Null',
            'short_name' => 'AUB',
            'created_at' => '2020-09-20 13:45:04',
            'updated_at' => '2020-09-20 13:45:04', 
            ],
        ]);
    }
}
