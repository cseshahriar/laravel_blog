@extends('user.app')

@section('bg-img', asset('user/img/post-bg.jpg'))  {{-- banner img --}} 
@section('banner-title', $post->title)  {{-- banner title --}}    
@section('banner-subtitle', $post->subtitle)  {{-- banner subtitle --}}      

@section('main-content')      
  <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto"> 
            <small>Created At: {{ $post->created_at->diffForHumans() }}</small> 

                {{-- categories --}}
                @foreach($post->Categories as $category) 
                  <small class="pull-right" style="margin-right: 20px;border: 1px solid #ddd;padding: 5px;border-radius: 3px">
                      {{ $category->name }}
                  </small> 
                @endforeach 
              {!! $post->body !!} 
              {{-- {!!  htmlspecialchars_decode($post->body) !!}  --}} 

              <h3>Tag Clouds</h3>
              {{-- tags clouds --}}   
              @foreach($post->tags as $tag)
                  <small style="margin-right: 20px;border: 1px solid #ddd;padding: 5px;border-radius: 3px">
                      {{ $tag->name }}    
                  </small> 
              @endforeach 
            

          </div> 
        </div>
      </div>
    </article> 

    <hr>
@endsection  