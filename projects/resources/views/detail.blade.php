<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
     type="text/javascript">
  function Deletefun(id)
  {
  	var i=id;
  	//alert(i);
  	$.ajax({
  		url:"deleteuser",
  		type:"post",
  		data:{'id':i},
  		success :function()
  		{
  			alert("User Deleted");
  		}

  	});
  }

</script>
	



<table>

   
 <a href="http://examplee.com/logout">Logout</a>
<?php
//echo Session::get('adminid');exit;
 //print_r($data);exit;

if(Session::get('adminid'))
{
if($data->isEmpty())
{?>
<center><h3>No User Present.</h3></center>
<?php }
else
{

  ?>
 
  <p style="color:red"><?php echo Session::get('message');?></p>
<p><a href="http://examplee.com">Add New User</a></p> 
  <table>

   <th>Name</th><th>Email</th><th>Contact No</th><th>Edit</th><th>Delete</th>
  <?php
foreach($data as $d)
   {
    //echo '@'.$d->id.'*';exit
   	?>
    
   	<tr>
<td><?php  echo $d->name;?></td>
<td><?php  echo $d->email;?></td>
<td><?php  echo $d->contact;?></td>
<td><a href="http://examplee.com/edit/<?php  echo base64_encode($d->id);?>">Edit</a></td> 
<td><a href="http://examplee.com/deleteuser/<?php  echo base64_encode($d->id);?>">Delete</td> 
</tr>
  <?php } }?>
  </table>
<?php echo $data->render();
}
?>