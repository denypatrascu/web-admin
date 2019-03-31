<?php
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author')->insert([
           'full_name' => 'Mihai Eminescu',
            'born_year' => '1850',
            'died_year' => '1889',
            'location' => 'Ipotesti',
            'photo_id' => 10,
            'staff_id' =>5
        ]);

    }
}