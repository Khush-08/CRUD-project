<!DOCTYPE html>
<html>
<head>
<title>Crud Application-Create User</title>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">

</head>
<body>
<div class="navabar navbar-dark bg-dark py-4">
    <div class="container">
        <a href="#" class="navbar-brand ">CRUD APPLICATION</a>
    </div>
</div>
        
<div class="container" styles="padding-top:10px">
    <h3>Create users</h3>
    <hr>
    <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create'?>">
    <div class="row">
    
        <div class="col-md-6">
            <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" values="<?php set_value('name');?>" required class="form-control">
            <?php echo form_error('name');?>
            </div>

            <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" values="<?php set_value('email');?>" class="form-control">
            <?php echo form_error('email');?>
            </div>

            <div class="form-group p-2">
            <button class="btn btn-primary">Create</button>
            <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancel</a>
            </div>
        </div>
    </form>  

</div>
</body>
</html>