<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;

class Cash extends Model
{
    use SoftDeletes;
    protected $SoftDeletes = true;
    protected $dates = ['deleted_at'];
    protected $guarded = ['id', 'date', 'income_id', 'outcome_id'];

}
