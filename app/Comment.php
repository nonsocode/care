<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['text'];
    public function users()
    {
	    return	$this->morphedByMany(User::class, 'messageable');
    }

    public function driverRequests()
    {
	    return	$this->morphedByMany(DriverRequest::class, 'messageable');
    }

    public function sender()
    {
    	return $this->belongsTo(User::class,'sender_id');
    }
}
