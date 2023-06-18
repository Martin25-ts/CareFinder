<?php

namespace App\Http\Controllers;

use App\Models\msuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\IsEmpty;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = new msuser();
        return view('dashboard', compact('people'));
    }

    public function favorite($name)
    {

        return view('User-page.favorite', ['name' => $name]);
    }

    public function profile($name)
    {

        return view('User-page.profile', ['name' => $name]);
    }

    public function register()
    {


        return view('Register-Page.register');
    }

    public function inputregister(Request $req)
    {
        $lastUserId = msuser::max('userid');
        $lastUserIdNumber = substr($lastUserId, 2);
        $newUserIdNumber = (int)$lastUserIdNumber + 1;
        $newUserId = sprintf('US%03d', $newUserIdNumber);

        $people = new msuser();
        $people->userid = $newUserId;
        $people->userfname = $req->namadepan;
        $people->userlname = $req->namabelakang;
        $people->password = bcrypt($req->password);
        $people->userphone = $req->phone_number;
        $people->useremail = $req->email;
        $people->userDOB = $req->userDOB;

        $people->save();

        return view('Register-Page.register2');
    }



    public function register2()
    {

        return view('Register-Page.register2');
    }

    public function Backup_1()
    {
        return view('Backup-Page.backup-page-1');
    }

    public function Backup_2()
    {
        return view('Backup-Page.backup-page-2');
    }

    public function Backup_3()
    {
        return view('Backup-Page.backup-page-3');
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
     *
     *
     *
     */

    public function update(Request $req)
    {
        $userid = Auth::user()->userid;
        $user = msuser::where('userid', $userid)->first();

        $height = $req->input('height');
        $gender = $req->input('gender');
        $relStatus = $req->input('relStatus');
        $weight = $req->input('weight');
        $bloodType = $req->input('bloodType');
        $insurance = $req->input('insurance');
        $disease = $req->input('disease');

        if (!empty($disease)) {
            $user->userdisesase = $disease;
        }else{
            $user->userdisesase = 'required';
        }

        if (!empty($height)) {
            $user->userheight = $height;
        }

        if (!empty($weight)) {
            $user->userweight = $weight;
        }


        if ($gender !== 'option1') {
            if ($gender === 'option2') {
                $user->genderId = 'GN001'; // Set appropriate value for Male
            } else if ($gender === 'option3') {
                $user->genderId = 'GN002'; // Set appropriate value for Female
            } else if ($gender === 'option4') {
                $user->genderId = 'GN003'; // Set appropriate value for Prefer Not To Say
            }
        }

        if ($relStatus !== 'option1') {
            if ($relStatus === 'option2') {
                $user->relationshipId = 'RL001'; // Set appropriate value for Single
            } else if ($relStatus === 'option3') {
                $user->relationshipId = 'RL002'; // Set appropriate value for Married
            } else if ($relStatus === 'option4') {
                $user->relationshipId = 'RL003'; // Set appropriate value for Divorced
            }
        }


        if ($bloodType !== 'option1') {
            if ($bloodType === 'option2') {
                $user->bloodId = 'BL001'; // Set appropriate value for A
            } else if ($bloodType === 'option3') {
                $user->bloodId = 'BL003'; // Set appropriate value for AB
            } else if ($bloodType === 'option4') {
                $user->bloodId = 'BL004'; // Set appropriate value for O
            } else if ($bloodType === 'option5') {
                $user->bloodId = 'BL002'; // Set appropriate value for B
            }
        }

        if ($insurance !== 'required') {
            $user->userinsurance = $insurance;
        }

        $user->save();
        $username = explode(' ', trim($user->userfname))[0];

        return redirect('/' . $username . '-profile');
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
