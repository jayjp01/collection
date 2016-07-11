<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.send-btn').click(function(){   
 var email=$('input[name=email]').val();  
 var password=$('input[name=password]').val();  
 var token=$('input[name=_token]').val();   
 if(email!="" && password!="")    
 {
 		$("#emailerror").html('Enter Your Email');
 	$("#pwderror").html('Enter Your Password');
    $.ajax({
      url: 'login',
      type: "post",
      data: {'email':email, '_token': token,'password':password},
      success: function(data){
        alert(data);
      }
    }); 
 }  
 else
 {
 	$("#emailerror").html('Enter Your Email');
 	$("#pwderror").html('Enter Your Password');
 }
  }); 
});
</script>-->
<a href="http://testweb.com">Register</a>

<p style="color:red"><?php echo Session::get('message');?></p>
<div class="secure">Login form</div>
{!! Form::open(array('url'=>'/login','method'=>'POST', 'id'=>'myform')) !!}
<div class="control-group">
  <div class="controls">
     {!! Form::text('email','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Email')) !!}
   </div>
  <p style="color:red">{{ $errors->first('email') }}</p>
</div>
<div class="control-group">
  <div class="controls">
  {!! Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Password')) !!}
  <p style="color:red">{{ $errors->first('password') }}</p>
  </div>
  <input name="_token" hidden value="{!! csrf_token() !!}" />
</div>
{!! Form::submit('Login') !!}
{!! Form::close() !!}
