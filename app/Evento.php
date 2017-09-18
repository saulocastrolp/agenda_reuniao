<?php

namespace CalendarApp;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'title', 'color', 'start', 'end',
    ];
    protected $hidden = ['user_id'];
}
