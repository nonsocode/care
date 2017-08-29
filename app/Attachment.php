<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public function mail()
    {
    	return $this->belongsTo(Email::class);
    }
}
