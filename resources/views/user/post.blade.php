@extends('user.app')

@section('extracss') 
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}"> 
@endsection

@section('bg-img', asset('user/img/post-bg.jpg'))  {{-- banner img --}} 
@section('banner-title', $post->title)  {{-- banner title --}}    
@section('banner-subtitle', $post->subtitle)  {{-- banner subtitle --}}      

@section('main-content')      
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=425799207852166&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
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
          <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div> 
        </div>
      </div>
    </article> 

    <hr>
@endsection  

@section('extrajs') 
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection