<x-layouts.app 
    title="Crear nuevo Post" 
    meta-description="formulario para crear un nuevo blog"
>
    
<h1>Crear nuevo Post </h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @include('posts.form-fields')
    <br>
    <button type="submit">Enviar</button>

</form>



<a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>