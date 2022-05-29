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
                <a href="{{route('profil.index')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Oglasi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        {{-- Zašto baš users.index? --}}
                        {{-- Pogledaj route:list i vidi ime route-a za index --}}
                        <a href="{{route('svi-oglasi')}}">Svi Oglasi</a>
                    </li>


                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Korisnici<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('svi-korisnici')}}">Svi Korisnici</a>
                    </li>


                </ul>
                <!-- /.nav-second-level -->
            </li>


            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Analitika<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('analitika.index')}}">Pogledaj Analitiku</a>
                    </li>


                </ul>
                <!-- /.nav-second-level -->
            </li>
            

       
        </ul>


    </div>
    
    <!-- /.sidebar-collapse -->
</div>

