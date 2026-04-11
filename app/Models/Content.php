<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    protected $fillable = ['name', 'content', 'side_note', 'accent_color', 'icon', 'button_text', 'button_link'];

    public function setups(){
        return $this->hasMany(SectionSetup::class);
    }
}