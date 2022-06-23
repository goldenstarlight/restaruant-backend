<main class="main-content  mt-0">
    <div class="row">
        <div class="col-md-5 cover-bg">
        </div>
        <div class="col-md-7">
            <div class="z-index-0" style="width: 80%;">
                <div class="card-header text-center pt-4">
                    <h5>{{ __('Work with Us') }}</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="register" action="#" methos="POST" role="form text-start">
                        <div>
                            <div class="@error('name')has-danger @enderror ">
                                <input wire:model="name" type="text"
                                    class="form-control @error('name')is-invalid @enderror" placeholder="Name"
                                    aria-label="Name" aria-describedby="email-addon">
                            </div>
                            @error('name') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>
                        <div class="mt-3">
                            <div class="@error('first_name')has-danger @enderror ">
                                <input wire:model="first_name" type="text"
                                    class="form-control @error('first_name')is-invalid @enderror" placeholder="First Name"
                                    aria-label="First Name" aria-describedby="email-addon">
                            </div>
                            @error('first_name') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>
                        <div class="mt-3">
                            <div class="@error('last_name')has-danger @enderror ">
                                <input wire:model="last_name" type="text"
                                    class="form-control @error('last_name')is-invalid @enderror" placeholder="Last Name"
                                    aria-label="Last Name" aria-describedby="email-addon">
                            </div>
                            @error('last_name') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>
                        <div class="mt-3">
                            <div class="@error('email') has-danger @enderror ">
                                <input wire:model="email" type="email"
                                    class="form-control @error('email')is-invalid @enderror" placeholder="Email"
                                    aria-label="Email" aria-describedby="email-addon">
                            </div>
                            @error('email') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>
                        <div class="mt-3">
                            <div wire:ignore>
                                <div class=" @error('role_id') has-danger @enderror">
                                    <select wire:model="role_id"
                                        class="multisteps-form__select form-control @error('role_id') is-invalid @enderror"
                                        name="choices-multiple-remove-button4" id="choices-multiple-remove-button4">
                                        <option selected value="">{{ __('Choose') }}</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('role_id') <div class="text-danger text-xs text-xs">{{ $message }}</div> @enderror
                        </div>
                        <div class="mt-3">
                            <div class="@error('password')border border-danger rounded-3 @enderror ">
                                <input wire:model="password" type="password"
                                    class="form-control @error('password')is-invalid @enderror"
                                    placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                            </div>
                            @error('password') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-check form-check-info text-start">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                {{ __('I agree the') }} <a href="javascript:;"
                                    class="text-dark font-weight-bolder">{{ __('Terms and
                                    Conditions') }}</a>
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="btn bg-gradient-dark w-100 my-4 mb-2">{{ __('Sign up') }}</button>
                        </div>
                        <p class="text-sm mt-3 mb-0">{{ __('Already have an account?') }} <a
                                href="{{ route('login') }}"
                                class="text-dark font-weight-bolder">{{ __('Sign in') }}</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<style>
    .cover-bg {
        background-image: url('../../../assets/img/signup.png');
        height: 100vh;
        background-size: contain;
        background-repeat: no-repeat;
    }
    body {
        overflow: hidden;
    }
</style>
<script src="../../../assets/js/plugins/choices.min.js"></script>

<script>
    if (document.getElementById('choices-multiple-remove-button4')) {
        var element = document.getElementById('choices-multiple-remove-button4');
        const example = new Choices(element, {
            removeItemButton: true
        });
    }
</script>