<?php

namespace App\Http\Controllers\Auth;

use App\Classes\ActivationService;
use App\Http\Controllers\Controller;
use App\User; // gio moi use, nay da use dau ma bao no xam, use cai clas nao Nam dung ay, chu ko phai cai class cha cua no
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $activationService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ActivationService $activationService)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->activationService = $activationService;
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if (!$user->active) {
            $this->activationService->sendActivationMail($user);
            auth()->logout();
            flash('bạn cần active tài khoản trước, vui lòng kiểm tra email!')->error();
        }
        return response()->redirectToRoute('login');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


    public function postLogin(Request $request)
    { // class Request chưa use

        $rules = [

            'user' => 'required',

            'password' => 'required',

        ];



        $validator = Validator::make($request->all(), $rules); // message có vẻ chả ý nghĩa j =))

        if ($validator->fails()) { // tên bineesn bình thường ko viết hoa chữ đầu
            $errors = $validator->errors()->all();
            $errors = implode(', ', $errors); // gom het loi thanh 1 cai string, ham flash no nhan string thoi
            flash($errors)->error(); // message là mảng, ko được truyền như string // bao loi thi dung error, bao thanh cong thi dung success

        } else { // ko viet hoa
            // TODO: kiem tra xem user co ton tai trong db hay khong
            // TODO: kiem tra xem mat khau khop voi mat khau trong db khong
            // TODO: Khop het roi thi tao session cho user
            $arr=[

                'name' => $request->user,

                'password'=> Hash::make($request->password) // cai dau nhay co van de luon =))

            ];

            If(User::where('name', $request->user)->count()==0){
                flash('users không tồn tại')->error();
            }
            else {
                $atv = User::where('name', $request->user)->first()->active;
                if ($atv < 1) {
                    flash('tài khoản chưa được active')->error();
                    return redirect('/login');
                } else {
                    $hashedPassword = User::where('name', $request->user)->first()->password;
                    if (!Hash::check($request->password, $hashedPassword)) {
                        flash('sai password')->error();
                    } else {
                        $user = User::where('name', $request->user)->first();
                        session(['user' => $user]); // co thay set gia tri session is_admin đâu nhỉ
                        flash('login success!')->success();
                        return redirect('/');
                    }

                }
            }
        }

        return response()->redirectToRoute('login');
    }
} // xoa mat 1 cái thẻ đống class