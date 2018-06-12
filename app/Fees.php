<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    //
    public function relationship()
    {
        return $this->belongsTo('Student');
    }


}
