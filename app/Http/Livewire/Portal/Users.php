<?php

namespace App\Http\Livewire\Portal;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Users extends Component
{
    public $name = '';
    public $email = '';
    public $first_name = '';
    public $last_name = '';
    public $password = '';
    public $role_id = '';

    public $roles;

    public function rules() {
        return  [
            'name' => 'required|min:2',
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required',
        ];
    }

    public function allUsers(Request $request) 
    {
        $users = $request->id == null ? User::with('role')->get():
                User::with('role')->where('role_id', $request->id)->get();
        return $users;
    }

    public function store(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->intended('/portal-users');
    }

    public function edit(Request $request, $id) {
        $user = User::find($id)->get();
    }

    public function update(Request $request, $id) 
    {
        $request->password == null ? 
        User::where('id', $id)
          ->update([
            'name' => $request->name,
            'email' => $request->email,
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'role_id' => $request->role_id
        ]):
        User::where('id', $id)
          ->update([
            'name' => $request->name,
            'email' => $request->email,
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'role_id' => $request->role_id,
            'password' => $request->password
        ]);

        return redirect()->intended('/portal-users');

    }

    public function delete($id) {
        User::find($id)->delete();
        return redirect()->intended('/portal-users');
    }

    public function render(Request $request)
    {
        if ($request->id == 'add') {
            return view('livewire.portal.users.add');
        } else if($request->type == 'edit') {
            $id = $request->id;
            $user = User::find($id);
            return view('livewire.portal.users.edit', compact('user'));
        } else {
            $users = $this->allUsers($request);
            return view('livewire.portal.users.index', compact('users'));
        }
    }
}
