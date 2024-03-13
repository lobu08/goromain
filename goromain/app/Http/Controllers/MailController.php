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
    public function register_sendMail(Request $request)
    {
        // Kiểm tra xem request có chứa email không
        if ($request->has('email')) {
            // Lấy email từ yêu cầu POST
            $updateEmail = $request->input('email');

            // Tìm người dùng với email được cung cấp
            $user = User::where('email', $updateEmail)->first();

            // Kiểm tra nếu không tìm thấy người dùng
            if (!$user) {
                $token = Str::random(6);
                Cache::put('register_token', $token, 60);

                // Khởi tạo dữ liệu email
                $changedFields = [];
                $mailData = [
                    'username' => $updateEmail,
                    'changedField' => $changedFields,
                    'token' => $token,
                ];
                // Loại email
                $mailKind = 'register';

                // Gửi email
                Mail::to($updateEmail)->send(new ConfirmationMail($mailData, $mailKind));

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

    public function resetpw_sendMail(Request $request)
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
                Cache::put('password_token', $token, 60);

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
                Mail::to($updateEmail)->send(new ConfirmationMail($mailData, $mailKind));

                // Phản hồi về thành công
                return redirect()->route('confirmnumber');
            } else {
                return redirect()->back()->with('register-error', 'Email đã từng được đăng ký. Nếu bạn quên mật khẩu hãy đặt lại.');
            }
        } else {
            // Xử lý trường hợp request không chứa email
            return redirect()->back()->with('register-error', 'Email không hợp lệ, vui lòng thử lại.');
        }
    }

    public function verifyToken(Request $request)
{
    // Kiểm tra xem request có chứa token không
    if ($request->has('token')) {
        $token = $request->input('token');
        $cachedToken_resetpw = Cache::get('password_token'); // Đảm bảo key được tạo đúng cách ở đây
        $cachedToken_register = Cache::get('register_token');

        if ($cachedToken_resetpw && $cachedToken_resetpw === $token) {
            // Nếu token là của reset password
            return view('newpassword');
        } elseif ($cachedToken_register && $cachedToken_register === $token) {
            return view('signupwithmail');
        } else {
            // Nếu token không hợp lệ
            return redirect()->back()->with('token', 'Mã token không hợp lệ');
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
