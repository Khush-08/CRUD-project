<!DOCTYPE html>
<html>
<head>
<title>Crud Application-Update User</title>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">

</head>
<body>
<div class="navabar navbar-dark bg-dark py-4">
    <div class="container">
        <a href="#" class="navbar-brand ">CRUD APPLICATION</a>
    </div>
</div>
        
<div class="container" styles="padding-top:10px">
    <h3>Updates users</h3>
    <hr>
    <form method="post"  action="<?= base_url()?>index.php/user/edit_user">
    <div class="row">
    
        <div class="col-md-6">
            <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?= $user['name'] ?>" class="form-control">
            <?php// echo form_error('name');?>
            </div>
            <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
            <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control">
            <?php //echo form_error('email');?>
            </div>

            <div class="form-group p-2">
            <button class="btn btn-primary">Update</button>
            <a href="<?php echo base_url().'index.php/user';?>" class="btn-secondary btn">Cancel</a>
            </div>
        </div>
    </form>  

</div>
</body>
</html>