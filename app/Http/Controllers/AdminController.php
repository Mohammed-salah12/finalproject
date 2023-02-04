<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\City;
use App\Models\User;
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
   return response()->view('cms.admin.index',compact('admins'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins=Admin::all();
        return response()->view('cms.admin.create',compact('admins'));
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
    if (request()->hasFile('img')) {

        $img = $request ->file('img');

        $imgName = time() . 'img.' . $img->getClientOriginalExtension();

        $img->move('storage/images/admin', $imgName);

        $admins->img = $imgName;
    }
    $admins->email=$request->get('email');
    $admins->password=Hash::make($request->get('password'));
    $IsSaved=$admins->save();
    if($IsSaved){

        return response()->json(['icon'=>'succsess','title'=>'created is succsessfully'], 200);

    }
    else{
        return response()->json(['icon' => 'error' , 'title' => $valedetor->getMessageBag()->first()] ,400);

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
      return response()->view('cms.admin.edit',compact('admins'));
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

      public function showregester()
      {
          $admins=Admin::all();
          return response()->view('cms.regester',compact('admins'));
      }

      public function regester(Request $request)
      {
     $valedetor=validator(request()->all([
      'email'=>'required|email'
     ]));

     if(! $valedetor->fails() ){
      $admins= new Admin();
      $admins->email=$request->get('email');
      $admins->password=Hash::make($request->get('password'));
      $IsSaved=$admins->save();
    if($IsSaved){
        return response()->json(['icon'=>'succsess','title'=>'created is succsessfully'], 200);

    }
    else{
        return response()->json(['icon' => 'error' , 'title' => $valedetor->getMessageBag()->first()] ,400);

    }
      }
      }

     }











