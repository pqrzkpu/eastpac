<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserAccount;
use App\UserProfile;
use App\UserWallet;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use Browser;


class ProfileController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Profile";
        $useraccount = UserAccount::where('userid',Auth::user()->id)->first();
        // $userwallet = UserWallet::where('user_id',Auth::user()->id)->first();
        $userprofile = UserProfile::where ('userid',Auth::user()->id)->first();
        // $userprofile = [];
        if(is_null($userprofile)) {
            $userprofile = (Object) [
                'address' => '',
                'personalid' => '',
                'bod' => '',
                'pob' => '',
            ];
        }

        if(is_null($useraccount)) {
            $useraccount = (Object) [
                'userid' => '',
                'UserAccountID' => '',
                'UserKey1' => '',
                'UserKey2' => '',
                'tipe' => ''
            ];
        }

        return view('profile.index', compact('title','userprofile','useraccount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $username = Auth::user()->username;

        $validator = Validator::make($request->all(), [
            'fullname' => 'required|regex:/^[\pL\s\-]+$/u'
        ]);

        if($validator->fails()) {
            $result = ['msg' => 'Update Fullname Failed', 'type' => 'danger'];
            $status = 500;
        } else {
            $result = ['msg' => 'Udpate Fullname Success', 'type' => 'success'];
            $status = 200;

            User::where('username', $username)->update([
                'name' => $request->fullname
            ]);
        }

        return response()->json($result, $status);
    }

    public function updateProfile(Request $request)
    {
        // dd($request->file('avatar'));
        $validator = Validator::make($request->all(), [
            'avatar' => 'required|image'
        ]);

        if($validator->fails()) {

            return redirect()->back()->withErrors($validator);
        } else {

           /* User::where('username', $username)->update([
                'name' => $request->fullname
            ]);*/
            if (isset($request->avatar)) {
                // dd('kakaikuda');
                Auth::user()->addMediaFromRequest("avatar")->toMediaCollection('avatars');
            }
            return redirect()->back();
        }



        return response()->json($result, $status);
    }

    public function updatePassword(Request $request)
    {
        $username = Auth::user()->username;

        $validator = Validator::make($request->all(), [
            'password_old' => 'required',
            'password' => 'required|confirmed'
        ]);


        $check_old_password = Hash::check($request->password_old, Auth::user()->password);
        // dd($validator->errors());
        if($validator->fails()) {
            $result = ['msg' => $validator->errors()->first(), 'type' => 'danger'];
            $status = 500;
        } else {
            if($check_old_password) {
                activity('change_password')
                ->causedBy(Auth::user())
                ->performedOn(new User)
                ->withProperties(
                    [
                        'device' => Browser::platformName(),
                        'browser' => Browser::browserFamily(),
                        'ip_addr' => request()->ip()

                    ])
                ->log('Change Password');

                $result = ['msg' => 'Udpate Password Success', 'type' => 'success'];
                $status = 200;

                User::where('username', $username)->update([
                    'password' => bcrypt($request->password)
                ]);


            } else {
                $result = ['msg' => 'Wrong old password', 'type' => 'danger'];
                $status = 500;
            }
        }

        return response()->json($result, $status);
    }

    public function UpdatePersonalProfile(Request $request)
    {
        $userid = Auth::user()->id;
        $validator = Validator::make($request->all(), [
            'address'     => 'required',
            'bod'  => 'required',
            'pob'       => 'required',
            'personalid' => 'required',
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $userprofile = new UserProfile([
                'userid' =>$userid,
                'address' => $request->get('address'),
                'personalid'=> $request->get('personalid'),
                'bod'=> $request->get('bod'),
                'pob'=> $request->get('pob'),
              ]);
            $userprofile->save();
            return redirect()->back();
        }
    }

    public function UserAccounts(Request $request)
    {
        $userid = Auth::user()->id;
        $validator = Validator::make($request->all(), [
            'UserAccountID'     => 'required',
            'UserKey1'  => 'required',
            'UserKey2'  => 'required',
            'tipe' => 'required',
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $useraccounts = new UserAccounts([
                'userid' =>$userid,
                'UserAccountID' => $request->get('UserAccountID'),
                'UserKey1'=> $request->get('UserKey1'),
                'UserKey2'=> $request->get('UserKey2'),
                'tipe'=> $request->get('tipe'),
              ]);
            $useraccounts->save();
            return redirect()->back();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
