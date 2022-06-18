<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
                <div class="card-header pb-0 text-left">
                    <h4 class="font-weight-bolder">Add user</h4>
                </div>
                <div class="card-body pb-3">
                    <form action="{{route('add-user')}}" method="POST">
                        @csrf
                        <label>Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='name' placeholder="Name" autocomplete="off" required> 
                             @error('name') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>
                        <label>First Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='fname' placeholder="First Name"  autocomplete="off" required>
                        </div>
                        <label>Last Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name='lname' placeholder="Last Name" autocomplete="off" required>
                        </div>
                        <label>Email</label>
                        <div class="mb-3">
                            <input type="email" class="form-control" name='email' placeholder="Email" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <select
                                class="multisteps-form__select form-control is-invalid"
                                name="role_id" id="choices-multiple-remove-button4" required>
                                <option selected value="">{{ __('Choose') }}</option>
                                <option value="3">{{ __('Customers') }}</option>
                                <option value="2">{{ __('Staffs') }}</option>
                            </select>
                        </div>
                        <label>Password</label>
                        <div class="mb-3">
                            <input type="password" class="form-control" name='password' placeholder="Password" autocomplete="off"  required>
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
