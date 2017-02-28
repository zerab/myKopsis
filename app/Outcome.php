<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    protected $guarded = ['outcome_id' ];
    protected $primaryKey = 'outcome_id';
}
