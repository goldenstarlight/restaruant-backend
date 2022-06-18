<x-layouts.base>
    @auth()
        @if (auth()->user()->isAdmin())
            @if (in_array(request()->route()->getName(),['virtual-reality', 'virtual-info'],))
                @include('layouts.navbars.auth.topnav')
                {{ $slot }}
                @include('components.plugins.fixed-plugin')
                @include('layouts.footers.auth')
            @elseif(in_array(request()->route()->getName(), ['pricing']))
                @include('layouts.navbars.guest.dark-nav')
                @include('components.plugins.fixed-plugin')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['new-product']))
                @include('layouts.navbars.auth.sidebar')
                <div class="main-content position-relative bg-gray-100">
                    @include('layouts.navbars.auth.integrated-topnav')
                    <div>
                        {{ $slot }}
                        @include('layouts.footers.auth')
                    </div>
                </div>
                @include('components.plugins.fixed-plugin')
            @elseif(in_array(request()->route()->getName(), ['404', '500']))
                @include('layouts.navbars.guest.white-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['lock-cover', 'lock-illustration', 'reset-basic',
                'signin-cover', 'signup-cover', 'verification-cover']))
                @include('layouts.navbars.guest.transparent-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['signin-illustration', 'reset-illustration',
                'signup-illustration', 'verification-illustration']))
                @include('layouts.navbars.guest.transparent-nav')
                {{ $slot }}
            @elseif(in_array(request()->route()->getName(), ['reset-cover']))
                @include('layouts.navbars.guest.wide-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['lock-basic', 'signin-basic', 'signup-basic',
                'verification-basic']))
                @include('layouts.navbars.guest.dark-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['rtl']))
                {{ $slot }}
            @elseif(in_array(request()->route()->getName(), ['laravel-new-user']))
                @include('layouts.navbars.auth.sidebar')
                @include('layouts.navbars.auth.topnav')
                @include('components.plugins.fixed-plugin')
                <main class="main-content mt-1 border-radius-lg">
                    {{ $slot }}
                </main>
                @include('layouts.footers.auth')
            @elseif(in_array(request()->route()->getName(), ['login','register', 'forgot-password', 'reset-password']))
                {{ $slot }}
                @include('layouts.footers.guest')
            @else
                @include('layouts.navbars.auth.sidebar')
                @include('layouts.navbars.auth.topnav')
                @include('components.plugins.fixed-plugin')
                <main class="main-content mt-1 border-radius-lg">
                    {{ $slot }}
                </main>
                @include('layouts.footers.auth')
            @endif

            {{-- If a creator is authenticated --}}
        @elseif(auth()->user()->isCreator() && !in_array(request()->route()->getName(), ['users-management','roles-management', 'laravel-new-user', 'new-role']))
            @if (in_array(request()->route()->getName(),['virtual-reality', 'virtual-info'],))
                @include('layouts.navbars.auth.topnav')
                {{ $slot }}
                @include('components.plugins.fixed-plugin')
                @include('layouts.footers.auth')
            @elseif(in_array(request()->route()->getName(), ['pricing']))
                @include('layouts.navbars.guest.dark-nav')
                @include('components.plugins.fixed-plugin')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['new-product']))
                @include('layouts.navbars.auth.sidebar')
                <div class="main-content position-relative bg-gray-100">
                    @include('layouts.navbars.auth.integrated-topnav')
                    <div>
                        {{ $slot }}
                        @include('layouts.footers.auth')
                    </div>
                </div>
                @include('components.plugins.fixed-plugin')
            @elseif(in_array(request()->route()->getName(), ['404', '500']))
                @include('layouts.navbars.guest.white-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['lock-cover', 'lock-illustration', 'reset-basic',
                'signin-cover', 'signup-cover', 'verification-cover']))
                @include('layouts.navbars.guest.transparent-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['signin-illustration', 'reset-illustration',
                'signup-illustration', 'verification-illustration']))
                @include('layouts.navbars.guest.transparent-nav')
                {{ $slot }}
            @elseif(in_array(request()->route()->getName(), ['reset-cover']))
                @include('layouts.navbars.guest.wide-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['lock-basic', 'signin-basic', 'signup-basic',
                'verification-basic']))
                @include('layouts.navbars.guest.dark-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['rtl']))
                {{ $slot }}
            @else
                @include('layouts.navbars.auth.sidebar')
                @include('layouts.navbars.auth.topnav')
                @include('components.plugins.fixed-plugin')
                <main class="main-content mt-1 border-radius-lg">
                    {{ $slot }}
                </main>
                @include('layouts.footers.auth')
            @endif

            {{-- If a creator or a member is authenticated and tries to access in url users management or roles management --}}
        @elseif(auth()->user()->isCreator() && in_array(request()->route()->getName(), ['users-management',
            'roles-management', 'laravel-new-user', 'new-role']))
            @include('livewire.laravel-examples.error.page-error')
            {{-- If a member is authenticated --}}
        @elseif(auth()->user()->isMember() && !in_array(request()->route()->getName(), ['users-management',
            'roles-management', 'laravel-new-user', 'new-role','category-management', 'tags-management', 'new-category',
            'new-tag', 'new-item']))
            @if (in_array(request()->route()->getName(),['virtual-reality', 'virtual-info'],))
                @include('layouts.navbars.auth.topnav')
                {{ $slot }}
                @include('components.plugins.fixed-plugin')
                @include('layouts.footers.auth')
            @elseif(in_array(request()->route()->getName(), ['pricing']))
                @include('layouts.navbars.guest.dark-nav')
                @include('components.plugins.fixed-plugin')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['new-product']))
                @include('layouts.navbars.auth.sidebar')
                <div class="main-content position-relative bg-gray-100">
                    @include('layouts.navbars.auth.integrated-topnav')
                    <div>
                        {{ $slot }}
                        @include('layouts.footers.auth')
                    </div>
                </div>
                @include('components.plugins.fixed-plugin')
            @elseif(in_array(request()->route()->getName(), ['404', '500']))
                @include('layouts.navbars.guest.white-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['lock-cover', 'lock-illustration', 'reset-basic',
                'signin-cover', 'signup-cover', 'verification-cover']))
                @include('layouts.navbars.guest.transparent-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['signin-illustration', 'reset-illustration',
                'signup-illustration', 'verification-illustration']))
                @include('layouts.navbars.guest.transparent-nav')
                {{ $slot }}
            @elseif(in_array(request()->route()->getName(), ['reset-cover']))
                @include('layouts.navbars.guest.wide-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['lock-basic', 'signin-basic', 'signup-basic',
                'verification-basic']))
                @include('layouts.navbars.guest.dark-nav')
                {{ $slot }}
                @include('layouts.footers.guest')
            @elseif(in_array(request()->route()->getName(), ['rtl']))
                {{ $slot }}
            @else
                @include('layouts.navbars.auth.sidebar')
                @include('layouts.navbars.auth.topnav')
                @include('components.plugins.fixed-plugin')
                <main class="main-content mt-1 border-radius-lg">
                    {{ $slot }}
                </main>
                @include('layouts.footers.auth')
            @endif
            {{-- If a member or a member tries to access in url category management or tags management --}}
        @elseif(auth()->user()->isMember() && in_array(request()->route()->getName(), ['users-management',
            'roles-management', 'laravel-new-user', 'new-role', 'category-management', 'tags-management', 'new-category','new-tag', 'new-item']))
            @include('livewire.laravel-examples.error.page-error')
        @endif
    @endauth

    {{-- If the user is not authenticated (if the user is a guest) --}}
    @guest
        {{-- If the user is on the login page --}}
        @if (!auth()->check() && in_array(request()->route()->getName(),['login', 'register'],))
            @include('layouts.navbars.guest.dark-nav')
            {{ $slot }}
            @include('layouts.footers.guest')
        @endif
        @if (!auth()->check() && in_array(request()->route()->getName(),['forgot-password', 'reset-password'],))
            @include('layouts.navbars.guest.transparent-nav')
            {{ $slot }}
            @include('layouts.footers.guest')
        @endif
    @endguest

</x-layouts.base>
