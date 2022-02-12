<div>

    @foreach($posts as $post)
            <livewire:components.posts.post-card :post="$post" />
    @endforeach
</div>
