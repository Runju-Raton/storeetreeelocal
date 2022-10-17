<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @yield('title')
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/bootstrap.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/owl.carousel.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/backend/plugins/datepicker/datepicker3.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/backend/plugins/timepicker/bootstrap-timepicker.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/chosen.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/jquery-ui.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/jquery.mCustomScrollbar.css') }}"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/style.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/custom.css') }}"/>

        @yield('header')
    </head>
    <body>
        <div class="modal fade modal-vcenter signIn_commonn" id="termsModal" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="modal_tittle">
                                    <h2>Terms and condition</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>Thanks for checking us out. The idea for StoreeTree started 30 years ago when I took a VHS video camera to
interview my 93 year old Grandmother. She lived an amazing life – born in Europe, fled with her
husband and 18 month old son to the USA at the start of WWll to live the American Dream. And, with
lots of hard work, they DID.</p>

                            <p>She was a unique, spunky, great lady. I remember, every time I saw her I would first ask – how are you
Grandma? She always answered the same: “Of course I am fine – I have a roof over my head, I eat 3
meals a day, and the people I love, still remember me.”</p>
                            <p>There is a beautiful simplicity to this. Something I could not pass down to my kids and future grandkids
in my words – it needed to be her words, her voice and her facial expressions. So that day I recorded
answers to my questions for future generations to enjoy.</p>

                            <p>My dream to pass this opportunity of saving life memories to share with family friends and generations
to come, fueled me to create StoreeTree.</p>
                            <p>StoreeTree is an awesome step by step video platform to capture and share your amazing life memories
