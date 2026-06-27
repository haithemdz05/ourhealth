<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_patient';
    protected $fillable = [
    'address_p',
    'city_p',
    'region_p'
    // أضف أي أعمدة أخرى تُدخلها بالـ create أو update
];
}
