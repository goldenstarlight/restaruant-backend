<?php

namespace App\Http\Livewire\Portal;

use Livewire\Component;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Restaurants extends Component
{

    public function store(Request $request)
    {
        $image = $request->file('limg');
        $image_name = $image->getClientOriginalName();
        $image->move(public_path('/logos'),$image_name);

        $image_path = "/logos/" . $image_name;
        $user = Restaurant::create([
            'name' => $request->name,
            'main_food' => $request->mfood,
            'address' => $request->address,
            'phone' => $request->phone,
            'logo' => $image_path,
            'user_id' => $request->user_id,
        ]);
        return redirect()->intended('/restaurants');
    }

    public function update(Request $request, $id) 
    {   
        if($request->limg == null) {
            $image_path = '';
        } else {
            $image = $request->file('limg');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/logos'),$image_name);
            $image_path = "/logos/" . $image_name;
        }

        $image_path == null ? 
        Restaurant::where('id', $id)
          ->update([
            'name' => $request->name,
            'main_food' => $request->mfood,
            'address' => $request->address,
            'phone' => $request->phone,
            'user_id' => $request->user_id
        ]):
        Restaurant::where('id', $id)
          ->update([
            'name' => $request->name,
            'main_food' => $request->mfood,
            'address' => $request->address,
            'phone' => $request->phone,
            'logo' => $image_path,
            'user_id' => $request->user_id,
        ]);

        return redirect()->intended('/restaurants');

    }

    public function delete($id) {
        try {
            $status = 'Restaurant deleted successfully!';
            Restaurant::find($id)->delete();
        } catch (\Throwable $th) {
            $status = 'Sorry, we can not delete this restaurant becuase he is owner of foods. If you want to delete this restaurant you need to check food. Thank you!';
        }
        
        return redirect()->intended('/restaurants')->with('status', $status);
    }

    public function render(Request $request)
    {
        $restaurants = Restaurant::with('user')->get();
        if ($request->id == 'add') {
            $users = User::all();
            return view('livewire.portal.restaurants.add', compact('users'));    
        } else if ($request->type == 'edit') {
            $id = $request->id;
            $users = User::all();
            $restaurant = Restaurant::with('user')->find($id);
            return view('livewire.portal.restaurants.edit', compact(['restaurant', 'users']));
        }

        return view('livewire.portal.restaurants.index', compact('restaurants'));
    }
}
