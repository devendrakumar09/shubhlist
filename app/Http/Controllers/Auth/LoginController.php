<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function redirectToProvider($service)
    {
        //dd(Socialite::driver($service));
        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function handleProviderCallback($service)
    {
        try{
            
            $userSocial = Socialite::driver($service)->user();
            
        }catch(\Exception $error){

            $userSocial = Socialite::driver($service)->stateless()->user();
            
        }

        
        $find_user = User::where('email',$userSocial->email)->first();
        
        if($find_user){
            Auth::login($find_user);
            return redirect('/');
        }else{  

           $user = new User;
           $user->name      =     $userSocial->name;
           $user->email     =     $userSocial->email != '' ? $userSocial->email : $userSocial->name.'@'.$service.'.com';
           $user->password  =     bcrypt(123456);
           $user->save();

            try{
                

                Mail::to($user['email'])->send(new WelcomeUser($user));
                
                
            }catch(\Swift_TransportException $e){
                
            }catch(\Exception $e){

            }
            
            $this->guard()->login($user);
            notify()->success('Registration Successfull !');
            return redirect('/');
       
        }
    }
    
     
}

