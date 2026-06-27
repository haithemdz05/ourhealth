<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publish extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     * Adjust if your table name is different (e.g. 'publish' instead of 'publishes').
     *
     * @var string
     */
    protected $table = 'publishes';

    /**
     * Indicates if the model should be timestamped.
     * Set to true if your table has created_at/updated_at columns.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body',
        'author',
        'summery',
        'subject',
        'date',
        'image_path',
    ];
}
