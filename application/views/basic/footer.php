
</div>
 
<div class="mt-5 pt-5 pb-5 footer" style="background-color:#1d1e22;color:white;" id="foot">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>About Me</h2>
      <p class="pr-5 text-white-50">My name is Virendra M. Arekar. I am a full stack developer. I have skill like Php, Mysql, MongoDB, React, React Native, Javascript, Python etc. I this side for doing more practice in php(codeigniter),api and mysql. </p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">News</h4>
        <ul class="m-0 p-0">
          <li>- <a href="<?php echo base_url('topic/sports'); ?>">Sports</a></li>
          <li>- <a href="<?php echo base_url('topic/politics'); ?>">Politics</a></li>
          <li>- <a href="<?php echo base_url('topic/lifestyle'); ?>">Lifestyle</a></li>
          <li>- <a href="<?php echo base_url('topic/adventure'); ?>">Adventure</a></li>
          <li>- <a href="<?php echo base_url('topic/movies'); ?>">Movies</a></li>
          <li>- <a href="<?php echo base_url('topic/fitness'); ?>">Fitness</a></li>
          <li>- <a href="<?php echo base_url('topic/fun'); ?>">Fun</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
      <p>21/4th floor, M.N. co-operative housing society, Causway road, Mahim Mumbai - 400016</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(+91) 8483988837</p>
      <p><i class="fa fa-envelope-o mr-3"></i>virendra.arekar@gmail.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white-50">© <?php echo date('Y'); ?>. All Rights Reserved.</small></p>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/esm/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="<?php echo base_url().'/assets/js/custom.js';?>"></script>
<script src="<?php echo base_url('assets/js/bootoast.js');?>"></script>

<script>
     $(document).ready(function(){
    //    $('.container-fluid').css('display','');
    //    $('.spinner-border').css('display','none');
      //  setTimeout(function(){ 
      //      $('.spinner-border').css('display','none');
      //         $('.container-fluid').css('display','');
      //   }, 5000);

       <?php if($this->session->flashdata('contact_us')): ?>
        bootoast.toast({
          message:'<?php echo $this->session->flashdata('contact_us'); ?>',
          timeout: 2000,
          position : 'top',
          timeoutProgress:'top',// [false, 'top', 'bottom', 'background']
          type :'success'
        });
      <?php endif; ?>
      <?php if($this->session->flashdata('contact_us_error')): ?>
        bootoast.toast({
          message:'<?php echo $this->session->flashdata('contact_us_error'); ?>',
          timeout: 2000,
          position : 'top',
          timeoutProgress:'top',// [false, 'top', 'bottom', 'background']
          type :'danger'
        });
      <?php endif; ?>

      $('#go').click(function(e){
        e.preventDefault();
        var keyword = $('#keyword').val();
        if(keyword !== '')
        {
             $('#search-form').attr('action',"<?php echo base_url();?>"+'topic/'+keyword);
             $('#search-form').submit();
        }
        else{
          alert('Please enter keyword');
        }
      })
     })
</script>
</body>
</html>

