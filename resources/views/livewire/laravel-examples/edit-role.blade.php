<div class="container-fluid py-4">
    <div class="row">
        <div class="col-9 mx-auto">
            <div class="card card-body mt-4">
                <h6 class="mb-0">{{ __('New Role') }}</h6>
                <p class="text-sm mb-0">{{ __('Create new role') }}</p>
                <hr class="horizontal dark my-3">
                <form wire:submit.prevent="editRole" action="#" method="POST">
                    <div>
                        <label for="roleName" class="form-label">{{ __('Role Name') }}</label>
                        <div class="@error('role.name')has-danger @enderror">
                            <input wire:model="role.name" type="text"
                                class="form-control @error('role.name')is-invalid @enderror" id="roleName">
                        </div>
                        @error('role.name') <div class="text-danger text-xs">{{ $message }}</div>@enderror
                    </div>
                    <div>
                        <label class="mt-4">{{ __('Role Description') }}</label>
                        <div class="@error('role.description') has-danger @enderror">
                            <textarea wire:model="role.description" type="text"
                                class="form-control @error('role.description')is-invalid @enderror"
                                id="roleDescription"></textarea>
                        </div>
                        @error('role.description') <div class="text-danger text-xs">{{ $message }}</div>@enderror
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('roles-management') }}" type="button" name="button"
                            class="btn btn-light m-0">{{ __('Back to list') }}</a>
                        <button type="submit" name="button"
                            class="btn bg-gradient-primary m-0 ms-2">{{ __('Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
