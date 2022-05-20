@extends('layouts.admin')
@section('title','restaurants list') 
@section('main')


<form action="" class="form-inline">

    <div class="form-group">

        <input class="form-control" name = "key" id="" placeholder="Search by name">
    </div>

    <button type="submit" class="btn btn-primary">
        <i class="fas fa-search"></i>
    </button>
    <div class="col-md-6" style="text-align:right;">
    <a href="{{route('restaurants.create')}}" class="btn btn-primary float-end"> Add restaurants</a>
   
</div>
</form>


<hr>

<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Adress</th>
            <th>Image</th>
            <th class="text-right" >Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $cat)
        <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->address}}</td>
            <td>{{$cat->image}}</td>
            <td class="text-right">
                <a href="" class="btn btn-sm btn-success">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="{{route('restaurants.destroy', $cat -> id)}}" class="btn btn-sm btn-danger btndelete">
                    <i class="fa fa-trash"></i>
                </a> 
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<form method="post" action="" id = "form-delete">
    @csrf @method('delete')
</form>
<hr>
<div class="">
    {{$data->appends(request()->all())->links()}}
</div>
@stop();
@section('js')
<script>
    $('.btndelete').click(function(ev){
        ev.preventDefault();
        var _href = $(this).attr('href');
        $('form#form-delete').attr('action',_href);
        if(confirm('Bạn có chắc muốn xóa nó không')){
        $('form#form-delete').submit();
        }
    })
</script>
@stop();
