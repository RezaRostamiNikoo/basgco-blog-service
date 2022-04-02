<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','meta_title','meta_content'];

    public function posts()
    {
        return $this->morphedByMany(Post::class,'categorizable','model_categories');
    }

}
