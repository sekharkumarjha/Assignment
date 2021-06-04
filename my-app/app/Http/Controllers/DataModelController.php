<?php

namespace App\Http\Controllers;

use App\Models\DataModel;
use Illuminate\Http\Request;

class DataModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Pages.insertData');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new DataModel();
        $data->category = $request->input('category');
        $data->heading = $request->input('heading');
        $data->description = $request->input('description');
        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/Images/', $filename);
            $data->image = $filename;
        } else {
            $data->image = time().'jpg';
        }

        $data->save();
        echo "upload success";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataModel  $dataModel
     * @return \Illuminate\Http\Response
     */
    public function show(DataModel $dataModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataModel  $dataModel
     * @return \Illuminate\Http\Response
     */
    public function edit(DataModel $dataModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataModel  $dataModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataModel $dataModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataModel  $dataModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataModel $dataModel)
    {
        //
    }
}
