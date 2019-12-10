<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autopayment extends Model
{
    protected $fillable = ['sender', 'receiver', 'everywhat', 'everynumber', 'frequency', 'amount', 'comment', 'isactive'];

	protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
