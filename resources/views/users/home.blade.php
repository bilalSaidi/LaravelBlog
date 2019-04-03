@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($Users) > 0)
                        <table class="table table-hover">
                            <thead>
                                <th>image</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach($Users as $user)
                                    <tr>
                                        <td>
                                        @if($user->avatar != null)
                                         <img src="uploads/avatars/{{$user->avatar}}" alt="{{$user->avatar}}" class="imgpostdash img-thumbnail img-circle  img-responsive"  />
                                        @else
                                         <img src="uploads/avatars/default.jpg" alt="{{$user->avatar}}" class="imgpostdash img-thumbnail img-circle  img-responsive"  />
                                        @endif

                                        </td>
                                        <td>{{$user->name}}</td>
                                        <td>
                                            @if($user->admin)
                                                <a href="{{route('Users.deleteAdmin', ['id' => $user->id ])}}">Delete Admin </a>
                                            @else
                                                <a href="{{route('Users.MakeItAdmin', ['id' => $user->id ])}}">Make It Admin </a>
                                            @endif
                                        </td>

                                        <td  >
                                            <a href="{{route('Users.edit', ['id' => $user->id ])}}" class="iconEdit">
                                                <i class="fa fa-edit fa-fw"></i> 

                                            </a>
                                        </td>
                                        <td  >
                                            <a href="{{route('Users.delete', ['id' => $user->id ])}}" class="iconDelete deleteUser">
                                                <i class="fa fa-trash fa-fw"></i> 
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    @else 
                        <p class="text-center">No Trashed Users  </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection