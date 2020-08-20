<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $table = "players";
    protected $dates = ["expired_at", "deleted_at", "updated_at", "created_at"];

    public static function getPlayers($paginate_limit) {
        return self::from('players as p')
            ->select('p.*', 'c.name as c_name')
            ->leftjoin('countries as c', 'p.country_id', '=', 'c.id')
            ->orderBy('p.club', 'asc')
            ->orderBy('p.uniform_num', 'asc')
            ->paginate($paginate_limit);
    }
}
