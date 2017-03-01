<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;

class Profit extends Model
{
  use SoftDeletes;
  protected $SoftDeletes = true;
  protected $dates = ['deleted_at'];
  protected $guarded = ['profit_id' ];
  protected $primaryKey = 'profit_id';
}
