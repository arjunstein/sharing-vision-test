@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
               <form action="/addpost" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputPassword1">
                    @if ($errors->has('title'))
                    <span class="alert-danger">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif   
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <textarea name="content" class="form-control" id=""></textarea>
                    @if ($errors->has('content'))
                    <span class="alert-danger">
                        <strong>{{ $errors->first('content') }}</strong>
                    </span>
                @endif   
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <input type="text" class="form-control" name="category" id="exampleInputPassword1">
                    @if ($errors->has('category'))
                    <span class="alert-danger">
                        <strong>{{ $errors->first('category') }}</strong>
                    </span>
                @endif   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm"> Publish</button>
                </div>
               </form>
               <form action="/" method="POST">
                @csrf
               <div class="modal-footer">
                <button class="btn btn-success btn-sm"> Draft</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection