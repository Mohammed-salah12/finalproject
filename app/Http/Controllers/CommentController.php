<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
   {
    $comments=Comment::orderBy('id','desc')->paginate(5);
    return response()->view('cms.Comments.index',compact('comments'));
   }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
        $comments=Comment::all();
        return response()->view('Comments.create', compact('comments'));
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
            'name' => 'string',

        ]);

        if (!$validator->fails()) {
            $comments = new Comment();;
            if (request()->hasFile('img')) {

                $img = $request ->file('img');

                $imgName = time() . 'img.' . $img->getClientOriginalExtension();

                $img->move('storage/images/Comment', $imgName);

                $comments->img = $imgName;
            }

            $comments->name = $request->get('name');
            $comments->comment = $request->get('comment');

            $isSaved  = $comments->save();

            if ($isSaved) {
                return response()->json(['icon' => 'success', 'title' => "Created is successfully"], 200);
            } else {
                return response()->json(['icon' => 'Failed', 'title' => "Created is Failed", 'redirect' => route('comments.index')], 400);
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
        $comments = Comment::findOrFail($id);
        return response()->view('cms.comments.edit' , compact('comments'));
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
        // $validator = Validator($request->all(), [
        //     'name' => 'string',

        // ]);

        //     if (! $validator->fails()){

        //         $comments = Comment::findOrFail($id);
        //         $comments->name = $request->get('name');
        //         $comments->comment = $request->get('comment');
        //         if (request()->hasFile('img')) {

        //             $img = $request ->file('img');

        //             $imgName = time() . 'img.' . $img->getClientOriginalExtension();

        //             $img->move('storage/images/Comment', $imgName);

        //             $comments->img = $imgName;
        //         }
        //         $isUpdated = $comments->save();

        //         return ['redirect' => route('comments.index')];
        //         if($isUpdated){

        //             return response()->json(['icon' => 'success' , 'title' => "Created is Successfully"] , 200);
        //         }
        //         else{
        //             return response()->json(['icon' => 'error' , 'title' => "Created is Failed"] , 400);
        //         }
        //     }

        //     }


        }



     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
        // $comments = Comment::destroy($id);
      }
}
