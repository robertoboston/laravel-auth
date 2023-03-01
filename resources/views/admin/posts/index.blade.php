@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div class="d-flex justify-content-between">
                <div>
                    <h2>Elenco posts</h2>
                </div>
                <div>
                    <a href="{{route('admin.posts.create')}}" class="btn btn-sm btn-primary">Aggiungi Post</a>
                </div>
            </div>
        </div>
        @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
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
                            <a href="{{ route('admin.posts.show', $post->slug)}}" title="Visualizza post" class="btn btn-sm btn-square btn-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection