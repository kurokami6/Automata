<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function automates()
    {
        return $this->hasMany(Automate::class);
    }


    // don't know if you are going to need this type of relation but just putting it here
    public function properties()
    {
        return $this->hasManyThrough(Properties::class, Automate::class);
    }
}
