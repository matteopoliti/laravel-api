<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    // una singola Tecnologia può essere usata in più progetti
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
}
