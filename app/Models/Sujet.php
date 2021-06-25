<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
    use HasFactory;
    protected $fillable = ["title","ue","nivau","type"];
    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
