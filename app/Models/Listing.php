<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'first_name', 'last_name', 'business_name', 'postal_code', 'number', 'b_email'
   ];
}
