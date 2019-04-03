@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cretae Category</div>

                <div class="panel-body">
                    


                    @if(count($errors) > 0 ) 
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>  {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action='/category/store' method='POST'>
                    {{ csrf_field() }}
                       
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="inputTitle" placeholder="title">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection