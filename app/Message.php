<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $incrementing = false;

    protected $guarded = ['created_at', 'updated_at'];

    protected $appends = ['timestamp'];

    protected function getTimestampAttribute()
    {
        return $this->created_at->getTimestamp();
    }
}
