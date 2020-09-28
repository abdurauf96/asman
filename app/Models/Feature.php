<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Feature extends Model
{
   	use Translatable;
    protected $translatable=['title', 'body'];
}
