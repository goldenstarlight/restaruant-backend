<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="multisteps-form mb-5">
                <!--progress bar-->
                <div class="row">
                    <div class="col-12 col-lg-8 mx-auto mt-5 mb-3 d-flex flex-column">
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
                    </div>
                </div>

                <!--form panels-->
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <form wire:submit.prevent="addUser" class="multisteps-form__form mb-8">
                            <!--single form panel-->
                            @if ($currentStep === 1)
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white {{ $currentStep != 1 ? '' : 'js-active' }}"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">{{ __('About me') }}</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>{{ __('First Name') }}</label>
                                                <div class="@error('first_name')has-danger @enderror">
                                                    <input wire:model="first_name"
                                                        class="multisteps-form__input form-control @error('first_name')is-invalid @enderror"
                                                        type="text" placeholder="eg. Michael" />
                                                </div>
                                                @error('first_name') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>{{ __('Last Name') }}</label>
                                                <div class="@error('last_name')has-danger @enderror">
                                                    <input wire:model="last_name"
                                                        class="multisteps-form__input form-control  @error('last_name')is-invalid @enderror"
                                                        type="text" placeholder="eg. Prior" />
                                                </div>
                                                @error('last_name') <div class="text-danger text-xs">
                                                    {{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div wire:ignore>
                                                <label class="col-12 mt-3 mt-sm-0">{{ __('User Role') }}</label>
                                                <div class=" @error('role_id') has-danger @enderror">
                                                    <select wire:model="role_id"
                                                        class="multisteps-form__select form-control @error('role_id') is-invalid @enderror"
                                                        name="choices-multiple-remove-button3" id="choices-multiple-remove-button3">
                                                        <option selected value="">{{ __('Choose') }}</option>
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}">{{ $role->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            @error('role_id') <div class="text-danger text-xs text-xs">
                                                {{ $message }}</div> @enderror
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>{{ __('Company') }}</label>
                                                <div class="@error('company')has-danger @enderror">
                                                    <input wire:model="company"
                                                        class="multisteps-form__input form-control @error('company')is-invalid @enderror"
                                                        type="text" placeholder="eg. Creative Tim" />
                                                </div>
                                                @error('company') <div class="text-danger text-xs">{{ $message }}
                                                </div>@enderror
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>{{ __('Email Address') }}</label>
                                                <div class="@error('email')has-danger @enderror">
                                                    <input wire:model="email"
                                                        class="multisteps-form__input form-control @error('email')is-invalid @enderror"
                                                        type="email" placeholder="eg. soft@dashboard.com" />
                                                </div>
                                                @error('email') <div class="text-danger text-xs">{{ $message }}
                                                </div>@enderror
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
                                                <div class="@error('first_addres')has-danger @enderror">
                                                    <input wire:model="first_address"
                                                        class="multisteps-form__input form-control @error('first_address')is-invalid @enderror"
                                                        type="text" placeholder="eg. Street 111" />
                                                </div>
                                                @error('first_addres') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label>{{ __('Address 2') }}</label>
                                                <div class="@error('second_addres')has-danger @enderror">
                                                    <input wire:model="second_address"
                                                        class="multisteps-form__input form-control @error('second_address')is-invalid @enderror"
                                                        type="text" placeholder="eg. Street 221" />
                                                </div>
                                                @error('second_address') <div class="text-danger text-xs">
                                                    {{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>{{ __('City') }}</label>
                                                <div class="@error('city')has-danger @enderror">
                                                    <input wire:model="city"
                                                        class="multisteps-form__input form-control @error('city')is-invalid @enderror"
                                                        type="text" placeholder="eg. Tokyo" />
                                                </div>
                                                @error('city') <div class="text-danger text-xs">{{ $message }}
                                                </div>@enderror
                                            </div>
                                            <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                                <label>{{ __('State') }}</label>
                                                <select wire:model="state" class="multisteps-form__select form-control">
                                                    <option selected="selected">...</option>
                                                    <option value="1">{{ __('State 1') }}</option>
                                                    <option value="2">{{ __('State 2') }}</option>
                                                </select>
                                            </div>
                                            <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                                <label>{{ __('Zip') }}</label>
                                                <div class="@error('zip')has-danger @enderror">
                                                    <input wire:model="zip" class="multisteps-form__input form-control"
                                                        type="text" placeholder="7 letters" />
                                                </div>
                                                @error('zip') <div class="text-danger text-xs">{{ $message }}
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
                                    <h5 class="font-weight-bolder">Socials</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label>{{ __('Twitter Handle') }}</label>
                                                <div class="@error('twitter')has-danger @enderror">
                                                    <input wire:model="twitter"
                                                        class="multisteps-form__input form-control @error('twitter')is-invalid @enderror"
                                                        type="text" placeholder="@soft" />
                                                </div>
                                                @error('twitter') <div class="text-danger text-xs">{{ $message }}
                                                </div>@enderror
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label>{{ __('Facebook Account') }}</label>
                                                <div class="@error('facebook')has-danger @enderror">
                                                    <input wire:model="facebook"
                                                        class="multisteps-form__input form-control @error('facebook')is-invalid @enderror"
                                                        type="text" placeholder="https://..." />
                                                </div>
                                                @error('facebook') <div class="text-danger text-xs">{{ $message }}
                                                </div>@enderror
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label>{{ __('Instagram Account') }}</label>
                                                <div class="@error('instagram')has-danger @enderror">
                                                    <input wire:model="instagram"
                                                        class="multisteps-form__input form-control @error('instagram')is-invalid @enderror"
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
                                                                class="sr-only">{{ 'Edit Image' }}</span>
                                                        </label>

                                                        <input type="file" accept="image/*" wire:model="upload"
                                                            id="file-input" class="d-none">
                                                        <span
                                                            class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                            @if ($upload)
                                                                <img src="{{ $upload->temporaryUrl() }}"
                                                                    alt="Profile Photo">
                                                            @else
                                                                <img src="/assets/img/bruce-mars.jpg"
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
                                                    <div class="@error('public_email')has-danger @enderror">
                                                        <input wire:model="public_email"
                                                            class="multisteps-form__input form-control @error('public_email')is-invalid @enderror"
                                                            type="text"
                                                            placeholder="Use an address you don't use frequently." />
                                                    </div>
                                                    @error('public_email') <div class="text-danger text-xs">
                                                        {{ $message }}</div>@enderror
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label>{{ __('Bio') }}</label>
                                                    <div class="@error('bio')has-danger @enderror">
                                                        <textarea wire:model="bio"
                                                            class="multisteps-form__textarea form-control @error('bio')is-invalid @enderror"
                                                            rows="5"
                                                            placeholder="Say a few words about who you are or what you're working on."></textarea>
                                                    </div>
                                                    @error('bio') <div class="text-danger text-xs">{{ $message }}
                                                    </div>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button wire:click="back" class="btn bg-gradient-light mb-0 " type="button"
                                                title="Prev">{{ __('Prev') }}</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="submit"
                                                title="Send">{{ __('Send') }}</button>
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
    if (document.getElementById('choices-multiple-remove-button3')) {
        var element = document.getElementById('choices-multiple-remove-button3');
        const example = new Choices(element, {
            removeItemButton: true
        });
    }
</script>