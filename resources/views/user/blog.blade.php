@extends('user.app')
@section('extracss') 
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}"> 
@endsection

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
          @endforeach  
          <hr>  
          
          <style>
            .pagination {
                display: inline-block;
                padding-left: 0;
                margin: 20px 0;
                border-radius: 4px;
             }
             .pagination>li {
                  display: inline;
              }
              .pagination>li .active span {
                  background-color : #337AB7; 
              }
              .pagination>li:first-child>a, .pagination>li:first-child>span {
                  margin-left: 0;
                  border-top-left-radius: 4px;
                  border-bottom-left-radius: 4px;
              }
              .pagination>li>a, .pagination>li>span {
                  position: relative;
                  float: left;
                  padding: 6px 12px;
                  margin-left: -1px;
                  line-height: 1.42857143;
                  color: #337ab7;
                  text-decoration: none;
                  background-color: #fff;
                  border: 1px solid #ddd;
              }
              .pagination>li.active span { 
                background: #337ab7;
                color: #fff;   
              }
              .pagination>.disabled>a, .pagination>.disabled>a:focus, .pagination>.disabled>a:hover, .pagination>.disabled>span, .pagination>.disabled>span:focus, .pagination>.disabled>span:hover {
                  color: #777;
                  cursor: not-allowed;
                  background-color: #fff;
                  border-color: #ddd;
              }
          </style>
          <!-- pagenation -->
          {{ $posts->links() }}

          <div class="clearfix">
            {{-- <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> --}}
          </div> 
        </div>
      </div>   
    </div>

    <hr> 
@endsection  

@section('extrajs') 
<script src="{{ asset('user/js/prism.js') }}"></script> 
@endsection 