<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emailtemplate extends Model
{
    protected $fillable = ['subject','body'];
    use HasFactory;
}