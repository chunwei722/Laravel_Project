<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $primaryKey = 'id';

    protected $date = ['create_time'];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
