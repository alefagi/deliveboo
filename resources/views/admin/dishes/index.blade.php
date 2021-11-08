@extends('layouts.app')


@section('content')
<header class="my-5 d-flex justify-content-between align-items-center">
    <h1 class="text-center w-100">I miei piatti</h1>
</header>
<div class="container">
     <div class="row">
         <nav class="col-4">@include('admin.includes.links')</nav>
     
     
                <div class="col-8">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titolo</th>
                                <th scope="col">Descrizione</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Prezzo</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dishes as $dish)
                                <tr>
                                    <th scope="row">{{ $dish->id }}</th>
                                    <td>{{ $dish->name }}</td>
                                    <td>{{ $dish->description }}</td>
                                    <td><img src="{{$dish->cover}}" class="img-fluid" alt=""></td>
                                    <td>{{ $dish->price }}</td>
     
     
                                    {{-- <td class="d-flex justify-content-end">
                                        <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Vai</a>
                                        <a href="{{ route('admin.posts.edit', $post->id) }}"
                                            class="btn btn-warning ml-2">Modifica</a>
                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post"
                                            class="delete-button">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ml-2">Elimina</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Non ci sono piatti da visualizzare.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
     </div>
 </div>






@endsection







