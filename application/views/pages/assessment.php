<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo base_url("/assets/css/assessment.css"); ?>" />
</head>
<body>

    <div class="bannerDiv">
        <h1>THE DISASTER RESILIENCE RATING FOR HOTELS</h1>
    </div>
        
    <div class="subbannerDiv">
        <p>Because RESILIENCE is everybody's Business.</p>
    </div>

<h1 id = "page_name">
    
    ASSESSMENT

</h1>

<div class="container_main">

    <div class="assessment_choice">

        <div class="option_one">
            <a class="one" href="http://localhost/codeigniter/index.php/assessment">Hotel Information</a>
        </div>

        <div class="option_two">
            <a class="two">Risk Profiling</a>
        </div>

        <div class="option_three">
            <a class="three" >Inventory</a>
        </div>
        
        <div class="option_four">
        <a class="four" href="http://localhost/codeigniter/index.php/aprm">Asset protection and Risk Management</a>
        </div>  

        <div class="option_five">
        <a class="five" href="http://localhost/codeigniter/index.php/enterprise_cont">Enterprise Continuity</a>
        </div> 

        <div class="option_six">
        <a class="six" href="http://localhost/codeigniter/index.php/DRR">Disaster Risk Reduction<br></a>
        </div>       

        <div class="option_seven">
        <a class="seven" href="http://localhost/codeigniter/index.php/CnOM">Crisis & Opportunity Management</a>
        </div> 

        <div class="option_eight">
        <a class="eight" href="http://localhost/codeigniter/index.php/ResilienceCommunication">Resilience Communication</a>
        </div> 

        <div class="option_nine">
        <a class="nine" href="http://localhost/codeigniter/index.php/FinalStep">Final Step</a> 
        </div>

    </div>



    <div class="hotel_info">
        <h2 id="hotel_nameID">Hotel Information<h2>


        <form class="hotel_name" style="padding:1%;">
            <label for="hotel_name">Hotel Name: </label>
            <input class="hotel_name_in" type="text" id="hotel_name" name="hotel_name"><br>
            
            <label for="hotel_type">Hotel Type: </label>
            <input class="hotel_type_in" type="text" id="hotel_type" name="hotel_type">

            <label for="dot_star">DOT Star Rating: </label>
            <input class="dot_star_in" type="text" id="dot_star" name="DOT_star_rating">
            <br>
            <label for="owner">Owner / Corporate Entity: </label>
            <input class="owner_in" type="text" id="owner" name="owner">

            <label for="affiliation">Affiliation: </label>
            <input class="affiliation_in" type="text" id="affiliation" name="affiliation"><br>

            <label for="yr_of_op">Year of Operation: </label>
            <input class="yr_of_op_in" type="text" id="yr_of_op" name="year_of_ope">
        </form>


    </div>

    <div class="person_contact_info" >
        <h2 id="person_text">Person Contact Information<h2>

            
        <form class="hotel_name" style="padding:1%;">
            <label for="person_doing_assessment">Person doing Assessment: </label>
            <input class="person_doing_assessment_in" type="text" id="person_doing_assessment" name="person_doing_assessment">

            <label for="designation">Designation: </label>
            <input class="designation_in" type="text" id="designation" name="designation">

            <label for="contact_num">Contact #: </label>
            <input class="contact_num_in" type="integer" id="contact_num" name="contact_num">

            <label for="email">E-mail: </label>
            <input class="email_in" type="text" id="email" name="email"><br>

            <label for="date_of_ass">Date of Assessment: </label>
            <input class="date_of_ass_in" type="date" id="date_of_ass" name="date_of_ass">
        </form>
        

    </div>


    <input id="prev_butt" type="button" value="Previous">
    <input id="sav_butt" type="button" value="Save">
    <a class="button" id="nex_butt" value="Next" href="http://localhost/codeigniter/index.php/aprm">Next<a>
    
</div>
</body>
</html>