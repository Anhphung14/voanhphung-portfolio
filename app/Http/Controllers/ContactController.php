<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Gửi email
        try {
            Mail::raw(
                "Bạn nhận được liên hệ mới từ website cá nhân:\n\n" .
                "Họ tên: {$validated['name']}\n" .
                "Email: {$validated['email']}\n" .
                "Nội dung: {$validated['message']}",
                function ($mail) use ($validated) {
                    $mail->to('pphung1472@gmail.com')
                        ->subject('Liên hệ mới từ website cá nhân');
                }
            );
            return back()->with('success', 'Gửi liên hệ thành công!');
        } catch (\Exception $e) {
            Log::error('Gửi email liên hệ thất bại: ' . $e->getMessage());
            return back()->with('error', 'Gửi liên hệ thất bại. Vui lòng thử lại sau!');
        }
    }
}
