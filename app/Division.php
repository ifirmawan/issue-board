<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    //

    public function quality_incoming()
    {
        return $this->hasManyThrough(
            'App\Division',
            'App\Users',
            'pli_id', // Foreign key on users table...
            'pli_item_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }
}
