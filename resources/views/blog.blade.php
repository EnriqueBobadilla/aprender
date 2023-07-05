<x-layouts.app 
    title="BLOG" 
    meta-description="BLOG meta description"
>
    
    <h1>Blog</h1>
    @foreach($posts as $post)
    
        <h2>{{ $post['title'] }}</h2>

    @endforeach
    

</x-layouts.app>