<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        // Kiểm tra xem request có chứa email không
        if ($request->has('email')) {
            // Lấy email từ yêu cầu POST
            $updateEmail = $request->input('email');

            // Tìm người dùng với email được cung cấp
            $user = User::where('email', $updateEmail)->first();

            // Kiểm tra nếu không tìm thấy người dùng
            if ($user) {
                $token = Str::random(6);
                Cache::put('password_reset_', $token, 60);

                // Khởi tạo dữ liệu email
                $changedFields = [];
                $mailData = [
                    'username' => $user->email,
                    'changedField' => $changedFields,
                    'token' => $token,
                ];

                // Loại email
                $mailKind = 'resetpassword';

                // Gửi email
                Mail::to($updateEmail)->send(new ConfirmationMail($mailData, $mailKind, $token));

                // Phản hồi về thành công
                return redirect()->route('confirmnumber');
            } else {
                return redirect()->back()->with('reset-error', 'Email chưa được đăng ký, vui lòng thử lại.');
            }
        } else {
            // Xử lý trường hợp request không chứa email
            return redirect()->back()->with('reset-error', 'Email không hợp lệ, vui lòng thử lại.');
        }
    }

    public function verifyToken(Request $request)
    {
    // Kiểm tra xem request có chứa token không
        if ($request->has('token')) {
        $token = $request->input('token');
        $cachedToken = Cache::get('password_reset_'); // Đảm bảo key được tạo đúng cách ở đây

        if ($cachedToken && $cachedToken === $token) {
            return view('newpassword');
        } else {
            return redirect()-> back()->with('token', 'Mã token không hợp lệ');
        }
        } else {
        // Xử lý trường hợp request không chứa token
        return redirect()->back()->with('reset-error', 'Dữ liệu không hợp lệ, vui lòng thử lại.');
        }
    }



    public function confirmnumber(Request $request)
    {
        return view('confirmnumber');
    }
}
