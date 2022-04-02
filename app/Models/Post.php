<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
            ->useFallbackUrl('/assets/images/default-post-header-image.jpeg')
//            ->useFallbackPath(public_path('/images/anonymous-user.jpg'))
//            ->acceptsFile(function (File $file) {
//                return $file->mimeType === 'image/jpeg';
//            })
//            ->acceptsMimeTypes(['image/jpeg'])
            ->useDisk('posts')
            ->singleFile();
//            ->onlyKeepLatest(3)
//            ->withResponsiveImages()
//            ->registerMediaConversions(function (Media $media) {
//                $this
//                    ->addMediaConversion('thumb')
//                    ->width(100)
//                    ->height(100);
//            });


    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('header')
            ->width(768)
//            ->sharpen(10),
            ->performOnCollections('posts');
        $this->addMediaConversion('thumbnail')
            ->width(300)
//            ->sharpen(10),
            ->performOnCollections('posts');

    }

    public static function newDraft(): Post
    {
        $post = Post::where('post_status', 'preparing')->where('author_id', auth()->user()->id)->get();

        return count($post) ? $post[0] : Post::create(['author_id' => auth()->user()->id]);
    }

    public function isPublishable()
    {
        if ($this->post_status === 'draft')
            return true;
        return false;
    }
    public function isPublished()
    {
        return $this->post_status === 'published' ;
    }

    public function publish()
    {
        $this->save([
            'post_status' => 'published',
            'published_at' => Carbon::now()
        ]);
    }
    public function unpublish(){
        $this->save([
            'post_status' => 'draft',
            'published_at' => null
        ]);
    }


    public function asignCategory($id){
        $this->deleteCategories();
        $this->categories()->save(Category::where('id', $id)->first());
    }
    public function deleteCategories()
    {
        $this->morphMany(ModelCategory::class, "categorizable", "categorizable_type", "categorizable_id", "id")->delete();
    }

    //////////////////////////
    /// Connect to other models
    //////////////////////////
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable', 'model_tags');
    }


    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable', 'model_categories');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Admin::class, "author_id", "id");
    }



}
