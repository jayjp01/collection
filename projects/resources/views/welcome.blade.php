
<a href="http://examplee.com/logintemp">Login</a>
<a href="http://examplee.com/admin" class="pull-right">Admin</a>
<head>
    <center><h1>Registration Form</h1></center>
</head>
<body>
<form method="POST" action="{{action('RegisterController@User')}}" enctype="multipart/form-data" >
 <center>


<p>Name:<input name="name" value=""></p>
<p style="color:red">{{ $errors->first('name') }}</p>

<p>Email:<input type="email" name="email" value="" ></p>
<p style="color:red">{{ $errors->first('email') }}</p>

<p>Password:<input type="password" name="password" value="" ></p>
<p style="color:red">{{ $errors->first('password') }}</p>

<p>Contact No:<input  name="contact" value="" ></p>
<p style="color:red">{{ $errors->first('contact') }}</p>

<p>City:<input  name="city" value="" ></p>
<p style="color:red">{{ $errors->first('city') }}</p>

<p>State:<input  name="state" value="" ></p>
<p style="color:red">{{ $errors->first('state') }}</p>


<p>Country:<input name="country" value="" ></p>
<p style="color:red">{{ $errors->first('country') }}</p>

<p>Pincode:<input  name="pincode" value="" ></p>
<p style="color:red">{{ $errors->first('pincode') }}</p>

<input type="file" name="image"  value=""></p>
<p style="color:red">{{ $errors->first('image') }}</p>
<!--<p>Image:<input type="file" name="image" value="" ></p>
<p style="color:red">{{ $errors->first('image') }}</p>-->
<input name="_token" hidden value="{!! csrf_token() !!}" />
<input type="submit" name="sub" value="Register">
    </center>
    </form>
<body>
</html>

<!--<html>
<head>
    <center><h1>Create Template</h1></center>
</head>
<body>
    {!! Form::open(array('url' => 'register'))!!}
    <center><div class="container">
        <table>
            <tr><td> {!! Form::label('name','Name:') !!}</td><td> {!! Form::text('name') !!}</td></tr>
            <tr><td> {!! Form::label('email','Email:')!!}</td><td> {!! Form::text('email') !!}</td></tr>
            <tr><td> {!!Form::label('age','Age:')!!}</td><td>{!! Form::text('age') !!}</td></tr>
            <tr><td colspan="2"><center>{!! Form::submit('Insert') !!}</center></td></tr>
        </table>
    </center>
    {!! Form::close()!!}
<body>
</html>-->
<!--
<form method="POST" action="register" >
     <table>
            <tr><td>Name:</td><td><input name="name" value="" ></td></tr>
            <tr><td>Email:</td><td><input type="email" name="email" value="" ></td></tr>
            <tr><td>Age:</td><td><input type="number" name="age" value="" ></td></tr>
             <tr><td></td><td><input type="submit" name="sub" value="insert"></td></tr>
        </table>
</form>
-->