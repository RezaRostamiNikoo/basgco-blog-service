<?php

namespace App\Http\Livewire\Admin\Pages\Blogs;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Traits\WithSweetAlert;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePostForm extends Component
{
    use WithFileUploads, WithSweetAlert;

    public function __construct($id = null)
    {
        parent::__construct($id);

        Category::all()->each(function ($cat) {
            array_push($this->allCategories, ['id' => $cat->id, 'title' => $cat->title]);
        });
        Tag::all()->each(function ($tag) {
            array_push($this->allTags, ['id' => $tag->id, 'title' => $tag->title]);
        });


    }

    public $allCategories = [];
    public $allTags = [];

    public $category;
    public $tags = [];

    public $post;
    public $photo;

    public $rules = [
        'post.title' => 'required',
        'post.slug' => 'required',
        'post.meta_title' => 'required',
        'post.content' => 'required',
        'post.excerpt' => 'required',
        'category' => 'required',
    ];
    public $messages = [
        'required' => 'ورود این فیلد الزامی می باشد',
        'unique' => 'این فیلد تکراری می باشد لطفا مقدار فیلد را تغییر دهید.'
    ];

    public function save()
    {
        $this->validate([
            'post.title' => [
                'required',
                Rule::unique('posts', 'title')->ignore($this->post->id),
            ],
            'post.slug' => [
                'required',
                Rule::unique('posts', 'slug')->ignore($this->post->id),
            ],
            'post.meta_title' => 'required',
            'post.content' => 'required',
            'post.excerpt' => 'required',
            'category' => 'required',
        ]);

        $this->post->post_status = 'draft';
        $this->post->save();
        if (isset($ths->photo))
            $this->post->addMedia($this->photo->getRealPath())->toMediaCollection('posts');
        $this->photo = null;

//        $this->post->tags()->delete();
//        $this->post->tags()->saveMany(Tag::all()->whereIn('id', $this->tags));

        $this->post->asignCategory($this->category);
        $this->alert_success("ثبت شد.", 'مقاله در وضعیت پیش نویس قرارد دارد');
    }

    public function publish()
    {
        if ($this->post->isPublishable()) {
            $this->post->publish(); // publishig the post
            $this->alert_success("منتشر شد.", 'مقاله در وضعیت منتشر شده قرار گرفت و در دسترس همگان قرار دارد');
            return redirect()->route('blogs.show',$this->post->slug);
        } else {
            $this->alert_warning("هشدار!", 'مقاله در ابتدا باید ذخیره گردد');
        }
    }
    public function unpublish()
    {
        if ($this->post->isPublished()) {
            $this->alert_question_warning("هشدار",
                'با تغییر وضعیت به حالت پیش نویس ممکن است بر روی سئوی این صفحه تاثیر منفی بگذارید. آیا از این عمل مطمئن هستید؟');
//            $this->post->unpublish(); // publishig the post
//            $this->alert_success("موفق", 'مقاله به حالت پیش نویس تغییر وضعیت داد و از دسترس عموم خارج شد');
        } else {
            $this->alert_warning("هشدار!", 'مقاله در ابتدا باید ذخیره گردد');
        }
    }

    public function deleteImage()
    {
        File::delete($this->photo->getRealPath());
        $this->photo = null;
    }


    public function render()
    {


        $cat = $this->post->categories;
        if (!isset($this->category) && count($cat)) $this->category = $cat[0]->id;
        return view('livewire.admin.pages.blogs.create-post-form');
    }
}
