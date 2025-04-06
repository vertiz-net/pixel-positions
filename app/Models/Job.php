<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'salary',
        'location',
        'schedule',
        'url',
        'featured',
    ];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => $name]);
        
        $this->tags()->attach($tag);
    }
    
    public function untag(string $tag): void
    {
        $tag = Tag::where('name', $tag)->first();

        if ($tag) {
            $this->tags()->detach($tag);
        }
    }
    
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
