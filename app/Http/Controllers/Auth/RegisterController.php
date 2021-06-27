<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\FacultyUser;

use App\UserUniversity;
class RegisterController extends Controller
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     protected function create(array $data)
     {
        $authToken = $this->generateApiToken();
         $status='active';
         if ($data['role']== 2) {
            $status='nonactive';
        }
      $user= User::create([
             'name' => $data['name'],
             'password' => Hash::make($data['password']),
             'status' =>  $status,
             'email' => $data['email'],
             'role' => $data['role'],
             'api_token' => $authToken,
               ]);

             if ($data['role']== 2) {

                  $facultyuser=new FacultyUser;
                  $facultyuser->user_id = $user->id;
                  $facultyuser->fac_id = $data['faculty'];
                  $facultyuser->save();
                 
                   $universityuser=new UserUniversity;
                   $universityuser->user_id = $user->id;
                   $universityuser->uni_id = $data['university'];
                   $universityuser->save();
                  }
                      return $user;



     }
     private function generateApiToken() {
        $authToken = base64_encode( str_random( 40 ) );
        //check if api token exists
        $tokenExists = User::where( 'api_token', $authToken )->first();
        if ( $tokenExists ) {
            $authToken = $this->generateApiToken();
        }
        return $authToken;
    }

}
