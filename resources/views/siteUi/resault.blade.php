@include('includeSiteUi.header')
<body>

	@include('includeSiteUi.topHeader')


	<!-- HEADER -->
	<header id="header">


		<!-- PAGE HEADER -->
		<div class="page-header">
			<div class="page-header-bg" style="background-color: #3498DB;"  data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">Serach For : {{$wordSearch}}</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
						@if($Posts->count() > 0 )
							@foreach($Posts as $c)

									<!-- post -->
									<div class="post post-row">
										<a class="post-img" href="blog-post.html"><img src={{URL::asset("uploads/posts/$c->featrued")}} alt=""></a>
										<div class="post-body">
											<h3 class="post-title"><a href="{{route('siteUi.showPost',['id'=>$c->id])}}">{{$c->title}}</a></h3>
											<ul class="post-meta">
												<li><a href="{{route('siteUi.PostAuthor',['id'=>$c->user->id])}}">{{$c->user->name}} Doe</a></li>
												<li>{{$c->created_at->diffForHumans()}}</li>
											</ul>
											<p>{{$c->content}}</p>
										</div>
									</div>
									<!-- /post -->
							@endforeach

						@else
							<h3>Sorry :( Resault Not Found</h3>
						@endif

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
