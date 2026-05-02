<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    public function patient()
{
    return $this->belongsTo(User::class, 'patient_id');
}

public function infirmiere()
{
    return $this->belongsTo(User::class, 'infirmiere_id');
}
}
