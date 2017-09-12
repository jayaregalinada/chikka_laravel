<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $incrementing = false;

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
