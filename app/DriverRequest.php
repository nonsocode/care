<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverRequest extends Model
{
    protected $guarded = ['id'];
    protected $hidden = ['driver_type_id','lga_id'];

    public function lga()
    {
    	return $this->belongsTo(Lga::class);
    }

    public function driverType()
    {
    	return $this->belongsTo(DriverType::class);
    }

    public function smsMessages()
    {
        return $this->morphToMany(SmsMessage::class,'messageable');
    }

    public function emailMessages()
    {
        return $this->morphToMany(Email::class,'emailable');
    }

    public function receivedComments()
    {
        return $this->morphToMany(Comment::class,'commentable');
    }    

    public function getLgaNameAttribute(){
    	return $this->lga->name;
    }
    
    public function getDriverTypeNameAttribute(){
    	return $this->driverType->name;
    }
}
