<?php

namespace App\Models;

use App\Models\Trainee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $table = 'trainers';

    protected $fillable = [
        'nama',
    ];

    public function trainee(){
        return $this->hasMany(Trinee::class);
    }
}
