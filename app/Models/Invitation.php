<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;
    protected $casts = [
        'memories' => 'array',
    ];

    protected $fillable = [
        'memories'
    ];

    /*Relationship between Page And User */
    public function user()
    {
        return $this->belongsTo("App\Models\User");
    }
}
