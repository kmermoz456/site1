<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
   protected  $guarded = [];
   public $timestamps = false;
    public function sujet()
    {
        return $this->belongsTo(Sujet::class);
    }

    public function proposition()
    {
        return $this->hasMany(Proposition::class);
    }
}