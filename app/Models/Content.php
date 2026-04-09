<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    protected $fillable = ['content', 'side_note'];

    public function setups(){
        return $this->hasMany(SectionSetup::class);
    }
}