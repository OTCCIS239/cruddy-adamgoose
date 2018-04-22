<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabletop extends Model
{
    protected $fillable = [
        'title',
        'genre',
        'min_players',
        'max_players',
    ];
}
