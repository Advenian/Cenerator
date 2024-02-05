<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'ceo_name',
        'trainer_name',
        'trainer_agency',
        'place',
        'date',
        'ceo_signature',
        'trainer_signature',
    ];
}
