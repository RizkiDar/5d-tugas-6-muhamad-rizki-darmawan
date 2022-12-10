<?php

namespace App\Models;

use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;
    protected $table = 'trainees';

    protected $fillable = [
        'trainer_id', 'nama', 'umur',
    ];

    public function trainers(){
        return $this->belongsTo(Trainer::class, 'trainer_id', 'id');
    }
}
