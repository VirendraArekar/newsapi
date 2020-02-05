<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="<?php echo base_url().'/assets/css/login.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootoast.css');?>">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/bootoast.js');?>"></script>
<script>
  $(document).ready(function(){
    <?php if($this->session->flashdata('sign_up')): ?>
       bootoast.toast({
        message:'<?php echo $this->session->flashdata('sign_up'); ?>',
        timeout: 2000,
        position : 'top',
        timeoutProgress:'top',// [false, 'top', 'bottom', 'background']
        type :'success'
      });
    <?php endif; ?>
    <?php if($this->session->flashdata('log_in')): ?>
       bootoast.toast({
        message:'<?php echo $this->session->flashdata('log_in'); ?>',
        timeout: 2000,
        position : 'top',
        timeoutProgress:'top',// [false, 'top', 'bottom', 'background']
        type :'success'
      });

      setTimeout(function(){window.location = "<?php echo base_url(); ?>"; }, 2000);
    <?php endif; ?>

    <?php if($this->session->flashdata('log_in_error')): ?>
       bootoast.toast({
        message:'<?php echo $this->session->flashdata('log_in_error'); ?>',
        timeout: 2000,
        position : 'top',
        timeoutProgress:'top',// [false, 'top', 'bottom', 'background']
        type :'danger'
      });

      setTimeout(function(){window.location = "<?php echo base_url(); ?>"; }, 2000);
    <?php endif; ?>
  });
</script>

<!------ Include the above in your HEAD tag ---------->
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?php echo base_url().'/assets/icon/logo.png'; ?>" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="<?php echo base_url().'auth/login/create';?>" method="post">
     <?php if(validation_errors()): ?>
         <div class="alert alert-danger" role="alert" style="margin:10px;">
             <?php echo validation_errors(); ?>
        </div>
    <?php endif; ?>
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Enter Email" value="<?php echo set_value('email'); ?>">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Enter Password" value="<?php echo set_value('password'); ?>">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="<?php echo base_url('auth/register');?>">Sign Up</a>
    </div>

  </div>
</div>