<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPermissions, InteractsWithMedia;


    protected $fillable = ['name', 'email', 'password', 'is_super'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];
    protected $guard = 'admin';

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatars')
            ->useFallbackUrl('/admin/assets/images/users/avatar-7.jpg')
//            ->acceptsFile(function (File $file) {
//                return $file->mimeType === 'image/jpeg';
//            })
//            ->acceptsMimeTypes(['image/jpeg'])
            ->useDisk('avatars')
            ->singleFile();

    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('profile')
            ->width(198)
            ->height(198)
//            ->sharpen(10),
            ->performOnCollections('avatars');
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, "author_id", "id")->where('post_status', '<>', 'preparing');
    }
}
