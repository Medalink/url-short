<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Link extends Model
{
    use HasFactory;

    public $appends = [
        'short_url'
    ];

    public static function encode(int $limit = 8): string
    {
        return Str::random($limit);
    }

    public function getShortUrlAttribute(): string
    {
        return config('app.url') . '/' . $this->code;
    }
}
