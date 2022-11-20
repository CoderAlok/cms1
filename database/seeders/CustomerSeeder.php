<?php

namespace Database\Seeders;
use Customers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // --- One Way----
        // $customer = new Customers;
        // $customer->name = 'Alok';
        // $customer->age = 31;
        // $customer->address = 'Kolkata, 15th colony, New Town';
        // $customer->dob = '1995-02-26';
        // $customer->email = 'alok@mail.com';
        // $customer->created_by = 1;
        // $customer->updated_by = 1;
        // $customer->save();


        // ---Another Way ----
        // DB::table('tbl_customers')->insert([
        //     'name' => Str::random(10),
        //     'age' => 15,
        //     'address' => 'asasasasasass',
        //     'dob' => '1991-05-15',
        //     'email' => Str::random(15) . '@hmail.com',
        //     'created_by' => 1,
        //     'updated_by' => 1,
        // ]);



        // --- Another Way using faker ---
        $date = [
            '04.24.2021', 
            '05.24.2022'
        ];
        $faker = Faker::create();
        for($i=1; $i<100; $i++){
            $customer = new Customers;
            $customer->name = $faker->name();
            $customer->age = rand(10, 99);
            $customer->address = $faker->text();
            $customer->dob = $faker->dateTimeBetween($date[0], $date[1]);
            $customer->email = $faker->email();
            $customer->created_by = rand(1, 1000);
            $customer->updated_by = rand(1, 1000);
            $customer->save();
        }
    }
}
