<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDirectore extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'director_name',
    ];
    // public function Events() {

    //     return $this->hasMany(event::class);
    // }
}
