<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
                <div class="card-header pb-0 text-left">
                    <h4 class="font-weight-bolder">
                        @if($user->id == Auth::user()->id)
                            My Account
                        @else
                            Edit user
                        @endif
                    </h4>
                </div>
                <div class="card-body pb-3">
                    <form action="{{route('update-user', $user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <label>Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='name' placeholder="Name" autocomplete="off" value={{$user->name}}> 
                             @error('name') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>
                        <label>First Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='fname' placeholder="First Name"  autocomplete="off" value={{$user->first_name}}>
                        </div>
                        <label>Last Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='lname' placeholder="Last Name" autocomplete="off" value={{$user->last_name}}>
                        </div>
                        <label>Email</label>
                        <div class="mb-3">
                            <input type="email" class="form-control" name='email' placeholder="Email" autocomplete="off" value={{$user->email}}>
                        </div>
                        <div class="mb-3">
                            <select
                                class="multisteps-form__select form-control is-invalid"
                                name="role_id" id="choices-multiple-remove-button4" required>
                                <option selected value={{$user->role_id}}>{{ $user->role->name }}</option>
                                @if($user->role_id == 2)
                                    <option value="3">{{ __('Customers') }}</option>
                                @endif
                                @if($user->role_id == 3)
                                    <option value="2">{{ __('Staffs') }}</option>
                                @endif
                            </select>
                        </div>
                        <label>Password</label>
                        <div class="mb-3">
                            <input type="password" class="form-control" name='password' placeholder="Password" autocomplete="off">
                        </div>
                        <div class="d-flex justify-content-around">
                            <a href="{{route('portal-users')}}" class="btn bg-gradient-dark w-40 mt-4 mb-0">cancel</a>    
                            <button type="submit" class="btn bg-gradient-primary w-40 mt-4 mb-0">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
