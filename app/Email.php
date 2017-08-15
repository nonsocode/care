<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
	protected $fillable =[ 'to', 'body', 'subject' ];
    public function users()
    {
	    return	$this->morphedByMany(User::class, 'emailable');
    }

    public function driverRequests()
    {
	    return	$this->morphedByMany(DriverRequest::class, 'emailable');
    }

    public function sender()
    {
    	return $this->belongsTo(User::class,'sender_id');
    }
}
