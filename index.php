<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client-side Form Validation</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="/style.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>
</head>
<body>
    <div class="container">
        <div class="header"> 
          <h2>Create Account</h2>
        </div>
        <form action="connect.php" method="post" class="form" id="form">
          <div class="form-control ">
          <label for="firstName" >First Name</label>
          <input id="firstName" name="firstName" type= "text" placeholder="Enter Your First Name">
            
            
  
          
          </div>

          <div class="form-control ">
            <label for="lastName" >Surname</label>
            <input id="lastName" name="lastName" type= "text" placeholder="Enter Your Surname">
              
            
            
            </div>
            <div class="form-control radio ">
              <label for="gender" >Gender:</label>
              <span>
                <label for="male">
              <input id="male" value="m" name="gender" type= "radio" > Male
               
                </label>
             
              </span>

              <span>
              <label for="female">
              <input id="female" value="f" name="gender" type= "radio" > Female
               
              </label>
                
              </span>
			  
			  
              <span>
                <label for="other">
              <input type="radio"
              name="gender"
              value="o"
              id="others"> Other
                
                </label>
              
              </span>
              </div>

          
          <div class="form-control ">
          <label for="email">Email</label>
          <input id="email" name="email" type= "email" placeholder="name@domain.com">
          </div>
		  
		  
		  
		  
          <div class="form-control">
          <label for="">Your Message</label><br>
          <textarea name="message" id="message" cols="30" rows="8"></textarea>
          </div>
		  
		  
		   
		<div class="form-control">
			<label for="courses">Courses:</label>    
		     <select id="courses" name="courses">
            <option value="" disabled selected>Select a department</option>
            <option value="computerdept">Computer Department</option>
            <option value="mechanicaldept">Mechanical Department</option>
            <option value="sciencedept">Science Department</option>
             </select>
		</div>
          
		 <div class="form-control">
            <label for="number">Phone Number</label>
            <input
              type="tel"
             
              placeholder="Enter Your Number"
              id="number"
              name="number"
              minlength="0" maxlength="10">
          
           </div>

			
		
		   
		   
		   
			
			

          <input id="button"  type="submit">
          
        </form>
      </div>

      <script src="/app.js"></script>
    
</body>
</html>