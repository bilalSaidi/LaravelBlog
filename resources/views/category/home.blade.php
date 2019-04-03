@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

             <!-- Case Create Post And No Exist Any Category Show This Error  -->
            @if (session()->has('create_cat'))
                <div class="alert alert-danger">
                    {{ session()->get('create_cat') }}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Categories</div>


                <div class="panel-body">
                        
                    
                    @if (session()->has('users'))
                    <div class="alert alert-danger">
                            {{ session('status') }}
                    </div>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($categories) > 0)
                        <table class="table table-hover">
                            <thead>
                                <th>#Id</th>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                    
                                        <td  >
                                            <a href="{{route('category.edit', ['id' => $category->id ])}}" class="iconEdit">
                                                <i class="fa fa-edit fa-fw"></i> 

                                            </a>
                                        </td>
                                        <td  >
                                            <a href="{{route('category.delete', ['id' => $category->id ])}}" class="iconDelete">
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