<?php

namespace App\Http\Livewire\Portal;

use Livewire\Component;
use App\Models\Restaurant;
use App\Models\Project;
use Illuminate\Support\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Projects extends Component
{

    public function store(Request $request)
    {
        $image = $request->file('fimg');
        $image_name = $image->getClientOriginalName();
        $image->move(public_path('/foods'),$image_name);
        $image_path = "/foods/" . $image_name;
        Project::create([
            'name' => $request->name,
            'cost' => $request->cost,
            'detail' => $request->detail,
            'type' => $request->type,
            'calories' => $request->calories,
            'ingredient' => $request->ingredient,
            'restaurant_id' => $request->restaurant_id,
            'img_src' => $image_path,
        ]);
        return redirect()->intended('/projects');
    }

    public function update(Request $request, $id) 
    {   
        if($request->limg == null) {
            $image_path = '';
        } else {
            $image = $request->file('fimg');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/foods'),$image_name);
            $image_path = "/foods/" . $image_name;
        }

        $image_path == null ? 
        Project::where('id', $id)
          ->update([
            'name' => $request->name,
            'cost' => $request->cost,
            'detail' => $request->detail,
            'type' => $request->type,
            'calories' => $request->calories,
            'ingredient' => $request->ingredient,
            'restaurant_id' => $request->restaurant_id
        ]):
        Project::where('id', $id)
          ->update([
            'name' => $request->name,
            'cost' => $request->cost,
            'detail' => $request->detail,
            'type' => $request->type,
            'calories' => $request->calories,
            'ingredient' => $request->ingredient,
            'restaurant_id' => $request->restaurant_id,
            'img_src' => $image_path,
        ]);
       

        return redirect()->intended('/projects');

    }

    public function delete($id) {
        Project::find($id)->delete();
        return redirect()->intended('/projects');
    }

    public function render(Request $request)
    {
        $projects = Project::with('restaurant')->get();
        $restaurants = Restaurant::with('user')->get();
        if ($request->id == 'add') {
            $restaurants = Restaurant::all();
            return view('livewire.portal.projects.add', compact('restaurants'));  
        } else if ($request->type == 'edit') {
            $id = $request->id;
            $restaurants = Restaurant::all();
            $project = Project::with('restaurant')->find($id);
            return view('livewire.portal.projects.edit', compact(['restaurants', 'project']));
        }

        return view('livewire.portal.projects.index', compact('projects'));
    }
}
