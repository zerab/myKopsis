<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;


class Order extends Model
{
    use SoftDeletes;
    protected $SoftDeletes = true;
    protected $dates = ['deleted_at'];
    protected $guarded = ['order_id'];
    protected $primaryKey = 'order_id';

    public function items()
    {
      return $this->hasMany('App\Item', 'order_id', 'order_id');
    }

    public function member()
    {
      return $this->belongsTo('App\Member', 'member_id', 'member_id');
    }
}
