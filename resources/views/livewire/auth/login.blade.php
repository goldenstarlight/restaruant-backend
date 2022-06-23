<main class="main-content  mt-0">
    <div class="row">
        <div class="col-md-5 cover-bg">
            <h3 class="text-white text-center mt-8" style="font-weight: 400">
                Bring your restaurant <br> to next level
            </h3>
        </div>
        <div class="col-md-7">
            <div class="z-index-0" style="width: 80%;">
                <div class="card-header text-center pt-4">
                    <h5>{{ __('Sign in') }}</h5>
                    <p>Signin using your infos</p>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="login" action="#" metohd="POST" role="form text-start">
                        <div>
                            <div class="@error('email')has-danger @enderror">
                                <input wire:model="email" type="email"
                                    class="form-control @error('email')is-invalid @enderror" placeholder="Email"
                                    aria-label="Email" aria-describedby="email-addon">
                            </div>
                            @error('email') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>
                        <div class="mt-3">
                            <div class="@error('password')has-danger @enderror">
                                <input wire:model="password" type="password"
                                    class="form-control @error('password')is-invalid @enderror"
                                    placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                            </div>
                            @error('password') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-check form-switch mt-4">
                            <input wire:model="remember_me" class="form-check-input" type="checkbox"
                                id="rememberMe">
                            <label class="form-check-label" for="rememberMe">{{ __('Remember me') }}</label>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="btn bg-gradient-info w-100 my-4 mb-2">{{ __('Sign in') }}</button>
                        </div>
                        <div class="mb-2 position-relative text-center">
                            <p
                                class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                                {{ __('or') }}
                            </p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm mt-3 mb-0"><a
                                href="{{ route('register') }}"
                                class="btn bg-gradient-info w-100 my-4 mb-2">{{ __('Sign up') }}</a>
                            </p>
                        </div>
                        <p class="text-sm mt-3 mb-0">{{ __('Forgot your password? Reset your password ') }}<a
                                href="{{ route('forgot-password') }}"
                                class="text-dark font-weight-bolder">{{ __('here') }}</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<style>
    .cover-bg {
        background-image: url('../../../assets/img/singnin.png');
        height: 100vh;
        background-size: contain;
        background-repeat: no-repeat;
    }
    body {
        overflow: hidden;
    }
</style>
