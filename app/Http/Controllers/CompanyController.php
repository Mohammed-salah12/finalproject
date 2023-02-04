<?php

namespace App\Http\Controllers;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=Company::orderBy('id','desc')->paginate(5);
        return response()->view('cms.companies.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=Company::all();
        return response()->view('cms.companies.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $validator = Validator($request->all(), [
            'logo' => 'required',

        ]);

        if (!$validator->fails()) {
            $companies = new Company();;
            if (request()->hasFile('logo')) {

                $img = $request ->file('logo');

                $imgName = time() . 'logo.' . $img->getClientOriginalExtension();

                $img->move('storage/images/company', $imgName);

                $companies->logo = $imgName;
            }



            $isSaved  = $companies->save();

            if ($isSaved) {
                return response()->json(['icon' => 'success', 'title' => "Created is successfully"], 200);
            } else {
                return response()->json(['icon' => 'Failed', 'title' => "Created is Failed", 'redirect' => route('companies.index')], 400);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies=Company::findOrFail($id);
      return response()->view('cms.companies.edit',compact('companies'));
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
        $validator = Validator($request->all(), [
            'logo' => 'required',

        ]);

            if (! $validator->fails()){

                $companies = Company::findOrFail($id);
                if (request()->hasFile('logo')) {

                    $img = $request ->file('logo');

                    $imgName = time() . 'logo.' . $img->getClientOriginalExtension();

                    $img->move('storage/images/company', $imgName);

                    $companies->logo = $imgName;
                }
                $isUpdated = $companies->save();

                return ['redirect' => route('companies.index')];
                if($isUpdated){

                    return response()->json(['icon' => 'success' , 'title' => "Created is Successfully"] , 200);
                }
                else{
                    return response()->json(['icon' => 'error' , 'title' => "Created is Failed"] , 400);
                }}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cosmpanies = Company::destroy($id);
    }
}
