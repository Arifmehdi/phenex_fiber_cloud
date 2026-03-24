<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cause extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'short_description',
        'description',
        'active',
        'addedby_id',
        'editedby_id',
        'goal_amount',
        'raised_amount',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($cause) {
            $cause->slug = Str::slug($cause->title);
        });

        static::updating(function ($cause) {
            $cause->slug = Str::slug($cause->title);
        });
    }

    // Relationship with User for who added the cause
    public function addedBy()
    {
        return $this->belongsTo(User::class, 'addedby_id');
    }

    // Relationship with User for who last edited the cause
    public function editedBy()
    {
        return $this->belongsTo(User::class, 'editedby_id');
    }

    // Accessor for image URL
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
