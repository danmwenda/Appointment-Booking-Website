<!DOCTYPE html>
  <head>
        <title>Holiwell counselling</title>
        <link rel="icon" href="hcts2.jpeg" type="image/jpeg">
        <link rel="stylesheet" href="style2.css">
   </head>
  <body style="background-image: url(rock.jpg)">
    <div>
    
      <form action="/login" method= "post" id ="login">
      </br>
         <h2>Holiwell Counsellor Login</h2>
         </br>
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <input  type ="text"class ="logo" name ="username" placeholder ="username">
       <input class ="key" type ="password" name ="password" placeholder ="Password">
       </br>
       <input type ="submit" name ="submit" value ="Login">
        </br>
        </br>
       <a href="/">Go back to homepage</a>
     </form>
     </div>
     
    


 </body>
</html>