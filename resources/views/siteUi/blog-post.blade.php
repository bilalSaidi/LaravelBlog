@include('includeSiteUi.header')

<body>
	<!-- HEADER -->
	<header id="header">
			@include('includeSiteUi.topHeader')
			<!-- PAGE HEADER -->
			<div id="post-header" class="page-header">
				<div class="page-header-bg" style=" background-image:url('../uploads/posts/{{$myPost->featrued}}') " data-stellar-background-ratio="0.5"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-category">
								<a href="{{route('siteUi.catgory',['id'=>$myPost->category->id])}}">{{$myPost->category->name}}</a>
							</div>
							<h1>{{$myPost->title}}</h1>
							<ul class="post-meta">
								<li><a href="{{route('siteUi.PostAuthor',['id'=>$myPost->user->id])}}">{{$myPost->user->name}}</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /PAGE HEADER -->
	</header>

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">


					<!-- post content -->
					<div class="section-row">
							<h2>{{$myPost->title}}</h2>
							<h4>{{$myPost->created_at->toFormattedDateString()}}</h4>
							<p>{!! $myPost->content !!}</p>


					</div>			<!-- /post content -->

					<!-- post tags -->
					<div class="section-row">
						<div class="post-tags">
							<ul>
								<li>TAGS:</li>
								@foreach($myPost->tags()->get() as $tag)
									<li><a href="{{route('siteUi.tag',['id'=>$tag->id])}}">{{$tag->name}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /post tags -->

					<!-- post nav -->
					<div class="section-row">
						<div class="post-nav">

							@if($previousPost)
								<div class="prev-post">
									<a class="post-img" href="blog-post.html"><img src="/uploads/posts/{{$previousPost->featrued}}" alt=""></a>
									<h3 class="post-title"><a href="{{route('siteUi.showPost',['id'=>$previousPost->id])}}">{{$previousPost->title}}</a></h3>
									<span>Previous post</span>
								</div>
							@endif

							@if($nextPost)

								<div class="next-post">
									<a class="post-img" href="blog-post.html"><img src="/uploads/posts/{{$nextPost->featrued}}" alt=""></a>
									<h3 class="post-title"><a href="{{route('siteUi.showPost',['id'=>$nextPost->id])}}">{{$nextPost->title}}</a></h3>
									<span>Next post</span>
								</div>
							@endif
						</div>
					</div>
					<!-- /post nav  -->

					<!-- post author -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">About <a href="{{route('siteUi.PostAuthor',['id'=>$myPost->user->id])}}">{{$myPost->user->name}}</a></h3>
						</div>
						<div class="author media">
							<div class="media-left">
								<a href="{{route('siteUi.PostAuthor',['id'=>$myPost->user->id])}}">
									<img class="author-img media-object" src="/uploads/avatars/{{$myPost->user->avatar}}" alt="">
								</a>
							</div>
							<div class="media-body">
								<p>{{$myPost->user->about_user}}</p>
								<ul class="author-social">
									<li><a href="{{$myPost->user->facebook}}"><i class="fa fa-facebook"></i></a></li>
									<li><a href="{{$myPost->user->github}}"><i class="fa fa-twitter"></i></a></li>
									<li><a href="{{$myPost->user->twitter}}"><i class="fa fa-github"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post author -->



					<!-- Comment Blog -->
					<div class="section-title">
						<h3 class="title">Comment</a></h3>
					</div>
					@include('includeSiteUi.disqus')

					<!-- End Comment Blog -->


				</div>
				<div class="col-md-4">

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								@foreach($categoryies as $category)
									<li><a href="{{route('siteUi.catgory',['id'=>$category->id])}}">{{$category->name}} <span>{{$category->posts()->count()}}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->

				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

@include('includeSiteUi.footer')
