<header class="header" id="jump">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="{{url('/home')}}">
                    <img src="images/ibsus.jpeg" alt="" style="width: 45px;height: 45px">
                    Ibadah Khusus HKBP Jatiwaringin
                </a> </div>
            <div class="collapse navbar-collapse hidden-xs">
                <ul class="nav navbar-nav navbar-right">
                    <li {{Route::is('home')? 'class=active':''}}><a href="{{url('/home')}}">
                            <span>Home</span>
                        </a></li>
                    <li {{Route::is('addPelayan')? 'class=active':''}}><a href="{{url('/pelayan')}}">
                            <span>Pelayan</span>
                        </a></li>
                    <li><a href="#jump2">Formulir</a></li>
                    <li><a href="#jump3">Dokumentasi</a></li>
                    <li><a href="#jump4">Bulib</a></li>
                    <li><a href="#jump5">Jadwal Kegiata</a></li>
                    <li><a href="#jump6">Tentang Ibsus</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <div class="collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#jump0" data-toggle="collapse" data-target=".navbar-responsive-collapse">Home</a></li>
                    <li><a href="#jump1" data-toggle="collapse" data-target=".navbar-responsive-collapse">Services</a></li>
                    <li><a href="#jump2" data-toggle="collapse" data-target=".navbar-responsive-collapse">Portfolio</a></li>
                    <li><a href="#jump3" data-toggle="collapse" data-target=".navbar-responsive-collapse">Pricing</a></li>
                    <li><a href="#jump4" data-toggle="collapse" data-target=".navbar-responsive-collapse">Team</a></li>
                    <li><a href="#jump5" data-toggle="collapse" data-target=".navbar-responsive-collapse">Testimonials</a></li>
                    <li><a href="#jump6" data-toggle="collapse" data-target=".navbar-responsive-collapse">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-responsive-collapse -->
        </div>
    </nav>
</header>