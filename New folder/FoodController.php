<?php

namespace App\Http\Livewire\Portal;

use Livewire\Component;
use App\Models\Restaurant;
use App\Models\Food;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FoodController extends Component
{

    public function store(Request $request)
    {
        $image = $request->file('fimg');
        $image_name = $image->getClientOriginalName();
        $image->move(public_path('/foods'),$image_name);
        $image_path = "/foods/" . $image_name;
        DB::table('foods')->insert([
            'name' => $request->name,
            'cost' => $request->cost,
            'detail' => $request->detail,
            'type' => $request->type,
            'calories' => $request->calories,
            'ingredient' => $request->ingredient,
            'restaurant_id' => $request->restaurant_id,
            'img_src' => $image_path,
        ]);
        return redirect()->intended('/foods');
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
        Restaurant::find($id)->delete();
        return redirect()->intended('/restaurants');
    }

    public function render(Request $request)
    {
        $foods = Food::all();
        dd($foods);
        if ($request->id == 'add') {
          $restaurants = Restaurant::all();
          return view('livewire.portal.foods.add', compact('restaurants'));    
        } else if ($request->type == 'edit') {
          $id = $request->id;
          $users = User::all();
          $restaurant = Restaurant::with('user')->find($id);
          return view('livewire.portal.restaurants.edit', compact(['restaurant', 'users']));
        }

        return view('livewire.portal.foods.index', compact('foods'));
    }
}
