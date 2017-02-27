<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $guarded = ['id', 'date', 'income_id', 'outcome_id'];
}
