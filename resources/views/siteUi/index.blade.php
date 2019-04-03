@include('includeSiteUi.header')
<body>

	@include('includeSiteUi.topHeader')
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="#"><img src="uploads/posts/{{$firstPost->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('siteUi.catgory',['id'=>$firstPost->category->id])}}">{{$firstPost->category->name}}</a>
							</div>

							<h3 class="post-title title-lg"><a href="{{route('siteUi.showPost',['id'=>$firstPost->id])}}">{{$firstPost->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="{{route('siteUi.PostAuthor',['id'=>$firstPost->user->id])}}">{{$firstPost->user->name}}</a></li>
								<li>{{$firstPost->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="uploads/posts/{{$secondPost->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('siteUi.catgory',['id'=>$secondPost->category->id])}}">{{$secondPost->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('siteUi.showPost',['id'=>$secondPost->id])}}">{{$secondPost->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="{{route('siteUi.PostAuthor',['id'=>$secondPost->user->id])}}">{{$secondPost->user->name}}</a></li>
								<li>{{$secondPost->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="uploads/posts/{{$thirdPost->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('siteUi.catgory',['id'=>$thirdPost->category->id])}}">{{$thirdPost->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('siteUi.showPost',['id'=>$thirdPost->id])}}">{{$thirdPost->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="{{route('siteUi.PostAuthor',['id'=>$thirdPost->user->id])}}">{{$thirdPost->user->name}}</a></li>
								<li>{{$thirdPost->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">{{$webdev->name}}</h2>
							</div>
						</div>

						@foreach($webdev->posts()->take(3) as $post)
							<!-- post -->
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="blog-post.html"><img src="uploads/posts/{{$post->featrued}}" alt=""></a>
									<div class="post-body">
										<div class="post-category">
											<a href="{{route('siteUi.catgory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
										</div>
										<h3 class="post-title title-sm"><a href="{{route('siteUi.showPost',['id'=>$post->id])}}">{{$post->title}}</a></h3>
										<ul class="post-meta">
											<li><a href="{{route('siteUi.PostAuthor',['id'=>$post->user->id])}}">{{$post->user->name}}</a></li>
											<li>{{$post->created_at->diffForHumans()}}</li>
										</ul>
									</div>
								</div>
							</div>
						<!-- /post -->
						@endforeach
						<!-- /post -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">{{$anddev->name}}</h2>
							</div>
						</div>

						@foreach($anddev->posts()->take(3) as $post)
							<!-- post -->
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="blog-post.html"><img src="uploads/posts/{{$post->featrued}}" alt=""></a>
									<div class="post-body">
										<div class="post-category">
											<a href="{{route('siteUi.catgory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
										</div>
										<h3 class="post-title title-sm"><a href="{{route('siteUi.showPost',['id'=>$post->id])}}">{{$post->title}}</a></h3>
										<ul class="post-meta">
											<li><a href="{{route('siteUi.PostAuthor',['id'=>$post->user->id])}}">{{$post->user->name}}</a></li>
											<li>{{$post->created_at->diffForHumans()}}</li>
										</ul>
									</div>
								</div>
							</div>
						<!-- /post -->
						@endforeach
						<!-- /post -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">{{$bcdev->name}}</h2>
							</div>
						</div>

						@foreach($bcdev->posts()->take(3) as $post)
							<!-- post -->
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="blog-post.html"><img src="uploads/posts/{{$post->featrued}}" alt=""></a>
									<div class="post-body">
										<div class="post-category">
											<a href="{{route('siteUi.catgory',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
										</div>
										<h3 class="post-title title-sm"><a href="{{route('siteUi.showPost',['id'=>$post->id])}}">{{$post->title}}</a></h3>
										<ul class="post-meta">
											<li><a href="{{route('siteUi.PostAuthor',['id'=>$post->user->id])}}">{{$post->user->name}}</a></li>
											<li>{{$post->created_at->diffForHumans()}}</li>
										</ul>
									</div>
								</div>
							</div>
						<!-- /post -->
						@endforeach
						<!-- /post -->
					</div>
					<!-- /row -->


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


				<!-- post widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2 class="title">Popular Posts</h2>
					</div>

					@foreach($popPost as $post)
					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="uploads/posts/{{$post->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('siteUi.showPost',['id'=>$post->id])}}">{{$post->title}}</a></h3>
						</div>
					</div>
					<!-- /post -->
					@endforeach
				</div>
				<!-- /post widget -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->



@include('includeSiteUi.footer')
