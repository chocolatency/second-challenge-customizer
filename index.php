<?php get_header();?>



    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">FEATURES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">GALLERY</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#pricing">PRICING</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li>
                                <li class="nav-item"><a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Download</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1><?php echo get_theme_mod('theme_description', 'Mobile App Landing Page Template');?></h1>
            <p class="tagline"><?php echo get_theme_mod('short_theme_description', 'The one and only solution for any kind of mobila app landing needs. 
                                                        Just change the screenshots and texts and you are good to go.');?></p>
        </div>
        <div class="img-holder mt-3"><img src="<?php echo get_template_directory_uri();?>/images/iphonex.png" alt="phone" class="img-fluid"></div>
    </header>

    <div class="client-logos my-5">
        <div class="container text-center">
            <img src="<?php echo get_template_directory_uri();?>/images/client-logos.png" alt="client logos" class="img-fluid">
        </div>
    </div>





    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title">
                <small>HIGHLIGHTS</small>
                <h3>Features you love</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Simple</h4>
                                    <p class="card-text"><?php echo get_theme_mod('simple_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Customize</h4>
                                    <p class="card-text"><?php echo get_theme_mod('customize_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Secure</h4>
                                    <p class="card-text"><?php echo get_theme_mod('secure_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    
    
    
    
    
    
    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                    <h2>Discover our App</h2>
                    <p class="mb-4"><?php echo get_theme_mod('discover_our_app_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque');?></p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <div class="perspective-phone">
                <img src="<?php echo get_template_directory_uri();?>/images/perspective.png" alt="perspective phone" class="img-fluid">
            </div>
        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg">
        <div class="container">
            <div class="section-title">
                <small>FEATURES</small>
                <h3>Do more with our app</h3>
            </div>

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#communication">Communication</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#schedule">Scheduling</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#livechat">Live Chat</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="communication">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="<?php echo get_template_directory_uri();?>/images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>

                            <h2><?php echo get_theme_mod('comunication_content_header', 'Communicate with ease');?></h2>
                            <p class="lead"><?php echo get_theme_mod('comunication_content_description', 'Uniquely underwhelm premium outsourcing with proactive leadership skills.');?></p>
                            <p><?php echo get_theme_mod('comunication_content_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
                                                        Vestibulum sit amet mattis ante. Ut placerat dui eu nulla congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. 
                                                        Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor, malesuada faucibus augue aliquet. 
                                                        Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. 
                                                        Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. 
                                                        Mauris consectetur, tortor sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. 
                                                        Proin aliquet vulputate aliquam. ');?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="schedule">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2><?php echo get_theme_mod('scheduling_content_header', 'Scheduling when you want');?></h2>
                            <p class="lead"><?php echo get_theme_mod('scheduling_content_description', 'Uniquely underwhelm premium outsourcing with proactive leadership skills.');?></p>
                            <p><?php echo get_theme_mod('scheduling_content_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
                                                        Vestibulum sit amet mattis ante. Ut placerat dui eu nulla congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. 
                                                        Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor, malesuada faucibus augue aliquet. 
                                                        Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. 
                                                        Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. 
                                                        Mauris consectetur, tortor sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. 
                                                        Proin aliquet vulputate aliquam. ');?>
                            </p>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
                <div class="tab-pane fade" id="messages">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="<?php echo get_template_directory_uri();?>/images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>
                            <h2><?php echo get_theme_mod('messages_content_header', 'Realtime Messaging service');?></h2>
                            <p class="lead"><?php echo get_theme_mod('messages_content_description', 'Uniquely underwhelm premium outsourcing with proactive leadership skills.');?></p>
                            <p><?php echo get_theme_mod('messages_content_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
                                                        Vestibulum sit amet mattis ante. Ut placerat dui eu nulla congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. 
                                                        Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor, malesuada faucibus augue aliquet. 
                                                        Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. 
                                                        Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. 
                                                        Mauris consectetur, tortor sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. 
                                                        Proin aliquet vulputate aliquam. ');?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="livechat">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2><?php echo get_theme_mod('livechat_content_header', 'Live chat when you needed');?></h2>
                            <p class="lead"><?php echo get_theme_mod('livechat_content_description', 'Uniquely underwhelm premium outsourcing with proactive leadership skills.');?></p>
                            <p><?php echo get_theme_mod('livechat_content_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
                                                        Vestibulum sit amet mattis ante. Ut placerat dui eu nulla congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. 
                                                        Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor, malesuada faucibus augue aliquet. 
                                                        Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. 
                                                        Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. 
                                                        Mauris consectetur, tortor sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. 
                                                        Proin aliquet vulputate aliquam. ');?>
                            </p>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
            </div>


        </div>
    </div>  
    
    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri();?>/images/dualphone.png" alt="dual phone" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                        <h2>Launch your App</h2>
                        <p class="mb-4"><?php echo get_theme_mod('lunchyourapp_content_text', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione');?></p>
                        <a href="#" class="btn btn-primary">Read more</a></div>
                </div>
            </div>

        </div>

    </div>  
    
    
    
    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>Create an Account</h5>
                                <p><?php echo get_theme_mod('createanaccount_content_text', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione');?></p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>Share with friends</h5>
                                <p><?php echo get_theme_mod('sharewithfriends_content_text', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione');?></p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>Enjoy your life</h5>
                                <p><?php echo get_theme_mod('enjoyyourlife_content_text', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione');?></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri();?>/images/iphonex.png" alt="iphone" class="img-fluid">
                </div>

            </div>

        </div>

    </div>
    
    
    

    <div class="section">
        <div class="container">
            <div class="section-title">
                <small>TESTIMONIALS</small>
                <h3>What our Customers Says</h3>
            </div>

            <div class="testimonials owl-carousel">
                <div class="testimonials-single">
                    <img src="<?php echo get_theme_mod('slider_user_img_1', get_template_directory_uri() . '/images/client.png');?>" alt="client" class="client-img">
                    <blockquote class="blockquote"><?php echo get_theme_mod('slider_text_1', 'Uniquely streamline highly efficient scenarios and 24/7 initiatives. 
                                                                            Conveniently embrace multifunctional ideas through proactive customer service. 
                                                                            Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.');?></blockquote>
                    <h5 class="mt-4 mb-2"><?php echo get_theme_mod('slider_name_1', 'Crystal Gordon');?></h5>
                    <p class="text-primary"><?php echo get_theme_mod('slider_country_1', 'United States');?></p>
                </div>
                <div class="testimonials-single">
                    <img src="<?php echo get_theme_mod('slider_user_img_2', get_template_directory_uri() . '/images/client.png');?>" alt="client" class="client-img">
                    <blockquote class="blockquote"><?php echo get_theme_mod('slider_text_2', 'Uniquely streamline highly efficient scenarios and 24/7 initiatives. 
                                                                            Conveniently embrace multifunctional ideas through proactive customer service. 
                                                                            Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.');?></blockquote>
                    <h5 class="mt-4 mb-2"><?php echo get_theme_mod('slider_name_2', 'Crystal Gordon');?></h5>
                    <p class="text-primary"><?php echo get_theme_mod('slider_country_2', 'United States');?></p>
                </div>
                <div class="testimonials-single">
                    <img src="<?php echo get_theme_mod('slider_user_img_3', get_template_directory_uri() . '/images/client.png');?>" alt="client" class="client-img">
                    <blockquote class="blockquote"><?php echo get_theme_mod('slider_text_3', 'Uniquely streamline highly efficient scenarios and 24/7 initiatives. 
                                                                            Conveniently embrace multifunctional ideas through proactive customer service. 
                                                                            Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.');?></blockquote>
                    <h5 class="mt-4 mb-2"><?php echo get_theme_mod('slider_name_3', 'Crystal Gordon');?></h5>
                    <p class="text-primary"><?php echo get_theme_mod('slider_country_3', 'United States');?></p>
                </div>
            </div>

        </div>

    </div>
    
    
    
    
    
    <div class="section light-bg" id="gallery">
        <div class="container">
            <div class="section-title">
                <small>GALLERY</small>
                <h3>App Screenshots</h3>
            </div>

            <div class="img-gallery owl-carousel owl-theme">
                <img src="<?php echo get_theme_mod('gallery_img_1', get_template_directory_uri() . '/images/screen1.jpg');?>" alt="image">
                <img src="<?php echo get_theme_mod('gallery_img_2', get_template_directory_uri() . '/images/screen2.jpg');?>" alt="image">
                <img src="<?php echo get_theme_mod('gallery_img_3', get_template_directory_uri() . '/images/screen3.jpg');?>" alt="image">
                <img src="<?php echo get_theme_mod('gallery_img_4', get_template_directory_uri() . '/images/screen1.jpg');?>" alt="image">
            </div>

        </div>

    </div>
    
    
    
    
    
    
    
    <div class="section" id="pricing">
        <div class="container">
            <div class="section-title">
                <small>PRICING</small>
                <h3>Upgrade to Pro</h3>
            </div>

            <div class="card-deck">
                <div class="card pricing">
                    <div class="card-head">
                        <small class="text-primary">PERSONAL</small>
                        <span class="price"><?php echo get_theme_mod('price_block_1', '$14');?><sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item"><?php echo get_theme_mod('description_field1_block_1', '10 Projects');?></div>
                        <div class="list-group-item"><?php echo get_theme_mod('description_field2_block_1', '5 GB Storage');?></div>
                        <div class="list-group-item"><?php echo get_theme_mod('description_field3_block_1', 'Basic Support');?></div>
                        <div class="list-group-item"><del><?php echo get_theme_mod('description_field4_block_1', 'Collaboration');?></del></div>
                        <div class="list-group-item"><del><?php echo get_theme_mod('description_field5_block_1', 'Reports and analytics');?></del></div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                    </div>
                </div>
                <div class="card pricing popular">
                    <div class="card-head">
                        <small class="text-primary">FOR TEAMS</small>
                        <span class="price"><?php echo get_theme_mod('price_block_2', '$29');?><sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item"><?php echo get_theme_mod('description_field1_block_2', 'Unlimited Projects');?></div>
                        <div class="list-group-item"><?php echo get_theme_mod('description_field2_block_2', '100 GB Storage');?></div>
                        <div class="list-group-item"><?php echo get_theme_mod('description_field3_block_2', 'Priority Support');?></div>
                        <div class="list-group-item"><?php echo get_theme_mod('description_field4_block_2', 'Collaboration');?></div>
                        <div class="list-group-item"><?php echo get_theme_mod('description_field5_block_2', 'Reports and analytics');?></div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                    </div>
                </div>
                <div class="card pricing">
                    <div class="card-head">
                        <small class="text-primary">ENTERPRISE</small>
                        <span class="price"><?php echo get_theme_mod('price_block_3', '$249');?><sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item"><?php echo get_theme_mod('description_field1_block_3', 'Unlimited Projects');?></div>
                        <div class="list-group-item"><?php echo get_theme_mod('description_field2_block_3', 'Unlimited Storage');?></div>
                        <div class="list-group-item"><?php echo get_theme_mod('description_field3_block_3', 'Collaboration');?></div>
                        <div class="list-group-item"><?php echo get_theme_mod('description_field4_block_3', 'Reports and analytics');?></div>
                        <div class="list-group-item"><?php echo get_theme_mod('description_field5_block_3', 'Web hooks');?></div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                    </div>
                </div>
            </div>
            <!-- // end .pricing -->


        </div>

    </div>
    
    
    <div class="section pt-0">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Frequently Asked Questions</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3"><?php echo get_theme_mod('faq_header_1', 'Can I try before I buy?');?></h4>
                    <p class="light-font mb-5"><?php echo get_theme_mod('faq_text_1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                                        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
                                                                        Vestibulum sit amet mattis ante. ');?></p>
                    <h4 class="mb-3"><?php echo get_theme_mod('faq_header_2', 'Can I try before I buy?');?></h4>
                    <p class="light-font mb-5"><?php echo get_theme_mod('faq_text_2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                                        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
                                                                        Vestibulum sit amet mattis ante. ');?></p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3"><?php echo get_theme_mod('faq_header_3', 'Can I change my plan later?');?></h4>
                    <p class="light-font mb-5"><?php echo get_theme_mod('faq_text_3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                                        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
                                                                        Vestibulum sit amet mattis ante. ');?></p>
                    <h4 class="mb-3"><?php echo get_theme_mod('faq_header_4', 'Do you have a contract?');?></h4>
                    <p class="light-font mb-5"><?php echo get_theme_mod('faq_text_4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                                        Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. 
                                                                        Vestibulum sit amet mattis ante. ');?></p>

                </div>
            </div>
        </div>

    </div>
    
    
    
    
    
    
    
    
    
    

    <div class="section bg-gradient">
        <div class="container">
            <div class="call-to-action">

                <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                <h2>Download Anywhere</h2>
                <p class="tagline">Available for all major mobile and desktop platforms. Rapidiously visualize optimal ROI rather than enterprise-wide methods of empowerment. </p>
                <div class="my-4">

                    <a href="#" class="btn btn-light"><img src="<?php echo get_template_directory_uri();?>/images/appleicon.png" alt="icon"> App Store</a>
                    <a href="#" class="btn btn-light"><img src="<?php echo get_template_directory_uri();?>/images/playicon.png" alt="icon"> Google play</a>
                </div>
                <p class="text-primary"><small><i>*Works on iOS 10.0.5+, Android Kitkat and above. </i></small></p>
            </div>
        </div>

    </div>
    <!-- // end .section -->





    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span> 1485 Pacific St, Brooklyn, NY 11216 USA</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:support@mobileapp.com">support@mobileapp.com</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="tel:51836362800">518-3636-2800</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <a href="#"><span class="ti-facebook"></span></a>
                        <a href="#"><span class="ti-twitter-alt"></span></a>
                        <a href="#"><span class="ti-instagram"></span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>


<?php get_footer();?>