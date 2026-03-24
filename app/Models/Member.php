<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','designation','join_info','short_description',
        'about','photo','email','phone','address',
        'website','map_embed','status'
    ];

    public function profile()
    {
        return $this->hasOne(MemberProfile::class);
    }

    public function socials()
    {
        return $this->hasMany(MemberSocialLink::class);
    }
}
