<!DOCTYPE html>
<html>
<head>
<title>Crud Application-View User</title>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">

</head>
<body>
<div class="navabar navbar-dark bg-dark py-4">
    <div class="container">
        <a href="#" class="navbar-brand ">CRUD APPLICATION</a>
    </div>
</div>
        
   <div class="container" styles="padding-top:10px">
   <div class="row">
   <div class="col-md-12">
        <?php 
        $success=$this->session->userdata('success');
        if($success !=""){?>
        <div class="alert alert-success"><?php echo $success;?></div>
        <?php
        }
        ?>

        <?php 
        $failure=$this->session->userdata('failure');
        if($failure !=""){?>
        <div class="alert alert-success"><?php echo $failure;?></div>
        <?php
        }
        ?>

   </div>
   </div>
   <div class="row">
   <div class="col-md-8">
   <div class="row">
     <div class="col-6"><h3>View users</h3></div>
     <div class="col-6 text-right">
        <a href="<?php echo base_url().'index.php/user/create'?>" class="btn btn-primary">create</a>
     </div>
     </div>
     <hr>
     </div>
     </div>
     
        <div class="row">
        
        <div class="col-md-8">
            <table class="table table-striped">
                 <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th width="100">Edit</th>
                     <th width="100">Delete</th>
                </tr>
                <?php if(!empty($user)){ foreach($user as $users) {?>
                <tr>
                    <td><?php echo $users['user_id']?></td>
                    <td><?php echo $users['name']?></td>
                    <td><?php echo $users['email']?></td>
                    <td>
                    <a href="<?php echo base_url().'index.php/user/edit?user_id='?><?= $users['user_id']?>" class="btn btn-primary">EDIT</a>
                    </td>

                    <td>
                    <a href="<?php echo base_url().'index.php/user/delete/'.$users['user_id']?>" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
                <?php }  } else { ?>
                    <tr>
                    <td colspan="5">RECORD NOT FOUND</td>
                    </tr>
               <?php } ?>
            </table>
        </div>
        </div>
    </div>

</body>
</html>