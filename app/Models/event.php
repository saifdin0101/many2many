<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name', 
        'event_subject', 
        'event_image', 
        // 'event_directore_id', 
    ];

    // public function eventDirectore() 
    // {
    //     return $this->belongsTo(EventDirectore::class); 
    // }
}
