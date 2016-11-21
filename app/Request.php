<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table ="request_form";
    protected $fillable = ['mail', 'text'];
}
