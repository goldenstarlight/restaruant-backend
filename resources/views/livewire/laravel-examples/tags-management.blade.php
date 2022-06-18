<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div>
                @if ($showSuccesNotification)
                    <div wire:model="showSuccesNotification"
                        class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-white">{{ __('The tag has been successfully deleted.') }}</span>
                        <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div>
                @if ($showFailureNotification)
                    <div wire:model="showFailureNotification"
                        class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-text text-white">{{ __('The tag can not be deleted. There is an item associate with this tag.') }}</span>
                        <button wire:click="$set('showFailureNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div>
                @if (session('succes'))
                    <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span
                            class="alert-text text-white">{{ session('succes') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="card">
                <div class="d-flex flex-column mx-3 mt-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('All Tags') }}</h5>
                        </div>
                        @can('create', App\Tag::class)
                            <a href="{{ route('new-tag') }}" class="btn bg-gradient-primary btn-sm mb-0"
                                type="button">+&nbsp; {{ __('New Tag') }}</a>
                        @endcan
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="d-flex mt-3 align-items-center justify-content-center">
                            <p class="text-secondary pt-2">{{ __('Show') }}&nbsp;&nbsp;</p>
                            <select wire:model="perPage" class="form-control" id="entries">
                                <option value="5">{{ __('5') }}</option>
                                <option selected value="10">{{ __('10') }}</option>
                                <option value="15">{{ __('15') }}</option>
                                <option value="20">{{ __('20') }}</option>
                            </select>
                            <p class="text-secondary pt-2">&nbsp;&nbsp;{{ __('entries') }}</p>
                        </div>
                        <div class="mt-3 ">
                            <input wire:model="search" type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                </div>
                <x-table>
                    <x-slot name="head">
                        <x-table.heading sortable wire:click="sortBy('id')"
                            :direction="$sortField === 'id' ? $sortDirection : null">{{ __('ID') }}
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('name')"
                            :direction="$sortField === 'name' ? $sortDirection : null">{{ __('Name') }}
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('created_at')"
                            :direction="$sortField === 'created_at' ? $sortDirection : null">
                            {{ __('Creation Date') }}
                        </x-table.heading>
                        @can('manage-items', App\User::class)
                            <x-table.heading>{{ __('Action') }}</x-table.heading>
                        @endcan
                    </x-slot>

                    <x-slot name="body">
                        @foreach ($tags as $tag)
                            <x-table.row wire:key="row-{{ $tag->id }}">
                                <x-table.cell class="py-2">{{ $tag->id }}</x-table.cell>
                                <x-table.cell>
                                    <span class="badge text-white"
                                        style="background-color: {{ $tag->color }};">{{ $tag->name }}</span>
                                </x-table.cell>
                                <x-table.cell>{{ $tag->created_at }}
                                </x-table.cell>
                                <x-table.cell>
                                    @can('manage-items', auth()->user())
                                        @if (auth()->user()->can('update', $tag) || auth()->user()->can('delete', $tag))
                                            @can('update', $tag)
                                                <a href="{{ route('edit-tag', ['id' => $tag->id]) }}" class="mx-3"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Edit tag">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                            @endcan
                                            @can('delete', $tag)
                                                <span>
                                                    <i onclick="confirm('Are you sure you want to remove the user from this group?') || event.stopImmediatePropagation()"
                                                        wire:click="delete({{ $tag->id }})"
                                                        class="cursor-pointer fas fa-trash text-secondary"></i>
                                                </span>
                                            @endcan
                                        @endif
                                    @endcan
                                </x-table.cell>
                            </x-table.row>
                        @endforeach
                    </x-slot>
                </x-table>
                <div id="datatable-bottom">
                    {{ $tags->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
