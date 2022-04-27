<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printerfeature extends Model
{
    use HasFactory;

    public function printer(){
        return $this->belongsTo(Printer::class);
    }
}
