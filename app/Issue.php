<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //

    public function responder()
    {
    	return $this->hasOne('Responder','issue_id');
    }
}
