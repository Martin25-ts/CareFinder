<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;


class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $people = new People();
        return view('dashboard',compact('people'));
    }

    public function favorite($name){

        return view('User-page.favorite',['name' => $name]);
    }

    public function profile($name){

        return view('User-page.profile',['name' => $name]);
    }

    public function register(){


        return view('Register-Page.register');



    }

    public function inputregister(Request $req){
        $people = new People();
        $people->namadepan = $req->namadepan;
        $people->namabelakang = $req->namabelakang;
        $people->email = $req->email;
        $people->phone_number = $req->phone_number;
        $people->password = $req->password;
        $people->password_confirm = $req->password_confirm;

        $people->save();

        return view('Register-Page.register2');

    }

    public function register2(){

        return view('Register-Page.register2');
    }

    public function Backup_1(){
        return view('Backup-Page.backup-page-1');
    }

    public function Backup_2(){
        return view('Backup-Page.backup-page-2');
    }

    public function Backup_3(){
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
