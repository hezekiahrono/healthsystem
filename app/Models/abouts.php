<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abouts extends Model
{
    use HasFactory;
    protected $table = 'aboutus';

    protected $fillable = ['title', 'subtitle','description'];
}
