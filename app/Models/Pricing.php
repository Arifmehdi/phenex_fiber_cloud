<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $table = 'pricings';

    protected $fillable = ['section_id', 'price', 'currency', 'side_note'];

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function setups(){
        return $this->hasMany(SectionSetup::class);
    }
}