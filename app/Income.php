<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;

class Income extends Model
{
    use SoftDeletes;
    protected $SoftDeletes = true;
    protected $dates = ['deleted_at'];
    protected $guarded = ['income_id' ];
    protected $primaryKey = 'income_id';
}
