<?php

// Auth Helper
namespace App\Http\Controllers\Auth;
// namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

// Controller
use App\Http\Controllers\Controller;

// URL Helper
use Illuminate\Routing\UrlGenerator;
use Illuminate\Routing\Redirector;

// Database Helper
use Illuminate\Support\Facades\DB;

// Request Helper
use Illuminate\Http\Request;
use App\Http\Requests;

// Model
use App\Models\M_member; 
use App\Models\M_portofolio_member;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller User
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:userguard')->except(['logout','logoutUser']);
    }

        /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showLoginFormPolos()
    {
        return view('auth.loginPolos');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' =>  'required|email',
            'password' => 'required|min:6'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Attempt to log the user in
        if (Auth::guard('userguard')->attempt($credential, $request->member))
        {   
            if ($request) {

                $memberNIM = substr($request->email, 0, 15);

                session(['memberNIMSessionGlobal' => $memberNIM]);
                return redirect('/member')->with('memberNIMSession', $memberNIM);
            }
            else {
                logoutUser();
            }
            
        }
        
        // If Unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));

    }

    public function loginPolos(Request $request){

        $memberNIM = substr($request->number, 0, 15);
        $member = M_member::find($memberNIM);

        if(isset($member))
        {
            session(['memberNIMSessionGlobalPolos' => $memberNIM]);
            return redirect('/member')->with('memberNIMSession', $memberNIM);
        }
        else 
        {

            echo '<script type="text/javascript">alert("NIM anda tidak ditemukan. \nKemungkinan typo atau tidak terdaftar sebagai Anggota Raion Aktif");</script>';
            return $this->showLoginFormPolos();
        }
    }

    public function logoutUser(Request $request)
    {
        Auth::guard('userguard')->logout();
        $request->session()->forget('memberNIMSessionGlobal');
        $request->session()->forget('memberNIMSessionGlobalPolos');
        return redirect('/');
    }

}
