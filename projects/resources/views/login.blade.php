<a href="http://examplee.com"><b>User Register</b></a>
<center>
<p style="color:red"><?php echo Session::get('message');?></p>
<div class="secure"><h2>Login form</h2></div>
{!! Form::open(array('url'=>'/login','method'=>'POST', 'id'=>'myform')) !!}
<div class="control-group">
  <div class="controls">
     {!! Form::text('email','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Email')) !!}
   </div>
  <p style="color:red">{{ $errors->first('email') }}</p>
</div>
<div class="control-group">
  <div class="controls">
  {!! Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Password')) !!}
  <p style="color:red">{{ $errors->first('password') }}</p>
  </div>
  <input name="_token" hidden value="{!! csrf_token() !!}" />
</div>
{!! Form::submit('Login') !!}
{!! Form::close() !!}
</center>