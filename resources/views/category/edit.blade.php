@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Category [ {{ $cat->name }} ] 

                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    @if(count($errors) > 0 ) 
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>  {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{route('category.update',['id' => $cat->id ])}}" method="POST">

                    {{ csrf_field() }}
                       
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" name="title"  class="form-control" id="inputTitle" placeholder="{{$cat->name}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection