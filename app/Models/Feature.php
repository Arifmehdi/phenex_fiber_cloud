<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $table = 'features';

    protected $fillable = ['section_id', 'feature', 'side_note'];

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function setups(){
        return $this->belongsToMany(SectionSetup::class, 'section_setup_features');
    }
}
