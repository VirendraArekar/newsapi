<!-- example 2 - using auto margins -->
	<nav class="navbar navbar-expand-md navbar-light bg-info" >
		<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active" >
					<a class="nav-link" href="#" ><span style="font-size:40px !important;">NEWS</span></a>
				</li>
			</ul>
		</div>
		<div class="mx-auto order-0">
			<a class="navbar-brand mx-auto" href="#">
				<img src="<?php echo base_url().'/assets/icon/logo.png';?>"  width="70px">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
			<ul class="navbar-nav ml-auto">
                <li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('info/about');?>">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('info/contact');?>">Contact Us</a>
                </li>
              <?php if(is_logged_in() == ''):  ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('auth/login');?>">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('auth/register');?>">Signup</a>
                </li>
              <?php else : ?>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fa fa-user"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('auth/login/logout');?>">Log out</a>
                    </div>
                </li>  
              <?php endif; ?>

			</ul>
		</div>
	</nav>
	<!-- example 2 - using auto margins -->
	<nav class="navbar navbar-expand-sm navbar-light bg-light sub-navbar">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar8">
			<span class="navbar-toggler-icon"></span>
		</button>
		<span class="navbar-text">&nbsp;</span>
		<div class="navbar-collapse collapse" id="navbar8">
			<ul class="navbar-nav abs-center-x">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/movies');?>">MOVIES</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/electronic');?>">ELECTIONS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/bussiness');?>">BUSSINESS</a>
                </li>
                <li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/adventure');?>">ADVENTURE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/cricket');?>">CRICKET</a>
                </li>
                <li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/lifestyle');?>">LIFESTYLE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/tech');?>">TECH</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/health');?>">HEALTH</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/art');?>">ART</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/contries');?>">CONTRIES</a>
                </li>
                <li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/football');?>">FOOTBALL</a>
                </li>
                <li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('topic/fitness');?>">FITNESS</a>
				</li>
			</ul>
		</div>
    </nav>