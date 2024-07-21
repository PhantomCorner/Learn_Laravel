@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @for ($i = 0; $i <= 10; $i++)
                    <div class="card">
                        <div class="card-header">Title</div>

                        <div class="card-body">
                            Content
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
