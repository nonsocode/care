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

    public function getLgaNameAttribute(){
    	return $this->lga->name;
    }
    
    public function getDriverTypeNameAttribute(){
    	return $this->driverType->name;
    }
}
