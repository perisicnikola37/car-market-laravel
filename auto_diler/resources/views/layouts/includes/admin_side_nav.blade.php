<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="/profile"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Oglasi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        {{-- Zašto baš users.index? --}}
                        {{-- Pogledaj route:list i vidi ime route-a za index --}}
                        <a href="{{route('svi-oglasi')}}">Svi Oglasi</a>
                    </li>

                    <li>
                        {{-- Zašto baš users.create? --}}
                        {{-- Pogledaj route:list i vidi ime route-a za create --}}
                        <a href="">Izmijeni oglase</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Korisnici<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="">Svi Korisnici</a>
                    </li>

                    <li>
                        <a href="">Izmijeni Korisnike</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>


            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Analitika<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('analytics.index')}}">Pogledaj Analitiku</a>
                    </li>


                </ul>
                <!-- /.nav-second-level -->
            </li>
            

       
        </ul>


    </div>
    
    <!-- /.sidebar-collapse -->
</div>

