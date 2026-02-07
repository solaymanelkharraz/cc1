<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    // Relationship: Event belongs to an Expert [cite: 508]
    public function expert() {
        return $this->belongsTo(Expert::class);
    }

    // Relationship: Event has many Ateliers [cite: 509]
    public function ateliers() {
        return $this->hasMany(Atelier::class);
    }
}
