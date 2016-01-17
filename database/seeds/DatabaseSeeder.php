<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(LibProvinsiSeeder::class);
        $this->call(LibKabupatenSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ParentSuratsSeeder::class);
        $this->call(RegKecamatanSeeder::class);

        Model::reguard();
    }
}
