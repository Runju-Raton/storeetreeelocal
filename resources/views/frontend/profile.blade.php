@extends('frontend.layouts.app')

@section('title')
<title>Storee Tree: My Profile</title>
@endsection

@section('content')
@php($userInfo=App\Models\User::find($authuser->id))
<div class="banner_subpage" style="background-image:url({{ URL::to('/') }}/images/frontend/subpage_bg_1.jpg)">
    <h1>Profile</h1>
</div><!--subpage_banner-->

<div class="content_area cn_gap_top">
        <div class="blog_list_section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="blog_filter_section">
                            {{-- <div class="pr_back_btn"></div> --}}
                            
                        </div><!--blog_filter_section-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pr_tittle">Member Information :</div>
                        <div class="pr_row">
                            <div class="d-flex">
                                <div class="pr_photo" style="border-radius: 0; margin: 0;">
                                    <img src="{{ URL::to('/') }}/images/frontend/{{ Auth::user()->gender=='male'?'photo_male.png':'photo_female.png'}}" alt="" style="border-radius: 50%;"/>
                                </div>
                                <div>
                                     <button  style="float: right; border-radius: 60px;   border: 1px solid #133c7e; box-shadow: none;outline: 0;height: 48px;line-height: 48px;padding: 0px 30px 0px 30px;color: #fff;font-size: 18px;font-weight: 600; text-transform: uppercase;background-color: #133c7e;  margin-right0px;"><a href="{{ route('family-trees') }}" style="color: #fff;">Show Your Family</a></button>
                                </div>
                            </div><!--pr_photo-->
                        </div><!--pr_photo-->
                        <div class="profile_content_row" id="profileView">
                                <ul>
                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Full Name :</div>
                                            <div class="profile_rt_con">
                                                {{ $authuser->full_name }}
                                               
                                                    <button  style="float: right; border-radius: 60px;   border: 1px solid #133c7e; box-shadow: none;outline: 0;height: 48px;line-height: 48px;padding: 0px 30px 0px 30px;color: #fff;font-size: 18px;font-weight: 600; text-transform: uppercase;background-color: #133c7e;  margin-right0px;" onclick="openEditForm()">Edit</button>
                                               
                                            </div>
                                            
                                        </div>
                                    </li>
                                    
                            @php($familyTreeInfo=App\Models\FamilyTree::where('user_id',$authuser->id)->first())
                                         <li class="pr_sub_content">
                                          <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr sb_tittle">Father:</div>
                                                <div class="profile_rt_con">
                                                    <a href="#">{{(!is_null($familyTreeInfo->fatherInfo))? $familyTreeInfo->fatherInfo->full_name:''}}</a>  
                                                </div>
                                            </div>
                                          </li>
                                          <li class="pr_sub_content">
                                          <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr sb_tittle">Mother:</div>
                                                <div class="profile_rt_con">
                                                    <a href="#">{{(!is_null($familyTreeInfo->motherInfo))? $familyTreeInfo->motherInfo->full_name:''}}</a>  
                                                </div>
                                            </div>
                                          </li>
                                          <li class="pr_sub_content">
                                          <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr sb_tittle">Partner:</div>
                                                <div class="profile_rt_con">
                                                         <a href="#">{{(!is_null($familyTreeInfo->partnerInfo))? $familyTreeInfo->partnerInfo->full_name:''}}</a>  
                                                </div>
                                            </div>
                                          </li>
                                                           

                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">First Name :</div>
                                            <div class="profile_rt_con">
                                                {{$userInfo->first_name}}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Last Name</div>
                                            <div class="profile_rt_con">
                                                {{$userInfo->last_name}}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Gender</div>
                                            <div class="profile_rt_con">
                                               {{$userInfo->gender}}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Country</div>
                                            <div class="profile_rt_con">
                                                 {{$userInfo->country['title']}}
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr"> Postal Code</div>
                                            <div class="profile_rt_con">
                                                {{$userInfo->postal_code}}
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Date Of Birth</div>
                                            <div class="profile_rt_con">
                                                {{date_format(date_create($userInfo->dob),'m-d-Y')}}
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Connected Period</div>
                                            <div class="profile_rt_con">
                                                {{Config::get('constants.CONNECTED_PERIODS')[$userInfo->connected_period]}}
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Email</div>
                                            <div class="profile_rt_con">
                                                {{$userInfo->email}}
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="profile_content_row" id="editForm">
                            <form action="{{route('profile.update')}}" method="post">
                            @csrf
                                <ul>
                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Full Nmae :</div>
                                            <div class="profile_rt_con">
                                                {{ $authuser->full_name }}

                                                <a href="#" class="btn btn-sm" style="float: right; border-radius: 60px;   border: 1px solid #133c7e; box-shadow: none;outline: 0;height: 48px;line-height: 48px;padding: 0px 30px 0px 30px;color: #fff;font-size: 18px;font-weight: 600; text-transform: uppercase;background-color: #133c7e; " onclick="closeEditForm()">Close</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- <li class="pr_sub_content">
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr sb_tittle">Spouse :</div>
                                            <div class="profile_rt_con"><a href="#">Lorem Ipsum</a></div>
                                        </div>
                                    </li>
                                    <li class="pr_sub_content">
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr sb_tittle">Parents :</div>
                                            <div class="profile_rt_con">
                                                <a href="#">Lorem Ipsum</a> 
                                                <a href="#">Lorem Ipsum</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr_sub_content">
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr sb_tittle">Siblings :</div>
                                            <div class="profile_rt_con">
                                                <a href="#">Lorem Ipsum</a> 
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr_sub_content">
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr sb_tittle">Children :</div>
                                            <div class="profile_rt_con">
                                                <a href="#">Lorem Ipsum</a> 
                                                <a href="#">Lorem Ipsum</a> 
                                                <a href="#">Lorem Ipsum</a> 
                                            </div>
                                        </div>
                                    </li> -->
                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">First Name :</div>
                                            <div class="profile_rt_con">
                                                <input type="text" name="first_name" value="{{$userInfo->first_name}}" class="form-control" required>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Last Name</div>
                                            <div class="profile_rt_con">
                                                <input type="text" name="last_name" value="{{$userInfo->last_name}}" class="form-control" required>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Gender</div>
                                            <div class="profile_rt_con">
                                               <div class="form_select_common select_common">

                                                    <select class="option-select" name="gender" required>
                                                       <option value="">--Select Gender--</option>
                                                       <option value="Male" {{($userInfo->gender=='male')?'selected':''}}>Male</option>
                                                       <option value="Male" {{($userInfo->gender=='female')?'selected':''}}>Female</option>
                                                       <option value="Other not identified here" {{($userInfo->gender=='Other not identified here')?'selected':''}}>Other not identified here</option>
                                                        <option value="Prefer not to answer" {{($userInfo->gender=='Prefer not to answer')?'selected':''}}>Prefer not to answer</option>
                                                   </select>
                                               </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Country</div>
                                            <div class="profile_rt_con">
                                                 <div class="form_select_common select_common">

                                                    <select class="option-select" id="country_id" name="country_id">
                                                        <option  value="">Choose a Country</option>
                                                    @php($countryList=App\Models\Country::orderBy('id','asc')->get())
                                                        @foreach($countryList as $key=>$countryInfo)
                                                            <option  value="{{$countryInfo->id}}" {{($countryInfo->id==$userInfo->country_id)? 'selected':''}}>{{$countryInfo->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr"> Postal Code</div>
                                            <div class="profile_rt_con">
                                                <input type="text" name="postal_code" value="{{$userInfo->postal_code}}" class="form-control" required placeholder="ZIP Code/ Postal Code">
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Date Of Birth</div>
                                            <div class="profile_rt_con">
                                                <input type="date" name="dob" value="{{$userInfo->dob}}" class="form-control" required>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Connected Period</div>
                                            <div class="profile_rt_con">
                                                <div class="cn_group">
                                                <div class="form_select_common select_common">
                                                    {!! Form::select('connected_period', [''=>'Which Decade?']+Config::get('constants.CONNECTED_PERIODS'), $userInfo->connected_period, ['class'=>'option-select', 'id'=>'connected_period']) !!}
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr">Email</div>
                                            <div class="profile_rt_con">
                                                <input type="email" name="email" value="{{$userInfo->email}}" class="form-control" required>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profile_col_1">
                                            <div class="profile_left_tittle_pr"></div>
                                            <div class="profile_rt_con profile_rt_con_right_float d-flex  flex-row-reverse">
                                                <button class="btn btn-info btn-sm" type="submit">Update</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div><!--profile_content_row-->
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pr_tittle">Video :</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="profile_video_single">
                            <div class="embed-responsive embed-responsive-16by9">
                                <video width="100%" height="100%" controls>
                                    <source src="{{ URL::to('/') }}/images/frontend/Finger_Tap_Single_Videvo.mov" type="video/mp4">
                                </video>
                            </div>
                        </div><!--profile_video_single-->
                    </div>
                </div>
            </div>
        </div><!--blog_section-->
    </div><!--content-->

@endsection


@section('scripts')
<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>
<link rel="stylesheet" href="{{ config('sweetalert.animatecss') }}">
<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>

<script type="text/javascript">
$("#profileView").show();
$("#editForm").hide();
function openEditForm() {
   $("#editForm").show();
   $("#profileView").hide();
}
function closeEditForm() {
   $("#editForm").hide();
   $("#profileView").show();
}
@if(Session::has('errMsg'))
 Swal.fire({{Session::get('errMsg')}});
@endif
</script>
@endsection