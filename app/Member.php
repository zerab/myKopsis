<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;

class Member extends Model implements Authenticatable
{
    use SoftDeletes;

    protected $guarded = ['id', 'member_id', 'level'];
    protected $SoftDeletes = true;
    protected $dates = ['deleted_at'];

    use AuthenticableTrait;


    public function isAdmin()
    {
        return $this->level;
    }

    public function orders()
    {
      return $this->hasMany('App\Order', 'member_id', 'member_id');
    }
}
