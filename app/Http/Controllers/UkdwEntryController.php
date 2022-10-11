<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;

class UkdwEntryController extends Controller
{
    public function index() {
        return view('dashboard-admin.dashboard', [
            "title" => "Admin",
            "active" => "admin"
        ]);
        // return User::join('detail_user','detail_user.username','=','user.username')->get(['user.username','detail_user.alamat','user.password']);
        // return User::select(['username'])->limit('2')->get();
    }
    public function users() {
        return view('dashboard-admin.users', [
            "title" => "Users",
            "active" => "users"
        ]);
    }
    public function rooms() {
        return view('dashboard-admin.rooms', [
            "title" => "Rooms",
            "active" => "rooms"
        ]);
    }
    public function komplain() {
        return view('dashboard-admin.komplain', [
            "title" => "Komplain",
            "active" => "komplain"
        ]);
    }
}
