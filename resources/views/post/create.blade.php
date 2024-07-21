@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="form-group">
                        <label for='title'>Title</label>
                        <input type="text" class='form-control' id='title' name='title'>
                    </div>
                    <div class="form-group">
                        <label for='content'>Content</label>
                        <textarea class="form-control" id="content" name="content" rows='5'></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"> Submit</button>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
