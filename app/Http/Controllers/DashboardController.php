<?php

namespace App\Http\Controllers;

use App\projectdbs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;



class DashboardController extends Controller
{
    public function loginshow()
    {
        return view('homepage.auth.login');
    }
    public function loginproses(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $check = DB::table('users')
            ->where('username', $username)
            ->first();

        if ($check && HASH::check($password, $check->password)) {
            $check->isLogin = 'login';
            $check = (array)$check;
            session($check);

            return redirect('/admin/dashboard');
        }
        return back()->with('gagal', 'Coba periksa kembali otoritas keanggotaanmu atau pertanyakan kepada kepala admin.');
        // dd($request->all());
    }
    public function index()
    {
        $project = DB::table('projectdbs')
            ->orderBy('projectdbs.created_at', 'DESC')
            ->paginate(4);
        return view('homepage.auth.dashboard', ['project' => $project]);
    }
    public function addproject(Request $request)
    {
        $pro = new projectdbs();
        $pro->project_name = $request->project_name;
        $pro->category = $request->category;
        $pro->link = $request->link;
        $pro->count = '0';
        if (!$request->hasFile('file')) {
            $pro->save();
        } else {
            $lamp = $request->file('file');
            $filename = time() . '.' . $lamp->getClientOriginalExtension();
            $request->file('file')->move('homepage/freelancer/images/works/', $filename);
            $pro->file = $filename;
            $pro->save();
        }
        return back()->with('selamat', 'Projek nya berhasil ditambahkan!');
    }
}
