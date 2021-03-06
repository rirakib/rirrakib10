<div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{asset('backend/images/img.jpg')}}" alt="">
                                        {{session()->get('name')}}
                                        
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a></li>
                                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="" class="dropdown-toggle info-number" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-bell"></i>                                    <span class="badge bg-green">{{DB::table('contacts')->count()}}</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    @foreach(DB::table('contacts')->get() as $data)
                                    <li>
                                        <a href="{{route('contact.index')}}">
                                            <span class="image"></span>
                                            <span>
                                                <span>{{$data->name}}</span>
                                                <span class="time">{{$data->created_at}}</span>
                                            </span>
                                            <span class="message">
                                                {{$data->message}}
                                            </span>
                                        </a>
                                    </li>
                                    @endforeach
                                    <li>
                                        <div class="text-center">
                                            <a href="{{route('contact.index')}}">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>