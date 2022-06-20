<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
                <div class="card-header pb-0 text-left">
                    <h4 class="font-weight-bolder">Add Food</h4>
                </div>
                <div class="card-body pb-3">
                    <form action="{{route('add-food')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label>Image</label>
                        <div class="mb-3">
                            <input type="file" class="form-control" name='fimg' placeholder="image" required>
                        </div>
                        <label>Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='name' placeholder="Name" autocomplete="off" required> 
                        </div>
                        <label>Type</label>
                        <div class="mb-3">
                          <select
                            class="multisteps-form__select form-control is-invalid"
                            name="type" id="choices-multiple-remove-button4" required>
                            <option selected value="">{{ __('Choose') }}</option>
                            <option value="dessert">{{ __('dessert') }}</option>
                            <option value="meal">{{ __('meal') }}</option>
                            <option value="soupe">{{ __('soupe') }}</option>
                          </select>
                        </div>
                        <label>Cost</label>
                        <div class="mb-3">
                            <input type="number" class="form-control" name='cost' placeholder="Cost" step='0.01'  autocomplete="off" required>
                        </div>
                        <label>Detail</label>
                        <div class="mb-3">
                          <textarea id="" class="form-control" name='detail' cols="30" rows="5" placeholder='Detail' required></textarea>
                        </div>
                        <label>Calories</label>
                        <div class="mb-3">
                            <input type="number" class="form-control" name='calories' placeholder="Calories" step='0.01' autocomplete="off" required>
                        </div>
                        <label>Ingredient</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='ingredient' placeholder="Ingredient" autocomplete="off" required>
                        </div>
                        <label>Restaurant</label>
                        <div class="mb-3">
                          <select
                            class="multisteps-form__select form-control is-invalid"
                            name="restaurant_id" id="choices-multiple-remove-button4" required>
                            <option selected value="">{{ __('Choose') }}</option>
                            @foreach($restaurants as $restaurant)
                              <option value="{{$restaurant->id}}">{{ $restaurant->name }}</option>
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
