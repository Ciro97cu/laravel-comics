@extends('../index')

@section('main')
    <main>
        <div class="container_cards py-4">
        <div class="container-sm">
            <div class="row">
            @foreach ($array as $comic)
            <div class="col-sm-2">
                <div class="wrapper_img">
                <a href="/card">
                    <img class="pt-5 pb-3" src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                </a>
                </div>
                <p>{{ $comic["series"] }}</p>
            </div>
            @endforeach
            </div>
            <div class="row mt-5 justify-content-center">
            <div class="col-auto tag_load">LOAD MORE</div>
            </div>
        </div>
        </div>
    </main>
@endsection