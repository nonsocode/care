    <div class="sidebar" data-color="" data-image="{{asset('img/sidebar-5.jpg')}}">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{route('admin')}}" class="simple-text">
                    Care.com.ng
                </a>
            </div>

            <ul class="nav">
                <li class="{{request()->is('admin','*admin/dashboard')? "active":""}}">
                    <a href="{{ route('dashboard') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @can('view driver requests')
                <li class="{{request()->is('*admin/driver-requests*')? "active":""}}">
                    <a href="{{ route('driver-requests.index') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>All Driver Requests</p>
                    </a>
                </li>
                @endcan
                @can('manage drivers','manage clients')
                <li class="{{request()->is('drivers/*')? "active":""}}">
                    <a href="{{ route('drivers.index') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Drivers</p>
                    </a>
                </li>
                <li class="{{request()->is('admin/clients/*')? "active":""}}">
                    <a href="{{ route('clients.index') }}">
                        <i class="pe-7s-users"></i>
                        <p>Clients</p>
                    </a>
                </li>
                @endcan
                <li class="{{request()->is('admin/profile')? "active":""}}">
                    <a href="{{route('profile')}}">
                        <i class="pe-7s-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                @role('super admin')
                    <li class="{{request()->is('*users*')? "active":""}}">
                        <a href="{{ route('users.index') }}">
                            <i class="pe-7s-science"></i>
                            <p>User Management</p>
                        </a>
                    </li>
                @endrole
            </ul>
    	</div>
    </div>