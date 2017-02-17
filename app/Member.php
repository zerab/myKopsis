<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Member extends Model implements Authenticatable
{

    protected $guarded = ['id', 'member_id', 'level'];

    use AuthenticableTrait;

    public function isAdmin()
    {
        return $this->level;
    }
}
