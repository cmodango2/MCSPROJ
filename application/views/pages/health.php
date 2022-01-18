<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOME</title>
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/health.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("/assets/bootstrap/css/bootstrap.css"); ?>" />
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://kit.fontawesome.com/c2b30d2943.js" crossorigin="anonymous"></script>
    </head>

    <body>
       <div style="margin: auto; max-width: 60%;">
        <div class="bannerDiv">
            <h1>THE DISASTER RESILIENCE RATING FOR HOTELS</h1>
        </div>

        <div class="subbannerDiv">
            <p>Because RESILIENCE is everybody's Business.</p>
        </div>

        <h2 style="text-align:center; padding-top:30px;">Health and Safety Information</h2>

        <div class="container" style="padding-top:30px; padding-left:30px;">
            <div class="row" style="min-width:100%">
                <div class="col-sm" style="margin-right:20px; min-width:50%">
                <!--  Start of Accordion -->
        <div class="accordion" id="accordionExample" style="min-width:100%" >
            <!--  Start of Accordion 1 -->
        <div class="accordion-item" >
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-biohazard"style = "margin-right:10px"></i> Hazards
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                
            <div class="accordion" id="accordionExample1">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                    Chemicals
                    </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse show" aria-labelledby="headingEleven" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                    <a href = "https://www.ccohs.ca/topics/hazards/chemical/" target="_blank">Access chemical information with substance. Find resources on chemical hazards, product safety, WHMIS, (M)SDSs, transport of hazardous materials, toxicity, and safe work practices. </a>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                    Ergonomic
                    </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                    <a href = https://www.ccohs.ca/topics/hazards/ergonomic/ target="_blank">Ergonomics is matching the job to the worker and product to the user. Access information and resources on workplace design and considerations, work-related musculoskeletal disorders, related risks, and helpful exercises.</a>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                    Health
                    </button>
                    </h2>
                    <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                    <a href = "https://www.ccohs.ca/topics/hazards/health/" target="_blank">Many workplace hazards have the potential to harm workers' short- and long-term health, resulting in diseases, disorders and injuries. </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--  Start of Accordion 2-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-lungs-virus"style = "margin-right:10px"></i>   Disease, Disorders, & Injuries
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This section covers a wide range of conditions that may result from exposure in a workplace. Examples include asthma, cancer, carpal tunnel syndrome, farmer's lung, HIV/AIDS, tuberculosis and many others. This section also looks at conditions that may impact a workplace such as colds and flu.</strong> 
            </div>
            </div>
        </div>
        <!--  Start of Accordion 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <i class="fas fa-book-medical"style = "margin-right:10px"></i>   Healthy Safety Programs            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Workplace health and wellness programs should be a part of the overall company strategy for a healthy workplace</strong> 
            </div>
            </div>
        </div>
        </div> 
        <!--  Start of Accordion 4-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <i class="fas fa-head-side-mask"style = "margin-right:10px"></i> Prevention & Control Hazards            </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This section focuses on steps that will help prevent or control workplace hazards. It includes how to work safely with families of chemicals, ventilation, inspections, personal protective equipment, etc.</strong> 
            </div>
            </div>
        </div>
        <!--  Start of Accordion 5-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            <i class="fas fa-poo-storm"style = "margin-right:10px"></i>  Natural Hazards
            </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Natural Hazards is devoted to original research work on all aspects of natural hazards, including the forecasting of catastrophic events, risk management, and the nature of precursors of natural and technological hazards.</strong> 
            </div>
            </div>
        </div>
        <!--  Start of Accordion 6-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            <i class="fas fa-flask" style = "margin-right:10px"></i>  Chemical & Materials
            </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Access chemical information with substance. Find resources on chemical hazards, product safety, WHMIS, (M)SDSs, transport of hazardous materials, toxicity, and safe work practices.</strong> 
            </div>
        </div>
        <!--  Start of Accordion 7 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            <i class="fas fa-gopuram"style = "margin-right:10px"></i>  Ergonomics
            </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Ergonomics is matching the job to the worker and product to the user. Access information and resources on workplace design and considerations, work-related musculoskeletal disorders, related risks, and helpful exercises</strong> 
            </div>
            </div>
        </div>

        <!--  Start of Accordion 8-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            <i class="fas fa-hard-hat"style = "margin-right:10px"></i>Occupation & Workplaces
            </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>For a variety of reasons, certain occupational groups are more vulnerable to workplace injuries and illnesses, and require particular attention and focus to ensure their health and safety on the job.</strong> 
            </div>
            </div>
        </div>
            <!--  Start of Accordion 9-->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                <i class="fas fa-user-shield"style = "margin-right:10px"></i> Safety Hazards
                </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Safety hazards include tools, machinery, materials, handling, tractors, welding, etc. Also covered are prevention of slips, trips and falls, as well as driving tips and working safely with compressed air.</strong> 
                </div>
                </div>
            </div>
        <!--  Start of Accordion 10-->
        <div class="accordion-item">
                <h2 class="accordion-header" id="headingTen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
           <i class="fas fa-balance-scale-right"style = "margin-right:10px"></i>Legislation
                </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Many basic elements are similar in all the jurisdictions across Canada. However, details of the occupational health and safety legislation and how laws are enforced vary from one jurisdiction to another. Learn your legal rights and responsibilities and stay in compliance with our wide range of legislation resources.</strong> 
                </div>
                </div>
            </div>                                                        
            <!--  End of Accordion --> 

        </div> 
        
                </div>
                <div class="col-sm" style="max-width:20%">

                <!-- HOTLINE NUMBERS -->

                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="emergencyOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmergencyOne" aria-expanded="true" aria-controls="collapseEmergencyOne">
                        <i class="fas fa-phone-square-alt"style = "margin-right:10px"></i> Emergency Hotlines

                        </button>
                        </h2>
                        <div id="collapseEmergencyOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionEmergency">
                        <div class="accordion-body">
                        <a href = "https://stg.portal.gov.ph/hotlines" target="_blank">View Emergency Hotline </a>
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="emergencyTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmergencyTwo" aria-expanded="false" aria-controls="collapseEmergencyTwo">
                        <i class="fas fa-cross"style = "margin-right:10px"></i> Red Cross
                        </button>
                        </h2>
                        <div id="collapseEmergencyTwo" class="accordion-collapse collapse" aria-labelledby="emergencyTwo" data-bs-parent="#accordionEmergency">
                        <div class="accordion-body">
                        <a href = "https://redcross.org.ph/" target="_blank">Know more about Red Cross </a>
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="emergencyThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmergencyThree" aria-expanded="false" aria-controls="collapseEmergencyThree">
                        <i class="fas fa-building"style = "margin-right:10px"></i> Department of Interior and Local Government
                        </button>
                        </h2>
                        <div id="collapseEmergencyThree" class="accordion-collapse collapse" aria-labelledby="emergencyThree" data-bs-parent="#accordionEmergency">
                        <div class="accordion-body">
                        <a href = "https://dilg.gov.ph/" target="_blank">Know more about Department of Interior and Local Government</a>
                        </div>
                        </div>
                    </div> 

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="emergencyFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmergencyFour" aria-expanded="false" aria-controls="collapseEmergencyFour">
                        <i class="fas fa-cloud"style = "margin-right:10px"></i> Philippine Atmospheric, Geophysical and Astronomical Services Administration
                        </button>
                        </h2>
                        <div id="collapseEmergencyFour" class="accordion-collapse collapse" aria-labelledby="emergencyFour" data-bs-parent="#accordionEmergency">
                        <div class="accordion-body">
                        <a href = "http://bagong.pagasa.dost.gov.ph/" target="_blank">Know more about PAGASA </a>
                        </div>
                        </div>
                    </div>


                </div>

                <!-- end of hotlines -->
            </div>
</div>
        </div>
       <br>
</div>
</body>
</html>