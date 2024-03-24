<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['names', 'number_of_votes', 'photo'];

    public function users(): HasMany{
        return $this->hasMany(User::class);
    }
}
