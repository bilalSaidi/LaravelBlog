<!-- FOOTER -->
<footer id="footer">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-3">
        <div class="footer-widget">
          <div class="footer-logo">
            <a href="{{route('siteUi')}}" class="logo">{{$blogName->BlogName}}</a>
          </div>
          <p>Admin Blog : {{$blogName->NameAdminBlog}}</p>
          <p>Email : {{$blogName->email}}</p>
          <p>Adress : {{$blogName->adress}}</p>

        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-widget">
          <h3 class="footer-title">Categories</h3>
          <div class="category-widget">
            <ul>
							@foreach($categoryies as $category)
								<li><a href="{{route('siteUi.catgory',['id'=>$category->id])}}">{{$category->name}} <span>{{$category->posts()->count()}}</span></a></li>
							@endforeach
						</ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="footer-widget">
          <h3 class="footer-title">Tags</h3>
          <div class="tags-widget">
            <ul>
              @foreach($tags as $tag)
                <li><a href="{{route('siteUi.tag',['id'=>$tag->id])}}">{{$tag->name}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- /row -->

    <!-- row -->
    <div class="footer-bottom row">
      <div class="col-md-6 col-md-push-6">
        <ul class="footer-nav">
          <li><a href="{{route('siteUi')}}">Home</a></li>
          <li><a href="{{route('siteUi.contatc')}}">Contacts</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-md-pull-6">
        <div class="footer-copyright">

            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script>
            made with <i class="fa fa-heart-o" aria-hidden="true"></i> by {{$blogName->NameAdminBlog}}

        </div>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>

</body>

</html>
