<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    protected $SoftDeletes = true;
    protected $dates = ['deleted_at'];
    protected $guarded = ['id', 'member_id'];

    public function items()
    {
      return $this->hasOne('item', 'product_id', 'product_id');
    }
}
