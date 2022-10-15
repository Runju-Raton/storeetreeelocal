<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Models\Relation;
use App\Models\FamilyTree;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use URL;
use DB;

class FamilyTreeController extends BaseController
{
    public function __construct() {
        parent::__construct();
    }
    /**
     * Display the blogs page of the site
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        // $user = auth()->user();
        // $family_trees = FamilyTree::where('user_id', $user->id)->orderBy('relation_id', 'ASC')->get();
        // $paternal_grand_parents = [];
        // $paternal_grand_parents_in_laws = [];
        // $maternal_grand_parents = [];
        // $maternal_grand_parents_in_laws = [];
        // $father = NULL;
        // $mother = NULL;
        // $father_in_laws = NULL;
        // $mother_in_laws = NULL;
        // $wife = NULL;
        // $self = NULL;
        // $friends = [];
        // $siblings = [];
        // $siblings_in_laws = [];
        // $sons = [];
        // $single_sons = [];
        // $daughters = [];
        // $single_daughters = [];
         
        // foreach($family_trees as $family_tree) {
        //     if($family_tree->relation_id == 1) {
        //         $paternal_grand_parents[] = $family_tree;
        //     } elseif($family_tree->relation_id == 2) {
        //         $paternal_grand_parents[] = $family_tree;
        //     } elseif($family_tree->relation_id == 3) {
        //         $maternal_grand_parents[] = $family_tree;
        //     } elseif($family_tree->relation_id == 4) {
        //         $maternal_grand_parents[] = $family_tree;
        //     } elseif($family_tree->relation_id == 5) {
        //         $paternal_grand_parents_in_laws[] = $family_tree;
        //     } elseif($family_tree->relation_id == 6) {
        //         $paternal_grand_parents_in_laws[] = $family_tree;
        //     } elseif($family_tree->relation_id == 7) {
        //         $maternal_grand_parents_in_laws[] = $family_tree;
        //     } elseif($family_tree->relation_id == 8) {
        //         $maternal_grand_parents_in_laws[] = $family_tree;
        //     } elseif($family_tree->relation_id == 9) {
        //         $father = $family_tree;
        //     } elseif($family_tree->relation_id == 11) {
        //         $mother = $family_tree;
        //     } elseif($family_tree->relation_id == 10) {
        //         $father_in_laws = $family_tree;
        //     } elseif($family_tree->relation_id == 12) {
        //         $mother_in_laws = $family_tree;
        //     } elseif($family_tree->relation_id == 13) {
        //         $self = $family_tree;
        //     } elseif($family_tree->relation_id == 14) {
        //         $wife = $family_tree;
        //     } elseif($family_tree->relation_id == 15) {
        //         $siblings[] = $family_tree;
        //     } elseif($family_tree->relation_id == 17) {
        //         $siblings[] = $family_tree;
        //     } elseif($family_tree->relation_id == 16) {
        //         $siblings_in_laws[] = $family_tree;
        //     } elseif($family_tree->relation_id == 18) {
        //         $siblings_in_laws[] = $family_tree;
        //     } elseif($family_tree->relation_id == 19) {
        //         $spouse = $family_tree->spouse;
        //         if($spouse) {
        //             $sons[$family_tree->id][] = $family_tree;
        //             $sons[$family_tree->id][] = $spouse;
        //         } else {
        //             $single_sons[] = $family_tree;
        //         }
        //     } elseif($family_tree->relation_id == 20) {
        //         //$sons[] = $family_tree;
        //     } elseif($family_tree->relation_id == 21) {
        //         $spouse = $family_tree->spouse;
        //         if($spouse) {
        //             $daughters[$family_tree->id][] = $family_tree;
        //             $daughters[$family_tree->id][] = $spouse;
        //         } else {
        //             $single_daughters[] = $family_tree;
        //         }
        //     } elseif($family_tree->relation_id == 22) {
        //         //$daughters[] = $family_tree;
        //     } elseif($family_tree->relation_id == 24) {
        //         //$grand_childrens[] = $family_tree;
        //     } elseif($family_tree->relation_id == 25) {
        //         //$grand_childrens[] = $family_tree;
        //     } else {
        //         $friends[] = $family_tree;
        //     }
        // }
        
        // $relations = Config::get('constants.RELATIONS');

        // if(count($family_trees) == 1) {
        //     foreach($relations as $key=>$relation) {
        //         if(in_array($key, [9, 11, 14])) {

        //         } else {
        //             unset($relations[$key]);
        //         }
        //     }
        // }

        // if(!$family_trees->where('relation_id', 14)->first()) {
        //     unset($relations[5]);
        //     unset($relations[6]);
        //     unset($relations[7]);
        //     unset($relations[8]);
        //     unset($relations[10]);
        //     unset($relations[12]);
        //     unset($relations[16]);
        //     unset($relations[18]);
        // } else {
        //     unset($relations[14]);
        // }

        // $removedes = FamilyTree::where('user_id', $user->id)->whereIn('relation_id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14])->get();

        // foreach ($removedes as $removed) {
        //     unset($relations[$removed->relation_id]);
        // }

        // $removedes = FamilyTree::where('user_id', $user->id)->whereIn('relation_id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14])->get();

        // foreach ($removedes as $removed) {
        //     unset($relations[$removed->relation_id]);
        // }

        // if(!FamilyTree::where('user_id', $user->id)->whereIn('relation_id', [19, 21])->count()) {
        //     unset($relations[20]);
        //     unset($relations[22]);
        //     unset($relations[24]);
        //     unset($relations[25]);
        // }

        // if(!FamilyTree::where('user_id', $user->id)->whereIn('relation_id', [10, 12])->count()) {
        //     unset($relations[16]);
        //     unset($relations[18]);
        // }

        // if(!FamilyTree::where('user_id', $user->id)->where('relation_id', 10)->count()) {
        //     unset($relations[5]);
        //     unset($relations[6]);
        // }

        // if(!FamilyTree::where('user_id', $user->id)->where('relation_id', 12)->count()) {
        //     unset($relations[7]);
        //     unset($relations[8]);
        // }

        // if(!FamilyTree::where('user_id', $user->id)->whereIn('relation_id', [9, 11])->count()) {
        //     unset($relations[15]);
        //     unset($relations[17]);
        // }

        // if(!FamilyTree::where('user_id', $user->id)->where('relation_id', 9)->count()) {
        //     unset($relations[1]);
        //     unset($relations[2]);
        // }

        // if(!FamilyTree::where('user_id', $user->id)->where('relation_id', 11)->count()) {
        //     unset($relations[3]);
        //     unset($relations[4]);
        // }

        // $sons_relations = FamilyTree::where('user_id', $user->id)->where('relation_id', 19)->get();

        // $daughter_relations = FamilyTree::where('user_id', $user->id)->where('relation_id', 21)->get();
        // $children_relations = FamilyTree::where('user_id', $user->id)->whereIn('relation_id', [19, 21])->get();
        
        // // return view('frontend.family-trees.new_index', compact('family_trees', 'paternal_grand_parents', 'paternal_grand_parents_in_laws', 'maternal_grand_parents', 'maternal_grand_parents_in_laws', 'father', 'father_in_laws', 'mother', 'mother_in_laws', 'self', 'wife', 'friends', 'siblings', 'siblings_in_laws', 'sons', 'daughters', 'relations', 'daughter_relations', 'sons_relations', 'single_sons', 'single_daughters', 'children_relations'));

        // return view('frontend.family-trees.vue_family_tree', compact('family_trees', 'paternal_grand_parents', 'paternal_grand_parents_in_laws', 'maternal_grand_parents', 'maternal_grand_parents_in_laws', 'father', 'father_in_laws', 'mother', 'mother_in_laws', 'self', 'wife', 'friends', 'siblings', 'siblings_in_laws', 'sons', 'daughters', 'relations', 'daughter_relations', 'sons_relations', 'single_sons', 'single_daughters', 'children_relations'));


        $currentUser=FamilyTree::where('user_id',auth()->user()->id)->first();

        $datas=[];

        if (!empty($currentUser)) {
                $data=[
                    'id'=>$currentUser->id,
                    'name'=>$currentUser->first_name.' '.$currentUser->last_name,
                    'gender'=>$currentUser->gender,
                    'img'=>($currentUser->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                    // 'pid'=>(!is_null($currentUser->pid)) ? [$currentUser->pid]:[],
                    // 'fid'=>$currentUser->fid,
                    // 'mid'=>$currentUser->mid,
                ];

                (!is_null($currentUser->pid)) ? $data['pids']=[$currentUser->pid]:'';
                (!is_null($currentUser->fid)) ? $data['fid']=$currentUser->fid:'';
                (!is_null($currentUser->mid)) ? $data['mid']=$currentUser->mid:'';

                array_push($datas,$data);

                // dd($currentUser->childInfosForFather()());
                if(!is_null($currentUser->fatherInfo)){

                        $data=[
                                'id'=>$currentUser->fatherInfo->id,
                                'name'=>$currentUser->fatherInfo->first_name.' '.$currentUser->fatherInfo->last_name,
                                'gender'=>$currentUser->fatherInfo->gender,
                                'img'=>($currentUser->fatherInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                // 'pid'=>(!is_null($currentUser->fatherInfo->pid)) ? [$currentUser->fatherInfo->pid]:[],
                                // 'fid'=>$currentUser->fatherInfo->fid,
                                // 'mid'=>$currentUser->fatherInfo->mid,
                            ];

                        (!is_null($currentUser->fatherInfo->pid)) ? $data['pids']=[$currentUser->fatherInfo->pid]:'';
                        (!is_null($currentUser->fatherInfo->fid)) ? $data['fid']=$currentUser->fatherInfo->fid:'';
                        (!is_null($currentUser->fatherInfo->mid)) ? $data['mid']=$currentUser->fatherInfo->mid:'';

                        array_push($datas, $data);

                        if(!is_null($currentUser->fatherInfo->fatherInfo)){
                                 $data=[
                                    'id'=>$currentUser->fatherInfo->fatherInfo->id,
                                    'name'=>$currentUser->fatherInfo->fatherInfo->first_name.' '.$currentUser->fatherInfo->fatherInfo->last_name,
                                    'gender'=>$currentUser->fatherInfo->fatherInfo->gender,
                                    'img'=>($currentUser->fatherInfo->fatherInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                    // 'pid'=>(!is_null($currentUser->fatherInfo->fatherInfo->pid)) ? [$currentUser->fatherInfo->fatherInfo->pid]:[],
                                    // 'fid'=>$currentUser->fatherInfo->fatherInfo->fid,
                                    // 'mid'=>$currentUser->fatherInfo->fatherInfo->mid,
                                ];


                            (!is_null($currentUser->fatherInfo->fatherInfo->pid)) ? $data['pids']=[$currentUser->fatherInfo->fatherInfo->pid]:'';
                            (!is_null($currentUser->fatherInfo->fatherInfo->fid)) ? $data['fid']=$currentUser->fatherInfo->fatherInfo->fid:'';
                            (!is_null($currentUser->fatherInfo->fatherInfo->mid)) ? $data['mid']=$currentUser->fatherInfo->fatherInfo->mid:'';

                            array_push($datas, $data);

                            if(!is_null($currentUser->fatherInfo->fatherInfo->childInfosForFather())){

                                foreach ($currentUser->fatherInfo->fatherInfo->childInfosForFather()->get() as $key => $dataInfo) {
                                    $data=[
                                            'id'=>$dataInfo->id,
                                            'name'=>$dataInfo->first_name.' '.$dataInfo->last_name,
                                            'gender'=>$dataInfo->gender,
                                            'img'=>($dataInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                            // 'pid'=>(!is_null($dataInfo->pid))? [$dataInfo->pid]:[],
                                            // 'fid'=>$dataInfo->fid,
                                            // 'mid'=>$dataInfo->mid,
                                        ];

                                    (!is_null($dataInfo->pid)) ? $data['pids']=[$dataInfo->pid]:'';
                                    (!is_null($dataInfo->fid)) ? $data['fid']=$dataInfo->fid:'';
                                    (!is_null($dataInfo->mid)) ? $data['mid']=$dataInfo->mid:'';

                                    array_push($datas, $data);
                                }
                            }
                        }

                        if(!is_null($currentUser->fatherInfo->motherInfo)){
                                 $data=[
                                    'id'=>$currentUser->fatherInfo->motherInfo->id,
                                    'name'=>$currentUser->fatherInfo->motherInfo->first_name.' '.$currentUser->fatherInfo->motherInfo->last_name,
                                    'gender'=>$currentUser->fatherInfo->motherInfo->gender,
                                    'img'=>($currentUser->fatherInfo->motherInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                    // 'pid'=>(!is_null($currentUser->fatherInfo->motherInfo->pid)) ? [$currentUser->fatherInfo->motherInfo->pid]:[],
                                    // 'fid'=>$currentUser->fatherInfo->motherInfo->fid,
                                    // 'mid'=>$currentUser->fatherInfo->motherInfo->mid,
                                ];

                            (!is_null($currentUser->fatherInfo->motherInfo->pid)) ? $data['pids']=[$currentUser->fatherInfo->motherInfo->pid]:'';
                            (!is_null($currentUser->fatherInfo->motherInfo->fid)) ? $data['fid']=$currentUser->fatherInfo->motherInfo->fid:'';
                            (!is_null($currentUser->fatherInfo->motherInfo->mid)) ? $data['mid']=$currentUser->fatherInfo->motherInfo->mid:'';
                                
                            array_push($datas, $data);
                        }

                }

                if(!is_null($currentUser->motherInfo)){
                   
                   $data=[
                                'id'=>$currentUser->motherInfo->id,
                                'name'=>$currentUser->motherInfo->first_name.' '.$currentUser->motherInfo->last_name,
                                'gender'=>$currentUser->motherInfo->gender,
                                'img'=>($currentUser->motherInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                // 'pid'=>(!is_null($currentUser->motherInfo->pid)) ? [$currentUser->motherInfo->pid]:[],
                                // 'fid'=>$currentUser->motherInfo->fid,
                                // 'mid'=>$currentUser->motherInfo->mid,
                            ];

                        (!is_null($currentUser->motherInfo->pid)) ? $data['pids']=[$currentUser->motherInfo->pid]:'';
                        (!is_null($currentUser->motherInfo->fid)) ? $data['fid']=$currentUser->motherInfo->fid:'';
                        (!is_null($currentUser->motherInfo->mid)) ? $data['mid']=$currentUser->motherInfo->mid:'';

                        array_push($datas, $data);

                        if(!is_null($currentUser->motherInfo->fatherInfo)){
                                 $data=[
                                    'id'=>$currentUser->motherInfo->fatherInfo->id,
                                    'name'=>$currentUser->motherInfo->fatherInfo->first_name.' '.$currentUser->motherInfo->fatherInfo->last_name,
                                    'gender'=>$currentUser->motherInfo->fatherInfo->gender,
                                    'img'=>($currentUser->motherInfo->fatherInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                    // 'pid'=>(!is_null($currentUser->motherInfo->fatherInfo->pid)) ? [$currentUser->motherInfo->fatherInfo->pid]:[],
                                    // 'fid'=>$currentUser->motherInfo->fatherInfo->fid,
                                    // 'mid'=>$currentUser->motherInfo->fatherInfo->mid,
                                ];

                            (!is_null($currentUser->motherInfo->fatherInfo->pid)) ? $data['pids']=[$currentUser->motherInfo->fatherInfo->pid]:'';
                            (!is_null($currentUser->motherInfo->fatherInfo->fid)) ? $data['fid']=$currentUser->motherInfo->fatherInfo->fid:'';
                            (!is_null($currentUser->motherInfo->fatherInfo->mid)) ? $data['mid']=$currentUser->motherInfo->fatherInfo->mid:'';

                            array_push($datas, $data);

                            if(!is_null($currentUser->motherInfo->fatherInfo->childInfosForFather())){

                                foreach ($currentUser->motherInfo->fatherInfo->childInfosForFather()->get() as $key => $dataInfo) {
                                    $data=[
                                            'id'=>$dataInfo->id,
                                            'name'=>$dataInfo->first_name.' '.$dataInfo->last_name,
                                            'gender'=>$dataInfo->gender,
                                            'img'=>($dataInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                            // 'pid'=>(!is_null($dataInfo->pid)) ? [$dataInfo->pid]:[],
                                            // 'fid'=>$dataInfo->fid,
                                            // 'mid'=>$dataInfo->mid,
                                        ];

                                    (!is_null($dataInfo->pid)) ? $data['pids']=[$dataInfo->pid]:'';
                                    (!is_null($dataInfo->fid)) ? $data['fid']=$dataInfo->fid:'';
                                    (!is_null($dataInfo->mid)) ? $data['mid']=$dataInfo->mid:'';

                                    array_push($datas, $data);
                                }
                            }
                        }

                        if(!is_null($currentUser->motherInfo->motherInfo)){
                                 $data=[
                                    'id'=>$currentUser->motherInfo->motherInfo->id,
                                    'name'=>$currentUser->motherInfo->motherInfo->first_name.' '.$currentUser->fatherInfo->motherInfo->last_name,
                                    'gender'=>$currentUser->motherInfo->motherInfo->gender,
                                    'img'=>($currentUser->motherInfo->motherInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                    // 'pid'=>(!is_null($currentUser->motherInfo->motherInfo->pid)) ? [$currentUser->motherInfo->motherInfo->pid]:[],
                                    // 'fid'=>$currentUser->motherInfo->motherInfo->fid,
                                    // 'mid'=>$currentUser->motherInfo->motherInfo->mid,
                                ];

                            (!is_null($currentUser->motherInfo->motherInfo->pid)) ? $data['pids']=[$currentUser->motherInfo->motherInfo->pid]:'';
                            (!is_null($currentUser->motherInfo->motherInfo->fid)) ? $data['fid']=$currentUser->motherInfo->motherInfo->fid:'';
                            (!is_null($currentUser->motherInfo->motherInfo->mid)) ? $data['mid']=$currentUser->motherInfo->motherInfo->mid:'';
                                
                            array_push($datas, $data);
                        }
                }
                // // dd($currentUser);
                // foreach ($currentUser->childInfosForFather()->get() as $key => $value) {
                //     dump($value);
                // };
                // dd($currentUser->childInfosForFather());
                if(!is_null($currentUser->childInfosForFather())){
                    foreach ($currentUser->childInfosForFather()->get() as $key => $dataInfo) {
                        $data=[
                                'id'=>$dataInfo->id,
                                'name'=>$dataInfo->first_name.' '.$dataInfo->last_name,
                                'gender'=>$dataInfo->gender,
                                'img'=>($dataInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                // 'pid'=>(!is_null($dataInfo->pid)) ? [$dataInfo->pid]:[],
                                // 'fid'=>$dataInfo->fid,
                                // 'mid'=>$dataInfo->mid,
                            ];

                        (!is_null($dataInfo->pid)) ? $data['pids']=[$dataInfo->pid]:'';
                        (!is_null($dataInfo->fid)) ? $data['fid']=$dataInfo->fid:'';
                        (!is_null($dataInfo->mid)) ? $data['mid']=$dataInfo->mid:'';

                        array_push($datas, $data);
                        // dump($data);
                        if($dataInfo->gender=='male'){
                             foreach ($dataInfo->childInfosForFather()->get() as $key => $dataInfo) {
                                    $data=[
                                            'id'=>$dataInfo->id,
                                            'name'=>$dataInfo->first_name.' '.$dataInfo->last_name,
                                            'gender'=>$dataInfo->gender,
                                            'img'=>($dataInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                            // 'pid'=>(!is_null($dataInfo->pid)) ? [$dataInfo->pid]:[],
                                            // 'fid'=>$dataInfo->fid,
                                            // 'mid'=>$dataInfo->mid,
                                        ];

                                    (!is_null($dataInfo->pid)) ? $data['pids']=[$dataInfo->pid]:'';
                                    (!is_null($dataInfo->fid)) ? $data['fid']=$dataInfo->fid:'';
                                    (!is_null($dataInfo->mid)) ? $data['mid']=$dataInfo->mid:'';

                                    array_push($datas, $data);
              
                            }
                        }
                        else{

                            foreach ($dataInfo->childInfosForFather()->get() as $key => $dataInfo) {
                                    $data=[
                                            'id'=>$dataInfo->id,
                                            'name'=>$dataInfo->first_name.' '.$dataInfo->last_name,
                                            'gender'=>$dataInfo->gender,
                                            'img'=>($dataInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                            // 'pid'=>(!is_null($dataInfo->pid))?[$dataInfo->pid]:[],
                                            // 'fid'=>$dataInfo->fid,
                                            // 'mid'=>$dataInfo->mid,
                                        ];

                                    (!is_null($dataInfo->pid)) ? $data['pids']=[$dataInfo->pid]:'';
                                    (!is_null($dataInfo->fid)) ? $data['fid']=$dataInfo->fid:'';
                                    (!is_null($dataInfo->mid)) ? $data['mid']=$dataInfo->mid:'';

                                    array_push($datas, $data);
              
                            }
                        }
                    }

                }

                if(!is_null($currentUser->partnerInfos())){

                   foreach ($currentUser->partnerInfos()->get() as $key => $dataInfo) {
                       
                        $data=[
                                'id'=>$dataInfo->id,
                                'name'=>$dataInfo->first_name.' '.$dataInfo->last_name,
                                'gender'=>$dataInfo->gender,
                                'img'=>($dataInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                // 'pid'=>(!is_null($dataInfo->pid)) ? [$dataInfo->pid]:[],
                                // 'fid'=>$dataInfo->fid,
                                // 'mid'=>$dataInfo->mid,
                            ];

                        (!is_null($dataInfo->pid)) ? $data['pids']=[$dataInfo->pid]:'';
                        (!is_null($dataInfo->fid)) ? $data['fid']=$dataInfo->fid:'';
                        (!is_null($dataInfo->mid)) ? $data['mid']=$dataInfo->mid:'';

                        array_push($datas, $data);

                       if(!is_null($dataInfo->fatherInfo)){

                            $data=[
                                'id'=>$dataInfo->fatherInfo->id,
                                'name'=>$dataInfo->fatherInfo->first_name.' '.$dataInfo->fatherInfo->last_name,
                                'gender'=>$dataInfo->fatherInfo->gender,
                                'img'=>($dataInfo->fatherInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                // 'pid'=>(!is_null($dataInfo->fatherInfo->pid)) ? [$dataInfo->fatherInfo->pid]:[],
                                // 'fid'=>$dataInfo->fatherInfo->fid,
                                // 'mid'=>$dataInfo->fatherInfo->mid,
                            ];

                            (!is_null($dataInfo->fatherInfo->pid)) ? $data['pids']=[$dataInfo->fatherInfo->pid]:'';
                            (!is_null($dataInfo->fatherInfo->fid)) ? $data['fid']=$dataInfo->fatherInfo->fid:'';
                            (!is_null($dataInfo->fatherInfo->mid)) ? $data['mid']=$dataInfo->fatherInfo->mid:'';

                            array_push($datas, $data);

                            foreach ($dataInfo->fatherInfo->childInfosForFather()->get() as $key => $siblingInfo) {
                                     $data=[
                                            'id'=>$siblingInfo->id,
                                            'name'=>$siblingInfo->first_name.' '.$siblingInfo->last_name,
                                            'gender'=>$siblingInfo->gender,
                                            'img'=>($siblingInfo->gender=='male') ? URL::to('/').'/images/frontend/photo_man.png':URL::to('/').'/images/frontend/photo_female.png',
                                            // 'pid'=>(!is_null($siblingInfo->pid))?[$siblingInfo->pid]:[],
                                            // 'fid'=>$siblingInfo->fid,
                                            // 'mid'=>$siblingInfo->mid,
                                        ];

                                        (!is_null($siblingInfo->pid)) ? $data['pids']=[$siblingInfo->pid]:'';
                                        (!is_null($siblingInfo->fid)) ? $data['fid']=$siblingInfo->fid:'';
                                        (!is_null($siblingInfo->mid)) ? $data['mid']=$siblingInfo->mid:'';

                                        array_push($datas, $data);
                            }
                       }
                    }
                }
        }

        return view('frontend.family-trees.vue_family_tree',compact(['datas']));
    }
    
    /**
     * Handle a registration request for the application and sent mail to user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // DB::beginTransaction();
        try{

                $rules = [
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'relation_id'     => 'required',
                    'relation_dob'  => 'required',
                    'gender' => 'required',
                    'relation_email' => 'required',
                ];

                $messages = [
        //            'title.required' => 'Title is required',
                ];

                $this->validate($request, $rules, $messages);

                $responseData=[
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Failed To Add Family Member.',
                ];
                
               if($request->relation_id==1)
                    $responseData=$this->AddPaternalGrandFather($request);

                if($request->relation_id==2)
                    $responseData=$this->AddPaternalGrandMother($request);

                if($request->relation_id==3)
                    $responseData=$this->AddMaternalGrandFather($request);

                if($request->relation_id==4)
                    $responseData=$this->AddMaternalGrandMother($request);

                if($request->relation_id==5)
                    $responseData=$this->AddPaternalGrandFatherInLaw($request);

                if($request->relation_id==6)
                    $responseData=$this->AddPaternalGrandMotherInLaw($request);

                if($request->relation_id==7)
                    $responseData=$this->AddMaternalGrandFatherInLaw($request);

                if($request->relation_id==8)
                    $responseData=$this->AddMaternalGrandMotherInLaw($request);


                if($request->relation_id==9)
                    $responseData=$this->AddFather($request);

                if($request->relation_id==10)
                    $responseData=$this->AddFatherInLaw($request);

                if($request->relation_id==11)
                    $responseData=$this->AddMother($request);

                if($request->relation_id==12)
                    $responseData=$this->AddMotherInLaw($request);

                // if($request->relation_id==13)
                //     $responseData=$this->AddPaternalGrandFather($request);

                if($request->relation_id==14)
                    $responseData=$this->AddPartner($request);

                if($request->relation_id==15)
                    $responseData=$this->AddBrother($request);

                if($request->relation_id==16)
                    $responseData=$this->AddBrotherInLaw($request);

                if($request->relation_id==17)
                    $responseData=$this->AddSister($request);

                if($request->relation_id==18)
                    $responseData=$this->AddSisterInLaw($request);


                if($request->relation_id==19)
                    $responseData=$this->AddSon($request);

                if($request->relation_id==20)
                    $responseData=$this->AddSonsWife($request);

                if($request->relation_id==21)
                    $responseData=$this->AddDaughter($request);


                if($request->relation_id==22)
                    $responseData=$this->AddDaughterHusband($request);

                if($request->relation_id==24)
                    $responseData=$this->AddGrandSon($request);

                if($request->relation_id==25)
                    $responseData=$this->AddGrandDaughter($request);

                if($request->relation_id==26)
                    $responseData=$this->AddPartner($request);

                return response()->json($responseData);
              /*  $relativeAddFlag=false;

                $newUserAddFlag=false;

               $user = auth()->user();

                $isRelativeExist=FamilyTree::where('email',strtolower(trim($request->relation_email)))->first();

                $currentUser=User::where('email',strtolower(trim($user->email)))->first();

                if(!empty($isRelativeExist)) {

                    $currentFamilyTree=FamilyTree::where('email',$currentUser->email)->first();

                    if($request->relation_id==2 || $request->relation_id==3){

                        if($request->relation_id==2 ){
                    
                                if(!is_null($currentFamilyTree->mid)){
                                   
                                    $isRelativeExist->pid=$currentFamilyTree->mid;

                                    $isRelativeExist->save();

                                    // $this->connectToMother($request,$isRelativeExist->user_id,$currentUser,$isRelativeExist);
                                }

                                $currentFamilyTree->fid=$isRelativeExist->id;
                                
                                $currentFamilyTree->save();
                                
                                // $this->connectToMother($request,$relativeUserId,$currentUser,$relativeInfo);
                            }

                            if($request->relation_id==3  ){

                                if(!is_null($currentFamilyTree->fid)){
                                 
                                 $isRelativeExist->pid=$currentFamilyTree->fid;

                                 $isRelativeExist->save();

                                 // $this->connectToFather($request,$isRelativeExist->user_id,$currentUser,$isRelativeExist);

                                }
                                $currentFamilyTree->mid=$isRelativeExist->id;

                                $currentFamilyTree->save();

                                // 
                            }

                            // $flag=$this->parentAdded($request,$relativeUserId,$currentUser,$relativeInfo);
                    }

                    if($request->relation_id==4){
                        $isRelativeExist->pid=$currentFamilyTree->id;
                        $flag=$this->partnerAdded($request,$isRelativeExist->id,$currentUser,$isRelativeExist);
                    }


                    if($request->relation_id==5 || $request->relation_id==6){
                        ($currentUser->gender=='male') ? $isRelativeExist->fid=$currentFamilyTree->id:$isRelativeExist->mid=$currentFamilyTree->id;
                    }

                    $isRelativeExist->updated_at=Carbon::now();

                   if($isRelativeExist->save()){

                        DB::commit();

                        return response()->json(
                                [
                                    'status'       => 'success',
                                    // 'family_trees' => $family_trees,
                                ]
                            );

                    }
                    else{
                        
                        DB::rollBack();

                        return response()->json(
                                    [
                                        'status'       => 'error1',
                                        // 'family_trees' => $family_trees,
                                    ]
                                );
                    }


                }
                else{
                    
                    $relativeUserId=$this->addNewUser($request,$currentUser);

                    $relativeAddFlag= $this->addNewRelative($request,$relativeUserId,$currentUser);

                    if($relativeAddFlag){

                        DB::commit();

                        return response()->json(
                                [
                                    'status'       => 'success',
                                    // 'family_trees' => $family_trees,
                                ]
                            );

                    }
                    else{
                        
                        DB::rollBack();

                        return response()->json(
                                    [
                                        'status'       => 'error2',
                                        // 'family_trees' => $family_trees,
                                    ]
                                );
                    }
                }

                */
        }
        catch(Exception $err){
            DB::rollBack();

            return response()->json(
                        [
                            'status'       => 'error3',
                            // 'family_trees' => $family_trees,
                        ]
                    );
        }
        
    }

    /*
    public function addNewUser($request,$currentUser)
    {
        $isUserExist=User::where('email',strtolower(trim($request->relation_email)))->first();

        if (empty($isUserExist)) {
            
            $userInfo=new User();

            $userInfo->first_name=$request->first_name;

            $userInfo->last_name=$request->last_name;

            $userInfo->email=strtolower(trim($request->relation_email));

            $userInfo->gender=$request->gender;

            $userInfo->dob=date_format(date_create( $request->get('relation_dob')),'Y-m-d');

            $userInfo->password=bcrypt('default123@');

            $userInfo->country_id=$currentUser->country_id;

            $userInfo->connected_period=$currentUser->connected_period;

            $userInfo->status=1;

            $userInfo->verified=0;

            $userInfo->created_at=Carbon::now();

            if($userInfo->save())
               return $userInfo->id;
            else
                return 0;
     
        }
        else
            return $isUserExist->id;
    }
    public function addNewRelative($request,$relativeUserId,$currentUser)
    {
        $flag=false;

        $currentFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        $relativeInfo=new FamilyTree();

        $relativeInfo->first_name=$request->first_name;

        $relativeInfo->last_name=$request->last_name;

        $relativeInfo->email=strtolower(trim($request->relation_email));

        $relativeInfo->gender=$request->gender;

        $relativeInfo->user_id=$relativeUserId;

        $relativeInfo->dob=date_format(date_create( $request->get('relation_dob')),'Y-m-d');

        $relativeInfo->status=1;

        $relativeInfo->created_at=Carbon::now();

        $flag=$relativeInfo->save();

        if($flag){

            if($request->relation_id==2 || $request->relation_id==3){
               
                if($request->relation_id==2 ){
                    
                    if(!is_null($currentFamilyTree->mid)){
                       
                        $relativeInfo->pid=$currentFamilyTree->mid;

                        $relativeInfo->save();

                        $this->connectToMother($request,$relativeUserId,$currentUser,$relativeInfo);
                    }

                    $currentFamilyTree->fid=$relativeInfo->id;
                    
                    $currentFamilyTree->save();
                    
                    // 
                }

                if($request->relation_id==3  ){

                    if(!is_null($currentFamilyTree->fid)){
                     
                     $relativeInfo->pid=$currentFamilyTree->fid;

                     $relativeInfo->save();

                        $this->connectToFather($request,$relativeUserId,$currentUser,$relativeInfo);
                    }
                    $currentFamilyTree->mid=$relativeInfo->id;

                    $currentFamilyTree->save();

                    
                }

                // $flag=$this->parentAdded($request,$relativeUserId,$currentUser,$relativeInfo);
            }

            if($request->relation_id==4){
                $relativeInfo->pid=$currentFamilyTree->id;
                $relativeInfo->save();
                $flag=$this->partnerAdded($request,$relativeUserId,$currentUser,$relativeInfo);
            }

            // if($request->relation_id==5 || $request->relation_id==6)
            //     $this->childrenAdded($request,$relativeUserId,$currentUser,$relativeInfo);
            
            if($request->relation_id==5 || $request->relation_id==6){
                ($currentUser->gender=='male') ? $relativeInfo->fid=$currentFamilyTree->id:$relativeInfo->mid=$currentFamilyTree->id;

                return ($flag && $relativeInfo->save()) ? true:false;
            }

            return $flag;
        }
        else
            return $flag;

    
    }
    public function parentAdded($request,$relativeUserId,$currentUser,$relativeInfo)
    {
        $currentFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

            if(!is_null($currentFamilyTree->fid) || ($currentFamilyTree->mid))

           if($request->relation_id==2)
                $currentFamilyTree->fid=$relativeInfo->id;

          if($request->relation_id==3)
                $currentFamilyTree->mid=$relativeInfo->id;

        $currentFamilyTree->updated_at=Carbon::now();


        return ($currentFamilyTree->save()) ? true:false;
    }
    public function partnerAdded($request,$relativeUserId,$currentUser,$relativeInfo)
    {
        $currentFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        $currentFamilyTree->pid=$relativeInfo->id;

        $currentFamilyTree->updated_at=Carbon::now();

        return ($currentFamilyTree->save()) ? true:false;
    }
    public function connectToMother($request,$relativeUserId,$currentUser,$relativeInfo)
    {
       $currentFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();
       
       $fatherInfo=FamilyTree::find($currentFamilyTree->mid);

       $motherInfo->pid=$relativeInfo->id;

       $motherInfo->updated_at=Carbon::now();

       return ($motherInfo->save()) ?true:false;
    }
    public function connectToFather($request,$relativeUserId,$currentUser,$relativeInfo)
    {
       $currentFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

       $fatherInfo=FamilyTree::find($currentFamilyTree->fid);

       $fatherInfo->pid=$relativeInfo->id;

       $fatherInfo->updated_at=Carbon::now();

       return ($fatherInfo->save()) ?true:false;
    }

    // public function childrenAdded($request,$relativeUserId,$currentUser)
    // {
    //     if($request->relation_id==3)
    //         $currentFamilyTree->fid=$relativeInfo->id;

    //       if($request->relation_id==3)
    //         $currentFamilyTree->mid=$relativeInfo->id;

    //     $currentFamilyTree->updated_at=Carbon::now();

    //     return ($currentFamilyTree->save()) ? true:false;
    // }
    */
    public function addAsNewFamilyTree($request,$newUser)
    {
        $isRelativeInfoExist=FamilyTree::where('email',strtolower($request->relation_email))->first();

        if(empty($isRelativeInfoExist)){

            $relativeInfo=new FamilyTree();

            $relativeInfo->first_name=$request->first_name;

            $relativeInfo->last_name=$request->last_name;

            $relativeInfo->email=strtolower(trim($request->relation_email));

            $relativeInfo->gender=$request->gender;

            $relativeInfo->user_id=$newUser->id;

            $relativeInfo->dob=date_format(date_create( $request->get('relation_dob')),'Y-m-d');

            $relativeInfo->status=1;

            $relativeInfo->created_at=Carbon::now();

            if($relativeInfo->save())
                return $relativeInfo;
            else
                return false;
        }
        else
            return $isRelativeInfoExist;

    }
    public function addAsNewUser($request,$relatedUser)
    {
        $isUserExist=User::where('email',strtolower(trim($request->relation_email)))->first();

        if (empty($isUserExist)) {
            
            $userInfo=new User();

            $userInfo->first_name=$request->first_name;

            $userInfo->last_name=$request->last_name;

            $userInfo->email=strtolower(trim($request->relation_email));

            $userInfo->gender=$request->gender;

            $userInfo->dob=date_format(date_create( $request->get('relation_dob')),'Y-m-d');

            $userInfo->password=bcrypt('default123@');

            $userInfo->country_id=$relatedUser->country_id;

            $userInfo->connected_period=$relatedUser->connected_period;

            $userInfo->status=1;

            $userInfo->verified=0;

            $userInfo->created_at=Carbon::now();

            if($userInfo->save())
               return $userInfo;
            else
                return false;
     
        }
        else
            return $isUserExist;
    }
    public function isFamilyTreeExist($request)
    {
        $familyTree=FamilyTree::where('email',strtolower($request->relation_email))->first();

        if (!empty($familyTree)) 
            return $familyTree;
        else
            return false;
    }
    public function AddPaternalGrandFather($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(!is_null($myFamilyTree->fid)){

                $fatherInfo=FamilyTree::where('user_id',$myFamilyTree->fid)->first();

                if (!empty($fatherInfo)) {

                   if(is_null($fatherInfo->fid)){

                        $parentalGrandFatherInfo=$this->isFamilyTreeExist($request);

                        if(!$parentalGrandFatherInfo){

                            $fatherInfo->fid=$parentalGrandFatherInfo->id;

                            if($fatherInfo->save()){
                                return [
                                        'errMsgFlag'=>false,
                                        'msgFlag'=>true,
                                        'msg'=>'Family Member Added Successfully.',
                                    ];
                            }
                            else{
                                return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Family Member Please Try Again.',
                                ];
                            }
                        }
                        else{
                            
                            $newUser=$this->addAsNewUser($request,$fatherInfo);

                            if(!$newUser){
                                
                                $newFamilyTree=$this->addAsNewFamilyTree($request,$newUser);

                                if(!$newFamilyTree){

                                    $fatherInfo->fid=$newFamilyTree->id;

                                    if($fatherInfo->save()){

                                        return [
                                            'errMsgFlag'=>false,
                                            'msgFlag'=>true,
                                            'msg'=>'Family Member Added Successfully.',
                                        ];
                                    }
                                    else{
                                        return [
                                            'errMsgFlag'=>true,
                                            'msgFlag'=>false,
                                            'msg'=>'Failed To Add Family Member Please Try Again.',
                                        ];
                                    }
                                }
                                else{
                                    return [
                                        'errMsgFlag'=>true,
                                        'msgFlag'=>false,
                                        'msg'=>'Failed To Add Family Member Please Try Again.',
                                    ];
                                }

                            }
                            else{
                                return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Family Member Please Try Again.',
                                ];
                            }
                            
                        }

                   }
                   else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Please Add Your Father As A Member First.',
                        ];
                   }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Please Add Your Father As A Member First.',
                    ];
                }
            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Please Add Your Father As A Member First.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }

    public function AddPaternalGrandMother($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(!is_null($myFamilyTree->fid)){

                $fatherInfo=FamilyTree::where('user_id',$myFamilyTree->fid)->first();

                if (!empty($fatherInfo)) {

                   if(is_null($fatherInfo->mid)){

                        $parentalGrandMotherInfo=$this->isFamilyTreeExist($request);

                        if(!$parentalGrandMotherInfo){

                            $fatherInfo->mid=$parentalGrandMotherInfo->id;

                            if($fatherInfo->save()){
                                return [
                                        'errMsgFlag'=>false,
                                        'msgFlag'=>true,
                                        'msg'=>'Family Member Added Successfully.',
                                    ];
                            }
                            else{
                                return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Family Member Please Try Again.',
                                ];
                            }
                        }
                        else{
                            
                            $newUser=$this->addAsNewUser($request,$fatherInfo);

                            if(!$newUser){
                                
                                $newFamilyTree=$this->addAsNewFamilyTree($request,$newUser);

                                if(!$newFamilyTree){

                                    $fatherInfo->mid=$newFamilyTree->id;

                                    if($fatherInfo->save()){

                                        return [
                                            'errMsgFlag'=>false,
                                            'msgFlag'=>true,
                                            'msg'=>'Family Member Added Successfully.',
                                        ];
                                    }
                                    else{
                                        return [
                                            'errMsgFlag'=>true,
                                            'msgFlag'=>false,
                                            'msg'=>'Failed To Add Family Member Please Try Again.',
                                        ];
                                    }
                                }
                                else{
                                    return [
                                        'errMsgFlag'=>true,
                                        'msgFlag'=>false,
                                        'msg'=>'Failed To Add Family Member Please Try Again.',
                                    ];
                                }

                            }
                            else{
                                return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Family Member Please Try Again.',
                                ];
                            }
                            
                        }

                   }
                   else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Please Add Your Father As A Member First.',
                        ];
                   }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Please Add Your Father As A Member First.',
                    ];
                }
            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Please Add Your Father As A Member First.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }
    public function AddMaternalGrandFather($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(!is_null($myFamilyTree->mid)){

                $motherInfo=FamilyTree::where('user_id',$myFamilyTree->mid)->first();

                if (!empty($motherInfo)) {

                   if(is_null($motherInfo->fid)){

                        $maternalGrandFatherInfo=$this->isFamilyTreeExist($request);

                        if($maternalGrandFatherInfo!=false){

                            $motherInfo->fid=$maternalGrandFatherInfo->id;

                            if($fatherInfo->save()){
                                return [
                                        'errMsgFlag'=>false,
                                        'msgFlag'=>true,
                                        'msg'=>'Family Member Added Successfully.',
                                    ];
                            }
                            else{
                                return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Family Member Please Try Again.',
                                ];
                            }
                        }
                        else{
                            
                            $newUser=$this->addAsNewUser($request,$fatherInfo);

                            if($newUser!=false){
                                
                                $newFamilyTree=$this->addAsNewFamilyTree($request,$newUser);

                                if($newFamilyTree!=false){

                                    $motherInfo->fid=$newFamilyTree->id;

                                    if($motherInfo->save()){

                                        return [
                                            'errMsgFlag'=>false,
                                            'msgFlag'=>true,
                                            'msg'=>'Family Member Added Successfully.',
                                        ];
                                    }
                                    else{
                                        return [
                                            'errMsgFlag'=>true,
                                            'msgFlag'=>false,
                                            'msg'=>'Failed To Add Family Member Please Try Again.',
                                        ];
                                    }
                                }
                                else{
                                    return [
                                        'errMsgFlag'=>true,
                                        'msgFlag'=>false,
                                        'msg'=>'Failed To Add Family Member Please Try Again.',
                                    ];
                                }

                            }
                            else{
                                return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Family Member Please Try Again.',
                                ];
                            }
                            
                        }

                   }
                   else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Please Add Your Father As A Member First.',
                        ];
                   }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Please Add Your Father As A Member First.',
                    ];
                }
            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Please Add Your Father As A Member First.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }

    public function AddMaternalGrandMother($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(!is_null($myFamilyTree->mid)){

                $motherInfo=FamilyTree::where('user_id',$myFamilyTree->mid)->first();

                if (!empty($motherInfo)) {

                   if(is_null($motherInfo->mid)){

                        $maternalGrandMotherInfo=$this->isFamilyTreeExist($request);

                        if($maternalGrandMotherInfo!=false){

                            $motherInfo->mid=$maternalGrandMotherInfo->id;

                            if($motherInfo->save()){
                                return [
                                        'errMsgFlag'=>false,
                                        'msgFlag'=>true,
                                        'msg'=>'Family Member Added Successfully.',
                                    ];
                            }
                            else{
                                return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Family Member Please Try Again.',
                                ];
                            }
                        }
                        else{
                            
                            $newUser=$this->addAsNewUser($request,$fatherInfo);

                            if($newUser!=false){
                                
                                $newFamilyTree=$this->addAsNewFamilyTree($request,$newUser);

                                if($newFamilyTree!=false){

                                    $motherInfo->mid=$newFamilyTree->id;

                                    if($fatherInfo->save()){

                                        return [
                                            'errMsgFlag'=>false,
                                            'msgFlag'=>true,
                                            'msg'=>'Family Member Added Successfully.',
                                        ];
                                    }
                                    else{
                                        return [
                                            'errMsgFlag'=>true,
                                            'msgFlag'=>false,
                                            'msg'=>'Failed To Add Family Member Please Try Again.',
                                        ];
                                    }
                                }
                                else{
                                    return [
                                        'errMsgFlag'=>true,
                                        'msgFlag'=>false,
                                        'msg'=>'Failed To Add Family Member Please Try Again.',
                                    ];
                                }

                            }
                            else{
                                return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Family Member Please Try Again.',
                                ];
                            }
                            
                        }

                   }
                   else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Please Add Your Father As A Member First.',
                        ];
                   }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Please Add Your Father As A Member First.',
                    ];
                }
            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Please Add Your Father As A Member First.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }

    public function AddFather($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(is_null($myFamilyTree->fid)){
                
                $newUser=$this->addAsNewUser($request,$myFamilyTree);

                if ($newUser!=false) {
                    
                    $fatherInfo=$this->addAsNewFamilyTree($request,$newUser);

                    if ($fatherInfo!=false) {

                        $myFamilyTree->fid=$fatherInfo->id;

                        if($myFamilyTree->save()){

                             return [
                                'errMsgFlag'=>false,
                                'msgFlag'=>true,
                                'msg'=>'Father Info Added Successfully.',
                            ];
                        }
                        else{
                             return [
                                'errMsgFlag'=>true,
                                'msgFlag'=>false,
                                'msg'=>'You have already added your father.',
                            ];
                        }
                    }
                    else{
                         return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Failed To Add Father.',
                        ];
                    }

                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'You have already added your father.',
                    ];
                }

            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'You have already added your father.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }

    public function AddMother($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(is_null($myFamilyTree->mid)){
                
                $newUser=$this->addAsNewUser($request,$myFamilyTree);

                if ($newUser!=false) {
                    
                    $motherInfo=$this->addAsNewFamilyTree($request,$newUser);

                    if ($motherInfo!=false) {

                        $myFamilyTree->mid=$motherInfo->id;

                        if($myFamilyTree->save()){

                             return [
                                'errMsgFlag'=>false,
                                'msgFlag'=>true,
                                'msg'=>'Mother info Added Successfully.',
                            ];
                        }
                        else{
                             return [
                                'errMsgFlag'=>true,
                                'msgFlag'=>false,
                                'msg'=>'You have already added your mother info.',
                            ];
                        }
                    }
                    else{
                         return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Failed To Add mother info.',
                        ];
                    }

                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'You have already added your mother info.',
                    ];
                }

            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'You have already added your mother info.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }

    public function AddPartner($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(is_null($myFamilyTree->pid)){
                
                $newUser=$this->addAsNewUser($request,$myFamilyTree);

                if ($newUser!=false) {
                    
                    $partnerInfo=$this->addAsNewFamilyTree($request,$newUser);

                    if ($partnerInfo!=false) {

                        $myFamilyTree->pid=$partnerInfo->id;

                        if($myFamilyTree->save()){

                             return [
                                'errMsgFlag'=>false,
                                'msgFlag'=>true,
                                'msg'=>'Partner info Added Successfully.',
                            ];
                        }
     
                        else{
                             return [
                                'errMsgFlag'=>true,
                                'msgFlag'=>false,
                                'msg'=>'You have already added your partner info.',
                            ];
                        }
                    }
                    else{
                         return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Failed To Add partner info.',
                        ];
                    }

                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'You have already added your partner info.',
                    ];
                }

            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'You have already added your partner info.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }
    public function AddFatherInLaw($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(!is_null($myFamilyTree->pid)){
                
                $partnerInfo=FamilyTree::find($myFamilyTree->pid);

                if(!empty($partnerInfo)) {

                    if(is_null($partnerInfo->fid)){

                        $newUser=$this->addAsNewUser($request,$myFamilyTree);

                        if ($newUser!=false) {
                            
                            $fatherInfo=$this->addAsNewFamilyTree($request,$newUser);

                            if ($fatherInfo!=false) {

                                $partnerInfo->fid=$fatherInfo->id;

                                if($partnerInfo->save()){

                                     return [
                                        'errMsgFlag'=>false,
                                        'msgFlag'=>true,
                                        'msg'=>'Father In Law info Added Successfully.',
                                    ];
                                }
                                else{
                                     return [
                                        'errMsgFlag'=>true,
                                        'msgFlag'=>false,
                                        'msg'=>'Failed To Add Father In Law',
                                    ];
                                }
                            }
                            else{
                                 return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Father In Law',
                                ];
                            }

                        }
                        else{
                            return [
                                'errMsgFlag'=>true,
                                'msgFlag'=>false,
                                'msg'=>'You have already added your Father In Law',
                            ];
                        }


                    }
                    else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Father In Law Is Already Added.',
                        ];
                    }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Please Add  Your Partner First.',
                    ];
                }
            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Please Add  Your Partner First.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }
    public function AddMotherInLaw($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(!is_null($myFamilyTree->pid)){
                
                $partnerInfo=FamilyTree::find($myFamilyTree->pid);

                if(!empty($partnerInfo)) {

                    if(is_null($partnerInfo->mid)){

                        $newUser=$this->addAsNewUser($request,$myFamilyTree);

                        if ($newUser!=false) {
                            
                            $motherInfo=$this->addAsNewFamilyTree($request,$newUser);

                            if ($motherInfo!=false) {

                                $partnerInfo->mid=$motherInfo->id;

                                if($partnerInfo->save()){

                                     return [
                                        'errMsgFlag'=>false,
                                        'msgFlag'=>true,
                                        'msg'=>'Mother In Law info Added Successfully.',
                                    ];
                                }
                                else{
                                     return [
                                        'errMsgFlag'=>true,
                                        'msgFlag'=>false,
                                        'msg'=>'Failed To Add Mother In Law',
                                    ];
                                }
                            }
                            else{
                                 return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Mother In Law',
                                ];
                            }

                        }
                        else{
                            return [
                                'errMsgFlag'=>true,
                                'msgFlag'=>false,
                                'msg'=>'You have already added your mother In Law',
                            ];
                        }


                    }
                    else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Mother In Law Is Already Added.',
                        ];
                    }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Please Add  Your Partner First.',
                    ];
                }
            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Please Add  Your Partner First.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }

    public function AddBrother($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(!is_null($myFamilyTree->fid) || !is_null($myFamilyTree->mid)){
                
                $newUser=$this->addAsNewUser($request,$myFamilyTree);

                if ($newUser!=false) {
                    
                    $brotherInfo=$this->addAsNewFamilyTree($request,$newUser);

                    if ($brotherInfo!=false) {

                        $brotherInfo=FamilyTree::find($brotherInfo->id);

                        $brotherInfo->fid=$myFamilyTree->fid;

                        $brotherInfo->mid=$myFamilyTree->mid;

                        if($brotherInfo->save()){

                             return [
                                'errMsgFlag'=>false,
                                'msgFlag'=>true,
                                'msg'=>'Brother Info Added Successfully.',
                            ];
                        }
                        else{
                             return [
                                'errMsgFlag'=>true,
                                'msgFlag'=>false,
                                'msg'=>'Failed To Add Brother Info',
                            ];
                        }
                    }
                    else{
                         return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Failed To Add Brother Info.',
                        ];
                    }

                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Failed To Add Brother Info.',
                    ];
                }

            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Add Your Parents First.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }
    public function AddSister($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(!is_null($myFamilyTree->fid) || !is_null($myFamilyTree->mid)){
                
                $newUser=$this->addAsNewUser($request,$myFamilyTree);

                if ($newUser!=false) {
                    
                    $sisterInfo=$this->addAsNewFamilyTree($request,$newUser);

                    if ($sisterInfo!=false) {

                        $sisterInfo=FamilyTree::find($sisterInfo->id);

                        $sisterInfo->fid=$myFamilyTree->fid;

                        $sisterInfo->mid=$myFamilyTree->mid;

                        if($sisterInfo->save()){

                             return [
                                'errMsgFlag'=>false,
                                'msgFlag'=>true,
                                'msg'=>'Sister Info Added Successfully.',
                            ];
                        }
                        else{
                             return [
                                'errMsgFlag'=>true,
                                'msgFlag'=>false,
                                'msg'=>'Failed To Add Sister Info',
                            ];
                        }
                    }
                    else{
                         return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Failed To Add Sister Info.',
                        ];
                    }

                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Failed To Add Sister Info.',
                    ];
                }

            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Add Your Parents First.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }

    public function AddSon($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            $newUser=$this->addAsNewUser($request,$myFamilyTree);

            if ($newUser!=false) {
                
                $sonInfo=$this->addAsNewFamilyTree($request,$newUser);
                
                if($sonInfo!=false){
                    $sonInfo=FamilyTree::find($sonInfo->id);
                    if($myFamilyTree->gender=='male')
                        $sonInfo->fid=$myFamilyTree->id;
                    if($myFamilyTree->gender=='female')
                        $sonInfo->mid=$myFamilyTree->id;

                    if($sonInfo->save()){
                        return [
                            'errMsgFlag'=>false,
                            'msgFlag'=>true,
                            'msg'=>'Son Info Added Successfully.',
                        ];
                    }
                    else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Failed To Add Son Info.',
                        ];
                    }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Failed To Add Son Info.',
                    ];
                }
            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Failed To Add Son Info.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }

    public function AddDaughter($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            $newUser=$this->addAsNewUser($request,$myFamilyTree);

            if ($newUser!=false) {
                
                $daughterInfo=$this->addAsNewFamilyTree($request,$newUser);
                
                if($daughterInfo!=false){
                    $daughterInfo=FamilyTree::find($daughterInfo->id);
                    if($myFamilyTree->gender=='male')
                        $daughterInfo->fid=$myFamilyTree->id;
                    if($myFamilyTree->gender=='female')
                        $daughterInfo->mid=$myFamilyTree->id;

                    if($daughterInfo->save()){
                        return [
                            'errMsgFlag'=>false,
                            'msgFlag'=>true,
                            'msg'=>'Daughter Info Added Successfully.',
                        ];
                    }
                    else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>'Failed To Add Daughter Info.',
                        ];
                    }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Failed To Add Daughter Info.',
                    ];
                }
            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Failed To Add Daughter Info.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }
    public function AddDaughterHusband($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

           $daughterInfo=FamilyTree::find($request->connect_with);

           if(!empty($daughterInfo)){
                if(is_null($daughterInfo->pid)){
                  
                  $newUser=$this->addAsNewUser($request,$daughterInfo);

                  if($newUser!=false)) {
                   
                    $newFamilyTree=$this->addAsNewFamilyTree($request,$newUser);

                    if($newFamilyTree!=false){
                        
                        $daughterInfo->pid=$newFamilyTree->id;

                        if($daughterInfo->save()){
                            
                            $daughterHusbandInfo=FamilyTree::find($newFamilyTree->id);

                            $daughterHusbandInfo->pid=$daughterInfo->id;

                            if($daughterHusbandInfo->save()){
                                return [
                                    'errMsgFlag'=>false,
                                    'msgFlag'=>true,
                                    'msg'=>"Daughter's Husband Added Successfully.",
                                ];
                            }
                            else{
                                return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>"Failed To Add Daughter's Husband.",
                                ];
                            }
                        }
                        else{
                            return [
                                'errMsgFlag'=>true,
                                'msgFlag'=>false,
                                'msg'=>"Failed To Add Daughter's Husband.",
                            ];
                        }
                    }
                    else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>"Failed To Add Daughter's Husband.",
                        ];
                    }
                  }
                  else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>"Failed To Add Daughter's Husband.",
                        ];
                  }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>"Daughter's Husband Already Exists.",
                    ];
                }
           }
           else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Add Your Daughter First.',
                ];
           }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }

    public function AddSonsWife($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

           $sonInfo=FamilyTree::find($request->connect_with);

           if(!empty($sonInfo)){
                if(is_null($sonInfo->pid)){
                  
                  $newUser=$this->addAsNewUser($request,$sonInfo);

                  if($newUser!=false)) {
                   
                    $newFamilyTree=$this->addAsNewFamilyTree($request,$newUser);

                    if($newFamilyTree!=false){
                        
                        $sonInfo->pid=$newFamilyTree->id;

                        if($sonInfo->save()){
                            
                            $sonWifeInfo=FamilyTree::find($newFamilyTree->id);

                            $sonWifeInfo->pid=$sonInfo->id;

                            if($sonWifeInfo->save()){
                                return [
                                    'errMsgFlag'=>false,
                                    'msgFlag'=>true,
                                    'msg'=>"Son's Wife Added Successfully.",
                                ];
                            }
                            else{
                                return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>"Failed To Add Son's Wife.",
                                ];
                            }
                        }
                        else{
                            return [
                                'errMsgFlag'=>true,
                                'msgFlag'=>false,
                                'msg'=>"Failed To Add Son's Wife.",
                            ];
                        }
                    }
                    else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>"Failed To Add Son's Wife.",
                        ];
                    }
                  }
                  else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>"Failed To Add Son's Wife.",
                        ];
                  }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>"Son's Wife Already Exists.",
                    ];
                }
           }
           else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Add Your Daughter First.',
                ];
           }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }
    public function AddGrandSon($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

           $childInfo=FamilyTree::find($request->connect_with);

           if(!empty($childInfo)){
            
              $newUser=$this->addAsNewUser($request,$childInfo);

              if($newUser!=false)) {
               
                $newFamilyTree=$this->addAsNewFamilyTree($request,$newUser);

                if($newFamilyTree!=false){
                        
                    $grandChildInfo=FamilyTree::find($newFamilyTree->id);
                    
                    if($childInfo->gender=='male')
                        $grandChildInfo->fid=$childInfo->id;

                    if($childInfo->gender=='female')
                        $grandChildInfo->mid=$childInfo->id;

                    if($grandChildInfo->save()){
                        return [
                            'errMsgFlag'=>false,
                            'msgFlag'=>true,
                            'msg'=>"Grand Son Added Successfully.",
                        ];
                    }
                    else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>"Failed To Add Grand Son.",
                        ];
                    }
                   
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>"Failed To Add Grand Son.",
                    ];
                }
              }
              else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>"Failed To Add Grand Son.",
                    ];
              }
               
           }
           else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Add Your Child First.',
                ];
           }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }
    public function AddGrandDaughter($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

           $childInfo=FamilyTree::find($request->connect_with);

           if(!empty($childInfo)){
            
              $newUser=$this->addAsNewUser($request,$childInfo);

              if($newUser!=false)) {
               
                $newFamilyTree=$this->addAsNewFamilyTree($request,$newUser);

                if($newFamilyTree!=false){
                        
                    $grandChildInfo=FamilyTree::find($newFamilyTree->id);
                    
                    if($childInfo->gender=='male')
                        $grandChildInfo->fid=$childInfo->id;

                    if($childInfo->gender=='female')
                        $grandChildInfo->mid=$childInfo->id;

                    if($grandChildInfo->save()){
                        return [
                            'errMsgFlag'=>false,
                            'msgFlag'=>true,
                            'msg'=>"Grand Daughter Added Successfully.",
                        ];
                    }
                    else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>"Failed To Add Grand Daughter.",
                        ];
                    }
                   
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>"Failed To Add Grand Daughter.",
                    ];
                }
              }
              else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>"Failed To Add Grand Daughter.",
                    ];
              }
               
           }
           else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Add Your Child First.',
                ];
           }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }

    public function AddBrotherInLaw($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(!is_null($myFamilyTree->pid)){
                
                $partnerInfo=FamilyTree::find($myFamilyTree->pid);

                if(!empty($partnerInfo)) {

                    if(!is_null($partnerInfo->fid) || !is_null($partnerInfo->mid)){

                        $newUser=$this->addAsNewUser($request,$myFamilyTree);

                        if ($newUser!=false) {
                            
                            $newFamilyTree=$this->addAsNewFamilyTree($request,$newUser);

                            if ($newFamilyTree!=false) {

                                $brotherInLawInfo=FamilyTree::find($newFamilyTree->id);

                                if(!is_null($partnerInfo->fid))
                                    $brotherInLawInfo->fid=$partnerInfo->fid;

                                if(!is_null($partnerInfo->mid))
                                    $brotherInLawInfo->mid=$partnerInfo->mid;

                                if($brotherInLawInfo->save()){

                                     return [
                                        'errMsgFlag'=>false,
                                        'msgFlag'=>true,
                                        'msg'=>'Brother In Law info Added Successfully.',
                                    ];
                                }
                                else{
                                     return [
                                        'errMsgFlag'=>true,
                                        'msgFlag'=>false,
                                        'msg'=>'Failed To Add Brother In Law',
                                    ];
                                }
                            }
                            else{
                                 return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Brother In Law',
                                ];
                            }

                        }
                        else{
                            return [
                                'errMsgFlag'=>true,
                                'msgFlag'=>false,
                                'msg'=>'You have already added your Brother In Law',
                            ];
                        }


                    }
                    else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>"Please Add Your Partner Parent's First",
                        ];
                    }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Please Add  Your Partner First.',
                    ];
                }
            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Please Add  Your Partner First.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }

    public function AddSisterInLaw($request)
    {
        $currentUser=auth()->user();

        $myFamilyTree=FamilyTree::where('user_id',$currentUser->id)->first();

        if(!empty($myFamilyTree)) {

            if(!is_null($myFamilyTree->pid)){
                
                $partnerInfo=FamilyTree::find($myFamilyTree->pid);

                if(!empty($partnerInfo)) {

                    if(!is_null($partnerInfo->fid) || !is_null($partnerInfo->mid)){

                        $newUser=$this->addAsNewUser($request,$myFamilyTree);

                        if ($newUser!=false) {
                            
                            $newFamilyTree=$this->addAsNewFamilyTree($request,$newUser);

                            if ($newFamilyTree!=false) {

                                $brotherInLawInfo=FamilyTree::find($newFamilyTree->id);

                                if(!is_null($partnerInfo->fid))
                                    $brotherInLawInfo->fid=$partnerInfo->fid;

                                if(!is_null($partnerInfo->mid))
                                    $brotherInLawInfo->mid=$partnerInfo->mid;

                                if($brotherInLawInfo->save()){

                                     return [
                                        'errMsgFlag'=>false,
                                        'msgFlag'=>true,
                                        'msg'=>'Sister In Law info Added Successfully.',
                                    ];
                                }
                                else{
                                     return [
                                        'errMsgFlag'=>true,
                                        'msgFlag'=>false,
                                        'msg'=>'Failed To Add Sister In Law',
                                    ];
                                }
                            }
                            else{
                                 return [
                                    'errMsgFlag'=>true,
                                    'msgFlag'=>false,
                                    'msg'=>'Failed To Add Sister In Law',
                                ];
                            }

                        }
                        else{
                            return [
                                'errMsgFlag'=>true,
                                'msgFlag'=>false,
                                'msg'=>'You have already added your Sister In Law',
                            ];
                        }


                    }
                    else{
                        return [
                            'errMsgFlag'=>true,
                            'msgFlag'=>false,
                            'msg'=>"Please Add Your Partner Parent's First",
                        ];
                    }
                }
                else{
                    return [
                        'errMsgFlag'=>true,
                        'msgFlag'=>false,
                        'msg'=>'Please Add  Your Partner First.',
                    ];
                }
            }
            else{
                return [
                    'errMsgFlag'=>true,
                    'msgFlag'=>false,
                    'msg'=>'Please Add  Your Partner First.',
                ];
            }
        }
        else{
            return [
                'errMsgFlag'=>true,
                'msgFlag'=>false,
                'msg'=>'Add Yourself in Family Tree  First.',
            ];
        }
    }
}
