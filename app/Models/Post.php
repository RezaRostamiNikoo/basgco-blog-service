<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'author_id', 'parent_id', 'meta_title', 'title', 'sub_title', 'slug', 'excerpt',
        'content', 'image_url', 'post_status', 'comment_status', 'published_at',
    ];

    // for working with Spatie/laravel-medialibrary
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('posts')
            ->useFallbackUrl('/media/posts/default.png');
//            ->useFallbackPath(public_path('/images/anonymous-user.jpg'))
//            ->acceptsFile(function (File $file) {
//                return $file->mimeType === 'image/jpeg';
//            })
//            ->acceptsMimeTypes(['image/jpeg'])
//            ->useDisk('media')
//            ->singleFile()
//            ->onlyKeepLatest(3)
//            ->withResponsiveImages()
//            ->registerMediaConversions(function (Media $media) {
//                $this
//                    ->addMediaConversion('thumb')
//                    ->width(100)
//                    ->height(100);
//            });


    }

    public static function newDraft(): Post
    {
        return Post::create(['author_id' => auth()->user()->id]);
    }
}
