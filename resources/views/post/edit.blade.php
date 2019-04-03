@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit  Post</div>

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
                    <form action="{{route('post.update',['id'=>$post->id])}}" method='POST' enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <input type="hidden" value="  {{ Auth::user()->id }}" name="author" /> 
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                        <input value="{{$post->title}}" type="text" name="title" class="form-control" id="inputTitle" placeholder="title">
                        </div>
                        <div class="form-group">
                            <label>Categorie</label>
                            <select class="form-control" name="category_id">
                                @if(count($categories) > 0 )
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"  @if ($post->category_id == $category->id ) selected @endif>
                                        {{$category->name}}
                                        </option>
                                    @endforeach
                                @else
                                    <option value="">No Trashed Ctaegoty </option>
                                @endif

                            </select>
                        </div>

                        <h4>Tags </h4>
                        <div class="form-check">
                            @foreach ($tags as $tag)
                                <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="tags[]"
                                            value="{{$tag->id}}"
                                @foreach($post->tags as $TagPost)


                                    @if($TagPost->id == $tag->id )
                                       checked

                                    @endif

                                @endforeach
                                >
                                <label class="form-check-label"  >
                                    {{$tag->name}}
                                </label><br>

                            @endforeach
                        </div>

                        <div class="col-md-12">
                                <h2 class="">Content Post </h2>
                                <textarea  name="content" id="summernote" > {{$post->content}}</textarea>
                        </div>
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
