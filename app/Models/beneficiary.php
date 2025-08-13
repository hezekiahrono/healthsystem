<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;


class beneficiary extends Model
{
    use HasFactory;
    protected $table = 'beneficiaries';
    protected $fillable = [
       'name',
           'birthday',
           'schooling',
           'education',
           'image',
           'gender'
           
    ];
    public function user()
	{
		return $this->belongsTo('App\Models\User');
	}


   
  
}
