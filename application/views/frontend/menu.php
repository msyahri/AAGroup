<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="<?php echo base_url(). 'home';?>"></a>
                <div class="nav-collapse collapse pull-right">
				
                    <ul class="nav">
                        <li class="active"><a href="<?php echo base_url(). 'home';?>">Home</a></li>
                        <li><a href="<?php echo base_url(). 'tentang';?>">Tentang Kami</a></li>
                        <li><a href="<?php echo base_url(). 'layanan';?>">Layanan</a></li>
                        <li><a href="<?php echo base_url(). 'galeri';?>">Galeri</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(). 'career';?>">Career</a></li>
                                <li><a href="<?php echo base_url(). 'blog-item';?>">Blog Single</a></li>
                                <li><a href="<?php echo base_url(). 'faq';?>">FAQ</a></li>
                                <li><a href="<?php echo base_url(). 'pricing';?>">Pricing</a></li>
                                <li><a href="<?php echo base_url(). '404';?>">404</a></li>
                                <li><a href="<?php echo base_url(). 'typography';?>">Typography</a></li>
                                <li><a href="<?php echo base_url(). 'registration';?>">Registration</a></li>
                                <li class="divider"></li>
                                <li><a href=""<?php echo base_url(). 'privacy';?>">Privacy Policy</a></li>
                                <li><a href="<?php echo base_url(). 'terms';?>">Terms of Use</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(). 'blog';?>">Blog</a></li> 
                        <li><a href="<?php echo base_url(). 'kontak';?>">Kontak</a></li>
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                        </li>
                    </ul>     
					
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->