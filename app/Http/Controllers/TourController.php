<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('welcome', compact('tours'));
    }

    public function create(Tour $tour) {
        return view('tours.create', compact('tour'));
    }

    public function store(Request $request, Order $order) {
        $data = $request->validate([
            'count' => 'required | min:1 | integer',
            'tour_id' => 'required'
        ]);

        $data['user_id'] = Auth::user()->id;

        $order->create($data);

        return redirect()->route('dashboard');
    }
}
