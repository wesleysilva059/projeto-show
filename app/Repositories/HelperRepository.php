<?php

namespace App\Repositories;

class HelperRepository
{
    public static function getCidades()
    {
        return \DB::table('city')->get()->pluck('title', 'iso')->toArray();
    }

    public static function getBancos()
    {
        return \DB::table('bancos')->get()->pluck('banco', 'cod')->toArray();
    }

    public static function getCidadeByIso(Int $iso)
    {
      return \DB::table('city')->where('iso', $iso)->first();
    }

    public static function getUfCidade(Int $uf)
    {
      return \DB::table('state')->where('id', $uf)->first();
    }
}
