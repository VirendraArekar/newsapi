<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">DROP ME MAIL</h1>
    </div>
</section>
<?php if(isset($info) && $info != false): ?>
    <div class="alert alert-info" style="padding-bottom:200px;">
        <h2 class="text-center">Thank</h2>
    <p class="text-center">I will contact you very soon.</p>
    </div>
<?php else : ?>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
                </div>
                <div class="card-body">
                    <?php if(validation_errors()): ?>
                        <div class="alert alert-danger" role="alert" style="margin:10px;">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url('info/create'); ?>" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" placeholder="Enter name" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"name="email" placeholder="Enter email" >
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="6" ></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p>21/4th floor</p>
                    <p>M.N. co-operative housing society</p>
                    <p>Causway road</p>
                    <p>Mahim Mumbai - 400016</p>
                    <p>Email : virendra.arekar@gmail.com</p>
                    <p>Mob. +91 8483988837</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>