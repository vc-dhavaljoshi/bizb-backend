<?php
namespace App\Repositories\Backend;
use App\Repositories\Repository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository extends Repository
{	

	public function store($request)
	{
		try {
			$response = [];
			
			$user = new User();
			$user->name = $request->name;
			$user->username = $request->username;
			$user->email = $request->email;
			$user->mobile = $request->mobile;
			$user->password = Hash::make($request->password);
			
			if($user->save()) {
				$response['status'] = 1;
				$response['code'] = 200;		
			} else {
				$response['status'] = 0;
				$response['code'] = 500;
			}

			return $response;
		} catch (\Exeception $ex) {
			Log::error($ex);

			$response = [];
			$response['status'] = 0;
			$response['code'] = 500;

			return $response;
		}
	}
}	