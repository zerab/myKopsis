<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;

class Item extends Model
{
  use SoftDeletes;
  protected $SoftDeletes = true;
  protected $dates = ['deleted_at'];
  protected $guarded = ['item_id'];
  protected $primaryKey = 'item_id';

  public function orders()
  {
    return $this->belongsTo('App\Order', 'order_id', 'order_id');
  }

  public function products()
  {
    return $this->belongsTo('App\Product', 'product_id', 'product_id');
  }
}
