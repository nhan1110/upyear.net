<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Core\FrontendController;
use Session;

class RegisterController extends FrontendController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	parent::__construct();
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
        	'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verification_token' => User::generateVerificationCode(),
        ]);
        
        $url = route('users.verify', ['token' => $user->verification_token]);
        
        $to = $user->email;
        $subject = 'Registration On Upyear.net';
        $message = 'Thank you for your sign up on our site.';// Please click the link '.$url . ' to active your account.';
        $headers = 'From: nhandev1110@gmail.com' . "\r\n" .
                    'Reply-To: nhandev1110@gmail.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

        @mail($to, $subject, $message, $headers);
        Session::flash('message', 'Register Successfully. We have send an email to your email address.');// Please check your inbox to active your account.');

        return $user;
    }
    
    public function showRegistrationForm() 
    {
    	return view($this->_FOLDER_FRONTEND.'.register.index',$this->_DATA);
    }
}
