<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Statuses;
use App\Models\BookOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $academicYearId = 1;

        $draftOrder = [];
        $waitingOrders = [];
        $totalOrder = 0;
        $draftOrder = Auth::user()->orders()->draft()->first();
        $waitingOrders = Auth::user()->orders()->waiting()->get();


        if($draftOrder){
            $draftOrderId = $draftOrder->id;
            $draftOrder->load(['books.sales' => function($q) use ($academicYearId){

                $q->where('academic_year_id', $academicYearId);
            }]);

            foreach ($draftOrder->books as $book){
                $totalOrder += $book->sales[0]->student_price;
            };

        }else{
            $draftOrderId = $draftOrder;

        }

        return view('order.index', compact('draftOrder','draftOrderId', 'waitingOrders', 'totalOrder'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $draftOrderId = Statuses::where('name', 'brouillon')->first()->id;

        $presentOrder = Auth::user()->orders()->draft()->first();

        if($presentOrder){
            $presentOrder->books()->attach($request->bookId,[
                'quantity' => 1
            ]);

            return redirect('/order');

        }else{

            $order = Order::create([
                'user_id' => Auth::user()->id,
                'academic_year_id' => '1'
            ]);

            $order->books()->attach($request->bookId,[
                'quantity' => 1
            ]);
            $order->status()->attach($draftOrderId);

            return redirect('/order/');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order->load('status');
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        return $order;
        $order->delete();
        return redirect('/order');
    }

    /**
     * Valide the specified order
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function validatedOrder(Request $request, Order $order)
    {
        $draftOrderId = Statuses::where('name', 'brouillon')->first()->id;
        $waitingOrderId = Statuses::where('name', 'en attente')->first()->id;

        $tmp = Order::where('id', $request->draftOrderId)->first();
        $tmp->status()->detach($draftOrderId);
        $tmp->status()->attach($waitingOrderId);
        return redirect('/order');
    }

    /**
     * Update status
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request, Order $order)
    {
        $curentOrder = Order::where('id', $request->orderId)->first();
        //return $request;
        $curentOrder->status()->detach($request->statusOrderId);
        $curentOrder->status()->attach($request->status);
        return redirect('/students');
    }
}
