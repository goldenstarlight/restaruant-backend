<div>
    <div class="container-fluid my-3 py-3 d-flex flex-column">
        <div class="row mb-5 justify-content-center align-items-center">
            <div class="col-9">
                <!-- Card Profile -->
                <div class="card card-body" id="profile">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <div>
                                    <label for="file-input"
                                        class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                        <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="" aria-hidden="true" data-bs-original-title="Edit Image"
                                            aria-label="Edit Image"></i><span
                                            class="sr-only">{{ __('Edit Image') }}</span>
                                    </label>

                                    <input type="file" wire:model="upload" id="file-input" accept="image/*" class="d-none">
                                    <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                        @if ($upload)
                                            <img src="{{ $upload->temporaryUrl() }}" alt="Profile Photo">
                                        @else
                                            <img src="{{ auth()->user()->avatarUrl() }}" alt="Profile Photo">
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                @if ($user->first_name && $user->last_name)
                                    <h5 class="mb-1">
                                        {{ $user->first_name . ' ' . $user->last_name }}
                                    </h5>
                                @else
                                    <h5 class="mb-1">
                                        {{ __('Alec Thompson') }}
                                    </h5>
                                @endif
                                <p class="mb-0 font-weight-bold text-sm">
                                    {{ __('CEO / Co-Founder') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked
                                    onchange="visible()">
                                <label class="form-check-label" for="flexSwitchCheckDefault">
                                    <small id="profileVisibility">
                                        {{ __('Switch to invisible') }}
                                    </small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        @error('upload') <div class="text-danger text-xs mt-3">{{ $message }} @enderror
                    </div>
                </div>

                @if ($showSuccesNotification)
                    <div wire:model="showSuccesNotification"
                        class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span
                            class="alert-text text-white">{{ __('Your profile information have been successfuly saved.') }}</span>
                        <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if ($showDemoNotification)
                    <div wire:model="showDemoNotification" class="mt-3 alert alert-danger alert-dismissible fade show"
                        role="alert">
                        <span
                            class="alert-text text-white">{{ __(' This is a demo version. You can not change the profile.') }}</span>
                        <button wire:click="$set('showDemoNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <!-- Card Basic Info -->
                <div class="card mt-4" id="basic-info">
                    <div class="card-header">
                        <h5>Basic Info</h5>
                    </div>
                    <div class="card-body pt-0">
                        <form wire:submit.prevent="save" action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <label class="form-label" for="#firstName">{{ __('First Name') }}</label>
                                    <div
                                        class="input-group @error('user.first_name')border border-danger rounded-3 @enderror">
                                        <input wire:model="user.first_name" id="firstName" name="firstName"
                                            class="form-control" type="text" placeholder="Alec" required="required">
                                    </div>
                                    @error('user.first_name') <div class="text-danger test-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="#lastName">{{ __('Last Name') }}</label>
                                    <div
                                        class="input-group @error('user.last_name') border border-danger rounded-3 @enderror">
                                        <input wire:model="user.last_name" id="lastName" name="lastName"
                                            class="form-control" type="text" placeholder="Thompson" required="required">
                                    </div>
                                    @error('user.last_name') <div class="text-danger test-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div wire:ignore class="col-3">
                                    <label class="form-label mt-4">I'm</label>
                                    <select wire:model="user.gender" class="form-control" aria-label="Gender select"
                                        id="choices-gender">
                                        <option value="">{{ __('Gender') }}</option>
                                        <option {{ auth()->user()->gender == 'Male' ? 'selected' : '' }}
                                            value="Male">
                                            {{ __('Male') }}</option>
                                        <option {{ auth()->user()->gender == 'Female' ? 'selected' : '' }}
                                            value="Female">{{ __('Female') }}</option>
                                    </select>
                                </div>
                                <div class="col-9">
                                    <div wire:ignore class="row">
                                        <div class="col-4">
                                            <label class="form-label mt-4">{{ __('Birth Date') }}</label>
                                            <select wire:model="user.month" for="file-input" class="form-control"
                                                name="choices-month" id="choices-month"></select>
                                        </div>
                                        <div class="col-4">
                                            <label class="form-label mt-4">&nbsp;</label>
                                            <select wire:model="user.day" class="form-control" name="choices-day"
                                                id="choices-day"></select>
                                        </div>
                                        <div class="col-4">
                                            <label class="form-label mt-4">&nbsp;</label>
                                            <select wire:model="user.year" class="form-control" name="choices-year"
                                                id="choices-year"></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <label class="form-label mt-4" for="#email">{{ __('Email') }}</label>
                                    <div
                                        class="input-group @error('user.email')border border-danger rounded-3 @enderror">
                                        <input wire:model="user.email" id="email" name="email" class="form-control"
                                            type="email" placeholder="example@email.com">
                                    </div>
                                    @error('user.email') <div class="text-danger text-xs">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label mt-4"
                                        for="#confirmation">{{ __('Confirmation Email') }}</label>
                                    <div
                                        class="input-group @error('emailConfirmation')border border-danger rounded-3 @enderror">
                                        <input wire:model="confirmationEmail" id="confirmation" name="confirmation"
                                            class="form-control" type="email" placeholder="example@email.com">
                                    </div>
                                    @error('emailConfirmation') <div class="text-danger text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <label class="form-label mt-4" for="#location">{{ __('Your location') }}</label>
                                    <div
                                        class="input-group @error('user.location')border border-danger rounded-3 @enderror">
                                        <input wire:model="user.location" id="location" name="location"
                                            class="form-control" type="text" placeholder="Sydney, A">
                                    </div>
                                    @error('user.location') <div class="text-danger test-xs">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label mt-4" for="#phone">{{ __('Phone Number') }}</label>
                                    <div
                                        class="input-group @error('user.phoneNo')border border-danger rounded-3 @enderror">
                                        <input wire:model="user.phoneNo" id="phone" name="phone" class="form-control"
                                            type="number" placeholder="40735631620">
                                    </div>
                                    @error('user.phoneNo') <div class="text-danger test-xs">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="row">
                                <div wire:ignore class="col-md-6 align-self-center">
                                    <label class="form-label mt-4" for="#language">Language</label>
                                    <select wire:model="user.language" class="form-control" id="choices-language">
                                        <option value="">{{ __('Language') }}</option>
                                        <option {{ auth()->user()->language == 'English' ? 'selected' : '' }}
                                            value="English">{{ __('English') }}</option>
                                        <option {{ auth()->user()->language == 'French' ? 'selected' : '' }}
                                            value="French">{{ __('French') }}</option>
                                        <option {{ auth()->user()->language == 'Spanish' ? 'selected' : '' }}
                                            value="Spanish">{{ __('Spanish') }}</option>
                                    </select>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <label class="form-label mt-4" for="#skills">{{ __('Skills') }}</label>
                                    <div class="@error('user.skills')border border-danger rounded-3 @enderror">
                                        <input wire:model="user.skills" class="form-control" id="skills" name="skills"
                                            type="text" placeholder="Enter your skills" />
                                    </div>
                                    @error('user.skills') <div class="text-danger test-xs">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="">
                                <button type="submit"
                                    class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">{{ __('Save changes') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../../assets/js/plugins/choices.min.js"></script>

<script>
    if (document.getElementById('choices-gender')) {
        var gender = document.getElementById('choices-gender');
        const example = new Choices(gender);
    }

    if (document.getElementById('choices-language')) {
        var language = document.getElementById('choices-language');
        const example = new Choices(language);
    }

    if (document.getElementById('choices-skills')) {
        var skills = document.getElementById('choices-skills');
        const example = new Choices(skills, {
            delimiter: ',',
            editItems: true,
            maxItemCount: 5,
            removeItemButton: true,
            addItems: true
        });
    }

    if (document.getElementById('choices-year')) {
        var year = document.getElementById('choices-year');
        setTimeout(function() {
            const example = new Choices(year);
        }, 1);

        for (y = 1900; y <= 2020; y++) {
            var optn = document.createElement("OPTION");
            optn.text = y;
            optn.value = y;

            if (y == 2020) {
                optn.selected = true;
            }

            year.options.add(optn);
        }
    }

    if (document.getElementById('choices-day')) {
        var day = document.getElementById('choices-day');
        setTimeout(function() {
            const example = new Choices(day);
        }, 1);


        for (y = 1; y <= 31; y++) {
            var optn = document.createElement("OPTION");
            optn.text = y;
            optn.value = y;

            if (y == 1) {
                optn.selected = true;
            }

            day.options.add(optn);
        }

    }

    if (document.getElementById('choices-month')) {
        var month = document.getElementById('choices-month');
        setTimeout(function() {
        const example = new Choices(month);
        }, 1);

        var d = new Date();
        var monthArray = new Array();
        monthArray[0] = "January";
        monthArray[1] = "February";
        monthArray[2] = "March";
        monthArray[3] = "April";
        monthArray[4] = "May";
        monthArray[5] = "June";
        monthArray[6] = "July";
        monthArray[7] = "August";
        monthArray[8] = "September";
        monthArray[9] = "October";
        monthArray[10] = "November";
        monthArray[11] = "December";
        for (m = 0; m <= 11; m++) {
            var optn = document.createElement("OPTION");
            optn.text = monthArray[m];
            // server side month start from one
            optn.value = (m + 1);
            // if june selected
            if (m == 1) {
                optn.selected = true;
            }
            month.options.add(optn);
        }
    }

    function visible() {
        var elem = document.getElementById('profileVisibility');
        if (elem) {
            if (elem.innerHTML == "Switch to visible") {
                elem.innerHTML = "Switch to invisible"
            } else {
                elem.innerHTML = "Switch to visible"
            }
        }
    }

    var openFile = function(event) {
        var input = event.target;

        // Instantiate FileReader
        var reader = new FileReader();
        reader.onload = function() {
            imageFile = reader.result;

            document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile +
                '" class="rounded-circle w-100 shadow" />';
        };
        reader.readAsDataURL(input.files[0]);
    };

</script>
