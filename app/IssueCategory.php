<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueCategory extends Model
{
    //

    public function issues()
    {
    	return $this->hasMany('Issue','category_id');
    }
}
