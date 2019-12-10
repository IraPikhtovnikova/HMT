<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayStatus extends Model
{
    protected $fillable = ['paystatname', 'paystatdescription'];

	protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
