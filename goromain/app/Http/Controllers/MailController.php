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
        // Lấy email từ yêu cầu POST
        $updateEmail = $request->input('email');
        Cache::forget('password_reset_' . $updateEmail);

        // Tìm người dùng với email được cung cấp
        $user = User::where('email', $updateEmail)->first();

        // Kiểm tra nếu không tìm thấy người dùng
        if ($user) {
            $token = Str::random(6);
            Cache::put('password_reset' . $updateEmail, $token, 6); // Sửa thành 'password_reset_' . $request->email
            // Khởi tạo dữ liệu email
            $changedFields = [];
            $mailData = [
                'username' => $user->email, // Thay đổi từ $user->email thành $user->username nếu muốn gửi username thay vì email
                'changedField' => $changedFields,
                'token' => $token,
            ];

            // Loại email
            $mailKind = 'resetpassword';

            // Gửi email
            Mail::to($updateEmail)->send(new ConfirmationMail($mailData, $mailKind,$token));

            // Phản hồi về thành công
            return redirect()->route('confirmnumber');
        }
        else{
            return redirect()->back() ->with('reset-error','Email chua duoc dang ky, vui long thu lai');
        }
    }

    public function confirmnumber(Request $request){
        return view('confirmnumber');
    }

    public function verifyToken(Request $request){
        $updateEmail = $request->input('email');
        $token = Cache::get('password_reset' . $updateEmail );
        if ($token && $token === $request->token) {
            return view('newpassword');
        } else{
        return back()->withInput()->withErrors(['token' => 'Invalid token']);
        }
    }
}
