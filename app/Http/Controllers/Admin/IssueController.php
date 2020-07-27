<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Category;
use App\Models\Issue;
use http\Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IssueController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = Category::findOrFail($request->id);
        return response()->json($category->issues);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'issue' => 'required',
        ]);

        if ($validator->fails()) {
            return  response()->json(['status' => 'failure', 'message' => 'Issue added to Category FAILS.']);
        }

        try {
            $issue = new Issue();
            $issue->name =  $request->issue;
            $issue->category_id = $request->id;
            $issue->save();
        } catch (Exception  $e) {
          return  response()->json(['status' => 'failure', 'message' => 'Issue added to Category FAILS.']);
        }

        return response()->json(['status' => 'success', 'message' => 'Issue added to Category successfully.']);

    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {


        $validator = Validator::make($request->all(), [
            '*.issue' => 'required',
        ]);

        if ($validator->fails()) {
            return  response()->json(['status' => 'failure', 'message' => 'Issue updating to Category FAILS.']);
        }

        $issue =  Issue::find($request->data['id']);
        $issue->name = $request->data['issue'];
        $issue->save();
        if($issue){
            return response()->json(['status' => 'success', 'message' => 'Issue updated to Category successfully.']);
        }
        return  response()->json(['status' => 'failure', 'message' => 'Issue updated to Category FAILS.']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue , Request $request)
    {
        try {
            Issue::find($request->id)->delete();
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Entry for '.str_replace('App\\', '', $e->getModel()).' not found'], 404);
        }
        return response()->json(['status' => 'success', 'message' => 'Product attribute deleted successfully.']);
    }
}
