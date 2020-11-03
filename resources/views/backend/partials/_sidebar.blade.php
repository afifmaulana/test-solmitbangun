<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url({{ asset ('assets/images/background/user-info.jpg') }}) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{ asset ('assets/images/users/profile.png') }}" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">PERSONAL</li>
                <li><a href="{{route('dashboard')}}" class="fa fa-home">  Dashboard</a></li>
                <li><a href="{{route('kalkulator.index')}}" class="fa fa-calculator">  Kalkulator</a></li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Artikel </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('artikel')}}">Data Artikel</a></li>
                        <li><a href="{{route('artikel.create')}}">Tambah Artikel</a></li>
                    </ul>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Kategori </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('kategori')}}">Data Kategori</a></li>
                        <li><a href="{{route('kategori.create')}}">Tambah Kategori</a></li>
                    </ul>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
    <!-- End Bottom points-->
</aside>
