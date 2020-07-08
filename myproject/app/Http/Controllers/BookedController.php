<?php

namespace App\Http\Controllers;
use App\Room;
use App\Booked;
use Illuminate\Http\Request;

class BookedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRoom()
    {
//        $roomF=DB::table('room')->select('*')->where('loai_phong','first class')->where('isFree',1)->get();
//        $roomD=DB::table('room')->select('id')->where('loai_phong','deluxue room')->where('isFree',1)->get();
//        $roomS=DB::table('room')->select('id')->where('loai_phong','suite room')->where('isFree',1)->get();
        $roomF= Room::where('loai_phong','first class')->where('isFree',1)->get();
        $roomD= Room::where('loai_phong','deluxue room')->where('isFree',1)->get();
        $roomS= Room::where('loai_phong','suite room')->where('isFree',1)->get();
//        dd($roomD);
//        dd($room);
        return view('bookedroom',compact('roomF','roomD','roomS'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('bookedroom');
    }
    public  function home(){
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRoom(Request $request)
    {
        $b=new Booked;
        $b->nameCustomer=$request->nameCustomer;
        $b->phonenumber=$request->phonenumber;
        $b->checkin=$request->checkin;
        $b->checkout=$request->checkout;
        $loaiphong= Room::where('loai_phong',$request->loai_phong)->where('isFree',1)->first();
        $b->booked_idphong = $loaiphong->id;
        $b->description=$request->description;
        Room::where('id',$b->booked_idphong)->update(array(
            'isFree' => 0,
        ));
//        dd($loaiphong->id);
//        $r=Room::find($b->booked_idphong);
//        $r->isFree=0;
//        $b->save();

//        dd($b->booked_idphong);

        $b->save();

        return redirect(route('index'))->with('success','dAT PHONG THANH CONG');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
