<div class="container-fluid py-4">
    <div class="row">
        <div class="col-9 mx-auto">
            <div class="card card-body mt-4">
                <h6 class="mb-0">{{ __('New Category') }}</h6>
                <p class="text-sm mb-0">{{ __('Create new category') }}</p>
                <hr class="horizontal dark my-3">
                <form wire:submit.prevent="addCategory" action="#" method="POST">
                    <div>
                        <label for="projectName" class="form-label">{{ __('Category Name') }}</label>
                        <div class="@error('name')has-danger @enderror">
                            <input wire:model="name" type="text" class="form-control @error('name')is-invalid @enderror"
                                id="projectName">
                        </div>
                        @error('name') <div class="text-danger text-xs">{{ $message }}</div>@enderror
                    </div>
                    <div>
                        <label class="mt-4">{{ __('Category Description') }}</label>
                        <div class="@error('description') has-danger @enderror">
                            <textarea wire:model="description" type="text"
                                class="form-control @error('description')is-invalid @enderror"
                                id="projectName"></textarea>
                        </div>
                        @error('description') <div class="text-danger text-xs">{{ $message }}</div>@enderror
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('category-management') }}" type="button" name="button"
                            class="btn btn-light m-0">{{ __('Back to list') }}</a>
                        <button type="submit" name="button"
                            class="btn bg-gradient-primary m-0 ms-2">{{ __('Create Category') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
