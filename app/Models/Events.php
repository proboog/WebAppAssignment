<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $primaryKey = 'Event_ID';
    public $timestamps = false;
    protected $fillable = [
        'Event_ID',
        'Event_name',
        'Event_description',
        'Type_of_event',
        'Date_and_time',
        'Address',
        'City',
        'State_Province',
        'Zip_Postal_Code',
        'Country',
        'Venue',
        'Organizer_name',
        'Contact'
    ];
}
