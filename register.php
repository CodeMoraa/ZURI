<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
<form action="/user_data.php" method="POST" enctype="multipart/form-data" >
                    <h1>Registration Form</h1>
                    
                    <hr>
                    <br>

                    <label>Name: </label> 

                            <input type="text"  class="form-control m-auto" name="name"
                                   placeholder="Enter your name" required="required" >   <br> <br>
                    
                     <label>Email Address: </label> 

                            <input type="mail"  class="form-control  m-auto" name="emailAddress"
                                   placeholder="Enter your emailAddress" required="required" > <br> <br>

                      <label>Password: </label> 
                      <input type="password"  class="form-control  m-auto" name="password"
                                   placeholder="Enter your password" required="required" > <br>
                                   
                       <label>Confirm Password: </label>
                       <input type="password"  class="form-control  m-auto" name="cpassword"
                                   placeholder="confirm password" required="required" >            

                    <label>Gender: </label>  <br>

                    <input type="radio" name="gender" value="Female">   
                    <label>Female</label>  <br>

                    <input type="radio" name="gender" value="Male">   
                    <label>Male</label>  <br>
                    
                    <input type="radio" name="gender" value="Prefer not to say">   
                    <label>Prefer not to say</label> <br> <br>
                       
                   <label>Date of Birth: </label>
                    <input class="inputstyle" type="date" name="dob" > <br> <br>

                    <label>Country: </label>  <br>

                    <input type="radio" name="country" value="Kenya">   
                    <label>Kenya</label>  <br>
                    
                    <input type="radio" name="country" value="Uganda">   
                    <label>Uganda</label>  <br>

                    
                    <input type="radio" name="country" value="Tanzania">   
                    <label>Tanzania</label>  <br>

                    
                    <input type="radio" name="country" value="Ethiopia">   
                    <label>Ethiopia</label>  <br>

                    
                    <input type="radio" name="country" value="Rwanda">   
                    <label>Rwanda</label>  <br>

                    
                    <input type="radio" name="country" value="Others">   
                    <label>Others</label>  <br> <br>

                    <button type="submit"> Register</button>

                                  
</form>
 
</body>
</html>
