<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    protected $fillable = [
        'title', 'location', 'schedule', 'salary', 'url', 'featured',
    ];

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}
