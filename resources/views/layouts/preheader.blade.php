 <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@keenthemes.com</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                      <!-- Right Side Of Navbar -->
                    <ul class="list-unstyled list-inline pull-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="extra_profile.html">
                                        <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="page_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html">
                                        <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
                                        3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_todo.html">
                                        <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
                                        7 </span>
                                        </a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>