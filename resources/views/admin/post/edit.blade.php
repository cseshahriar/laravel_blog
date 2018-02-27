@extends('admin.layouts.app')

@section('extracss')
 <link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.css') }}"> 
@endsection

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
     <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Write an articel</h3>
            </div>
            <!-- /.box-header -->
      
            <!-- form start -->
            <form role="form" action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data"> 
              {{ csrf_field() }} 
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class="col-md-6">

                  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Article Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}" placeholder="Enter article title here"/>
                    <label>{{ $errors->first('title') }}</label>  
                  </div> 

                  <div class="form-group{{ $errors->has('subtitle') ? ' has-error' : '' }}">
                    <label for="subtitle">Article Subtitle</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $post->subtitle }}" placeholder="Enter article subtitle here" />
                    <label>{{ $errors->first('subtitle') }}</label>
                  </div>  

                  <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                    <label for="slug">Article Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" value="{{ $post->slug }}" placeholder="Enter article slug here">
                    <label>{{ $errors->first('slug') }}</label>
                  </div>

                  <div class="checkbox {{ $errors->has('status') ? 'has-error' : ''  }}">
                    <label>
                      <input type="checkbox" name="status" value="1" @if($post->status == 1) {{ 'checked' }} @endif > Publish
                    </label>
                    <br>
                    <label>{{ $errors->first('status') }}</label> 
                  </div> 

                </div>

                <div class="col-md-6">
                  <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label for="image">Articel Image</label>
                    <input type="file" name="image" id="image">
                    <label>{{ $errors->first('image') }}</label>
                </div>
                 {{-- Tag --}}
                  <div class="form-group" style="margin-top: 28px"> 
                    <label>Select Tag</label> 
                    <select name="tags[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
                      @foreach($tags as $tag)
                          <option value="{{ $tag->id }}"
                            @foreach($post->tags as  $postTag)
                              @if($postTag->id == $tag->id)
                                selected 
                              @endif
                            @endforeach
                            >{{ $tag->name }}</option>
                      @endforeach 
                    </select>
                  </div>
                 {{-- /tag --}} 

                 {{-- category --}}
                  <div class="form-group" style="margin-top: 36px">     
                    <label>Select Category</label> 
                    <select name="categories[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
                      @foreach($categories as $category) 
                          <option value="{{ $category->id }}"
                            @foreach($post->categories as $postCategory )
                                @if($postCategory->id == $category->id)
                                  selected 
                                @endif
                            @endforeach
                            >{{ $category->name }}</option>  
                      @endforeach
                    </select>
                  </div>
                 {{-- /category --}}

                </div>
              </div>


              {{-- editor --}}
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Write Articel Body Here
                    <small>Simple and fast</small>
                  </h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad {{ $errors->has('body') ? 'has-error' : '' }}">
                    <textarea class="textarea" name="body" id="editor1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body }}</textarea>
                    <label class="text-danger">{{ $errors->first('body') }}</label>
                </div>   
              </div>
              {{-- editor end  --}}

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                 <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a> 
              </div>

            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('extrajs')
<script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
  $(document).ready(function () {
    $('.select2').select2();
  });
</script>

<!-- CK Editor -->
<script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script> 
<script>
  $(function () {
    CKEDITOR.replace('editor1');
    //$('.textarea').wysihtml5()
  })
</script>
@endsection