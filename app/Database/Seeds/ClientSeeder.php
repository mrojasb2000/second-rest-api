<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'username' => 'admin',
            'password' => password_hash('12345678', PASSWORD_BCRYPT),
        );
        $this->db->table('clients')->insert($data);
    }
}
