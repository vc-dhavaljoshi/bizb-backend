<?php

namespace App\Http\Controllers\Backend\User;

use Auth;
use App\Models\User;
use Illuminate\Support\Arr;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Backend\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $response = $this->userRepository->store($request);

        return redirect()->route('backend.users.index'); 
    } 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $requestData = $request->all();
        $user->username = $requestData['username'];
        $user->name = $requestData['name'];
        $user->email = $requestData['email'];
        $user->mobile = $requestData['mobile'];
        if(isset($requestData['password']) && !empty($requestData['password'])) {
            $user->password = Hash::make($request->all()['password']);
        }
        $user->save();
        $avatar = $request->avatar;
        if(isset($avatar) && $avatar != '') {
            $response = $user->addMediaFromRequest('avatar')
                            ->preservingOriginal()
                            ->toMediaCollection('avatar');
        }
        if(Auth::user()->id != $user->id) {
            $user->syncRoles([@$request->all()['role']]);
            $user->syncPermissions(@$request->all()['permissions']);
        }
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user) {
            $response = $user->delete();
        }
        return redirect()->route('admin.users.index');
    }
}
