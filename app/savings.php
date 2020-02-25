<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class savings extends Model
{
    public function users()
{
    return $this->belonhsTo(users::class);
}
}
