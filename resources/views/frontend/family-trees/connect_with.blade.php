@php
$connectList=[];
$authuser=Auth::user();
/* if(request()->relation_id==16){
	//for brother in law
	$myFamilyTree=App\Models\FamilyTree::where('user_id',$authuser->id)->first();

	if(!empty($myFamilyTree) && !is_null($myFamilyTree->pid)){

		$partnerInfo=App\Models\FamilyTree:find($myFamilyTree->pid);

		if(!empty($partnerInfo) && (!is_null($partnerInfo->fid) || !is_null($partnerInfo->mid)){
			$brotherInLaws=App\Models\FamilyTree::where('gender','male')->where
		}
	}
}
if(request()->relation_id==18){
	//for brother in law

} */


if(request()->relation_id==20){
	//for son's wife
	$myFamilyTree=App\Models\FamilyTree::where('user_id',$authuser->id)->first();

	if(!empty($myFamilyTree)){

		$query=App\Models\FamilyTree::where('gender','male')->whereNull('pid');

		if($myFamilyTree->gender=='male')
			$query->where('fid',$myFamilyTree->id);
		if($myFamilyTree->gender=='female')
			$query->where('mid',$myFamilyTree->id);

		$connectList=$query->get();
	}
}
if(request()->relation_id==22){
	//for daughter husband

	$myFamilyTree=App\Models\FamilyTree::where('user_id',$authuser->id)->first();

	if(!empty($myFamilyTree)){

		$query=App\Models\FamilyTree::where('gender','female')->whereNull('pid');

		if($myFamilyTree->gender=='male')
			$query->where('fid',$myFamilyTree->id);
		if($myFamilyTree->gender=='female')
			$query->where('mid',$myFamilyTree->id);

		$connectList=$query->get();
	}

}
if(request()->relation_id==24 || request()->relation_id==25){
	//grand son and daughter

	$myFamilyTree=App\Models\FamilyTree::where('user_id',$authuser->id)->first();

	if(!empty($myFamilyTree)){

		$query=App\Models\FamilyTree::whereNotNull('pid');

		if($myFamilyTree->gender=='male')
			$query->where('fid',$myFamilyTree->id);
		if($myFamilyTree->gender=='female')
			$query->where('mid',$myFamilyTree->id);

		$connectList=$query->get();
	}
}
/*if(request()->relation_id==25){
	//for grand daughter
}
*/
@endphp
@if(request()->relation_id==20 || request()->relation_id==22 || request()->relation_id==24 ||request()->relation_id==25)

<div class="form_select_common select_common">
	<select class="option-select form-control" name="connect_with" required id="connect_with">
		<option value="">Choose a Connect With</option>
	@foreach($connectList as $key=>$connectInfo)
		<option value="{{$connectInfo->id}}">{{$connectInfo->first_name.' '.$connectInfo->last_name}}</option>
	@endforeach
	</select>
</div>

@endif
