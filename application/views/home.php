
	<!-- Loader Box -->
    <!-- <div class="d-flex justify-content-center" style="display:none">
        <div class="spinner-border m-5 text-info" style="width: 5rem; height: 5rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
     </div> -->
    <!-- end Loader Box -->

    <div class="container-fluid" >
		<!-- Carosoul -->
		 
     <!--start code-->
    <div class="row py-2">
        <!--Breaking box-->
        <div class="col-1 col-md-3 col-lg-2 py-1 pr-md-0 mb-md-1">
            <div class="d-inline-block d-md-block bg-primary text-white text-center breaking-caret py-1 px-2">
                <span class="fa fa-bolt" title="Breaking News"></span>
                <span class="d-none d-md-inline-block">Breaking</span>
            </div>
        </div>
        <!--Breaking content-->
        <div class="col-11 col-md-9 col-lg-10 pl-1 pl-md-2">
            <div class="breaking-box pt-2 pb-1">
                <!--marque-->
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseleave="this.start();">
                <?php foreach($headlines as $headline): ?>
                  <a class="h6 font-weight-light" href="<?php echo $headline->url; ?>"><span class="position-relative mx-2 badge badge-primary rounded-0"><?php echo $headline->source->name; ?></span> <?php echo $headline->title; ?></a>
                <?php endforeach; ?>
                </marquee>
            </div>
        </div>
    </div>
    <!--end code-->
    
    <div class="row">
        <div class="col-12 pb-5">
            <!--SECTION START-->
            <section class="row">
                <!--Start slider news-->
                <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                    <div id="featured" class="carousel slide carousel" data-ride="carousel">
                        <!--dots navigate-->
                        <ol class="carousel-indicators top-indicator">
                            <li data-target="#featured" data-slide-to="0" class="active"></li>
                            <li data-target="#featured" data-slide-to="1"></li>
                            <li data-target="#featured" data-slide-to="2"></li>
                            <li data-target="#featured" data-slide-to="3"></li>
                            <li data-target="#featured" data-slide-to="4"></li>
                        </ol>
                        
                        <!--carousel inner-->
                        <div class="carousel-inner" style="height:100%;">
                            <!--Item slider-->
                            <?php $i=1; foreach($crickets as $cricket): ?>
                            <div class="carousel-item <?php if($i == 1){ echo "active";} ?>">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="<?php echo $cricket->url ; ?>">
                                                <img class="img-fluid"
                                                     src="<?php echo $cricket->urlToImage; ?>"
                                                     alt="<?php echo $cricket->title; ?>">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="<?php echo $cricket->url ; ?>">
                                                <h2 class="h3 post-title text-white my-1"><?php echo $cricket->title; ?></h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="../category/author.html"><?php echo $cricket->author; ?></a></span>
                                                <span class="news-date"><?php echo date('d M Y',strtotime($cricket->publishedAt));?></span>
                                               
                                            </div>              
                                        </div>
                                         <br>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                            <!--end item slider-->
                        </div>
                        <!--end carousel inner-->
                    </div>
                    
                    <!--navigation-->
                    <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--End slider news-->
            
                <!--Start box news-->
                <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                    <div class="row">
                        <!--news box-->
                        <div class="col-6 pb-1 pt-0 pr-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="<?php echo $lifestyle->url; ?>">
                                            <img class="img-fluid w-100"
                                                 src="<?php echo $lifestyle->urlToImage; ?>"
                                                 alt="<?php echo $lifestyle->title; ?>" >
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="<?php echo $lifestyle->url; ?>">Lifestyle</a>

                                        <!--title-->
                                        <a href="<?php echo $lifestyle->url; ?>">
                                            <h2 class="h5 text-white my-1"><?php echo $lifestyle->title; ?></h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-0">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="<?php echo $fun->url; ?>">
                                            <img class="img-fluid"
                                                 src="<?php echo $fun->urlToImage; ?>"
                                                 alt="bootstrap templates for blog">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="<?php echo $fun->url; ?>">Fun</a>
                                        <!--title-->
                                        <a href="<?php echo $fun->url; ?>">
                                            <h2 class="h5 text-white my-1"><?php echo $fun->title; ?></h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pr-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="<?php echo $fitness->url; ?>">
                                            <img class="img-fluid"
                                                 src="<?php echo $fitness->urlToImage; ?>"
                                                 alt="bootstrap blog wordpress theme">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="<?php echo $fitness->url; ?>">Fitness</a>
                                        <!--title-->
                                        <a href="<?php echo $fitness->url; ?>">
                                            <h2 class="h5 text-white my-1"><?php echo $fitness->title; ?></h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="<?php echo $adventure->url; ?>">
                                            <img class="img-fluid"
                                                 src="<?php echo $adventure->urlToImage; ?>"
                                                 alt="blog website templates bootstrap">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="<?php echo $adventure->url; ?>">Adventure</a>
                                        <!--title-->
                                        <a href="<?php echo $adventure->url; ?>"><h2 class="h5 text-white my-1"><?php echo $adventure->title; ?></h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end news box-->
                    </div>
                </div>
				<!--End box news-->
				</section>
				<!-- actual news -->
				<div class="row " >
					<div class="col-md-12">
						<h3><span class="grp-head">SPORTS</span> <span class="float-right grp-side" ><a class="btn btn-warning" href="<?php echo base_url('topic/sports');?>">More</a></span></h3>
						<hr>
                    </div>
                    <?php foreach($sports as $sport):?>
					<div class="col-md-3 col-sm-6 col-s-12">
						<div class="card">
								<img class="card-img-top" src="<?php echo $sport->urlToImage; ?>" alt="">
							<div class="card-body">
								<h5 class="card-title"><?php echo $sport->title; ?> <span class="badge badge-primary">New</span></h5>
								<p class="card-text"><?php if (strlen($sport->content) > 250):
                                             echo substr($sport->content, 0, 250) . '...';
                                             endif;  ?></p>
								<a href="<?php echo $sport->url; ?>" class="btn btn-danger">Read More</a>
							</div>
						</div>
                    </div>
                    <?php endforeach; ?>
                </div>	
                
                <!-- actual news -->
				<div class="row mt-3" >
					<div class="col-md-12">
						<h3><span class="grp-head">POLITICS</span> <span class="float-right grp-side" ><a class="btn btn-warning" href="<?php echo base_url('topic/politics');?>">More</a></span></h3>
						<hr>
                    </div>
                    <?php foreach($politics as $politic):?>
					<div class="col-md-3 col-sm-6 col-s-12">
						<div class="card">
								<img class="card-img-top" src="<?php echo $politic->urlToImage; ?>" alt="">
							<div class="card-body">
								<h5 class="card-title"><?php echo $politic->title; ?> <span class="badge badge-primary">New</span></h5>
								<p class="card-text"><?php if (strlen($politic->content) > 250):
                                             echo substr($politic->content, 0, 250) . '...';
                                             endif;  ?></p>
								<a href="<?php echo $politic->url; ?>" class="btn btn-danger">Read More</a>
							</div>
						</div>
                    </div>
                    <?php endforeach; ?>
                </div>	
                
                <!-- actual news -->
				<div class="row " >
					<div class="col-md-12">
						<h3><span class="grp-head">HEALTH</span> <span class="float-right grp-side" ><a class="btn btn-warning" href="<?php echo base_url('topic/health');?>">More</a></span></h3>
						<hr>
                    </div>
                    <?php foreach($healths as $health):?>
					<div class="col-md-3 col-sm-6 col-s-12">
						<div class="card">
								<img class="card-img-top" src="<?php echo $health->urlToImage; ?>" alt="">
							<div class="card-body">
								<h5 class="card-title"><?php echo $health->title; ?> <span class="badge badge-primary">New</span></h5>
								<p class="card-text"><?php if (strlen($health->content) > 250):
                                             echo substr($health->content, 0, 250) . '...';
                                             endif;  ?></p>
								<a href="<?php echo $health->url; ?>" class="btn btn-danger">Read More</a>
							</div>
						</div>
                    </div>
                    <?php endforeach; ?>
                </div>	
                
                <!-- actual news -->
				<div class="row " >
					<div class="col-md-12">
						<h3><span class="grp-head">ART</span> <span class="float-right grp-side" ><a class="btn btn-warning" href="<?php echo base_url('topic/art');?>">More</a></span></h3>
						<hr>
                    </div>
                    <?php foreach($arts as $art):?>
					<div class="col-md-3 col-sm-6 col-s-12">
						<div class="card">
								<img class="card-img-top" src="<?php echo $art->urlToImage; ?>" alt="">
							<div class="card-body">
								<h5 class="card-title"><?php echo $art->title; ?> <span class="badge badge-primary">New</span></h5>
								<p class="card-text"><?php if (strlen($art->content) > 250):
                                             echo substr($art->content, 0, 250) . '...';
                                             endif;  ?></p>
								<a href="<?php echo $art->url; ?>" class="btn btn-danger">Read More</a>
							</div>
						</div>
                    </div>
                    <?php endforeach; ?>
                </div>	
                
                <!-- actual news -->
				<div class="row " >
					<div class="col-md-12">
						<h3><span class="grp-head">MOVIES</span> <span class="float-right grp-side" ><a class="btn btn-warning" href="<?php echo base_url('topic/movies');?>">More</a></span></h3>
						<hr>
                    </div>
                    <?php foreach($movies as $movie):?>
					<div class="col-md-3 col-sm-6 col-s-12">
						<div class="card">
								<img class="card-img-top" src="<?php echo $movie->urlToImage; ?>" alt="">
							<div class="card-body">
								<h5 class="card-title"><?php echo $movie->title; ?> <span class="badge badge-primary">New</span></h5>
								<p class="card-text"><?php if (strlen($movie->content) > 250):
                                             echo substr($movie->content, 0, 250) . '...';
                                             endif;  ?></p>
								<a href="<?php echo $movie->url; ?>" class="btn btn-danger">Read More</a>
							</div>
						</div>
                    </div>
                    <?php endforeach; ?>
				</div>	
			</div>
			<!-- end actual news -->
    </div>
   
	