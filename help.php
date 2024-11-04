<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
  font-family: Arial;
  background-image: url(aaaa.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  margin-left: 57%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px; 
  width: 30%;
  opacity: 0.7;
}
</style>
<body> 
    <div class="w3-container w3-black">
  <h1><center>Want Help ?</center></h1>
</div><br><br>
<div class="container">
  <form action="con_help.php" method="post">
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your Name..">

    <label for="lname">Age</label>
    <input type="text" id="age" name="age" placeholder="Your Age.."><br>
    
    <label for="lname">Gender:</label><br><br>
    <input type="radio" id="gender" name="gender" placeholder=""> Male
    <input type="radio" id="gender" name="gender" placeholder=""> Female<br><br>
    

    <label for="help">Which type of help you want...</label>
    <select id="help" name="help">
      <option value="1">To Buy Medicines</option>
      <option value="2">To Buy Groceries</option>
      <option value="3">To Pay Bills</option>
      <option value="4">To Spend Time</option>
      <option value="5">To Reduce Mental Stress</option>
      <option value="6">To Provide Other Type Of Physical Help..</option>
      <option value="7">Help To Reach The Destination</option>
    </select><br>
  
      <label for="help">Where do you want help..</label>
    <input type="text" id="addr" name="addr" placeholder="Building Name/Flat No./Area Name/City/Taluka/Pin Code">
    <input type="text" id="state" name="state" placeholder="State" >
    
    <input type="submit" value="Submit">
  </form>
</div><br><br>
</body>
</html>