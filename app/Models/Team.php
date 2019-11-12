<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $primaryKey = 'id_team';

    public function users()
    {
        return $this->hasMany(User::class, 'id_team', 'id_team');
    }
}
