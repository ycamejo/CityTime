<?php
$email = filter_input(INPUT_POST, "email", FILTER_UNSAFE_RAW); //FILTER_SANITIZE_EMAIL
$submit= filter_input(INPUT_POST, "submit", FILTER_UNSAFE_RAW);//FILTER_SANITIZE_ESUBMIT
$name= filter_input(INPUT_POST, "name", FILTER_UNSAFE_RAW);//FILTER_SANITIZE_NAME
$comment = filter_input(INPUT_POST, "comment", FILTER_UNSAFE_RAW);//FILTER_SANITIZE_COMMENT

if($submit){ //Testing if the button
    
    $result= '<div class= "alert alert-success">Form submitted</div>';
    
    if(!$name){
        
        $error= "<br />Plase enter your name";
        
    }
    
    if (!$email) {

        $error.= "<br />Plase enter your email";
    }
    
    if ($email AND !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error.= "<br />Plase enter a valid email address";
    }
    
    
    if (!$comment) {

        $error.= "<br />Plase enter your comment";
    }
    
    if($error){
        
        $result = '<div class= "alert alert-danger">There were error(s) in your form: '.$error.'</div>';
    }
    
    else{
        
        if (mail("ycamejo@gmail.com", "Comment from Website", "Name:.'$name'.Email.'$email'")) {
            
            $result = '<div class= "alert alert-success">Email Submmited</div>';
        } else {
            
            $result = '<div class= "alert alert-danger">Sorry there was an error sending your message</div>';
        }
    }
}


?>
<!doctype html> 
<html> 
    <head> 
        <title>Learning PHP</title>
        <meta charset="utf-8" /> <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <style>
            
            .emailForm{
                border:1px solid grey;
                border-radius: 10px;
                margin-top: 20px;
                background-color: #0078D7;
                color: #ffffff;
                
            }
            
            textarea{
                height: 120px;
                padding-top: 10px;
            }
            
            form{
                padding-bottom: 20px;
            }
            
        </style>
        
    </head>

    <body>


            <div class="container">
                
                <div class="row">
                    
                    <div class="col-md-6 col-md-offset-3 emailForm">
                        
                        <h1>My Email Form</h1>
                        
                        <?php echo $result;?>
                        
                        <p class="lead">Please get in touch - Ill comeback to you as soon as I can.</p>
                        
                        <form method="post">
                            
                            <div class="form-group">
                                
                                <label for="name">Your Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name"/>
                                
                            </div>
                            
                            <div class="form-group">

                                <label for="email">Your Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="Your Email"/>

                            </div>
                            
                            <div class="form-group">

                                <label for="comment">Your Comment:</label>
                                <textarea name="comment" class="form-control" placeholder="Please add your comment"></textarea>

                            </div>
                            
                            <input type="submit" class="btn btn-success btn-lg" value="submit" name="submit"/>
                            
                        </form>
                        
                    </div>
                    
                </div>
                
            </div>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   


    </body>
</html>



