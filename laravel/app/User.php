<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use BenSampo\Enum\Traits\CastsEnums;
use App\Enums\Gender;
use App\Enums\Industry;
use App\Enums\Job;
use App\Enums\Location;

class User extends Authenticatable
{
    use Notifiable;
    use CastsEnums;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'location', 'job', 'industry', 'birthday',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $enumCasts = [
        'gender' => Gender::class,
        'location' => Location::class,
        'job' => Job::class,
        'industry' => Industry::class,
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'gender' => 'int',
        'location' => 'int',
        'job' => 'int',
        'industry' => 'int',
    ];
}
