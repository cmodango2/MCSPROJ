<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/contact_us.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css") ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url("/assets/bootstrap/css/bootstrap.css"); ?>"/>
    </head>
    <body>
        <div class="bannerDiv">
            <h1>THE DISASTER RESILIENCE RATING FOR HOTELS</h1>
        </div>
        <div class="subbannerDiv">
            <p>Because RESILIENCE is everybody's Business.</p>
        </div>   
        <h2 style="text-align:center; padding-top:2%;"> 
            CONTACT US
        </h2>
    <div class = "contact_us_cont" style="border-style:solid"> 
        <div class = "leftcol_cts">
            <div class="leftcol_cts_items">
            <i class="fas fa-map-pin" style="color:#302DB9; font-size:3em;"></i>
                <h2 class = "info" style="margin:10px">Manila, Philippines</h2>
            </div>
            <div class="leftcol_cts_items">
            <i class="fas fa-phone" style="color:#302DB9; font-size:3em;"></i>
                <h2 class = "info">+63 9231230132 </h2>
            </div>  
            <div class="leftcol_cts_items">
                <i class="far fa-envelope" style="color:#302DB9; font-size:3em;"></i>
                <h2 class = "info">info@hoteldrrating.com</h2>
            </div>
        </div>
        
        <div class="rightcol_cts"> 

            <form>

                <div class="form-group">
                    <label for="name">Name<br></label>
                    <input type="text" class="form-control" style="width:100%" id="name" placeholder="Name">
                </div>

                <div class="form-group">
                    <label for="email">Email address<br></label>
                    <input type="email" class="form-control" style="width:100%" id="email" placeholder="Email address">
                </div>

                <div class="form-group">
                    <label for="concern">Concern<br></label>
                    <textarea class="form-control" style="width:100%" id="concern" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="background-color:#302DB9;">Submit</button>

            </form>

        </div>
    </div>
    </body>
</html>
