<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>

                           <div style="width:65px; height: 65px; background-size: contain;background-color: white;background-repeat: no-repeat;border-radius: 50px;background-image: url('/img/admin/userImg.jpg'); "></div>

                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()['name']}}</strong>
                             </span>
                                <span class="text-muted text-xs block"> <b class="caret"></b></span>
                            </span> </a>
                    <ul class="dropdown-menu animated fadeInRight ">
                        <li ><a href="{{route('dashboard')}}" >پروفایل</a></li>
                        {{--<li><a href="contacts.html">Contacts</a></li>--}}
                        {{--<li><a href="mailbox.html">Mailbox</a></li>--}}
                        <li class="divider"></li>
                        <li><a href="{{route('Logout')}}" >خروج</a></li>
                    </ul>
                </div>
                <div class="logo-element">

                </div>
            </li>

            <li  {!! \App\Helper\classActivePath('contact-us-requests') !!}>
                <a href="{{--route('contact.us.requests')--}}"><i class="fa fa-edit"></i> <span class="nav-label">لیست 1</span></a>
            </li>

            <li {!! \App\Helper\classActivePath('customers') !!} {!! \App\Helper\classActivePath('add-customer') !!} {!! \App\Helper\classActivePath('edit-customer') !!}>
                <a href="#"><i class="fa fa-group"></i> <span class="nav-label">لیست ۲</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li {!! \App\Helper\classActivePath('customers') !!} ><a href="{{--route('customers')--}}"> آیتم ۱ </a></li>
                    <li {!! \App\Helper\classActivePath('add-customer') !!}><a href="{{--route('customer.add')--}}"> آیتم ۲</a></li>
                </ul>
            </li>



        </ul>

    </div>
</nav>
