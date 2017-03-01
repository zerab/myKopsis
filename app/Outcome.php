<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;


class Outcome extends Model
{
    use SoftDeletes;
    protected $SoftDeletes = true;
    protected $dates = ['deleted_at'];
    protected $guarded = ['outcome_id' ];
    protected $primaryKey = 'outcome_id';
}
