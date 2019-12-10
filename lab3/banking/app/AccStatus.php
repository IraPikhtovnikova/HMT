<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccStatus extends Model
{
    protected $fillable = ['accstatname', 'accstatdescription'];

	protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
