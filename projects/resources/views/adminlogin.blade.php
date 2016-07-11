<head>
    <center><h1>Admin Login Form</h1></center>
</head>
<body>
<form method="POST" action="{{action('RegisterController@adminlogin')}}"  >
 <center>
<p>Email:<input type="email" name="email" value="" ></p>
<p style="color:red">{{ $errors->first('email') }}</p>
<p>Password:<input type="password" name="password" value="" ></p>
<p style="color:red">{{ $errors->first('password') }}</p>
<input name="_token" hidden value="{!! csrf_token() !!}" />
<input type="submit" name="sub" value="Login">
    </center>
    </form>
<body>
</html>
