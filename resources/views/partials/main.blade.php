<main>
  <div class="container_cards py-4">
    <div class="container-sm">
      <div class="row">
        @foreach ($array as $comic)
          <div class="col-sm-2">
            <a href="/card">
              <div class="wrapper_img">
                <img class="pt-5 pb-3" src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
              </div>
              <p>{{ $comic["series"] }}</p>
            </a>
          </div>
        @endforeach
      </div>
      <div class="row mt-5 justify-content-center">
        <div class="col-auto tag_load">LOAD MORE</div>
      </div>
    </div>
  </div>
</main>