<?php

namespace App\Http\Traits;

use Carbon\Carbon;

trait TimestampsTraits
{

    public $timestamps = true;

    public function getDates()
    {

        return ['created_at', 'updated_at', 'due_date'];

    }

    public function getCreatedAtAttribute()
    {
        //returns how many minitues ago a task was added
        return Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }
    public function getUpdatedAtAttribute()
    {

        //returns how many minitues ago a task was added

        return Carbon::parse($this->attributes['updated_at'])->diffForHumans();

    }

}
