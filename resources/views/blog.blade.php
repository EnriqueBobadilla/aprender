<x-layouts.app 
    title="BLOG" 
    meta-description="BLOG meta description"
>
    
    <h1>Blog</h1>
    @foreach($posts as $post)
    
        <h2>
            <a href="/blog/{{ $post->id}}">
                {{ $post->title}}
            </a>
        </h2>

    @endforeach
    

</x-layouts.app>