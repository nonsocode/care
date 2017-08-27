<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','first_name','last_name','phone','address','bio','username','formalities'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $appends = ['shortName','fullName'];

    public function getFullNameAttribute()
    {
        return ucfirst($this->first_name)." ".ucfirst($this->last_name);
    }

    public function getShortNameAttribute()
    {
        return  ucfirst($this->first_name)." ".ucfirst($this->last_name)[0].".";
    }

    public function isBlocked()
    {
        return $this->blocked;
    }

    public function smsMessages()
    {
        return $this->morphToMany(SmsMessage::class,'messageable');
    }

    public function sentSms()
    {
        return $this->hasMany(SmsMessage::class, 'sender_id');
    }

    public function emailMessages()
    {
        return $this->morphToMany(Email::class,'emailable');
    }

    public function sentEmails()
    {
        return $this->hasMany(Email::class, 'sender_id');
    }

    public function receivedComments()
    {
        return $this->morphToMany(Comment::class,'commentable');
    }

    public function sentComments()
    {
        return $this->hasMany(Comment::class, 'commenter_id');
    }

    public function driverRequests()
    {
        return $this->hasMany(DriverRequest::class);
    }
}
