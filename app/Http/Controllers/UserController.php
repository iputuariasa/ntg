<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Branches;
use App\Models\Incentive;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index',[
            'branches' => Branches::all(),
            'incentives' => Incentive::all(),
            'users' => User::all()
        ]);
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
        // dd($request);
        try {
            $validatedData = new User();
            $validatedData->branches_id = $request->input('branches_id');
            $validatedData->incentive_id = $request->input('incentive_id');
            $validatedData->role = $request->input('role');
            $validatedData->name = $request->input('name');
            $validatedData->position = $request->input('position');
            $validatedData->username = $request->input('username');
            $validatedData->password = bcrypt('12345');
            $validatedData->save();
    
            return redirect('/admins/users')->with('success', 'Data Berhasil Ditambahkan!');
        } catch (\Throwable $th) {
            return redirect('/admins/users')->with('error', 'Data Gagal Ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // dd($user);
        try {
            User::destroy($user->id);
        
            return redirect('/admins/users')->with('success', 'Data Berhasil Dihapus!');
        } catch (\Throwable $th) {
            return redirect('/admins/users')->with('error', 'Data Gagal Dihapus!');
        }
    }

    public function import(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('excel/',$nama_file);

        // import data
        $import = Excel::import(new UsersImport(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        Storage::delete($path);

        if($import) {
            return redirect('/admins/users')->with('success', 'Data Berhasil Ditambahkan!');
        } else {
            return redirect('/admins/users')->with('error', 'Data Gagal Ditambahkan!');
        }
    }
}
