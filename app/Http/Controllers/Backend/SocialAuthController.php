<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\Services\SocialAccountService;
use Illuminate\Support\Facades\Log;
use App\User;

class SocialAuthController extends Controller
{
	public function redirect($provider)
	{
		return Socialite::driver($provider)->redirect();
	}
	public function callback($provider)
	{
		$getInfo = Socialite::driver($provider)->user(); 
		$user = $this->createUser($getInfo,$provider); 
		auth()->login($user); 
		return redirect()->to('/');
	}
	function createUser($getInfo,$provider){
		$user = User::where('provider_id', $getInfo->id)->first();
		if (!$user) {
			$user = User::create([
				'name'     => $getInfo->name,
				'email'    => $getInfo->email,
				'provider' => $provider,
				'provider_id' => $getInfo->id
			]);
		}
		return $user;
	}
}
