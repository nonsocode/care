<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

	protected $fillable = ['text'];
    public function users()
    {
	    return	$this->morphedByMany(User::class, 'commentable');
    }

    public function driverRequests()
    {
	    return	$this->morphedByMany(DriverRequest::class, 'commentable');
    }

    public function commenter()
    {
    	return $this->belongsTo(User::class,'commenter_id');
    }
}
