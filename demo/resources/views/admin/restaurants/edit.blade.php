@extends('layouts.admin')
@section('title', 'Edit restaurants')
@section('main')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Edit restaurant</h3>

                 </div>
                <div class="col-md-6">
                    <a href="{{route('restaurants.index')}}" class="btn btn-primary float-end">List restaurants</a>

                </div> 
                
             </div>
            <div class="card-body">
            
                <form action="{{route('restaurants.store}}" method="post">
                    @csrf @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Restaurat Name<strong>
                                <input type="text"name="name" value="{{$restaurants->name}}"class="form-control" placeholder="Add Restaurat Name">

                            </div>
                            <div class="form-group">
                                <strong>Address<strong>
                                <input type="text"name="address" value="{{$restaurants->address}}" class="form-control" placeholder="Add Address">

                            </div>
                            <div class="form-group">
                                <strong>Image<strong>
                                <input type="file"name="image"  value="{{$restaurants->image}}" class="form-control" placeholder="Add Description">
                            </div>

                            <div class="form-group">
                                <strong>Description<strong>
                                <input type="text"name="description" value="{{$restaurants->description}}" class="form-control" placeholder="Add Description">
                            </div>
                            

                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Update</button>
                </form>
            
            </div>
        </div>
    </div>
    
</div>
@stop() 