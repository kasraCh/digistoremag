<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'content',
        'picture',
        'video'
    ];

    protected $appends = ['picture_url'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    } 

    public function likes(): HasMany
    {
        return $this->hasMany(like::class);
    }

    public function medias(): HasMany
    {
        return $this->hasMany(media::class);
    }

    public function getPictureUrlAttribute()
    {
        // return asset('admin-page/assets/upload/pictures/' . $this->picture);
    
        if($this->picture) {
            return asset('admin-page/assets/upload/pictures/' . $this->picture);
        } else {
            return asset('digimag/assets/images/image.png');
        }
    }

}
