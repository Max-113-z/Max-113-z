<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shop\Entity\Booking;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    // 預約頁面
    public function BookingPage()
    {
        $binding = [
            'title' => '預約',
            'note'  => '預約頁面'
        ];
        return view('booking.booking', $binding);
    }

    // 新增預約
    public function BookingProcess(Request $request)
    {
        // 使用 Laravel 內建的驗證
        $validatedData = $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'phone'         => 'required|string|max:20',
            'num_people'    => 'required|integer|min:1',
            'booking_time'  => 'required|date',
        ], [
            'name.required' => '姓名不得為空',
            'email.required' => '郵件不得為空',
            'phone.required' => '電話不得為空',
            'num_people'    => '預約人數最少為1人',
            'booking_time.required' => '預約時間不得為空',
        ]);

        // 建立預約記錄
        Booking::create($validatedData);

        // 發送預約成功郵件
        Mail::send('email.Booking', ['name' => $validatedData['name']], function ($message) use ($validatedData) {
            $message->to($validatedData['email'], $validatedData['name'])
                ->from('a7830079@gmail.com')
                ->subject('已預約成功');
        });

        // 預約成功後導向成功頁面
        return redirect('/booking/booking')->with('message', '預約成功！');
    }
}
