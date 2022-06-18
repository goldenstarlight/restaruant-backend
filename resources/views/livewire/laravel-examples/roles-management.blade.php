<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div>
                @if ($showSuccesNotification)
                    <div wire:model="showSuccesNotification"
                        class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span
                            class="alert-text text-white">{{ __(' The role has been successfully deleted.') }}</span>
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
                        <span class="alert-text text-white">{{ __(' The role can not be deleted! This role is taken by an user.') }}</span>
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
                        <span class="alert-text text-white">{{ session('succes') }}</span>
                        <button  type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="card">
                <div class="d-flex flex-column mx-3 mt-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('All Users') }}</h5>
                        </div>
                        @can('create', App\Role::class)
                            <a href="{{ route('new-role') }}" class="btn bg-gradient-primary btn-sm mb-0"
                                type="button">+&nbsp; {{ __('New Role') }}</a>
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
                        <x-table.heading sortable wire:click="sortBy('description')"
                            :direction="$sortField === 'description' ? $sortDirection : null">{{ __('Description') }}
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('created_at')"
                            :direction="$sortField === 'created_at' ? $sortDirection : null">
                            {{ __('Creation Date') }}
                        </x-table.heading>
                        @can('manage-users', App\User::class)
                            <x-table.heading>{{ __('Action') }}</x-table.heading>
                        @endcan
                    </x-slot>

                    <x-slot name="body">
                        @foreach ($roles as $role)
                            <x-table.row wire:key="row-{{ $role->id }}">
                                <x-table.cell class="py-2">{{ $role->id }}</x-table.cell>
                                <x-table.cell>{{ $role->name }}</x-table.cell>
                                <x-table.cell>{{ $role->description }}</x-table.cell>
                                <x-table.cell>{{ $role->created_at }}</x-table.cell>
                                <x-table.cell>
                                    @can('manage-users', auth()->user())
                                        @can('update', $role)
                                            @if (auth()->user()->role_id != $role->id)
                                                <a href="{{ route('edit-role', ['id' => $role->id]) }}" class="mx-3"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Edit role">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                @can('delete', $role)
                                                    <span>
                                                        <i onclick="confirm('Are you sure you want to remove the user from this group?') || event.stopImmediatePropagation()"
                                                            wire:click="delete({{ $role->id }})"
                                                            class="cursor-pointer fas fa-trash text-secondary"></i>
                                                    </span>
                                                @endcan
                                            @else
                                                <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Disabled">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <span>
                                                    <i class="cursor-pointer fas fa-trash text-secondary" data-bs-toggle="tooltip" data-bs-original-title="Disabled"></i>
                                                </span>
                                            @endif
                                        @endcan
                                    @endcan
                                </x-table.cell>
                            </x-table.row>
                        @endforeach
                    </x-slot>
                </x-table>
                <div id="datatable-bottom">
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
