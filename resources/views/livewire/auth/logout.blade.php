<div>
    <i class="fa fa-user me-sm-1 {{ in_array(request()->route()->getName(),['new-product']) ? 'text-white' : '' }}"></i>
    <span class="d-sm-inline d-none {{ in_array(request()->route()->getName(),['new-product']) ? 'text-white' : '' }}" wire:click="logout">{{ __('Sign Out') }}</span>
</div>
