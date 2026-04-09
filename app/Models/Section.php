<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';

    protected $fillable = [
        'section_name', 'status', 'serial', 'page', 'side_note'
    ];

    public function features(){
        return $this->hasMany(Feature::class);
    }

    public function pricings(){
        return $this->hasMany(Pricing::class);
    }

    public function setups(){
        return $this->hasMany(SectionSetup::class);
    }
}