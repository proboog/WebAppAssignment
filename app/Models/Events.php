<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $primaryKey = 'Event_ID';

    protected $fillable = [
        'Event_ID',
        'Event_name',
        'Event_description',
        'Type_of_event',
        'Date_and_time',
        'Venue',
        'Organizer_name',
        'Contact'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'events_n_users','Event_ID', 'user_id');
    }

}
