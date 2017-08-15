<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsMessage extends Model
{
	protected $fillable =['text'];
    public function user()
    {
	    return	$this->morphedByMany(User::class, 'messageable');
    }

    public function driverRequest()
    {
	    return	$this->morphedByMany(DriverRequest::class, 'messageable');
    }

    public function sender()
    {
    	return $this->belongsTo(User::class,'sender_id');
    }
}
