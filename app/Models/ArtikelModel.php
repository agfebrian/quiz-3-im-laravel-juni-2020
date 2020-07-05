<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel
{
    public static function all()
    {
        $items = DB::table('artikels')->get();
        return $items;
    }

    public static function create($data)
    {
        $item = DB::table('artikels')->create($data);
        return $item;
    }
}