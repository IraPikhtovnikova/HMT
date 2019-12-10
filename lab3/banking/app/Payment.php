<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['sender', 'receiver', 'date', 'amount', 'status'];

	protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
