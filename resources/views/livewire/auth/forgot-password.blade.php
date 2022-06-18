<main class="main-content main-content-bg mt-0">
    <section>
        <div class="page-header section-height-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-12 px-5 d-flex flex-column">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left">
                                <h3 class="text-info text-gradient">{{ __('Reset Password') }}</h3>
                                <p class="mb-0">{{ __('You will receive an e-mail in maximum 60 seconds') }}</p>
                            </div>
                            <div class="card-body pb-3">
                                <form wire:submit.prevent="recoverPassword" action="#" method="POST"
                                    role="form text-left">
                                    <div>
                                        <label>{{ __('Email') }}</label>
                                        <div class="@error('email')border border-danger rounded-3 @enderror mb-3">
                                            <input wire:model="email" type="email" class="form-control"
                                                placeholder="Enter your e-mail" aria-label="Email"
                                                aria-describedby="email-addon">
                                        </div>
                                        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Reset') }}</button>
                                    </div>
                                </form>

                                @if ($showSuccesNotification)
                                    <div wire:model="showSuccesNotification"
                                        class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                        <span class="alert-text text-white">
                                            {{ __('An email for resetting your password has
                                            been sent.') }}</span>
                                        <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                @if ($showFailureNotification)
                                    <div wire:model="showFailureNotification"
                                        class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                                        <span class="alert-text text-white">
                                            {{ __('You are not registered as a user. Please sign up') }}<a
                                                class="text-white"
                                                href="{{ route('register') }}">{{ __('here') }}</a></span>
                                        <button wire:click="$set('showFailureNotification', false)" type="button"
                                            class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        </button>
                                    </div>
                                @endif

                                @if ($showDemoNotification)
                                    <div wire:model="showDemoNotification"
                                        class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                                        <span class="alert-text text-white">
                                            {{ __('This is a demo version. You can not change
                                            the password.') }}</span>
                                        <button wire:click="$set('showDemoNotification', false)" type="button"
                                            class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        </button>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                style="background-image:url('../../../assets/img/curved-images/curved6.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
