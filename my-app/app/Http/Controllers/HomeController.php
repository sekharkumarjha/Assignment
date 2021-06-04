<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataModel;

class HomeController extends Controller
{
  

    function Index()
    {
        $newsData = DataModel::where('category', '=', 'News')->take(3)->get();
        $servicesData =DataModel::where('category', '=', 'Services')->take(3)->get();
        $updateData =DataModel::where('category', '=', 'Updates')->take(3)->get();
        $benifitsData =DataModel::where('category', '=', 'Benifits')->take(3)->get();
        return view('Pages.HomePage',['News' => $newsData,'Services'=>$servicesData,'Updates'=>$updateData,'Benifits'=>$benifitsData]);
    }
    
}
