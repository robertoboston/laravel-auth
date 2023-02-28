@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h2>Aggiungi nuovo post</h2>
        </div>
        <div class="col-12">
            <form action="{{route('admin.posts.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="control-label">
                        Titolo
                    </label>
                    <input type="text" class="form-control" placeholder="Titolo" id="title" name="title">
                </div>
                <div class="form-group">
                    <label class="control-label">
                        Contenuto
                    </label>
                    <textarea class="form-control" placeholder="Contenuto" name="content" id="content"></textarea>
                </div>
                <div class="form-group my-3">
                    <button type="submit" class="btn btn-sm btn-success">Salva post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection