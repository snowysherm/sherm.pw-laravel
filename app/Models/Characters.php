<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Characters extends Model
{
    protected $table = 'characters';

    public function prestige(): HasMany
    {
        return $this->hasMany(Prestige::class);
    }
}
