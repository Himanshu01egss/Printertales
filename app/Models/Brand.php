<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function brandissue(){
        return $this->hasMany(Brandissue::class);
    }

    public function blog(){
        return $this->hasMany(Blog::class);
    }

    public function printer(){
        return $this->hasMany(Printer::class);
    }

}
