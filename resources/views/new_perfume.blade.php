@extends( "layouts.master" )

@section( "content" )
<h1>Új Termékek</h1>

@if( $errors->any() )
    <ul>
        @foreach( $errors->all() as $error )
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif


<form action="add-perfume" method="post">
    @csrf
    <p>
        <label for="">Név</label>
        <input type="text" name="name" placeholder="name">
    </p>
    <p>
        <label for="">Típus</label>
        <input type="text" name="type" placeholder="type">
    </p>
    <p>
        <label for="">Ár</label>
        <input type="text" name="price" placeholder="price">
    </p>
    <p>
        <button type="submit" class="submit">Küldés</button>
        
    </p>
</form>
    <a href="/perfumes"><button class="parfumes">Parfümök</button></a>

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
        background-color: rgba(0, 0, 0, 0.918);
        color: white;
        text-align: center;
    }   

    tr
    {
        text-align: center;
    }

    .submit
    {

        margin: 6px; 
    }
    
    .submit:hover
    {
        background-color: chartreuse;
    }

    .parfumes
    {

    }

    .parfumes:hover
    {
        background-color: rgb(9, 85, 226);
        
    }

    
</style>