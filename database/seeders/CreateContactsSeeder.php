<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class CreateContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = [
            [
                'name'=>'Alex',
                'email'=>'Alex@test.com',
                'phone'=> '987456321',
                'date'=> '2022-05-10',
            ],
            [
                'name'=>'Henry',
                'email'=>'Henry@test.com',
                'phone'=> '987456321',
                'date'=> '2022-05-10',
            ],
       ];

       foreach ($contact as $key => $value) {
            Contact::create($value);
        }
    }
}
