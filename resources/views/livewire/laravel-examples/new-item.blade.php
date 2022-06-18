<div class="container-fluid py-4">
    <div class="row">
        <div class="col-9 mx-auto">
            <div class="card card-body mt-4">
                <h6 class="mb-0">{{ __('New Item') }}</h6>
                <p class="text-sm mb-0">{{ __('Create new item') }}</p>
                <hr class="horizontal dark my-3">
                <form wire:submit.prevent="addItem" action="#" method="POST">
                    <div class="avatar avatar-xxl position-relative">
                        <div class="@error('photo') has-danger @enderror">
                            <label for="file-input"
                                class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                    aria-hidden="true" data-bs-original-title="Edit Image"
                                    aria-label="Edit Image"></i><span class="sr-only">{{ __('Edit Image') }}</span>
                            </label>

                            <input type="file" accept="image/*" wire:model="photo" id="file-input" class="d-none">
                            <span
                                class="h-12 w-12 rounded-full overflow-hidden bg-gray-100 @error('photo') is-invalid @enderror">
                                @if ($photo)
                                    <img src="{{ $photo->temporaryUrl() }}" alt="Profile Photo">
                                @else
                                    <img src="/assets/img/image_placeholder.jpg" alt="Profile Photo">
                                @endif
                            </span>
                        </div>
                    </div>
                    <div>
                        @error('photo') <div class="text-danger text-xs mt-3">{{ $message }}</div> @enderror
                    </div>
                    <div>
                        <label for="itemName" class="form-label">{{ __('Item Name') }}</label>
                        <div class="@error('name') has-danger @enderror">
                            <input wire:model.lazy="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" id="projectName">
                        </div>
                        @error('name') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                    </div>
                    <div class="mt-3">
                        <label for="itemExcerpt" class="form-label">{{ __('Item Excerpt') }}</label>
                        <div>
                            <input wire:model.lazy="excerpt" type="text" class="form-control" id="itemtExcerpt">
                        </div>
                    </div>
                    <div>
                        <label class="mt-4">{{ __('Item Description') }}</label>
                        <p class="form-text text-muted text-xs ms-1">
                            {{ __('This is how others will learn about the item, so make it good!') }}
                        </p>

                        <div wire:ignore>
                            <div x-data x-ref="quill" x-init="
                            quill = new Quill($refs.quill, {theme: 'snow'});
                            quill.on('text-change', function () {
                                $dispatch('quill-text-change', quill.root.innerHTML);
                            });
                            " x-on:quill-text-change.debounce.2000ms="@this.set('description', $event.detail)">
                                {!! $description !!}
                            </div>
                        </div>
                    </div>
                    <div>
                        <div wire:ignore>
                            <label class=" mt-4 form-label">{{ __('Item Category') }}</label>
                            <div class=" @error('category_id') has-danger @enderror">
                                <select wire:model="category_id"
                                    class="form-control @error('category_id') is-invalid @enderror"
                                    name="choices-multiple-remove-button" id="choices-multiple-remove-button"
                                    placeholder="This is a placeholder">
                                    <option selected value="">Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @error('category_id') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                    </div>
                    <div>
                        <label for="tags" class="mt-4 form-label">{{ __('Item Tags') }}</label>
                        <div wire:ignore>
                            @php
                                $selected = json_encode($this->tags_id);
                            @endphp
                            @php
                                $array = [];
                            @endphp
                            @if (isset($this->tags) && count($this->tags) > 0)
                                @foreach ($this->tags as $list)
                                    @php
                                        $array[$list['id']] = $list['name'];
                                    @endphp
                                @endforeach
                            @endif
                            <x-input.selectmultiple wire:model="tags_id" prettyname="tags" :options="$array"
                                :selected="$selected" />
                        </div>
                        @error('tags_id') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                    </div>
                    <div>
                        <label class="mt-4 form-label">{{ __('Item Status') }}</label>
                        <div class="@error('status') has-danger @enderror d-flex flex-column">
                            <div  class="form-check">
                                <input wire:model="status" type="radio" class="form-check-input" name="status" id="published" value="Published">
                                <label class="custom-control-label" for="published">{{ __('Published') }}</label>
                            </div>
                            <div  class="form-check">
                                <input wire:model="status" type="radio" class="form-check-input" name="status" id="draft" value="Draft">
                                <label class="custom-control-label" for="draft">{{ __('Draft') }}</label>
                            </div>
                            <div  class="form-check">
                                <input wire:model="status" type="radio" class="form-check-input" name="status" id="Active" value="Active">
                                <label class="custom-control-label" for="active">{{ __('Active') }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-check form-switch mt-3">
                        <label class="form-label" for="showOnHomepage">{{ __('Show on homepage') }}</label>
                        <input wire:model="showOnHomepage" class="form-check-input" type="checkbox" id="showOnHomepage">
                    </div>

                    <div>
                        <label class="mt-4 form-label">{{ __('Item Options') }}</label>
                        <div>
                            <div class="form-check">
                                <input wire:model="options.{{ 0 }}" class="form-check-input"
                                    name="options[]" id="optionFirst" type="checkbox" value="0">
                                <label class="custom-control-label" for="optionFirst">{{ __('First') }}</label>
                            </div>
                            <div class="form-check">
                                <input wire:model="options.{{ 1 }}" class="form-check-input"
                                    name="options[]" id="optionSecond" type="checkbox" value="1">
                                <label class="custom-control-label" for="optionSecond">{{ __('Second') }}</label>
                            </div>
                            <div class="form-check">
                                <input wire:model="options.{{ 2 }}" class="form-check-input"
                                    name="options[]" id="optionThird" type="checkbox" value="2">
                                <label class="custom-control-label" for="optionThird">{{ __('Third') }}</label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="date">{{ __('Date') }}</label>
                        <div>
                            <input wire:model="date" class="form-control datetimepicker" type="text"
                                placeholder="Please select date" data-input>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('items-management') }}" type="button" name="button"
                            class="btn btn-light m-0">{{ __('Back to List') }}</a>
                        <button type="submit" name="button"
                            class="btn bg-gradient-primary m-0 ms-2">{{ __('Create Item') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="../../../assets/js/plugins/choices.min.js"></script>
<script src="../../../assets/js/plugins/quill.min.js"></script>
<script src="../../../assets/js/plugins/flatpickr.min.js"></script>
<script src="../../../assets/js/plugins/dropzone.min.js"></script>

<script>
    if (document.getElementById('choices-multiple-remove-button')) {
        var element = document.getElementById('choices-multiple-remove-button');
        const example = new Choices(element, {
            removeItemButton: true
        });
    }

    if (document.querySelector('.datetimepicker')) {
        flatpickr('.datetimepicker', {
            allowInput: true
        }); // flatpickr
    }

</script>
