<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */ 
    
     protected $table = 'users';

     protected $primarykey = 'id';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'birthday',
        'id_number',
        'address',
        'residence',
        'estate',
        'town',
        'county',
        'registration_fee',
        'contribution',
        'occupation',
        'gender',
       
        'image'
         
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function spouse(){

        
    //     return $this->hasMany(App\Models\spouse::class,'spouse','spouses_id','id' ); 

    // }
    

    
    public function spouses()
	{
		return $this->hasMany('App\Models\spouse');
	}

    public function beneficiaries()
	{
		return $this->hasMany('App\Models\beneficiary');
	}

    
}
