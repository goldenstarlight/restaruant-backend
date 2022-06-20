<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
                <div class="card-header pb-0 text-left">
                    <h4 class="font-weight-bolder">Add Food</h4>
                </div>
                <div class="card-body pb-3">
                    <form action="{{route('update-project', $project->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label>Image</label>
                        <div class="mb-3">
                            <input type="file" class="form-control" name='fimg'>
                        </div>
                        <label>Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='name' value="{{$project->name}}"> 
                        </div>
                        <label>Type</label>
                        <div class="mb-3">
                          <select
                            class="multisteps-form__select form-control is-invalid"
                            name="type" id="choices-multiple-remove-button4" >
                            <option selected value="">{{ $project->type }}</option>
                            @php $arr = ['dessert', 'meal', 'soup'] @endphp
                            @foreach($arr as $item) 
                              @if($item == $project->type) @continue @endif
                              <option selected value="{{$item}}">{{ $item }}</option>
                            @endforeach
                          </select>
                        </div>
                        <label>Cost</label>
                        <div class="mb-3">
                            <input type="number" class="form-control" name='cost' value="{{$project->cost}}" step='0.01'  autocomplete="off" >
                        </div>
                        <label>Detail</label>
                        <div class="mb-3">
                          <textarea id="" class="form-control" name='detail' cols="30" rows="5">
                            {{$project->detail}}
                          </textarea>
                        </div>
                        <label>Calories</label>
                        <div class="mb-3">
                            <input type="number" class="form-control" name='calories' value="{{$project->calories}}" step='0.01' autocomplete="off" >
                        </div>
                        <label>Ingredient</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='ingredient' value="{{$project->ingredient}}" autocomplete="off" >
                        </div>
                        <label>Restaurant</label>
                        <div class="mb-3">
                          <select
                            class="multisteps-form__select form-control is-invalid"
                            name="restaurant_id" id="choices-multiple-remove-button4" >
                            <option selected value="{{$project->restaurant_id}}">{{ $project->restaurant->name }}</option>
                            @foreach($restaurants as $restaurant)
                              @if($restaurant->id == $project->restaurant_id) @continue @endif
                              <option selected value="{{$restaurant->id}}">{{ $restaurant->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
