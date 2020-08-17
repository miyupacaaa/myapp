<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    //
    protected $table = "players";
    protected $dates = ["expired_at", "deleted_at", "updated_at", "created_at"];
}
