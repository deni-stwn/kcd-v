<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;


class Blog extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $append = [
        'documents'
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function registerMediaConversions(Media $media = null): void
    {

            $this->addMediaConversion('thumb')
                ->width(368)
                ->height(232)
                ->sharpen(10);
        $this->addMediaConversion('preview')->width(120)->height(120)->sharpen(10);
    }

    public function getDocumentsAttribute()
    {
        $formattedMediaItems = $this->getMedia('document')->map(function ($item) {
            return [
                'url' => $item->getUrl(),
                'thumbnail' => $item->getUrl('thumb'),
                'preview' => $item->getUrl('preview'),
                'original_url' => $item->getUrl(),
            ];
        });

        return $formattedMediaItems;
    }
    public static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });

        static::updating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }
}
