<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'from',
        'to',
        'search_date',
        'created_at',
        'updated_at'
    ];
}
