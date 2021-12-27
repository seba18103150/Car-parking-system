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
        return $this->belongsTo(parkingslot::class);
    }
}
