<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsNUsers extends Model
{
    use HasFactory;
    public $timestamps = false;

    

    protected $fillable = [
        'Event_ID',
        // 'Event_name',
        'user_id'
    ];

}
