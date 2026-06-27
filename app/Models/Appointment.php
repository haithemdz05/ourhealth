<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $timestamps = false;
    

protected $primaryKey = 'id_appointment';
public function madical_datas() {
    return $this->hasMany(Madical_data::class, 'id_appointment', 'id_appointment');
}
    use HasFactory;
}
