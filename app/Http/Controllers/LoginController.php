<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // consume api
        $client = new Client();
        $response = $client->request('GET', 'https://api.unsplash.com/photos/-Gd4GjhtC4k?client_id=ONn33KfToo7Y-sU9vO899uGYnepYhHCReKOczup3IiU&collections=market');
        $response = $response->getBody()->getContents();
        $response = json_decode($response);
        // dd($response->urls);
        $data = [
            "title" => "Login",
            "image" => $response->urls,
        ];
        return view('login.index', $data);
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', "Login gagal, username atau password salah");
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}