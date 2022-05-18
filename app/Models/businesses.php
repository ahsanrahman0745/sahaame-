<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class businesses extends Model
{
    use HasFactory;
    public function bc()
{
    return $this->belongsTo( businessCategory::class, 'businesses.id', 'id' );
}

}