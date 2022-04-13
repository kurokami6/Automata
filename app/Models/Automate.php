<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automate extends Model
{
    use HasFactory;

    protected $fillable = [
        'etats', 'transitions', 'propositions', 'projet_id'
    ];

    public function properties()
    {
        return $this->hasMany(Properties::class);
    }

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }
}
