<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['fullname', 'phone', 'passport', 'password'];

	protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
