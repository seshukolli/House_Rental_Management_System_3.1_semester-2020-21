<!DOCTYPE HTML>

<html>
<head><title>registration form</title>
    <link rel="stylesheet" type="text/css" href="includes/regcss.css">
</head>
<body>
<header>
  <center><h1>Registration  form</h1></center>

<form action="includes/registerdb.php" method="POST">
<h2>
<table>
<tr>
    <td><label>User Name:</label></td>
     <td><input type="text" name="user_name" required/></td>
 </tr>

<tr>
     <td><label>Email id:</label></td>
     <td><input type="text" name="email" required/></td>
</tr>

<tr>
     <td><label>Password:</label></td>
     <td><input type="password" name="pass" required/></td>

</tr>

<tr>
     <td><label>Confirm Password</label></td>
     <td><input type="password" name="pass1" required/></td>

</tr>

<tr>
   <td><label>Gender:</label></td>

   <td><input type="radio" value="m" name="sex">male
       <input type="radio" value="f" name="sex">female</td></select>
</tr>

<tr>
     <td><label>Phone number:</label></td>
     <td><input type="text" name="ph"/></td>

 </tr>

</table>
<P>
</P>
</h2>
<h3>
     <button  type="submit"  value=" Register" class="button">Submit</button>
     
</h3>
</form>
</header>
</body></html>
