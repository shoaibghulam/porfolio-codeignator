<?php
foreach($data as $data){}
?>

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">About Me</h2>
                       </div> <!-- section title -->
                </div>
        </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50">
                        <h5 class="about-title">Hi There! I'm <?php echo $data->name; ?></h5>
                        <p><?php echo $data->description; ?></p>
                        <ul class="clearfix">
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-calendar"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Date of birth:</span> <?php echo $data->dob; ?></p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Email:</span><?php echo $data->email; ?></p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Phone:</span> <?php echo $data->contact; ?></p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-map-marker"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Location:</span> <?php echo $data->location; ?></p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- about content -->
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="about-skills pt-25">
                       
                       <?php 
                        foreach($skills as $skill): ?>
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title"><?php echo $skill->stitle; ?></h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter"><?php echo $skill->sposition; ?></span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="<?php echo $skill->sposition; ?>"></div>
                                </div>
                            </div>
                        </div> <!-- skill item -->
                      
                           <?php endforeach ;?>
                             
                               
                                 
                                    </div> <!-- about skills -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="service" class="services-area gray-bg pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-30">
                        <h2 class="title">My Services</h2>
                        
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
               <?php foreach($services as $service): ?>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="<?php echo $service->sericon; ?>"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="#"><?php echo $service->sertitle;?></a></h4>
                            <p><?php echo $service->serdesc;?></p>
                        </div>
                    </div> <!-- single service -->
                </div>
              <?php
                endforeach;
                ?>
                     
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== CALL TO ACTION PART START ======-->
<?php foreach($cv as $cv){} ?>
    <section id="call-to-action" class="call-to-action pt-125 pb-130 bg_cover" style="background-image: url(<?php echo base_url()?>assets/images/call-to-action.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="call-action-content text-center">
                        <h2 class="action-title">Have any project on mind?</h2>
                        
                        <ul>
                            <li><a class="main-btn custom" href="<?php echo base_url()."assets/cv/". $cv->cvfile;?>">download cv</a></li>
                            <li><a class="main-btn custom-2" href="<?php echo $cv->hirelink;?>">hire me</a></li>
                        </ul>
                    </div> <!-- call action content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->

