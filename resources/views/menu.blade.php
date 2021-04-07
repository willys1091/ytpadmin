<nav id="sidebar" aria-label="Main Navigation">
    <div class="content-header bg-white-5">
        <a class="font-w600 text-dual" href="{{url('/')}}">
            <span class="smini-visible"><i class="fa fa-circle-notch text-primary"></i></span>
            <span class="smini-hide font-size-h5 tracking-wider">Tangan <span class="font-w400">Pengharapan</span></span>
        </a>
    </div>
    <div class="js-sidebar-scroll">
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='dashboard'?"active":""}}"
                        href="{{url('dashboard')}}">
                        <i class="nav-main-link-icon fal fa-chart-area"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
               
                <li class="nav-main-item {{request::segment(1)=='chairity'||request::segment(1)=='postcategory'||request::segment(1)=='destination'?'open':''}}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fal fa-truck"></i><span class="nav-main-link-name">Attribute</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request::segment(1)=='chairity'?"active":""}}" href="{{url('chairity')}}">
                                <span class="nav-main-link-name">Chairity</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request::segment(1)=='postcategory'?"active":""}}" href="{{url('postcategory')}}">
                                <span class="nav-main-link-name">Post Category</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='post'?"active":""}}" href="{{url('post')}}">
                        <i class="nav-main-link-icon fal fa-photo-video"></i>
                        <span class="nav-main-link-name">Post</span>
                    </a>
                </li>

                <li class="nav-main-heading">Gallery</li>
                
                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='about'?"active":""}}" href="{{url('about')}}">
                        <i class="nav-main-link-icon fal fa-address-card"></i>
                        <span class="nav-main-link-name">About</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='flc'?"active":""}}" href="{{url('flc')}}">
                        <i class="nav-main-link-icon fal fa-graduation-cap"></i>
                        <span class="nav-main-link-name">FLC</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='event'?"active":""}}" href="{{url('event')}}">
                        <i class="nav-main-link-icon fal fa-calendar-alt"></i>
                        <span class="nav-main-link-name">Event</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='program'?"active":""}}" href="{{url('program')}}">
                        <i class="nav-main-link-icon fal fa-tasks"></i>
                        <span class="nav-main-link-name">Program</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='partner'?"active":""}}" href="{{url('partner')}}">
                        <i class="nav-main-link-icon fal fa-handshake"></i>
                        <span class="nav-main-link-name">Partner</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='bulletin'?"active":""}}" href="{{url('bulletin')}}">
                        <i class="nav-main-link-icon fal fa-newspaper"></i>
                        <span class="nav-main-link-name">Bulletin</span>
                    </a>
                </li>

                <li class="nav-main-heading">System</li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='people'?"active":""}}" href="{{url('people')}}">
                        <i class="nav-main-link-icon fal fa-user"></i>
                        <span class="nav-main-link-name">Admin</span>
                    </a>
                </li>
                
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{url('logout')}}">
                        <i class="nav-main-link-icon  fal fa-sign-out-alt"></i>
                        <span class="nav-main-link-name">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>