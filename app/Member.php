<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Member extends Model implements Authenticatable
{

    protected $guarded = [];
    use AuthenticableTrait;
}
