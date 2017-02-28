<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $guarded = ['income_id' ];
    protected $primaryKey = 'income_id';
}
