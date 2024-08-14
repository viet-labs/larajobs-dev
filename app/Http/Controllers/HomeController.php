<?php

namespace App\Http\Controllers;

use App\Models\TuKhoa;
use App\Models\CongViec;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $congViecList = CongViec::orderBy('id', 'ASC')->paginate(10);
        $tuKhoaList = TuKhoa::orderBy('id', 'ASC')->paginate(20);
        $olderJobs = CongViec::orderBy('id', 'DESC')->paginate(15);

        return view('default.homepage', compact('congViecList', 'tuKhoaList', 'olderJobs'));
    }
}
