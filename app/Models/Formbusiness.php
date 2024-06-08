<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formbusiness extends Model
{
    use HasFactory;

    protected $table = 'imaq_form_quotation';

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'service_id',
        'line_id',
        'message',
        'quantity',
        'hour',
        'state_id',
        'form_city'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
