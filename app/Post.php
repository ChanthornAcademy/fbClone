<?php

namespace App;

use App\Scopes\ReverseScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $guarded = [];


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope( new ReverseScope());
    }

    function user(){
        return $this->belongsTo(User::class);
    }
}
