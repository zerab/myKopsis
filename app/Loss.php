<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loss extends Model
{
  protected $guarded = ['loss_id' ];
  protected $primaryKey = 'loss_id';
}
