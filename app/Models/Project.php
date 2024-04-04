<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'project_start_date',
        'slug',
        'cover_image',
        'type_id'
    ];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    // un progetto può avere un solo Type
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    // un progetto può contenere più Tecnologie
    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }
}
