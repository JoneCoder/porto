<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    protected $fillable = ['socialLinkCode','facebook', 'youtube', 'twitter', 'linkedin'];
}
