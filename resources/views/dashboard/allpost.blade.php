@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="/allpost" class="btn btn-sm btn-flat btn-primary"> Publish</a>
                    <a href="" class="btn btn-sm btn-flat btn-success"> Draft</a>
                    <a href="" class="btn btn-sm btn-flat btn-danger"> Trash</a>
                </p>
            </div>
            <div class="box-body">
               <table class="table myTable">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Title</td>
                        {{-- <td>Content</td> --}}
                        <td>Category</td>
                        {{-- <td>Status</td> --}}
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($post as $e=>$pst)
                    <tr>
                        <td>{{ $e+1  }}</td>
                        <td>{{ $pst->title }}</td>
                        {{-- <td>{{ $pst->content }}</td> --}}
                        <td>{{ $pst->category }}</td>
                        {{-- <td>{{ $pst->status }}</td> --}}
                        <td>
                            <p>
                                <a href="" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                               
                                <form action="" method="POST">
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </p>
                        </td>
                    </tr>  
                    @endforeach
                   
                </tbody>
               </table>
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