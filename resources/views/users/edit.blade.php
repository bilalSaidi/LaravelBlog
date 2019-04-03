@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profile [ {{ $user->name }} ]

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

                    <form action="{{route('Users.update',['id' => $user->id ])}}" method="POST" enctype="multipart/form-data">

                    {{ csrf_field() }}
                       <!-- Name -->
                        <div class="form-group">
                            <label for="inputTitle">name</label>
                            <input type="text" name="name"  class="form-control" id="inputTitle" value="{{$user->name}}">
                        </div>
                        <!-- email -->
                        <div class="form-group">
                            <label for="inputTitle">email</label>
                            <input type="text" name="email"  class="form-control" id="inputTitle" value="{{$user->email}}">
                        </div>
                        <!-- About -->
                        <h4 >About </h4>
                        <textarea name="about_user" rows="8" cols="90" >{{$user->about_user}}</textarea>

                        <!-- facebook -->
                        <div class="form-group">
                            <label for="inputTitle">facebook Acount</label>
                            <input type="text" name="facebook"  class="form-control" id="inputTitle" value="{{$user->facebook}}">
                        </div>
                        <!-- github -->
                        <div class="form-group">
                            <label for="inputTitle">github  Acount</label>
                            <input type="text" name="github"  class="form-control" id="inputTitle" value="{{$user->github}}">
                        </div>
                        <!-- twitter -->
                        <div class="form-group">
                            <label for="inputTitle">twitter  Acount</label>
                            <input type="text" name="twitter"  class="form-control" id="inputTitle" value="{{$user->twitter}}">
                        </div>
                        <!-- Avatar  -->
                        <div class="form-group">

                            <label for="inputfeatrued">Photo</label>
                            <span style="color:red">[ If You Want  Change Photo Browse New Photo  ] </span>
                            <input name="photo" type="file" id="inputfeatrued">
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
