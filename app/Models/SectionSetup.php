<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SectionSetup extends Model
{
    use HasFactory;

    protected $table = 'sections_setups';

    protected $fillable = [
        'section_id',
        'title_id',
        'sub_title_id',
        'content_id',
        'pricing_id',
        'side_note'
    ];

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function title(){
        return $this->belongsTo(Title::class);
    }

    public function subTitle(){
        return $this->belongsTo(SubTitle::class);
    }

    public function content(){
        return $this->belongsTo(Content::class);
    }

    public function pricing(){
        return $this->belongsTo(Pricing::class);
    }

    public function features(){
        return $this->belongsToMany(Feature::class, 'section_setup_features');
    }
}
