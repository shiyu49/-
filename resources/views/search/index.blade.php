
    <div class="container">
        @if(count($posts) > 0)
          <div class="row">
            @foreach($posts as $post)
            <div class="col-md-3">
              {{ $post->title }}
            </div>
            @endforeach
           </div>
        @endif　　　　　　　　　　　　　　
     </div>