<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['names', 'description', 'vision', 'mission', 'number_of_votes'];

    public function users(): HasMany{
        return $this->hasMany(User::class);
    }
}
