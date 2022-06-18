<main class="main-content main-content-bg mt-0">
    <section>
        <div class="page-header section-height-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-sm-8 mt-5">
                            <div class="card-header pb-0 text-left">
                                <h3 class="font-weight-bolder text-primary text-gradient">{{ 'Reset your password' }}
                                </h3>
                                <p class="mb-0">{{ __('Enter your password and password confirmation') }}</p>
                            </div>
                            <div class="card-body pb-3">
                                <form wire:submit.prevent="resetPassword" role="form text-left">
                                    <div>
                                        <label>{{ __('Password') }}</label>
                                        <div class="@error('password')border border-danger rounded-3 @enderror mb-3">
                                            <input wire:model="password" type="password" class="form-control"
                                                placeholder="Password" aria-label="Password"
                                                aria-describedby="password-addon">
                                        </div>
                                        @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                    <div>
                                        <label>{{ __('Password Confirmation') }}</label>
                                        <div
                                            class="@error('passwordConfirmation')border border-danger rounded-3 @enderror mb-3">
                                            <input wire:model="passwordConfirmation" type="password"
                                                class="form-control" placeholder="Password Confirmation"
                                                aria-label="Password" aria-describedby="password-addon">
                                        </div>
                                        @error('passwordConfirmation') <div class="text-danger">{{ $message }}
                                        </div> @enderror
                                    </div>
                                    <div class="form-check form-check-info text-left">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                            checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{ __('I agree the ') }}<a href="../../../pages/privacy.html"
                                                class="text-dark font-weight-bolder">{{ __('Terms and Conditions') }}</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn bg-gradient-primary w-100 mt-4 mb-0">{{ __('Reset Password') }}</button>
                                    </div>
                                </form>

                                @if ($showFailureNotification)
                                    <div wire:model="showFailureNotification"
                                        class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                                        <span
                                            class="alert-text">{{ __('Please enter the correct email address!') }}</span>
                                        <button wire:click="$set('showFailureNotification', false)" type="button"
                                            class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        </button>
                                    </div>
                                @endif

                            </div>
                            <div class="card-footer text-center pt-0 px-sm-4 px-1">
                                <p class="mb-4 mx-auto">
                                    {{ __('Already have an account?') }}
                                    <a href="{{ route('login') }}"
                                        class="text-primary text-gradient font-weight-bold">{{ __('Sign in') }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                style="background-image:url('../../../assets/img/curved-images/curved11.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
