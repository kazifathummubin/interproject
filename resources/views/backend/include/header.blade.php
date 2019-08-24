<div class="header-bg">
    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">
                <!-- Logo container-->
                <div class="logo">
                    <!-- Image Logo -->
                    <a href="index.html" class="logo">
                        <!--<img src="{{asset('backend/assets/images/log.png')}}" alt="" height="22" class="logo-small">-->
                        <img src="{{asset('backend/assets/images/images.png')}}" alt="" height="60" class="logo-large">
                    </a>
                    <!-- Text Logo -->
                    <a href="{{asset('backend/index.html')}}" class="logo">
                      ENTER PROJECT
                    </a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras topbar-custom">
                    <ul class="list-inline float-right mb-0">
                        <!-- notification-->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="ti-bell noti-icon"></i>
                                <span class="badge badge-info badge-pill noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Notification (3)</h5>
                                </div>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    View All
                                </a>
                            </div>
                        </li>
                        <!-- User-->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('backend/assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                                <span class="ml-1"> {{ Auth::user()->name }}  <i class="mdi mdi-chevron-down"></i> </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                {{--<a class="dropdown-item"  href="{{ route('register') }}"><i class="dripicons-lock text-muted"></i> </a>--}}
                                <div class="dropdown-divider"></div>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </li>

                        <li class="menu-item list-inline-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                    </ul>
                </div>
                <!-- end menu-extras -->
                <div class="clearfix"></div>
            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->
        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="{{route('back.index')}}"><i class="dripicons-device-desktop"></i>Index</a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{route('font.index')}}"><i class="dripicons-to-do"></i>Home<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">footer</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('footer.index')}}">Index</a></li>
                                        <li><a href="{{route('footer.create')}}">Create</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Topper</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('topper.index')}}">Index</a></li>
                                        <li><a href="{{route('topper.create')}}">Create</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Menu</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('menu.index')}}">Index</a></li>
                                        <li><a href="{{route('menu.create')}}">Create</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">SubMenu</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('submenu.index')}}">Index</a></li>
                                        <li><a href="{{route('submenu.create')}}">Create</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">logo and favicon </a>
                                    <ul class="submenu">
                                        <li><a href="{{route('logo.index')}}">Index</a></li>
                                        <li><a href="{{route('logo.create')}}">Create</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Home About </a>
                                    <ul class="submenu">
                                        <li><a href="{{route('home_about.index')}}">Index</a></li>
                                        <li><a href="{{route('home_about.create')}}">Create</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Home Product</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('home_product.index')}}">Index</a></li>
                                        <li><a href="{{route('home_product.create')}}">Create</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Home Service</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('home_service.index')}}">Index</a></li>
                                        <li><a href="{{route('home_service.create')}}">Create</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Home Category</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('home_category.index')}}">Index</a></li>
                                        <li><a href="{{route('home_category.create')}}">Create</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> About <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('about.index')}}">Index</a></li>
                                        <li><a href="{{route('about.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('about.edit')}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> Product <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('product.index')}}">Index</a></li>
                                        <li><a href="{{route('product.create')}}">Create</a></li>
                                        <li><a href="{{route('product.trash')}}"><h4 style="color: red">trash</h4>  </a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> Category <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('category.index')}}">Index</a></li>
                                        <li><a href="{{route('category.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('category.show')}}">Create</a></li>--}}
                                        {{--<li><a href="{{route('product.edit')}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i>product By Category <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        @foreach($category_sidebar as $category)
                                            <a class="dropdown-item" href="{{route('product.byCategory',$category->id)}}">{{$category->name}}</a>
                                        @endforeach

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> Project <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('project.index')}}">Index</a></li>
                                        <li><a href="{{route('project.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('project.edit')}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i>project By Category <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        @foreach($category_sidebar as $category)
                                            <a class="dropdown-item" href="{{route('project.byCategory',$category->id)}}">{{$category->name}}</a>
                                        @endforeach

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> service <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('service.index')}}">Index</a></li>
                                        <li><a href="{{route('service.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('service.edit')}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> Technology <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('technology.index')}}">Index</a></li>
                                        <li><a href="{{route('technology.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('technology.edit')}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> News <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('news.index')}}">Index</a></li>
                                        <li><a href="{{route('news.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('news.edit')}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> Contact <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('contact.index')}}">Index</a></li>
                                        <li><a href="{{route('contact.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('contact.edit')}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> Footer <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('footer.index')}}">Index</a></li>
                                        <li><a href="{{route('footer.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('footer.edit')}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> Slider <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('slider.index')}}">Index</a></li>
                                        <li><a href="{{route('slider.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('footer.edit')}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> Topper <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('topper.index')}}">Index</a></li>
                                        <li><a href="{{route('topper.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('topper.edit',$topper->id)}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i>Menu<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('menu.index')}}">Index</a></li>
                                        <li><a href="{{route('menu.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('topper.edit',$topper->id)}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i>SubMenu<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('submenu.index')}}">Index</a></li>
                                        <li><a href="{{route('submenu.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('topper.edit',$topper->id)}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i>logos and fav<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('logo.index')}}">Index</a></li>
                                        <li><a href="{{route('logo.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('topper.edit',$topper->id)}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i>Our Project<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('home_product.index')}}">Index</a></li>
                                        <li><a href="{{route('home_product.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('topper.edit',$topper->id)}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i>Our service<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('home_service.index')}}">Index</a></li>
                                        <li><a href="{{route('home_service.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('topper.edit',$topper->id)}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i> product categoties<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('home_category.index')}}">Index</a></li>
                                        <li><a href="{{route('home_category.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('topper.edit',$topper->id)}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="dripicons-suitcase"></i>Aboute Us <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('home_about.index')}}">Index</a></li>
                                        <li><a href="{{route('home_about.create')}}">Create</a></li>
                                        {{--<li><a href="{{route('topper.edit',$topper->id)}}">Edit</a></li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End navigation menu -->
                </div> <!-- end #navigation -->
            </div> <!-- end container -->
        </div> <!-- end navbar-custom -->
    </header>
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="input-group">
                        {!! Form::open(['route'=>'product.find','method'=>'get','class'=>'d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0']) !!}
                        {!! Form::text('text', null ,['class'=>'form-control','placeholder'=>'Search for...']) !!}
                        {!!Form::button('<i class="fas fa-search"></i>',['type'=>'submit' ,'class'=>'btn btn-primary'])  !!}
                        {!! Form::close() !!}
                    </div>
                    <h4 class="page-title"> <i class="dripicons-box"></i>@yield('pageTitle') </h4>
                </div>
            </div>
        </div>
    </div>
</div>