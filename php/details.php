<!DOCTYPE html>  
<html>  
  <head>
    <style type="text/css">
      .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
    </style>
  </head>
<link rel="stylesheet"  
href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"   
integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w"   
crossorigin="anonymous">  
  <body background="b.png"><br></br>>

  
<form class="pure-form pure-form-aligned" action="insert.php" method="post">   
    <fieldset>  

      <div class="pure-group">
    <label for=""><center><h2 style="color:#4169e1">Enter Child Details</h2></center> </label> 
</div><br></br>
        <div class="pure-control-group">  
            <label for="name">Full Name</label>  
            <input id="name" name="name" type="text" placeholder="Username" size="40" required>  
            <span class="pure-form-message-inline">This is a required field.</span>  
        </div>  
  
        <div class="pure-control-group">  
            <label for="age">Age</label>  
            <input id="age" type="number" placeholder="Enter Age" size="80" name="age" required>  
            <span class="pure-form-message-inline">This is a required field.</span> 
        </div>  
        <div class="pure-control-group">

          <label for="gender">Select Gender</label>
          <label for="cb" class="pure-radio" name="gender" id="male" value="male"> Male 
                <input id="cb" type="radio" name="gender" id="male" value="male"required>   
            </label>  
            <label for="cb" class="pure-radio" name="gender" id="female" value="female"> Female 
                <input id="cb" type="radio" name="gender" id="female" value="female" required>  
            </label>  <span class="pure-form-message-inline">This is a required field.</span> 
  <br></br> 
        </div>

      <div class="pure-control-group">
        <label for="date">Lost Date </label>
        <input style="width:240px;" class="w3-input w3-border w3-hover-gray" type="date" name="date" /><br></br>
      </div>
  
        <div class="pure-control-group">  
            <label for="Details">Enter Details</label>  
            <textarea style="width:450px;" class="pure-control-group"  rows=10 cols="30" name="data" ></textarea>
        </div>  
  
        <div class="pure-control-group">  
            <label for="foo" >Select image to upload:</label>  
            
            
            <input class="pure-control-group"  type="file" name="fileToUpload" id="fileToUpload" required> <span class="pure-form-message-inline">This is a required field.</span> 
        </div>  
  
        <div class="pure-controls"> 
         
  
            <button type="submit" class="pure-button pure-button-primary">Submit</button>  
            <label for="foo">  Click to </label>  
          <a href="http://localhost/php/welcome.php">Go Back</a>
            
        </div>  
    </fieldset>
  
</form>  

</body>
</html>  

 
