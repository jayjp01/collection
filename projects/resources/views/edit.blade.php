<?php 
//print_r($data);exit;
?>
<head>
    <center><h1>Edit User Template </h1></center>
</head>
<form method="POST" action="update" enctype="multipart/form-data" >
 <center>
<p>Name:<input name="name" value="<?php echo $data->name;?>" required></p>

<p>Email:<input type="email" name="email" value="<?php echo $data->email;?>" required></p>

<p>Contact No:<input  name="contact" value="<?php echo $data->contact;?>" required></p>

<p>City:<input  name="city" value="<?php echo $data->city;?>" required ></p>

<p>State:<input  name="state" value="<?php echo $data->state;?>" required></p>

<p>Pincode:<input  name="pincode" value="<?php echo $data->pincode;?>" required></p>

<p>Country:<input name="country" value="<?php echo $data->country;?>" required></p>

<p>image:<img width="350" height="180" src="/uploads/<?php echo $data->image;?>"></p>

<input type="file" name="image" value="<?php echo $data->image;?>">

<input name="_token" hidden value="{!! csrf_token() !!}" />

<input type="hidden" name="id"  value="<?php echo $data->id;?>" />

<input type="submit" name="sub" value="Update">

</center>

</form>