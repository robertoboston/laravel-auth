@extends('layouts.admin');
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h2>Elenco posts</h2>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Titolo</th>
                    <th>Slug</th>
                    <th>Azioni</th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td>
                            {{-- segnaposto per azioni --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection