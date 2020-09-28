<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Post extends Model
{
     use Translatable;
    protected $translatable=['title', 'excerpt', 'body'];
}
