<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recette;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;





class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::select()
            ->orderby('name')
            ->paginate(10);
       
        return view('user.index', ["users" => $users]);
    }

    public function index2()
    {
        // Set variables in the extended controller
        $this->users = User::all();
        $this->exams = Recette::all();

        // Pass the data to the Blade view using $this->data
        return view('user.index2', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20'
        ]);

        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect(route('user.index'))->withSuccess('User created successfully!');
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
        //
    }

    public function forgot()
    {
        return view('user.forgot');
    }

    /**
     * Get the recettes for the user.
     */
    public function recettes(): HasMany
    {
        return $this->hasMany(Recette::class);
    }
}
