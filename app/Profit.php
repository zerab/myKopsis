<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profit extends Model
{
  protected $guarded = ['profit_id' ];
  protected $primaryKey = 'profit_id';
}
