<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'participant_id',
        'setting_id',
        'title',
        'description',
        'design',
    ];

    // Define relationships
    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function setting()
    {
        return $this->belongsTo(Setting::class);
    }
}