and stories. We’re passionate about connecting families, friends and generations to come – your stories
in your words, voice and tone. We believe heritage grounds us and at StoreeTree, MEMORIES LIVE
HERE! Join now and start sharing your story today.</p>
                             <p> That&apos;s my story!</p>
                             <p>Glenn Schischa, Founder of StoreeTree </p>
                            
                            </div>
                        </div>
                       

                    </div>

                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="header">
                <div class="header_bottom">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="nav_section">
                                    <div class="navbar navbar-default navbar-static-top">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed hidden-xs" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                                            </button>
                                            <div class="logo">
                                                <a href="{{ route('home') }}">
                                                    <img src="{{ URL::to('/') }}/images/frontend/logo.png" alt="Logo" />
                                                </a>
                                            </div>
                                            <div class="mobile_menu hidden-lg hidden-md"><a href="#" id="menu__opener"></a></div>
                                            @if(Auth::user())
                                            <div class="view_link_mb hidden-lg hidden-md"><a href="{{ route('view-story') }}">View Story</a></div>
                                            @endif
                                        </div>

                                        <div id="navbar" class="navbar-collapse collapse hideen_nav hidden-sm">
                                            <ul class="nav navbar-nav">
                                                <li><a href="{{ route('create-your-story.step-1') }}">Create your story</a></li>
                                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                                <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                                                <li><a href="{{ route('faqs') }}">FAQ</a></li>
                                                <li><a href="{{ route('contact-us') }}">Contact</a></li>
                                            </ul> 
                                            <ul class="nav navbar-nav navbar-right">
                                                @if($authuser)
                                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                                <li><a href="{{ route('profile') }}">Profile</a></li>
                                                @else
                                                <li><a href="#" data-toggle="modal" data-target="#signin-modal">Login</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#sign-up">Sign Up</a></li>
                                                @endif
                                                @if(Auth::user())
                                                <li class="storee_link"><a href="{{ route('view-story') }}">View Story</a></li>
                                                @endif

                                            </ul> 
                                        </div>   
                                    </div>
                                </div><!--nav_section-->
                            </div>
                        </div>
                    </div>
                </div><!-- end header_bottom-->
            </div>

            <div id="app">
                @yield('content')
            </div>

            <div class="footer">
                <div class="footer_top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-4">
                                <div class="ftr_logo"><a href="{{ route('home') }}"><img src="{{ URL::to('/') }}/images/frontend/logo.png" alt="Logo" /></a></div>
                                <div class="ftr_about">
                                    <p>Memories Live Here</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="ftr_common">
                                    <h3>Quick Links</h3>
                                    <ul>
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                                        <li><a href="{{ route('create-your-story.step-1') }}">Create your story</a></li>
                                        <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                                    </ul>
                                </div><!--ftr_common-->
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="ftr_common">
                                    <h3>Support</h3>
                                    <ul>
                                        <li><a href="{{ route('faqs') }}">FAQ</a></li>
                                        <li><a href="{{ route('contact-us') }}">Contact</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                    </ul>
                                </div><!--ftr_common-->
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2">
                                <div class="ftr_common">
                                    <h3>Follow  Us</h3>
                                    <ul class="social_link">
                                        <li><a href="#"><img src="{{ URL::to('/') }}/images/frontend/social_link_1.png" alt="" /></a></li>
                                        <li><a href="#"><img src="{{ URL::to('/') }}/images/frontend/social_link_2.png" alt="" /></a></li>
                                        <li><a href="#"><img src="{{ URL::to('/') }}/images/frontend/social_link_3.png" alt="" /></a></li>
                                        <li><a href="#"><img src="{{ URL::to('/') }}/images/frontend/social_link_4.png" alt="" /></a></li>
                                    </ul>
                                </div><!--ftr_common-->
                            </div>
                        </div>
                    </div>
                </div><!--footer_top-->
                <div class="footer_bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <p>Copyright © {{ \Carbon\Carbon::now()->year }} storeetree.com. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div><!--footer_bottom-->
            </div><!--footer-->
        </div>

        <div class="sidebar_content hidden" id="sidebar_content">
            <div class="menu-overlay"></div>
            <div class="sidebar_content">
                <a href="#" id="sidebar_hide"></a>
                <div class="sidebar_content_inner">
                    <div class="panner_top normalLogin">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ URL::to('/') }}/images/frontend/logo.png" alt="Logo" /></a>
                        </div>

                    </div><!--normalLogin-->
                    <div class="mobile_menu_section">
                        <div id="navbar" class="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('create-your-story.step-1') }}">Create your story</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                                <li><a href="{{ route('faqs') }}">FAQ</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact</a></li>
                                @if($authuser)
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                <li><a href="{{ route('profile') }}">Profile</a></li>
                                @else
                                <li><a href="#" data-toggle="modal" data-target="#signin-modal">Login</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#sign-up">Sign Up</a></li>
                                @endif
                            </ul> 
                        </div>  
                    </div>
                </div><!--sidebar_content_inner-->
            </div><!--sidebar_content-->
        </div><!--sidebar_content-->

        <div class="modal fade modal-vcenter signIn_common" id="sign-up" role="dialog" style="padding: 0 !important;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close modalFormClose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="modal_tittle">
                                    <h2>SIGN UP</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="modal-block">
                                    <div class="modal-form">
                                        {!! Form::open(['method'=>'POST', 'action'=>'Auth\RegisterController@register', 'onsubmit'=>'return checkRegistrationValid()', 'id'=>'registrationForm']) !!}
                                        <div class="form-group">
                                            {!! Form::text('first_name', null, ['class'=>'form-control', 'placeholder' => 'First Name']) !!}
                                        </div><!--form-group-->

                                        <div class="form-group">
                                            {!! Form::text('last_name', null, ['class'=>'form-control', 'placeholder' => 'Last Name']) !!}
                                        </div><!--form-group-->

                                        <div class="form-group">
                                            <div class="form_select_common select_common">
                                                <select class="option-select" name="gender">
                                                    <option value="">--Select Gender--</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other not identified here">Other not identified here</option>
                                                    <option value="Prefer not to answer">Prefer not to answer</option>
                                                </select>
                                            </div>
                                        </div><!--form-group-->

                                        <div class="form-group">
                                            <div class="form_select_common select_common">
                                            {{--   
                                                {!! Form::select('country_id', [''=>'Choose a Country']+$countries->pluck('title', 'id')->all(), null, ['class'=>'option-select', 'id'=>'country_id']) !!}
                                            --}}
                                                <select class="option-select" id="country_id" name="country_id">
                                                    <option  value="">Choose a Country</option>
                                            @php($countryList=App\Models\Country::orderBy('id','asc')->get())
                                                @foreach($countryList as $key=>$countryInfo)
                                                    <option  value="{{$countryInfo->id}}">{{$countryInfo->title}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div><!--form-group-->
                                        <div class="form-group">
                                            {!! Form::text('postal_code', null, ['class'=>'form-control', 'placeholder' => 'Zip code / Postal Code']) !!}
                                        </div><!--form-group-->
                                        <div class="form-group bootstrap-timepicker">
                                            {!! Form::text('dob', null, ['class'=>'form-control dob_input', 'id' => 'dob', 'placeholder' => 'Date Of Birth (MM/DD/YYYY)', 'autocomplete' => 'off']) !!}
                                        </div><!--form-group-->
                                        <div class="form-group">
                                            <div class="cn_group">
                                                <div class="cn_label">Most connected period to your Childhood :</div>
                                                <div class="form_select_common select_common">
                                                    {!! Form::select('connected_period', [''=>'Which Decade?']+Config::get('constants.CONNECTED_PERIODS'), null, ['class'=>'option-select', 'id'=>'connected_period']) !!}
                                                </div>
                                            </div>
                                        </div><!--form-group-->
                                        <div class="form-group">
                                            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder' => 'Email']) !!}
                                        </div><!--form-group-->

                                        <div class="form-group">
                                            {!! Form::password('password', ['class'=>'form-control', 'placeholder' => 'Password']) !!}
                                        </div><!--form-group-->
                                        <div class="form-group">
                                            {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder' => 'Confirm Password']) !!}
                                        </div><!--form-group-->

                                        <div class="form-group">
                                            <div class="av_check">
                                                <input name="terms" id="ct1_3" type="checkbox">
                                                <label for="ct1_3">I Agree with <a href="#" data-toggle="modal" data-target="#termsModal" data-dismiss="modal">Terms & Conditions</a>.</label>
                                                {{-- <a onclick="companyStoryModal()" href="#"    >Read More</a> --}}
                                            </div>
                                        </div><!--form-group-->
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn_signup modalFormClose" value="SIGN UP">
                                        </div><!--form-group-->
                                        {!! Form::close() !!}
                                    </div><!--end modal-left-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="mdl_footer">
                                    <h3>Already have an account? <a href="#" data-toggle="modal" data-target="#signin-modal" data-dismiss="modal" class="modalFormClose">Sign In</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--sign up modal end -->


        <!--sign in modal start-->

        <div class="modal fade modal-vcenter signIn_common" id="signin-modal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close modalFormClose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="modal_tittle">
                                    <h2>Login</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="modal-block">
                                    <div class="modal-form">
                                        {!! Form::open(['method'=>'POST', 'action'=>'Auth\LoginController@login', 'onsubmit'=>'return checkLoginValid()', 'id' => 'loginForm']) !!}

                                        <div class="form-group">
                                            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder' => 'Email', 'id'=>'email']) !!}
                                        </div><!--form-group-->

                                        <div class="form-group">
                                            {!! Form::password('password', ['class'=>'form-control', 'placeholder' => 'Password', 'id'=>'password']) !!}
                                        </div><!--form-group-->

                                        <div class="form-group">
                                            <div class="av_check">
                                                <h4><a href="#" data-toggle="modal" data-target="#forgot-password" data-dismiss="modal" class="modalFormClose">Forgot Password ?</a></h4>
                                            </div>
                                        </div><!--form-group-->
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn_signup" value="LOGIN">
                                        </div><!--form-group-->

                                        {!! Form::close() !!}
                                    </div><!--end modal-left-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="mdl_footer">
                                    <h3>Dont have an account? <a href="#" data-toggle="modal" data-target="#sign-up" data-dismiss="modal" class="modalFormClose">Sign Up</a></h3>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!--sign in modal end -->


        <div class="modal fade modal-vcenter signIn_common" id="forgot-password" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="modal_tittle">
                                    <h2>FORGOT PASSWORD?</h2>
                                    <h3>Enter your email address and we will send you a link to reset your password.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="modal-block">
                                    <div class="modal-form">
                                        <form action="#" method="post">                                            
                                            <div class="form-group">
                                                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder' => 'Email']) !!}
                                            </div><!--form-group-->                                           

                                            <div class="form-group">
                                                <input type="button" class="btn btn-primary btn_signup" value="EMAIL RESET LINK">
                                            </div><!--form-group-->

                                            {!! Form::close() !!}
                                            {{-- <div class="or">OR Login With</div> --}}
                                    </div><!--end modal-left-->

                                    {{-- <div class="modal-social_login">
                                        <ul>
                                            <li><a href="#"><img src="{{ URL::to('/') }}/images/frontend/sn_fb.png" alt="" /></a></li>
                                            <li><a href="#"><img src="{{ URL::to('/') }}/images/frontend/cn_google.png" alt="" /></a></li>
                                        </ul>
                                    </div><!--end social_login--> --}}
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="mdl_footer">
                                    <h3>Not Registered <a href="#" data-toggle="modal" data-target="#sign-up" data-dismiss="modal" class="modalFormClose">Create a new account</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--forgot password modal end -->

        @include('sweetalert::alert')
        <script type="text/javascript" src="{{ asset('js/frontend/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/frontend/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/frontend/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/frontend/chosen.jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/backend/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/backend/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/frontend/grids.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/frontend/masonry.pkgd.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/frontend/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/frontend/slick.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/frontend/custom.js') }}"></script>
        <script type="text/javascript">
            $('#dob').datepicker({
                autoclose: true,
                format: 'mm/dd/yyyy',
                keyBinds: {
                    enter: function(){
                        alert('123')
                        if(this.date() === null) {
                            this.date(moment());    // moment() is similar to new Date()
                        }
                        this.hide();
                    }
                },
                useCurrent: false
            });

            function checkRegistrationValid() {
                $('.form-group span.error').remove();
                var form_data = new FormData($("#registrationForm")[0]);
                $.ajax({
                    type: "POST",
                    data: form_data,
                    processData: false,
                    contentType: false,
                    url: "{{ route('register') }}",
                    success: function (response) {
                        $('.form-group span.error').remove();
                        location.reload();
                    },
                    error: function (data) {
                        $('.form-group span.error').remove();
                        if (data.status == 422) {
                            var errors = data.responseJSON;
                            console.log(errors.errors)
                            $.each(errors.errors, function (i, error) {
                                var el = $(document).find('[name="' + i + '"]');
                                el.after($('<span class="error" style="color: red;">' + error[0] + '</span>'));
                            });
                        }
                    }
                });
                return false;
            }

            function checkLoginValid() {
                $('.form-group span.error').remove();
                var form_data = new FormData($("#loginForm")[0]);
                $.ajax({
                    type: "POST",
                    data: form_data,
                    processData: false,
                    contentType: false,
                    url: "{{ route('login') }}",
                    success: function (response) {
                        $('.form-group span.error').remove();
                        if (response.status == 'invalid') {
                            var el = $(document).find('[name="email"]');
                            el.after($('<span class="error" style="color: red;">' + response.errors + '</span>'));
                        } else {
                            location.reload();
                        }
                    },
                    error: function (data) {
                        $('.form-group span.error').remove();
                        if (data.status == 422) {
                            var errors = data.responseJSON;
                            console.log(errors.errors)
                            $.each(errors.errors, function (i, error) {
                                var el = $(document).find('[name="' + i + '"]');
                                el.after($('<span class="error" style="color: red;">' + error[0] + '</span>'));
                            });
                        }
                    }
                });
                return false;
            }
            jQuery('.modal').on('shown.bs.modal', function (e) {
                jQuery("html").addClass("modal-open");
            });
            jQuery('.modal').on('hide.bs.modal', function (e) {
                jQuery("html").removeClass("modal-open");
            });
            $('.modalFormClose').on('click',function(){
                $('.error').remove();
                $('body').attr('style','padding-right: 0 !important;');
                $('#email').val('')
                $('#password').val('')
            });
            // $("#dob").datetimepicker({
                
            // });
        </script>
        @yield('scripts')
    </body>
</html>