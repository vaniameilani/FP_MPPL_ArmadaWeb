<?php

namespace App\Http\Controllers;

use \App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $services = \App\Models\service::all();
        $payments = \App\Models\Payment::all();
        $users = Auth::User();

        return view('order.index', ['services' => $services, 'payments' => $payments, 'users' => $users]);
    }

    public function order_admin()
    {
        $orders = Order::all();
        // $statuss = \App\Models\Status::all();x
        // $services->dd();
        return view('order.order', ['orders' => $orders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->nama = $request->nama;
        $order->alamat = $request->alamat;
        $order->paket_kursus = $request->catalog;
        $order->Pembayaran_op = $request->paymentOp;
        $order->pengirim = $request->sender;
        $order->no_rekening = $request->rekening;
        $order->total_pembayaran = $request->payment;

        $order->save();

        // return redirect('/order/success');
    }

    public function success()
    {
        return view('order.success');
    }

    public function destroy(order $order)
    {
        order::destroy($order->id);
        return redirect('/admin/order/list')->with('status', 'Order has been deleted!');
    }
}
