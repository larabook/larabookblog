@extends("layouts.app")

@section('content')

    <div class="row">

        @foreach($blogposts as $post)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><a href="#">{{ $post->title }}</a></h3>
                        <p>{{ str_limit($post->body, 50)}}</p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection