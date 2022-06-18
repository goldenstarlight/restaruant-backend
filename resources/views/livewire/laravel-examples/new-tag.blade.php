<div class="container-fluid py-4">
    <div class="row">
        <div class="col-9 mx-auto">
            <div class="card card-body mt-4">
                <h6 class="mb-0">{{ __('New Tag') }}</h6>
                <p class="text-sm mb-0">{{ __('Create new tag') }}</p>
                <hr class="horizontal dark my-3">
                <form wire:submit.prevent="addTag" action="#" method="POST">
                    <div>
                        <label for="projectName" class="form-label">{{ __('Tag Name') }}</label>
                        <div class="@error('name')has-danger @enderror">
                            <input wire:model="name" type="text" class="form-control @error('name')is-invalid @enderror"
                                id="projectName">
                        </div>
                        @error('name') <div class="text-danger text-xs">{{ $message }}</div>@enderror
                    </div>
                    <div>
                        <label class="mt-4">{{ __('Tag Color') }}</label>
                        <div class="@error('color') has-danger @enderror">
                            <input wire:model="color" type="color" name="color" id="input-name"
                                class="form-control @error('color')is-invalid @enderror" placeholder="Color"
                                value="{{ old('color') }}" required>
                        </div>
                        @error('color') <div class="text-danger text-xs">{{ $message }}</div>@enderror
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('tags-management') }}" type="button" name="button"
                            class="btn btn-light m-0">{{ __('Back to list') }}</a>
                        <button type="submit" name="button"
                            class="btn bg-gradient-primary m-0 ms-2">{{ __('Create Tag') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
