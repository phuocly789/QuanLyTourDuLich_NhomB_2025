<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // Phương thức thanh toán qua VNPAY
    public function vnpay_payment($booking)
    {
        // Bỏ qua các loại lỗi không cần thiết
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        // Đặt múi giờ theo giờ Việt Nam
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        // Cấu hình thông tin tài khoản VNPAY
        $vnp_TmnCode = "VLQ7W9CS"; // Mã định danh merchant (Terminal ID)
        $vnp_HashSecret = "F1ZHK1GCTWQAES1CZH1ZVNUJO8YSRVCZ"; // Khóa bí mật để tạo chữ ký
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html"; // URL thanh toán (sandbox là môi trường test)
        $vnp_Returnurl = route('history', $booking->booking_user_id); // URL chuyển hướng sau khi thanh toán thành công

        // // Tính thời gian bắt đầu và hết hạn của phiên thanh toán
        // $startTime = date("YmdHis");
        // $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

        // // Các thông tin đơn hàng
        // $vnp_TxnRef = rand(1, 10000); // Mã giao dịch (ngẫu nhiên)
        // $vnp_Amount = $booking->booking_amount; // Số tiền thanh toán
        // $vnp_Locale = 'vn'; // Ngôn ngữ giao diện thanh toán
        // $vnp_BankCode = 'VNBANK'; // Mã ngân hàng thanh toán (mặc định là VNBANK)
        // $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; // Địa chỉ IP của khách hàng
        // Tính thời gian bắt đầu và hết hạn của phiên thanh toán
        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

        // Các thông tin đơn hàng
        $vnp_TxnRef = rand(1, 10000); // Mã giao dịch (ngẫu nhiên)
        $vnp_Amount = $booking->booking_amount; // Số tiền thanh toán
        $vnp_Locale = 'vn'; // Ngôn ngữ giao diện thanh toán
        $vnp_BankCode = 'VNBANK'; // Mã ngân hàng thanh toán (mặc định là VNBANK)
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; // Địa chỉ IP của khách hàng

        // Mảng chứa dữ liệu gửi lên VNPAY
        $inputData = array(
            "vnp_Version" => "2.1.0",               // Phiên bản API
            "vnp_TmnCode" => $vnp_TmnCode,          // Mã merchant
            "vnp_Amount" => $vnp_Amount * 100,      // Số tiền (nhân 100 vì đơn vị là đồng)
            "vnp_Command" => "pay",                 // Loại giao dịch
            "vnp_CreateDate" => date('YmdHis'),     // Thời gian tạo yêu cầu
            "vnp_CurrCode" => "VND",                // Đơn vị tiền tệ
            "vnp_IpAddr" => $vnp_IpAddr,            // IP người dùng
            "vnp_Locale" => $vnp_Locale,            // Ngôn ngữ
            "vnp_OrderInfo" => $vnp_TxnRef,         // Mô tả đơn hàng
            "vnp_OrderType" => "other",             // Loại đơn hàng
            "vnp_ReturnUrl" => $vnp_Returnurl,      // URL trả về sau khi thanh toán
            "vnp_TxnRef" => $vnp_TxnRef,            // Mã tham chiếu giao dịch
            "vnp_ExpireDate" => $expire             // Thời gian hết hạn thanh toán
        );

        // Nếu có mã ngân hàng thì thêm vào mảng dữ liệu
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        // Sắp xếp mảng dữ liệu theo thứ tự alphabet
        ksort($inputData);

        $query = "";       // Chuỗi query URL
        $hashdata = "";    // Chuỗi dữ liệu để tạo hash
        $i = 0;
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        // Tạo URL thanh toán đầy đủ
        $vnp_Url = $vnp_Url . "?" . $query;

        // Tạo chữ ký xác thực (SecureHash)
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); // Tạo chuỗi hash
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash; // Thêm chữ ký vào URL
        }

        // Chuyển hướng trình duyệt sang trang thanh toán VNPAY
        // header('Location: ' . $vnp_Url);
        header('Location: ' . $vnp_Url);
        die(); // Kết thúc chương trình sau khi redirect
    }


    //Cach2
    // public function vnpay_payment1($booking)
    // {
    //     if (isset($_POST['redirect'])) {
    //         $id = $booking->booking_id;
    //         error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    //         date_default_timezone_set('Asia/Ho_Chi_Minh');

    //         $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    //         $vnp_Returnurl = route('history', $booking->booking_user_id);
    //         $vnp_TmnCode = "VLQ7W9CS"; //Mã website tại VNPAY
    //         $vnp_HashSecret = "F1ZHK1GCTWQAES1CZH1ZVNUJO8YSRVCZ"; //Chuỗi bí mật

    //         $vnp_TxnRef = rand(00, 999);  //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
    //         $vnp_OrderInfo = 'Thanh toán hóa đơn';
    //         $vnp_OrderType = 'billpayment';
    //         $vnp_Amount = $booking->booking_amount * 100;
    //         $vnp_Locale = 'vn';
    //         $vnp_BankCode = 'NCB';
    //         $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
    //         //Add Params of 2.0.1 Version
    //         // $vnp_ExpireDate = $_POST['txtexpire'];
    //         //Billing
    //         // $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
    //         // $vnp_Bill_Email = $_POST['txt_billing_email'];
    //         // $fullName = trim($_POST['txt_billing_fullname']);
    //         // if (isset($fullName) && trim($fullName) != '') {
    //         //     $name = explode(' ', $fullName);
    //         //     $vnp_Bill_FirstName = array_shift($name);
    //         //     $vnp_Bill_LastName = array_pop($name);
    //         // }
    //         // $vnp_Bill_Address = $_POST['txt_inv_addr1'];
    //         // $vnp_Bill_City = $_POST['txt_bill_city'];
    //         // $vnp_Bill_Country = $_POST['txt_bill_country'];
    //         // $vnp_Bill_State = $_POST['txt_bill_state'];
    //         // // Invoice
    //         // $vnp_Inv_Phone = $_POST['txt_inv_mobile'];
    //         // $vnp_Inv_Email = $_POST['txt_inv_email'];
    //         // $vnp_Inv_Customer = $_POST['txt_inv_customer'];
    //         // $vnp_Inv_Address = $_POST['txt_inv_addr1'];
    //         // $vnp_Inv_Company = $_POST['txt_inv_company'];
    //         // $vnp_Inv_Taxcode = $_POST['txt_inv_taxcode'];
    //         // $vnp_Inv_Type = $_POST['cbo_inv_type'];
    //         $inputData = array(
    //             "vnp_Version" => "2.1.0",
    //             "vnp_TmnCode" => $vnp_TmnCode,
    //             "vnp_Amount" => $vnp_Amount,
    //             "vnp_Command" => "pay",
    //             "vnp_CreateDate" => date('YmdHis'),
    //             "vnp_CurrCode" => "VND",
    //             "vnp_IpAddr" => $vnp_IpAddr,
    //             "vnp_Locale" => $vnp_Locale,
    //             "vnp_OrderInfo" => $vnp_OrderInfo,
    //             "vnp_OrderType" => $vnp_OrderType,
    //             "vnp_ReturnUrl" => $vnp_Returnurl,
    //             "vnp_TxnRef" => $vnp_TxnRef,
    //             // "vnp_ExpireDate" => $vnp_ExpireDate,
    //             // "vnp_Bill_Mobile" => $vnp_Bill_Mobile,
    //             // "vnp_Bill_Email" => $vnp_Bill_Email,
    //             // "vnp_Bill_FirstName" => $vnp_Bill_FirstName,
    //             // "vnp_Bill_LastName" => $vnp_Bill_LastName,
    //             // "vnp_Bill_Address" => $vnp_Bill_Address,
    //             // "vnp_Bill_City" => $vnp_Bill_City,
    //             // "vnp_Bill_Country" => $vnp_Bill_Country,
    //             // "vnp_Inv_Phone" => $vnp_Inv_Phone,
    //             // "vnp_Inv_Email" => $vnp_Inv_Email,
    //             // "vnp_Inv_Customer" => $vnp_Inv_Customer,
    //             // "vnp_Inv_Address" => $vnp_Inv_Address,
    //             // "vnp_Inv_Company" => $vnp_Inv_Company,
    //             // "vnp_Inv_Taxcode" => $vnp_Inv_Taxcode,
    //             // "vnp_Inv_Type" => $vnp_Inv_Type
    //         );

    //         if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    //             $inputData['vnp_BankCode'] = $vnp_BankCode;
    //         }
    //         if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
    //             $inputData['vnp_Bill_State'] = $vnp_Bill_State;
    //         }

    //         //var_dump($inputData);
    //         ksort($inputData);
    //         $query = "";
    //         $i = 0;
    //         $hashdata = "";
    //         foreach ($inputData as $key => $value) {
    //             if ($i == 1) {
    //                 $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    //             } else {
    //                 $hashdata .= urlencode($key) . "=" . urlencode($value);
    //                 $i = 1;
    //             }
    //             $query .= urlencode($key) . "=" . urlencode($value) . '&';
    //         }

    //         $vnp_Url = $vnp_Url . "?" . $query;
    //         if (isset($vnp_HashSecret)) {
    //             $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //
    //             $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
    //         }
    //         $returnData = array(
    //             'code' => '00', 'message' => 'success', 'data' => $vnp_Url
    //         );
    //         if (isset($_POST['redirect'])) {

    //             header('Location: ' . $vnp_Url);
    //             // $booking->save();
    //             die();
    //         } else {
    //             echo json_encode($returnData);
    //         }
    //         // vui lòng tham khảo thêm tại code demo
    //     }
    // }
}
