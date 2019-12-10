<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    protected $fillable = ['creditname', 'creditlimit', 'interestrate', 'expdate', 'creditcondition'];

	protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
