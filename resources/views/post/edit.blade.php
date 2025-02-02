@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Edit</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (@session('success'))
                    <div class="alert alert-success">
                        Success</div>
                @endif
                <form action="{{ route('posts.update', [$post->id]) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for='title'>Title</label>
                        <input type="text" class='form-control' id='title' name='title'
                            value="{{ old('title', $post->title) }}">
                    </div>
                    <div class="form-group">
                        <label for='content'>Content</label>
                        <textarea class="form-control" id="content" name="content" rows='5'>
                        {{ $post->content }}
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <hr>
                <form action="{{ route('posts.destroy', [$post->id]) }}" method="post"
                    onsubmit="return confirm(
                'Confrim?')">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>


        </div>
    </div>
    </div>
@endsection
