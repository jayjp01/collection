<?php
$uid=Session::get('userid');
?>
<a href="http://examplee.com/userlogout">Logout</a>
<a href="http://examplee.com/chngpwd">Change Password</a>
<head>
    <center><h1>My Account</h1></center>
</head>
<body>

<form method="POST" action="/userupdate" enctype="multipart/form-data" >
 <center>


<p>Name:<input name="name" value="<?php echo ($uid)?$data->name:'';?>"></p>

<p>Email:<input type="email" name="email" value="<?php echo ($uid)?$data->email:'';?>" ></p>

<p>Contact No:<input  name="contact" value="<?php echo ($uid)?$data->contact:'';?>" ></p>

<p>City:<input  name="city" value="<?php echo ($uid)?$data->city:'';?>" ></p>


<p>State:<input  name="state" value="<?php echo ($uid)?$data->state:'';?>" ></p>


<p>Pincode:<input  name="pincode" value="<?php echo ($uid)?$data->pincode:'';?>" ></p>
<p>Country:<input name="country" value="<?php echo ($uid)?$data->country:'';?>" ></p>


<?php if($uid){?>
<p>image:<img width="350" height="180" src="/uploads/<?php echo $data->image;?>"></p>
<?php } ?>
<input type="file" name="image"  value="<?php echo ($uid)?$data->image:'';?>"></p>

<!--<p>Image:<input type="file" name="image" value="" ></p>
<p style="color:red">{{ $errors->first('image') }}</p>-->
<input name="_token" hidden value="<?php echo csrf_token(); ?>" />
<input type="submit" name="sub" value="update">
    </center>
    </form>
<body>
</html>
