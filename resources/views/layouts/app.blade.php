<x-layouts.base>

    <!-- <livewire-tables:row.user_table>
    </livewire-tables:row.user_table> -->

    @if(in_array(request()->route()->getName(), ['dashboard'
    ,'totallisting',
    'addlisting',
    'add_user',
    'emailtemplate',
    'editlisting',
    'deletelisting',
    'managelisting',
    'rankbyword',
    'listingcategory',
    'reportlisting',
    'managemedia',
    'listingcategory',
    'review',
    'customfields',
    'settings',
    'userstar',
    'totalreviews',
    'totalsuggestion',
    'reportedlisting',
    'activelisting',
    'pendinglisting',
    'device',
    'browser',
    'activeusers',
    'activeclient',
    'profile',
    'profile-example', 'users',
    'bootstrap-tables',
    'transactions',
    'buttons',
    'forms', 'modals', 'notifications', 'typography', 'upgrade-to-pro']))

    {{-- Nav --}}
    @include('backend.layouts.nav')
    {{-- SideNav --}}
    @include('backend.layouts.sidenav')
    <main class="content">
        {{-- TopBar --}}
        @include('backend.layouts.topbar')


        <!-- test 1 -->
        {{$slot}}
        @yield('content')
        {{-- Footer --}}
        @include('backend.layouts.footer')
    </main>

    @elseif(in_array(request()->route()->getName(), ['register', 'register-example', 'login', 'login-example',
    'forgot-password', 'forgot-password-example', 'reset-password','reset-password-example']))
    <!-- test 2 -->

    @yield('content')
    {{-- Footer --}}
    @include('backend.layouts.footer2')


    @elseif(in_array(request()->route()->getName(), ['404', '500', 'lock']))
    <!-- test 3 -->
    @yield('content')

    @endif
</x-layouts.base>