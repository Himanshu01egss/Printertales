<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function features(){
        return $this->hasMany(Printerfeature::class);
    }
    public function errors(){
        return $this->hasMany(Printererror::class);
    }
    public function faq(){
        return $this->hasMany(Printerfaq::class);
    }

}
