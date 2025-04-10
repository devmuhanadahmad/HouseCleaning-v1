<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrdersController extends Controller
{
    public function confirmedOrders()
    {
        $orders = Order::with('category')->where('status', 'confirmed')->latest()->get();
        return view('dashboard.order.confirmedOrders', compact('orders'));
    }
    public function pendingOrders()
    {
        $orders = Order::with('category')->where('status', 'pending')->latest()->get();
        return view('dashboard.order.pendingOrders', compact('orders'));
    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $order = Order::with(['category', 'images'])->findOrFail($id);
        return view('dashboard.order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //$categories=Category::where('status','active')->get();
        //return view('dashboard.order.edit',compact('order','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // بدء المعاملة
        DB::beginTransaction();

        try {
            // العثور على الطلب باستخدام المعرف
            $order = Order::findOrFail($id);

            // حذف الصور المرتبطة بالطلب من القرص
            foreach ($order->images as $image) {

                // تأكد من وجود الصورة على الديسك 'public' ثم قم بحذفها
                if (Storage::disk('public')->exists($image->path)) {
                    Storage::disk('public')->delete($image->path);
                }
            }

            // حذف الطلب نفسه
            $order->delete();

                                        // حذف الصور المرتبطة بالطلب
            $order->images()->delete(); // حذف جميع الصور المرتبطة بالطلب

            // إذا تم الحذف بنجاح، تأكيد المعاملة
            DB::commit();

            // إعادة التوجيه مع رسالة نجاح
            return redirect()->route('dashboard.orders.pendingOrders')->with('success', 'Order and related images deleted successfully.');

        } catch (\Exception $e) {
            // إذا حدث خطأ، التراجع عن المعاملة
            DB::rollBack();

            // إعادة التوجيه مع رسالة خطأ
            return redirect()->route('dashboard.orders.pendingOrders')->with('error', 'Something went wrong while deleting the order and images.');
        }
    }


    public function sendMailDate(Request $request, $id)
    {
        // بدء المعاملة
        DB::beginTransaction();

        try {
            //code
            $order = Order::findOrFail($id);
            // send email date client
            // code ..
            //dd($request->input('date'));


            $order->update([
                'status'=>'confirmed'
            ]);


            DB::commit();

            session()->flash('success', __('Email sent successfully'));

            return redirect()->route('dashboard.orders.pendingOrders');

        } catch (\Exception $e) {
            // إذا حدث خطأ، التراجع عن المعاملة
            DB::rollBack();

            // إعادة التوجيه مع رسالة خطأ
            return redirect()->route('dashboard.orders.pendingOrders')->with('error', 'Something went wrong while deleting the order and images.');
        }
    }



}
