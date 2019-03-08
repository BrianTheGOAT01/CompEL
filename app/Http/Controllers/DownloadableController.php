<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Downloadable;
use App\Genre;
use DB;

class DownloadableController extends Controller
{
    public function index(){
    	$contents = Downloadable::all();
    	return view('pages_content/browse_index', compact('contents'));
    }

    public function download(){
    	$contents = Downloadable::all();
    	$genres = Genre::all();
    	return view('pages.download', compact('contents'), compact('genres'));
    }
}
