<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class media extends Model
{
    protected $fillable = [
        'article_id',
        'picture',
        'video'
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
