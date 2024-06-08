<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imaqformstates extends Model
{
    use HasFactory;

    protected $table = 'list_states';

    protected $fillable = [
        'id',
        'key',
        'name',
        'abrev',
        'country_id',
        'active',
    ];
}
