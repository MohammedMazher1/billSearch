<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                "name" => "required|string",
                "password" => "required",
                "type" => "required",
                "user_name" => "required",
            ]);
        } catch (Exception $e) {

            return back()->with("error", "جميع الحقول مطلوبة بالشكل الصحيح");
        }

        try{
            $userData = $request->only("name","password","type","user_name");
            $user = User::create($userData);
        }catch (Exception $e) {
            return back()->with("error", "لم يتم تخزين البيانات");
        }

        return redirect()->route("users.index");
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
        $user = User::find($id); 
        return view("users.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $this->validate($request, [
                "name" => "required|string",
                "user_name" => "required",
                "password" => "required",
                "type" => "required",
            ]);
        } catch (Exception $e) {

            return back()->with("error", "جميع الحقول مطلوبة بالشكل الصحيح");
        }
        try{
            $userData = $request->only("name","password","type","user_name");
            $user = User::find($id);
            $user->update($userData);

        }catch (Exception $e) {
            return back()->with("error", "لم تتم عملية التعديل حاول مرة اخرى");
        }
        return redirect()->route("users.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::find($id);
            $user->delete();
        }catch (Exception $e) {
            return back()->with("error", "لم تتم عملية الحذف");
         }
         return redirect()->route("users.index");
    }
}
