<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
class ListingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::orderBy('created_at','desc')->get();
        return view('listings')->with('listings',$listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createlisting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request, [
          'first_name' => 'required',
          'email' => 'email'
        ]);
        
        //Create Listing
        $listing = new Listing;
        $listing->first_name = $request->input('first_name');
        $listing->last_name = $request->input('last_name');
        $listing->dob = $request->input('dob');
        $listing->gender = $request->input('gender');
        $listing->phone_no = $request->input('phone_no');
        $listing->email = $request->input('email');
        $listing->company_name = $request->input('company_name');
        $listing->user_id = auth()->user()->id;

        $listing->save();

        return redirect('/dashboard')->with('success', 'Listing Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::find($id);
      return view('showlisting')->with('listing', $listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('editlisting')->with('listing', $listing);
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
        $this->validate($request, [
            'first_name' => 'required',
            'email' => 'email'
          ]);
          
          //Create Listing
          $listing = Listing::find($id);
          $listing->first_name = $request->input('first_name');
          $listing->last_name = $request->input('last_name');
          $listing->dob = $request->input('dob');
          $listing->gender = $request->input('gender');
          $listing->phone_no = $request->input('phone_no');
          $listing->email = $request->input('email');
          $listing->company_name = $request->input('company_name');
          $listing->user_id = auth()->user()->id;
  
          $listing->save();
  
          return redirect('/dashboard')->with('success', 'Listing Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();

         return redirect('/dashboard')->with('success', 'Listing Updated');
    }
}
