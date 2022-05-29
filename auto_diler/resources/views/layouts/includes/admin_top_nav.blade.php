<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    
    <a style="margin-left: 5px;" class="navbar-brand" href="/"><img height="30" src="img/optimized images/banner_min.png" alt=""></a>
    
</div>
<!-- /.navbar-header -->



{{-- TOP NAVIGATION --}}
<ul class="nav navbar-top-links navbar-right">


    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            
            <i class="fa fa-user fa-fw"></i>

            <span> {{Auth::user()->username}}</span>

            
            <i class="fa fa-caret-down ml-5"></i>
            
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="{{route('profil.index')}}"><i class="fa fa-user fa-fw"></i> Profil</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Podešavanja</a>
            </li>
            <li class="divider"></li>
            <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Odjavi se</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->


</ul>