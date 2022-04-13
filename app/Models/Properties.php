<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    protected $fillable = [
        'requette', 'commentaire', 'automate_id',
    ];

    public function automate()
    {
        return $this->belongsTo(Automate::class);
    }
}
