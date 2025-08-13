<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;


class spouse extends Model
{
    use HasFactory;
    protected $table = 'spouse';
    protected $fillable = [
       'name',
           'birthday',
           'idNumber',
           'address',
           'residence',
           'estate',
           'town',
           'county',
           'occupation',
           'gender',
            'phone'
    ];
    public function user()
	{
		return $this->belongsTo('App\Models\User');
	}


   
  
}
