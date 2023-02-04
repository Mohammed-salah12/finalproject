<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\City;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   $admins=Admin::orderBy('id','desc')->paginate(5);
   return response()->view('cms.admins.index',compact('admins'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins=Admin::all();
        return response()->view('cms.admins.create',compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   $valedetor=validator(request()->all([
    'email'=>'required|email'
   ]));
   if(! $valedetor->fails() ){
    $admins= new Admin();
    $admins->email=$request->get('email');
    $admins->password=Hash::make($request->get('password'));
    if (request()->hasFile('img')) {

        $img = $request ->file('img');

        $imgName = time() . 'img.' . $img->getClientOriginalExtension();

        $img->move('storage/images/admin', $imgName);

        $admins->img = $imgName;
    }

    $IsSaved=$admins->save();
    if($IsSaved){
        $users=new User();
        $users->first_name=$request->get('first_name');
        $users->last_name=$request->get('last_name');
        $users->mobile=$request->get('mobile');
        $users->actor()->associate($admins);

        $IsSavedUser=$users->save();


        if($IsSavedUser){

        return response()->json(['icon'=>'succsess','title'=>'created is succsessfully'], 200);
    }else{


        return response()->json(['icon'=>'error','title'=>'created is error'], 400);

    }

   }
   }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $admins=Admin::findOrFail($id);
      return response()->view('cms.admins.edit',compact('admins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all() , [
            'password' => 'nullable',
        ]);

        if(! $validator->fails()){
            $admins = Admin::findOrFail($id);
            $admins->email = $request->get('email');
            $isSaved = $admins->save();

            if($isSaved){
                $admins = $admins->user;


                $admins->first_name = $request->get('first_name');
                $admins->last_name = $request->get('last_name');
                $admins->mobile = $request->get('mobile');
                $admins->actor()->associate($admins);

                $isSaved = $admins->save();

                return ['redirect'=>route('admins.index')];

            }
        }
        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] ,400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = Admin::destroy($id);
      }
}










