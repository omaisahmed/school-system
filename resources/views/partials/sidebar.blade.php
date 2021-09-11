 <!-- ========== Left Sidebar Start ========== -->
 <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="/" class="logo"><h1 style="color: white;font-size: 17px;">School Management System</h1></a>
                        <!-- <a href="index.html" class="logo">
                            <img src="assets/images/logo-lg.png" alt="" class="logo-large">
                        </a> -->
                    </div>
                </div>

                <div class="sidebar-inner niceScrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            
                            <li>
                                <a href="/dashboard" class="waves-effect">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Dashboard</span>
                                </a>
                            </li>


                            <li>
                                <a href="/users" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span> Users </span></a>
                            </li>

                            <li>
                                <a href="/teachers" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span> Teachers </span></a>
                            </li>

                            <li>
                                <a href="/classes" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span> Classes </span></a>
                            </li>

                            <li>
                                <a href="/subjects" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span> Subjects </span></a>
                            </li>

                            <!-- Authentication -->
                            <li class="py-3" style="margin-left: 35px;">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="waves-effect" onclick="event.preventDefault();this.closest('form').submit();"><i class="mdi mdi-logout"></i><span> {{ __('Log Out') }} </span></a>
                            </form>
                            </li>


                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->