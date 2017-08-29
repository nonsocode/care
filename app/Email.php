<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    const QUEUED = 0;
    const SENT = 1;
    const OPENED = 2;
    const SPAM = 3;

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

    public function attachments()
    {
      return $this->hasMany(Attachment::class);
    }
}
