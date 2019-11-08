<?php include "views/header.php" ?>
        
        <!-- Title Section -->
        <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1>Our Gallery</h1>
                </div><!-- Top Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
        
        <!-- Content section -->
        <div class="content-section gallery-page module">
        	
            <!-- Gallery Section -->
            <div class="gallery-wrapper module">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h2>Amazing Campus Life</h2>
                        <p>Some Amazing Stuff from our Campus</p>
                    </div>
                </div> <!-- Title Ends /-->
                
                <div class="gallery-container">
                    <?php error_reporting(0);

                    include_once './admin/includes/GalleryManager.php';

                    $obj = New GalleryManager();

                    foreach($obj->showData($school_id, "gallery") as $imagee)
                    {
                    extract($imagee);
                    echo <<<show
                    <a href="admin/dashboard/$image" data-lightbox="campus-gallery" data-title=" $description ">
                        <img class="gallery-thumb" src="admin/dashboard/$image" alt=""/>
                    </a>
show;
}

?>

                </div><!-- Gallery Container /-->
                
            </div>
            <!-- Gallery Section Ends /-->
            
            <!-- Icons Process -->
            <div class="icons-box-wrap">
                <div class="row">
            
                    <div class="medium-3 small-12 columns">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Why Study With Us?</strong><br>
                                From Last 30 years we are in industy and have honor. <br>
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- icon-box ends /-->
                    
                    <div class="medium-3 small-12 columns">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Special Techniques</strong><br>
                                We are providing special visual teaching techniques to help you grow faster.
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- icon-box ends /-->
                    
                    <div class="medium-3 small-12 columns">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Qualified Staff</strong><br>
                                Our Qualified best teachers from industry give you best professional Knowledge.
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- icon-box ends /-->
                    
                    <div class="medium-3 small-12 columns">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Get Admission</strong><br>
                                Rush before all seats are reserved for current batch. <br>
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- icon-box ends /-->
            
                
                </div><!-- Row /-->
            </div>
            <!-- Icons Process Ends /-->
        </div>
        <!-- Content Section Ends /-->
        
        
        <!-- Call to Action box -->
        <div class="call-to-action">
           <div class="row">
                <div class="medium-10 small-12 columns">
                    <h2><i class="fa fa-phone" aria-hidden="true"></i> 	If you Have Any Questions Call Us On <span>(+234) 000 0000 000</span></h2>
                </div>
                <div class="medium-2 small-12 columns">
                    <a href="contact" class="button secondary">Appointment</a>
                </div>
           </div><!-- row /-->
         </div>
        <!-- Call to Action End /-->
        
     <?php include "views/footer.php" ?>
