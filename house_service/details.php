<!DOCTYPE HTML>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<style>
h2{text-align: center;}
</style>
<h2>Services</h2>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>To Rent</h2>
    <p>
<table>
<tr>
<td>
<label >District:</label>
  <select name="district" >

      <option  value=" ">   --select--    </option>
      <option  value="  ">     west godavari  </option>
    
      <option value=" ">    krishna       </option>
      <option value="  ">    east godavari         </option>
  </select>
</td>
</tr>
<tr>
<td>
<label >Area:</label>
  <select name="area">
  <optgroup label="        --                      ">
      <option value="  ">    -select-   </option>
      <option value="    ">  satrampadu    </option>
    
      <option value="     ">     vatluru     </option>
      <option value="        ">     -        </option>
    </optgroup>  
  </select>
</td>
</tr>
<tr>
<td>
<label >Type:</label>
  <select name="type" >
  <optgroup label="                              ">
      <option value="       ">  --select-     </option>
      <option value="       ">   2bhk    </option>
    
      <option value="          ">    3bhk       </option>
      <option value="        ">       4bhk      </option>
    </optgroup>  
  </select>
</td>
</tr>
<tr>
<td>
<label >Price:</label>
  <select name="price" >
  <optgroup label="                              ">
      <option value="       "> --select--      </option>
      <option value="       ">    500   </option>
    
      <option value="          ">    600       </option>
      <option value="        ">             </option>
    </optgroup>  
  </select>
</td>
</tr>
<tr>
<td>
<label >Furnitured:</label>
  <select name="furnitured" >
  <optgroup label="                              ">
      <option value="       ">   --select--    </option>
      <option value="       ">    yes   </option>
   
      <option value="          ">   no        </option>
      <option value="        ">             </option>
    </optgroup>  
  </select>
</td>
</tr>
<tr>
<td>
<label >Tenants Preferred:</label>
  <select name="tenants" >
  <optgroup label="                              ">
      <option value="       ">   family    </option>
      <option value="       ">  single     </option>
    
      <option value="          ">           </option>
      <option value="        ">             </option>
    </optgroup>  
  </select>
</td>
</tr>
<tr>
<td>
<label >Contact Details:</label>
<textarea id="Contact Details" name="phone" rows="1" cols="10">
 </textarea>
</td>
</tr>
<tr>
<td>
<label >Address:</label>
<textarea id="Address" name="address" rows="1" cols="10">
 </textarea>
</td>
</tr>
</table>
</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>For Rent</h2>
    
  </div>
</div>
<div style="text-align:left">
    <form method="POST" action="includes/detailsdb.php">
    <button  type="submit"  value=" Register" class="button">Submit</button> </form>
</div>  
  <div style="text-align:right">  
    <input type="Reset" />  
</div>  
</body>
</html>