<?php

namespace Database\Seeders;

use App\Models\Atividades;
use App\Models\User;
use App\Models\Bicicleta;  // Importando o modelo Bicicleta
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Criar 3 usuários aleatórios
        $users = User::factory(5)->create();

        // Criar ou atualizar o usuário Admin com um CPF válido
        $admin = User::updateOrCreate(
            ['email' => 'admin@dev.test'], // Verifica se já existe esse email
            [
                'name' => 'Admin User',
                'cpf' => '000.000.000-00', // CPF fictício
                'password' => bcrypt(env('APP_ADMIN_PASSWORD', 'adminadmin')), // Criptografar senha
            ]
        );

        // Criar 10 registros de Atividades associadas a usuários
        Atividades::factory(5)->make()->each(function ($atividade) use ($users) {
            $atividade->user_id = $users->random()->id; // Associar a um usuário aleatório
            $atividade->save();
        });

        // Criar bicicletas associadas aos usuários
        Bicicleta::factory(5)->make()->each(function ($bicicleta) use ($users) {
            // Associar cada bicicleta a um usuário aleatório
            $bicicleta->user_id = $users->random()->id;
            $bicicleta->save();
        });
    }
}
