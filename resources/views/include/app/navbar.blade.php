
<style>
    @media (max-width: 940px) {
       #nav-home {
           padding-top: 10px;
           margin-top: 10px;
       }
    }
</style>
<div class="app-header">
    <div class="mobile-header-overlay"></div>
{{--    <div class="topnav">--}}
{{--        <div class="topnav--center">--}}
{{--            <div class="pull-left">--}}
{{--                <a class="leeds--link" href="tel:0113 398 4199">تلفن: <span></span></a>--}}
{{--                <a class="email--link" href="mailto:info[at]asarad.ir"> <span></span>:ایمیل</a>--}}
{{--            </div>--}}
{{--            <div class="pull-right">--}}
{{--                <a href="">فرصت های شغلی</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <header>
        <a href="{{url('/')}}" class="logo" style="margin: auto;">
{{--            <img src="" alt="">--}}
        </a>
{{--        <nav>--}}

{{--            <span>--}}
{{--<a class="nav-link" href="{{ route('home') }}" id="nav-home">خانه</a>--}}
{{--</span>--}}
{{--            <span>--}}
{{--                 <div class="dropdown" >--}}
{{--                    <a href="{{route('services_page')}}" class="nav-link dropbtn"  >خدمات</a>--}}
{{--                    <div class="dropdown-content navigation-dropdown" >--}}
{{--                        <ul class="navigation-dropdown_list" style="padding-bottom: 0!important;">--}}
{{--                            @foreach(\App\Helper\companyServices() as $i=>$service)--}}
{{--                            <li style="padding:5px  0;margin: -15px 0;line-height:100%;display: block;">--}}
{{--                                <a href="{{route('service_info', $service['slog'])}}" style="margin: 0;" data-ordinal="0" aria-label="{{$service['aria_label']}}" class="">{{$service['title']}}</a>--}}
{{--                                <p class="desc{{$i}}">{!! strip_tags(\Illuminate\Support\Str::limit($service->description, 300, '...')) !!}</p>--}}
{{--                            </li>--}}
{{--                             @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </span>--}}

{{--            --}}{{--<span class="dropdown">--}}
{{--<a class="anav-link " id="dropdown" href="{{url('services')}}">سرویس ها</a>--}}
{{--                --}}{{--<div class="navigation-dropdown" id="navigation-dropdown">--}}

{{--                    --}}{{--<ul class="navigation-dropdown_list">--}}
{{--                        --}}{{--<li><a href="{{route('web_applications')}}" data-ordinal="0" class="">Web Applications</a></li>--}}
{{--                        --}}{{--<li><a href="{{route('tablet_applications')}}" data-ordinal="1" class="">Tablet Applications</a></li>--}}
{{--                        --}}{{--<li><a href="{{route('mobile_applications')}}" data-ordinal="2" class="">Mobile Applications</a></li>--}}
{{--                        --}}{{--<li><a href="{{route('systems_integration')}}" data-ordinal="4" class="">Systems Integration</a></li>--}}
{{--                        --}}{{--<li><a href="{{route('analysis_poc')}}" data-ordinal="5" class="">Analysis/PoC</a></li>--}}
{{--                    --}}{{--</ul>--}}
{{--                    --}}{{--<div class="navigation-dropdown_content">--}}
{{--                        --}}{{--<p>User friendly and powerful bespoke web applications that improve the scalability and efficiency of your organisation.</p>--}}
{{--                        --}}{{--<p>Reliable and robust tablet applications that streamline processes and enable greater collaboration, visibility and decision making.</p>--}}
{{--                        --}}{{--<p>Intuitive mobile applications integrated with core business systems that support fast and easy access to data and business procedures.</p>--}}
{{--                        --}}{{--<p>Immersive experiences to deliver greater business value through engaging interactions and optimised workflows.</p>--}}
{{--                        --}}{{--<p>Integrating business systems to increase productivity and mitigate risk by ensuring that your systems operate as a single framework.</p>--}}
{{--                        --}}{{--<p>Delivering clear, technical roadmaps and proof of concepts to support decision making around business strategies.</p>--}}
{{--                    --}}{{--</div>--}}
{{--                --}}{{--</div>--}}
{{--</span>--}}


{{--            <span>--}}
{{--<a class="anav-link" href="{{route('projects_page')}}">پروژه ها</a>--}}
{{--</span>--}}
{{--            <span>--}}
{{--<a class="anav-link" href="{{route('approach_page')}}">دیدگاه</a>--}}
{{--</span>--}}
{{--            <span>--}}
{{--<a class="anav-link" href="{{route('about_us_page')}}">درباره ما</a>--}}
{{--</span>--}}
{{--            <span>--}}
{{--<a class="anav-link" href="{{route('blog_page')}}">وبلاگ</a>--}}
{{--</span>--}}
{{--            <span>--}}
{{--<a class="anav-link" href="{{route('contact_us_page')}}">ارتباط با ما</a>--}}
{{--</span>--}}
{{--            <span class="mobile-careers">--}}
{{--<a href="{{route('careers_page')}}"> فرصت های شغلی</a>--}}
{{--</span>--}}
{{--            <span>--}}
{{--<a class="discus-button" id="review-project-nav-link" href="{{route('contact_us_page')}}#discuss-your-project">در مورد پروژه خود با ما صحبت کنید</a>--}}
{{--</span>--}}

{{--        </nav>--}}
        <span>
{{--<a class="discus-mobile-button" href="{{route('contact_us_page')}}#discuss-your-project">در مورد پروژه خود با ما صحبت کنید</a>--}}
</span>
    </header>
{{--    <div class="mobile-header">--}}
{{--        <a class="logo" href="{{route('home')}}">--}}
{{--            <img src="/img/app/main/logo.png" alt="Asarad Logo">--}}
{{--        </a>--}}
{{--        <div class="menuicon">--}}
{{--            <span></span><span></span><span></span>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
