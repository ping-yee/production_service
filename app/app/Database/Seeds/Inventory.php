<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Inventory extends Seeder
{
    public function __construct()
    {
        helper('date');
    }

    /**
     * 新增庫存 fake data
     *
     * @param integer $insertId
     * @return void
     */
    static function insertInventory(int $insertId)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table("inventory");

        $builder->insert([
            "p_key" => $insertId,
            "amount" => random_int(0,200),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
    }
}
