<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penawaran;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            Penawaran::create([
                'email' => 'zilhamnurrahman@gmail.com',
                'nama_PT' => 'PT.Changsin Indojaya',
                'Alamat' => 'Jalan Baladewa Karawang Indonesia',
                'No_HP' => '081398951775',
                'Perihal' => 'Saya Ingin Menanyakan Terkait Tarif',
            ]);

            Penawaran::create([
                'email' => 'lingluhn@gmail.com',
                'nama_PT' => 'lingluh',
                'Alamat' => 'Jalan Baladewa Karawang Indonesia',
                'No_HP' => '081398951775',
                'Perihal' => 'Saya Ingin Menanyakan Terkait Tarif',

            ]);

            Penawaran::create([
                'email' => 'nawasetiaperkasa@gmail.com',
                'nama_PT' => 'PT.Nawa Setia Perkasa',
                'Alamat' => 'Jalan Baladewa Karawang Indonesia',
                'No_HP' => '081398951775',
                'Perihal' => 'Saya Ingin Menanyakan Terkait Tarif',
            ]);

            User::create([
                'email' => 'Ilhamn@gmail.com',
                'password' => bcrypt('apaaja12'),
            ]);
    }

}
