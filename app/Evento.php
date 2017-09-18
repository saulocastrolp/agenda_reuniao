<?php

namespace CalendarApp;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'event';

    protected $fillable = [
        'title', 'color', 'start', 'end', 'user_id',
    ];
}
