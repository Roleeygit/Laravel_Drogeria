@extends( "layouts.master" )

@section( "content" )
<h1>Szerkesztés</h1>

@if( $errors->any() )
    <ul>
        @foreach( $errors->all() as $error )
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif

<form action="/update-perfume" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $perfume->id }}">
    <p>
        <label for="">Név</label>
        <input type="text" name="name" value="{{ $perfume->name }}">
    </p>
    <p>
        <label for="">Típus</label>
        <input type="text" name="type" value="{{ $perfume->type }}">
    </p>
    <p>
        <label for="">Ár</label>
        <input type="text" name="price" value="{{ $perfume->price }}">
    </p>
    <p>
        <button type="submit">Mentés</button>
        <a href="/"><button>Mégse</button></a>


    </p>
</form>
@endsection

<style>
    *
    {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body 
    {
        background-color: rgba(0, 0, 0, 0.87);
        color: white;
        text-align: center;
    }   

    tr
    {
        text-align: center;
    }

    
</style>