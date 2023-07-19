<label>
    title<br>
    <input name="title" type="text" value="{{old('title',  $post->title)}}">
    @error('title')
        <br>
        <samll style="color: red">{{ $message }}</small>
    @enderror
</label>
<label>
    <br>
    body<br>
    <Textarea name="body">{{old('body', $post->body)}}</Textarea>
    @error('body')
        <br>
        <samll style="color: red">{{ $message }}</small>
    @enderror
</label>