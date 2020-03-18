<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\items;
use Image;
Use Illuminate\Suppoort\Facades\Storage;
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
    public function amindelete(){
        if(auth()->user()->isAdmin()) {
            $all=items::all();
            return view('delete',compact('all'));
        } else {
           $all= items::all();
            return view('home',compact('all'));
        }
    }
    public function index()
    {
        if(auth()->user()->isAdmin()) {
            $all=items::all();
            return view('admin/dashboard');
        } else {
           $all= items::all();
            return view('home',compact('all'));
        }
    }

    public function products(items $id){
       
        
        return view('products',compact('id'));

    }

    public function stor(Request $request){
        //  dd(request()->all());
        $name=$request->get('name');
        $phonenumber= $request->get('phonenumber');
        $brand = $request->get('brand');
        $year=$request->get('year');
        $gearsystem=$request->get('gearsystem');
        $mileage=$request->get('mileage');
        $price=$request->get('price');

         $imagePath = request('file')->store('uploads','public');

          //dd($imagePath);
        
            
               // dd($phonenumber,$brand,$mileage,$gearsystem,$name,$imagePath);
                items::create([

                     'phonenumber'=>$phonenumber,
                        'brand' => $brand,
                             'price'=>$price,
                                'year'=>$year,
                                'mileage'=>$mileage,
                                    'gearsystem'=>$gearsystem,
                                        'filename'=>$imagePath,
                                            'name'=>$name,

                                            ]);

                                            return back();
  
        
}


    public function deletepost($id){
        items::where('id',$id)->delete(); 
        return back();
    }
}
