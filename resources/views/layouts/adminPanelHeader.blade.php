<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
            <div class="nav-wrapper">
                <ul class="navbar-list right">

                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{asset(auth()->user()->pic)}}" alt="avatar"><i></i></span></a></li>
                </ul>

                <!-- profile-dropdown-->
                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1"><i class="material-icons">person_outline</i>
                            {{auth()->user()->name}}</a></li>
                    <li><a class="grey-text text-darken-1" href="{{url('viewProfile')}}"><i class="material-icons">person_outline</i>
                            مشخصات </a></li>
                    <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">help_outline</i> پشتیبانی</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <form action="{{url('/logout')}}" method="post">
                            @csrf
                            <button class="grey-text btn-flat text-darken-1" type="submit"> خروج</button>
                        </form>
                    </li>
                </ul>
            </div>
            <nav class="display-none search-sm">
                <div class="nav-wrapper">
                    <form id="navbarForm">
                        <div class="input-field search-input-sm">
                            <input class="search-box-sm" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                            <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                            <ul class="search-list collection search-list-sm display-none"></ul>
                        </div>
                    </form>
                </div>
            </nav>
        </nav>
    </div>
</header>

