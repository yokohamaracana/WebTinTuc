<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataCustomer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Customer::factory(20)->create();
    }
}
