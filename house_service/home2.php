<!DOCTYPE HTML>
<html>
<head><title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="includes/homecss.css">
</head>
<body background="">
<header>
  <center><h1>Services</h1></center>
  <form action="includes/home2db.php" method="POST">

      <center>
          
         <h2>
             <table width="400" cellpadding="10" cellspacing="13" align="center" >
                 <thead>
<tr>

<th>For Rent</th>
</tr>
</thead> 


<tr>
<td><P> District:

        <select name="district">
            <option>--select--</option>
<option>Srikakulam</option>
<option>Vizianagram</option>
<option>Visakhapatnam</option>
<option>East Godavari</option>
<option>West Godavari</option>
<option>Krishna</option>
<option>Guntur</option>
<option>Nellore</option>
<option>Prakasam</option>
</select>
</td>




<tr>
<td><P> Area:
        <select name="area">
            <option>--select--</option>
<option>Amadalavalasa</option>
<option>Bobbili</option>
<option>Anakapalli</option>
<option>Kakinada</option>
<option>Eluru</option>
<option>Machilipatnam</option>
<option>Tenali</option>
<option>Kavali</option>
<option>Ongole</option>
</select>
</td>





<tr>
<td><P> Type:
        <select name="type">
            <option>--select--</option>
<option>1BHK</option>
<option>2BHK</option>
<option>3BHK</option></select>
</td>




<tr>
<td><P> Price Range:
        <select name="price">
            <option>--select--</option>
    <option value="10000" >10000/- - 20000/-</option>
    <option value="20000" >20000/- - 30000/-</option>
    <option value="30000">30000/- - 40000/-</option>
    <option value="40000">40000/- - 50000/-</option>
    <option value="50000">50000/- - 60000/-</option>
</select>
</td>

</tr>


<tr>
<td><P> Furnitured:

        <select name="furnitured">
            <option>--select--</option>
<option>Semi-Furnished</option>
<option>Furnished</option>
<option>Non-Furnished</option>
</select>
</td>
</tr>



<tr>
<td><P> Tenants Perferred:
        <select name="tenants">
            <option>--select--</option>
<option>Bachelor</option>
<option>Married</option>
<option>Both</option>
</select>
</td>
</tr>


<tr>
    <td><p>Address:</br><textarea  name="address" rows="3" cols="50"></textarea> </td>


</tr>



<tr>
    <td><p>Phone number:<input name="phone" type="text"/></td>


</tr>


</table>
<P>
</P>


</h2></center>

<h3>
     <button  type="submit"  value=" Register" class="button">Submit</button>
     <button type="reset" value="Reset" class="button">Reset</button>
</h3>
</form>
</header>
</body></html>