<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public function savings()
    {
    return $this->hasMany(savings::class);
    }


}

