@include('includeSiteUi.header')
<body>

	@include('includeSiteUi.topHeader')

	<!-- HEADER -->
	<header id="header">


		<!-- PAGE HEADER -->
		<div class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">Contacts</h1>

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
					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Contact Information</h2>
						</div>

						<ul class="contact">

							<li><i class="fa fa-envelope"></i> {{$blogName->email}}</li>
							<li><i class="fa fa-map-marker"></i>{{$blogName->adress}}</li>
						</ul>
					</div>

					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Your opinion about the blog</h2>
						</div>

								@include('includeSiteUi.disqus')


								
					</div>
				</div>



				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->


		@include('includeSiteUi.footer')
