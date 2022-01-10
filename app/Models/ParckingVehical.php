<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParckingVehical extends Model
{
    use HasFactory;
    protected $table="parking_vehicales";
    protected $guarded=[]; 

    public function parkingslot()
    {
        return $this->belongsTo(parkingslot::class,'Slot_number_Id','id');
    }
    public function vehicalType()
    {
        return $this->belongsTo(VehicalType::class,'vehical_type_id','id');
    }
}
