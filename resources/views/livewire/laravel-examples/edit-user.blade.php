<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="multisteps-form mb-5">
                <!--progress bar-->
                <div class="row">
                    <div class="col-12 col-lg-8 mx-auto my-5 d-flex flex-column">
                        <div class="multisteps-form__progress">
                            <button class="multisteps-form__progress-btn {{ $currentStep < 5 ? 'js-active' : '' }}"
                                type="button" title="User Info">
                                <span>User Info</span>
                            </button>
                            <button class="multisteps-form__progress-btn {{ $currentStep > 1 ? 'js-active' : '' }}"
                                type="button" title="Address">{{ __('Address') }}</button>
                            <button class="multisteps-form__progress-btn {{ $currentStep > 2 ? 'js-active' : '' }}"
                                type="button" title="Socials">{{ __('Socials') }}</button>
                            <button class="multisteps-form__progress-btn {{ $currentStep > 3 ? 'js-active' : '' }}"
                                type="button" title="Profile">{{ __('Profile') }}</button>
                        </div>
                        <a href="{{ route('users-management') }}"
                            class="mt-3 btn btn-outline-secondary align-self-end">{{ __('Back to list') }}</a>

                        @if (session('failure'))
                            <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                <span
                                    class="alert-text text-white">{{ session('failure') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        @endif
                    </div>
                </div>

                <!--form panels-->
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <form wire:submit.prevent="editUser" class="multisteps-form__form mb-8">
                            <!--single form panel-->
                            @if ($currentStep === 1)
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white {{ $currentStep != 1 ? '' : 'js-active' }}"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">{{ __('About me') }}</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>{{ __('First Name') }}</label>
                                                <div class="@error('user.first_name')has-danger @enderror">
                                                    <input wire:model="user.first_name"
                                                        class="multisteps-form__input form-control @error('user.first_name') is-invalid @enderror"
                                                        type="text" placeholder="eg. Michael" />
                                                </div>
                                                @error('user.first_name') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>{{ __('Last Name') }}</label>
                                                <div class="@error('user.last_name')has-danger @enderror">
                                                    <input wire:model="user.last_name"
                                                        class="multisteps-form__input form-control @error('user.last_name') is-invalid @enderror"
                                                        type="text" placeholder="eg. Prior" />
                                                </div>
                                                @error('user.last_name') <div class="text-danger text-xs">
                                                    {{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div wire:ignore>
                                                <label>{{ __('User Role') }}</label>
                                                <div class="@error('user.role_id') has-danger @enderror">
                                                    <select wire:model="user.role_id"
                                                        class="form-control @error('user.role_id') is-invalid @enderror"
                                                        name="choices-multiple-remove-button5" id="choices-multiple-remove-button5"
                                                        placeholder="This is a placeholder">
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}" {{ $user->role_id === $role->id ? 'selected' : ''}}>{{ $role->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @error('user.role_id') <div class="text-danger text-xs text-xs">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>{{ __('Company') }}</label>
                                                <div class="@error('user.company') has-danger @enderror">
                                                    <input wire:model="user.company"
                                                        class="multisteps-form__input form-control @error('user.company')is-invalid @enderror"
                                                        type="text" placeholder="eg. Creative Tim" />
                                                </div>
                                                @error('user.company') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>{{ __('Email Address') }}</label>
                                                <div class="@error('user.email')has-danger @enderror">
                                                    <input wire:model="user.email"
                                                        class="multisteps-form__input form-control @error('user.email')is-invalid @enderror"
                                                        type="email" placeholder="eg. soft@dashboard.com" />
                                                </div>
                                                @error('user.email') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>{{ __('Password') }}</label>
                                                <div class="@error('password')has-danger @enderror">
                                                    <input wire:model="password"
                                                        class="multisteps-form__input form-control @error('password')is-invalid @enderror"
                                                        type="password" placeholder="******" />
                                                </div>
                                                @error('password') <div class="text-danger text-xs">{{ $message }}
                                                </div>@enderror
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>{{ __('Repeat Password') }}</label>
                                                <div class="@error('passwordConfirmation')has-danger @enderror">
                                                    <input wire:model="passwordConfirmation"
                                                        class="multisteps-form__input form-control @error('passwordConfirmation')is-invalid @enderror"
                                                        type="password" placeholder="******" />
                                                </div>
                                                @error('passwordConfirmation') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button wire:click="firstStepSubmit"
                                                class="btn bg-gradient-dark ms-auto mb-0" type="button"
                                                title="Next">{{ __('Next') }}</button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($currentStep === 2)
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white {{ $currentStep != 2 ? '' : 'js-active' }}"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">{{ __('Address') }}</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label>{{ __('Address 1') }}</label>
                                                <div class="@error('user.first_address')has-danger @enderror">
                                                    <input wire:model="user.first_address"
                                                        class="multisteps-form__input form-control @error('user.first_address')is-invalid @enderror"
                                                        type="text" placeholder="eg. Street 111" />
                                                </div>
                                                @error('user.first_address') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label>{{ __('Address 2') }}</label>
                                                <div class="@error('user.second_address')has-danger @enderror">
                                                    <input wire:model="user.second_address"
                                                        class="multisteps-form__input form-control @error('user.second_address')is-invalid @enderror"
                                                        type="text" placeholder="eg. Street 221" />
                                                </div>
                                                @error('user.second_address') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>{{ __('City') }}</label>
                                                <div class="@error('user.city')has-danger @enderror">
                                                    <input wire:model="user.city"
                                                        class="multisteps-form__input form-control @error('user.city')is-invalid @enderror"
                                                        type="text" placeholder="eg. Tokyo" />
                                                </div>
                                                @error('user.city') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                                <label>{{ __('State') }}</label>
                                                <select wire:model="user.state"
                                                    class="multisteps-form__select form-control">
                                                    <option selected="selected">...</option>
                                                    <option value="1">{{ __('State 1') }}</option>
                                                    <option value="2">{{ __('State 2') }}</option>
                                                </select>
                                            </div>
                                            <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                                <label>{{ __('Zip') }}</label>
                                                <div class="@error('user.zip')has-danger @enderror">
                                                    <input wire:model="user.zip"
                                                        class="multisteps-form__input form-control @error('user.zip')is-invalid @enderror"
                                                        type="text" placeholder="7 letters" />
                                                </div>
                                                @error('user.zip') <div class="text-danger text-xs">{{ $message }}
                                                </div>@enderror
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button wire:click="back" class="btn bg-gradient-light mb-0 " type="button"
                                                title="Prev">{{ __('Prev') }}</button>
                                            <button wire:click="secondStepSubmit"
                                                class="btn bg-gradient-dark ms-auto mb-0" type="button"
                                                title="Next">{{ __('Next') }}</button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($currentStep === 3)
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white {{ $currentStep != 3 ? '' : 'js-active' }}"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">{{ __('Socials') }}</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label>{{ __('Twitter Handle') }}</label>
                                                <div class="@error('user.twitter')has-danger @enderror">
                                                    <input wire:model="user.twitter"
                                                        class="multisteps-form__input form-control @error('user.twitter')is-invalid @enderror"
                                                        type="text" placeholder="@soft" />
                                                </div>
                                                @error('user.twitter') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label>{{ __('Facebook Account') }}</label>
                                                <div class="@error('user.facebook')has-danger @enderror">
                                                    <input wire:model="user.facebook"
                                                        class="multisteps-form__input form-control @error('user.facebook')is-invalid @enderror"
                                                        type="text" placeholder="https://..." />
                                                </div>
                                                @error('user.facebook') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label>{{ __('Instagram Account') }}</label>
                                                <div class="@error('instagram')has-danger @enderror">
                                                    <input wire:model="instagram"
                                                        class="multisteps-form__input form-control @error('user.instagram')is-invalid @enderror"
                                                        type="text" placeholder="https://..." />
                                                </div>
                                                @error('instagram') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button wire:click="back" class="btn bg-gradient-light mb-0"
                                                    type="button" title="Prev">{{ __('Prev') }}</button>
                                                <button wire:click="thirdStepSubmit"
                                                    class="btn bg-gradient-dark ms-auto mb-0" type="button"
                                                    title="Next">{{ __('Next') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($currentStep === 4)
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white {{ $currentStep != 4 ? '' : 'js-active' }}"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">{{ __('Profile') }}</h5>
                                    <div class="multisteps-form__content mt-3">
                                        <div class="row">
                                            <div class="col-12 mt-3">
                                                <div class="avatar avatar-xl position-relative">
                                                    <div>
                                                        <label for="file-input"
                                                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                                            <i class="fa fa-pen top-0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="" aria-hidden="true"
                                                                data-bs-original-title="Edit Image"
                                                                aria-label="Edit Image"></i><span
                                                                class="sr-only">{{ __('Edit Image') }}</span>
                                                        </label>

                                                        <input type="file" accept="image/*" wire:model="upload"
                                                            id="file-input" class="d-none">
                                                        <span
                                                            class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                            @if ($upload)
                                                                <img src="{{ $upload->temporaryUrl() }}"
                                                                    alt="Profile Photo">
                                                            @else
                                                                <img src="{{ $user->avatarUrl() }}"
                                                                    alt="Profile Photo">
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                                <div>
                                                    @error('upload') <div class="text-danger text-xs mt-3">{{ $message }} @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label>{{ __('Public Email') }}</label>
                                                    <div class="@error('user.public_email')has-danger @enderror">
                                                        <input wire:model="user.public_email"
                                                            class="multisteps-form__input form-control @error('user.public_email')is-invalid @enderror"
                                                            type="text"
                                                            placeholder="Use an address you don't use frequently." />
                                                    </div>
                                                    @error('user.public_email') <div class="text-danger text-xs">
                                                        {{ $message }}</div>@enderror
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label>{{ __('Bio') }}</label>
                                                    <div class="@error('user.bio')has-danger @enderror">
                                                        <textarea wire:model="user.bio"
                                                            class="multisteps-form__textarea form-control @error('user.bio')is-invalid @enderror"
                                                            rows="5"
                                                            placeholder="Say a few words about who you are or what you're working on."></textarea>
                                                    </div>
                                                    @error('user.bio') <div class="text-danger text-xs">
                                                        {{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button wire:click="back" class="btn bg-gradient-light mb-0 " type="button"
                                                title="Prev">{{ __('Prev') }}</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="submit"
                                                title="Send">{{ __('Submit') }}</button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../../assets/js/plugins/multistep-form.js"></script>
<script src="../../../assets/js/plugins/choices.min.js"></script>

<script>
    if (document.getElementById('choices-multiple-remove-button5')) {
        var element = document.getElementById('choices-multiple-remove-button5');
        const example = new Choices(element, {
            removeItemButton: true
        });
    }
</script>