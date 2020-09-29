<?php

namespace App\Models;
use Core\DataBase;

    public static function getAll() {
        $db = DataBase::getInstance();
        $dados = $db->getList('cliente', '*')
        return $db->getList('cliente')
    }