<!-- HEADER -->
<header id="header">
  <!-- NAV -->
  <div id="nav">
    <!-- Top Nav -->
    <div id="nav-top">
      <div class="container">


        <!-- logo -->
        <div class="nav-logo">
          <a href="{{route("siteUi")}}" class="logo">{{$blogName->BlogName}}</a>
        </div>
        <!-- /logo -->

        <!-- search & aside toggle -->
        <div class="nav-btns">
          <button class="aside-btn"><i class="fa fa-bars"></i></button>
          <button class="search-btn"><i class="fa fa-search"></i></button>
          <div id="nav-search">
            <form action="{{route('resault')}}" method="GET">


              <input class="input" name="search" placeholder="Enter your search...">
            </form>
            <button class="nav-close search-close">
              <span></span>
            </button>
          </div>
        </div>
        <!-- /search & aside toggle -->
      </div>
    </div>
    <!-- /Top Nav -->



    <!-- Aside Nav -->
    <div id="nav-aside">
      <ul class="nav-aside-menu">
        <li><a href="{{route('siteUi')}}">Home</a></li>
        <li class="has-dropdown"><a>Categories</a>
          <ul class="dropdown">
            @foreach ($categoryies as $category)
                <li><a href="{{route('siteUi.catgory',['id'=>$category->id])}}">{{$category->name}}</a></li>

            @endforeach
          </ul>
        </li>
        <li><a href="{{route('siteUi.contatc')}}">Contacts</a></li>
        <li><a href="{{route('home')}}">Logs</a></li>
      </ul>
      <button class="nav-close nav-aside-close"><span></span></button>
    </div>
    <!-- /Aside Nav -->
  </div>
  <!-- /NAV -->
</header>
<!-- /HEADER -->
