<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Illuminate\Support\Facades\Input;

class CreatesController extends Controller
{
    public function home(){
        
             $hotel = Hotel::all();
             return view('home',['hotel'=>$hotel]);
        
            }
    public function add(Request $request){
        
                
        
                $hotel = new Hotel;
                $hotel->denomination=$request->input('den');
                $hotel->adresse=$request->input('adr');
                $hotel->ville=$request->input('vil');
                $hotel->commune=$request->input('com');
                $hotel->mail=$request->input('ema');
                $hotel->telephone=$request->input('tel');
                $hotel->commentaire=$request->input('des');
                $hotel->type=$request->input('type');
        if(Input::hasFile('photo1')){
                    $p1=Input::file('photo1');
                    $p1->move(public_path(). '/img', $p1->getClientOriginalName());
                    $hotel->photo= $p1->getClientOriginalName();
                }
                if(Input::hasFile('photo2')){
                    $p2=Input::file('photo2');
                    $p2->move(public_path(). '/img', $p2->getClientOriginalName());
                    $hotel->photo1= $p2->getClientOriginalName();
                }
                if(Input::hasFile('photo3')){
                    $p3=Input::file('photo3');
                    $p3->move(public_path(). '/img', $p3->getClientOriginalName());
                    $hotel->photo2= $p3->getClientOriginalName();
                }
                $hotel-> save();
                return redirect('/')->with('info',' hotel enregistré avec succès');
        
            }

    public function hotelOne($commune)
    {
        $hotels = Hotel::where('commune',$commune)->get();
        return response()->json($hotels);
    }

    public function detailOne($id)
    {
        $hotels = Hotel::where('id',$id)->get();
        return response()->json($hotels);
    }
}
