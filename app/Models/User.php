<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token_id', 
        'email',   
        'password',
        'name',    
        'phone',   
        'address',
        'position',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //White list to allow matches key names throught url
    protected $allowFilter = [];

    //Use QueryScope to match request element to users collection
    public function scopeFilter(Builder $query) {
        //Validate if request position statement exists
        if (empty(request('position'))) {
            return;
        }

        //Expected array
        $filters = request('position');
        $allowFilter = User::get()->toArray();

        foreach ($filters as $key => $value) {
            //If index given value matches to original user id collection
            if (isset($allowFilter[$value])) {
                return $allowFilter[$value];
            }else {
                return response()->json([
                    []
                ], 404);
            }
        }
    }
}
