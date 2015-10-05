<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Weather</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        
        <style>
            
            html, body{
                height: 100%;
                    
            }
            
            .container {
                background-image: url("img/background.jpg");
                height: 100%;
                width: 100%;
                background-size: cover;
                background-position: center;
                padding-top:100px;
                text-align: center;

            } 
            
            .center{
               text-align:center;;
                
            }
            
            .white{
                color: white;
                
            }
            
            p{
                padding-top: 15px;
                padding-bottom:15px;
            }
            
            button{
                margin-top:20px;
                
            }
            
            .alert{
                margin-top:20px;
                display: none;
                
            }


        </style>
        
    </head>
    <body>
        
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    
                    <h1 class="white">Weather Now</h1>
                    
                    <p class="lead white">Enter your city below to get forecast.</p>
                    
                    <form>
                        
                        <div class="form-group">
                            
                            <input class="form-control center" type="text" name="city" id="city" placeholder="Eg. Paris, London, San Francisco, La Habana..."/>
                            
                        </div>
                        
                        <button class="btn btn-success btn-lg" id="findMyWeather"> Find my Weather</button>
                        
                    </form>

                    <div class="alert alert-success">Success</div>
                    
                </div>

            </div>
            
        </div>
        
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script>
            
            $("#findMyWeather").click(function(event){
                
                event.preventDefault();
                
                if($("#city").val()!==""){
                    
                    $.get("scraper.php?city="+$("#city").val(), function( data ){
                    
                        $(".alert").html(data).fadeIn();
                    
                    });
            
                } else {
                    alert("Plase enter the city");
                }
                             
            });
            
        </script>
        
    </body>
</html>
