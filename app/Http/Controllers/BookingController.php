<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Booking::orderBy('created_at','DESC')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newBooking = new Booking;
        $newBooking->name = $request->booking["name"];
        $newBooking->date = $request->booking["date"];
        $newBooking->time = $request->booking["time"];
        $newBooking->message = $request->booking["message"];
        $newBooking->save();

        return $newBooking;
    }
}
