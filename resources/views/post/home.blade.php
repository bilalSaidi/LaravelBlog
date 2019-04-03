@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($posts) > 0)
                        <table class="table table-hover">
                            <thead>
                                <th>image</th>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>
                                         <img src="uploads/posts/{{$post->featrued}}" alt="{{$post->featrued}}" class="imgpostdash img-thumbnail" />
                                        </td>
                                        <td>{{$post->title}}</td>
                                    
                                        <td  >
                                            <a href="{{route('post.edit', ['id' => $post->id ])}}" class="iconEdit">
                                                <i class="fa fa-edit fa-fw"></i> 

                                            </a>
                                        </td>
                                        <td  >
                                            <a href="{{route('post.delete', ['id' => $post->id ])}}" class="iconDelete">
                                                <i class="fa fa-trash fa-fw"></i> 
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    @else 
                        <p class="text-center">No Trashed Category </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection