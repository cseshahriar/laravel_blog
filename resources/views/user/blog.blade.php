@extends('user.app')

@section('bg-img', asset('user/img/home-bg.jpg'))  {{-- banner img --}}    
@section('banner-title', 'Clean Blog')  {{-- banner img --}}    
@section('banner-subtitle', 'A Blog Theme by Start Bootstrap')  {{-- banner img --}}    

@section('main-content') 
<!-- Main Content -->
    <div class="container"> 
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto"> 
          @foreach($posts as $post) 
          <div class="post-preview">
            <a href="{{ url('post', $post->slug) }}">  {{-- route('post') --}} 
              <h2 class="post-title">  
                  {{ $post->title }}
              </h2>
              <h3 class="post-subtitle">
                  {{ $post->subtitle }}   
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on {{ $post->created_at->diffForHumans() }}</p>      
          </div>
          <hr>  
          @endforeach  

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>   
    </div>

    <hr> 
@endsection  