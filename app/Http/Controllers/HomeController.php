<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    protected $user;
 public function __construct(User $user)
 {
  $this->user=$user;
 } 

    /**
     * Display a listing of the resource.
     */
    public function checkUserType(){
        if(!Auth::user()){
            return redirect('');

        }
        if(Auth::user()->userType==='ADM'){
            return redirect('admin.thongke');
            
        }
        if(Auth::user()->userType==='STD'){
            return redirect('welcome');
            
        }
        if(Auth::user()->userType==='TEA'){
            return redirect('welcome');
            
        }

    }
    public function index()
    {
       
       $users=$this->user->getList();
     
        return view('admin.thongke',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
