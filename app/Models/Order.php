<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function ebook(){
        return $this->belongsTo(EBook::class);
    }

    public function accounts(){
        return $this->belongsTo(User::class);
    }
}
