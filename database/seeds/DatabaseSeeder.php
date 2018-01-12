<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();
        factory(App\plans::class, 3)->create();
        factory(App\listings::class, 200)->create();
        factory(App\technologies::class, 200)->create();
        factory(App\frontend_plateform_list::class, 20)->create();
        factory(App\frontend_framework_list::class, 20)->create();
        factory(App\backend_plateform_list::class, 20)->create();
        factory(App\backend_framework_list::class, 20)->create();
        factory(App\frontend_frameworks::class, random_int(1, 3))->create();
        factory(App\frontend_plateforms::class, random_int(1, 3))->create();
        factory(App\backend_frameworks::class, random_int(1, 3))->create();
        factory(App\backend_plateforms::class, random_int(1, 3))->create();
        factory(App\third_party_libraries::class, random_int(1, 3))->create();
        factory(App\third_party_library_list::class, 20)->create();
        factory(App\sells::class, 5)->create();
        factory(App\comments::class, 10)->create();
        factory(App\replies::class, 10)->create();
        factory(App\reviews::class, 50)->create();
        // factory(App\technol::class, 20)->create();
    }
}
