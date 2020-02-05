<!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4 text-center text-warning">Keyword <?php echo ucfirst($keyword); ?>
        </h1>
        <?php if(count($news)  == 0): ?>
             <h2 class="text-center mt-5">Keyword data not found.</h2>
             <h5 class="text-center">Please try another keyword.</h5>
        <?php endif; ?>

        <!-- Blog Post -->
        <?php foreach($news as $new): ?>
        <div class="card mb-4">
          <img class="card-img-top" src="<?php echo $new->urlToImage; ?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?php echo $new->title; ?></h2>
            <p class="card-text"><?php echo $new->content; ?></p>
            <a href="<?php echo $new->url; ?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on <?php echo date('d M Y',strtotime($new->publishedAt)); ?> by
            <a href="#"><?php echo $new->author; ?></a>
          </div>
        </div>
        <?php endforeach; ?>
        

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          
        <?php if($page > 1): ?>
            <li class="page-item">
                <?php $prev = $page - 1;?>
              <a class="page-link" href="<?php echo base_url("topic/$keyword/$prev"); ?>">&larr; Older</a>
            </li>
        <?php endif; ?>
        <?php if($page < $noOfPages): ?>
            <li class="page-item">
                <?php $next = $page + 1;?>
              <a class="page-link" href="<?php echo base_url("topic/$keyword/$next"); ?>">&rarr; Newer</a>
            </li>
        <?php endif; ?>
            
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <form action="" method="post" id="search-form">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for..." name="keyword" id="keyword" required>
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit" id="go">Go!</button>
              </span>
            </div>
            </form>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="<?php echo base_url('topic/movies'); ?>">Movies</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('topic/politics'); ?>">Politics</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('topic/election'); ?>">Elections</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('topic/bussiness'); ?>">Bussiness</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('topic/adventure'); ?>">Adventure</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('topic/cricket'); ?>">Cricket</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('topic/lifestyle'); ?>">Lifestyle</a>
                  </li>
                 
                   
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                     <li>
                    <a href="<?php echo base_url('topic/technology'); ?>">Technology</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('topic/health'); ?>">Health</a>
                  </li>
                   <li>
                    <a href="<?php echo base_url('topic/art'); ?>">Art</a>
                  </li>
                   <li>
                    <a href="<?php echo base_url('topic/contries'); ?>">Contries</a>
                  </li>
                   <li>
                    <a href="<?php echo base_url('topic/fitness'); ?>">Fitness</a>
                  </li>
                   <li>
                    <a href="<?php echo base_url('topic/hockey'); ?>">Hockey</a>
                  </li>
                   <li>
                    <a href="<?php echo base_url('topic/football'); ?>">Football</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header text-center">Developer</h5>
          <div class="card-body">
              <h4 class="text-center">Virendra Arekar</h4>
              <img src="<?php echo base_url('assets/images/profile/profile.jpg'); ?>" alt="" width="100%">
              <h5 class="text-center text-primary">FULL STACK DEVELOPER</h5>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->