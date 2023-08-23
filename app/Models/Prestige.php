<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Prestige extends Model
{
    protected $table = 'prestiges';

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Characters::class);
    }
}
