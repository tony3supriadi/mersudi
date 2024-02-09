<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MCabang;
use App\Models\MDaerah;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    public function index()
    {
        return view('pages.auth.account');
    }

    public function account_update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
        ]);

        $data = $request->all();

        if ($request->password) {
            $request->validate([
                'password' => 'required|min:6|confirmed',
            ]);
            $data['password'] = bcrypt($request->password);
        } else {
            $data = Arr::except($data, array('password'));
        }

        if ($request->avatar) {
            $request->validate([
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $filename = Str::random(32) . '.' . $request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->storeAs('avatars', $filename, 'public');
            $data['photo'] = $filename;
        }

        auth()->user()->update($data);

        if (Auth::user()->hasRole('Pengda')) {
            $id = $request->daerah_id;
            $daerah = MDaerah::find($id);
            $daerah->nama = $request->nama;
            $daerah->alamat_sekretariat = $request->alamat_sekretariat;
            $daerah->latlng = $request->latlng;
            $daerah->save();
        }

        if (Auth::user()->hasRole('Pengcab')) {
            $id = $request->cabang_id;
            $cabang = MCabang::find($id);
            $cabang->nama = $request->nama;
            $cabang->alamat_sekretariat = $request->alamat_sekretariat;
            $cabang->latlng = $request->latlng;
            $cabang->save();
        }

        return response()->json(['success' => true]);
    }
}
