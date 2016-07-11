

<form action="{{url('chngpwd')}}" method ="post">
<p>Old Password:<input type="password" name = "password" id="">
<br>
<p>New Password:<input type="password" name = "newpassword" id="">
<br>
<input name="_token" hidden value="{!! csrf_token() !!}" />
<p><button type ="submit">Submit</button></p>
</form>