@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Setting [{{$Setting->BlogName}}] 

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
                    
                    <form action="{{route('Settings.update',['id' => $Setting->id ])}}" method="POST">

                    {{ csrf_field() }}
                       
                        <div class="form-group">
                            <label for="inputTitle">Blog Name</label>
                            <input type="text" name="BlogName"  class="form-control" id="inputTitle" value="{{$Setting->BlogName}}">
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Name Admin Blog</label>
                            <input type="text" name="NameAdminBlog"  class="form-control" id="inputTitle" value="{{$Setting->NameAdminBlog}}">
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Email</label>
                            <input type="text" name="email"  class="form-control" id="inputTitle" value="{{$Setting->email}}">
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Adress</label>
                            <input type="text" name="adress"  class="form-control" id="inputTitle" value="{{$Setting->adress}}">
                        </div> 
                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection