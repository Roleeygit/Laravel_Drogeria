{{-- Készitette: Juhász Roland --}}
{{-- © Copyright Juhász Roland 2022-11-24 --}}

@extends( "layouts.master" )

@section( "content" )
<h1>Termékek</h1>

<a href="/new-perfume"><button class="newproduct">Új termék</button></a>

<table align="center">
    <thead>
        <tr>
            <td>Id</td>
            <td>Termék</td>
            <td>Típus</td>
            <td>Ár</td>
            <td>Művelet</td>
        </tr>
    </thead>
    <tbody>
        @foreach( $perfumes as $perfume )
            <tr>
                <td>{{ $perfume->id }}</td>
                <td>{{ $perfume->name }}</td>
                <td>{{ $perfume->type }}</td>
                <td>{{ $perfume->price }}</td>
                <td>
                    <a href="/edit-perfume/{{ $perfume->id }}">
                        <button class="edit">Módosítás</button>
                    </a>
                    <br>
                    <a href="/delete-perfume/{{ $perfume->id }}">
                        <button class="delete">Törlés</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>   
</table>
@endsection

<style>

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
        background-color: rgba(0, 0, 0, 0.89);
        color: white;
        text-align: center;
    }

    tr
    {
        text-align: center;
    }

    .delete
    {
        background-color: white;
    }

    .delete:hover
    {
        font-size: 12px;
        background-color: rgb(255, 0, 0);
    }

    .edit
    {
        background-color: white;
    }

    .edit:hover
    {
        font-size: 12px;
        background-color: rgb(229, 255, 0);
    }
    .newproduct
    {
        margin: 15px
    }

    .newproduct:hover
    {
        background-color: aqua;
        font-size: 20px;
    }

</style>







































































































































































{{-- Készitette: Juhász Roland --}}