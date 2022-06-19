<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
                <div class="card-header pb-0 text-left">
                    <h4 class="font-weight-bolder">Add Restaurant</h4>
                    <p>Input restaurant info</p>
                </div>
                <div class="card-body pb-3">
                      <form action="{{route('update-restaurant', $restaurant->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label>Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='name'  value="{{$restaurant->name}}" required> 
                        </div>
                        <label>Main Food</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='mfood'  value="{{$restaurant->main_food}}"  required>
                        </div>
                        <label>Address</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='address'  value="{{$restaurant->address}}" required>
                        </div>
                        <label>Phone</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='phone' value="{{$restaurant->phone}}"  required>
                        </div>
                        <label>Logo Image</label>
                        <div class="mb-3">
                            <input type="file" class="form-control" name='limg'>
                        </div>
                        <label>Owner</label>
                        <div class="mb-3">
                            <select
                                class="multisteps-form__select form-control is-invalid"
                                name="user_id" id="choices-multiple-remove-button4" required>
                                <option selected value="{{$restaurant->user->id}}">{{ $restaurant->user->name }}</option>
                                @foreach($users as $user) 
                                  @if($restaurant->user->id == $user->id) @continue @endif
                                  @if($user->role_id == 1) @continue @endif
                                  <option value="{{$user->id}}">{{ $user->name }}</option>
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
