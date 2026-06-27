<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madical_data extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_patient';
    use HasFactory;
}
