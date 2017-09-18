<?php

namespace CalendarApp;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'event';

    protected $fillable = [
        'title', 'color', 'start', 'end',
    ];
    protected $hidden = ['user_id'];
}
