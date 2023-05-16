<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeed::class,
            PenerimaanSeed::class,
            BiayaSiswaSeed::class,
            SppSeed::class,
            KasSeed::class,
            MetodePembayaranSeed::class,
            // TahunAjaranSeed::class,
            StatusSiswaSeed::class,
            JurusanSeed::class,
            KelasSeed::class,
            // UserRolePermissionSeed::class,
            UserSeed::class,
            PetugasSeed::class,
            SiswaSeed::class,
            KelulusanSeed::class,
            PembayaranSeed::class,
            LainyaSeed::class
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
