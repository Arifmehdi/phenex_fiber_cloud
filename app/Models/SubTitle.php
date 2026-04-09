<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTitle extends Model
{
    protected $table = 'sub_titles';

    protected $fillable = ['title', 'side_note'];

    public function setups(){
        return $this->hasMany(SectionSetup::class);
    }
}
