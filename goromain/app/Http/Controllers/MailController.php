<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class MailController extends Controller
{
    public function sendMail(Request $request){
        // Lấy email từ yêu cầu POST
        $updateEmail = $request->input('email');

        // Tìm người dùng với email được cung cấp
        $user = User::where('email', $updateEmail)->first();

        // Kiểm tra nếu không tìm thấy người dùng
        if(!$user){
            return response()->json(['error'=>'Email người dùng không tồn tại'],404);
        }

        // Khởi tạo dữ liệu email
        $changedFields = [];
        $mailData = [
            'username' => $user->email, // Thay đổi từ $user->email thành $user->username nếu muốn gửi username thay vì email
            'changedField' => $changedFields,
        ];

        // Loại email
        $mailKind = 'resetpassword';

        // Gửi email
        Mail::to($updateEmail)->send(new ConfirmationMail($mailData,$mailKind));

        // Phản hồi về thành công
        return response()->json(['message' => 'Email đã được gửi thành công'], 200);
    }
}
