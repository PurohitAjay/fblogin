<?php

    require_once "config.php";

    $redirectURL = "http://localhost/fb_php/fb_callback.php";
    $permissions = ['email'];
    $loginURL = $helper->getLoginUrl($redirectURL, $permissions);

?>



<html>
    <head>
        <meta charset="utf-8">
      <title>Fb Login Page</title>
	  
	  	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		  
    </head>
    
    <body>
	   		<div class="container" style="margin-top:100px">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-md-offset-3" align="center">
                        
                        <img src="img/fb-login.png" style="hight:200px; width:250px;"><br><br>
                        
                        <form>
                            
                            <input name="email" placeholder="abc@gmail.com" class="form-control"><br>
                            <input name="password" placeholder="Password" class="form-control"><br>
                            <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In with facebook" class="btn btn-primary">
                            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&size=large&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            
                            
                        </form>
                    
                    </div>
                </div>
            </div>
        

	
        
    </body>
</html>