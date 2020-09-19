<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use BenSampo\Enum\Traits\CastsEnums;
use App\Enums\Purpose;

class History extends Model
{
    /**
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'purpose'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $enumCasts = [
        'purpose' => Purpose::class,
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'purpose' => 'int',
    ];
}
