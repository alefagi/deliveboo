<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Cuisine;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }



    //Pass new data to Register Controller
    public function showRegistrationForm()
{
    $cuisines = Cuisine::all();
    return view("auth.register", compact("cuisines"));
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
            'name' => ['required', 'unique:users', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required','string'],
            'p_iva' => ['required','string','size:11','unique:users'],
            'cover' => [
                function ($attribute, $value, $fail) {
                    if ($value && !is_string($value) && !($value instanceof UploadedFile)) {
                        $fail('The '.$attribute.' must either be a string or file.');
                    }
                }   
            ],
            'cuisines' => ['required','exists:cuisines,id']
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'p_iva' => $data['p_iva'],
            'cover' => $data['cover']
        ]);
        
        if(!is_null($data['cover']) && !str_starts_with($data['cover'], 'http')) {
            $img_path = Storage::put('uploads', $data['cover']);
            $data['cover'] = $img_path;
        }
        else if(is_null($data['cover'])) {
            $data['cover'] = 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg';
        }

        $user->cuisines()->attach($data['cuisines']);
        
        return $user;
    }
}