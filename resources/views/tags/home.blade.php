@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <!-- Case Create Post And No Exist Any Category Show This Error  -->
            @if (session()->has('create_tag'))
                <div class="alert alert-danger">
                    {{ session()->get('create_tag') }}
                </div>
            @endif
            <div class="panel panel-default">

                <div class="panel-heading">Tags</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($tags) > 0)
                        <table class="table table-hover">
                            <thead>
                                <th>#Id</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach($tags as $tag)
                                    <tr>
                                        <td>{{$tag->id}}</td>
                                        <td>{{$tag->name}}</td>
                                    
                                        <td  >
                                            <a href="{{route('tags.edit', ['id' => $tag->id ])}}" class="iconEdit">
                                                <i class="fa fa-edit fa-fw"></i> 

                                            </a>
                                        </td>
                                        <td  >
                                            <a href="{{route('tags.delete', ['id' => $tag->id ])}}" class="iconDelete">
                                                <i class="fa fa-trash fa-fw"></i> 
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    @else 
                        <p class="text-center">No  tags </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection