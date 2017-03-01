<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;


class Loss extends Model
{
  use SoftDeletes;
  protected $SoftDeletes = true;
  protected $dates = ['deleted_at'];
  protected $guarded = ['loss_id' ];
  protected $primaryKey = 'loss_id';
}
