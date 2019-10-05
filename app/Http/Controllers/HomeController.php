<?php

namespace App\Http\Controllers;


use App\Car;
use App\cities;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function city($id)
    {
        $data = cities::where('id','=',$id)->get();
        $cars = Car::where('city_id','=',$id)->get();

        return view('city',['Cars'=>$cars],['City'=>$data]);
    }
}
