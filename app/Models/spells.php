<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spells extends Model
{
    use HasFactory;

    protected $table = 'spells';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'power_level',
        'icon'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
