<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['client', 'credit', 'fromdate', 'todate', 'balance', 'status'];

	protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
