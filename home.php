<?php get_header();
    /* Template Name: Home template */ 
?>
<main role="main">
	<section class="homepage container general-wrap">
        <h4>Welcome to the WordPress sample</h4>
        <br>
            <p>This website serves like a base for your projets, this theme already has everything you need to create a basic website,
                it includes a home, about us and sampler templates to edit. If you need more templates you can create them using the basic guide in Micorsoft Teams, located in the UI channel
                In order to see the custom templates, just assign the in the "pages" on the administrator.
            </p>
            <div class="sampler-slider">
                <div><img src="<?php echo get_template_directory_uri() ?>/images/slider.jpg" alt=""></div>
                <div><img src="<?php echo get_template_directory_uri() ?>/images/slider.jpg" alt=""></div>
                <div><img src="<?php echo get_template_directory_uri() ?>/images/slider.jpg" alt=""></div>
            </div>
            <div class="short-desc">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xl-6 col-12">
                        <h5>Subtitle 1</h5>    
                        <p class="text-regular">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere voluptates adipisci ea, rem similique officia quibusdam magni, fugit ipsa temporibus modi atque dicta inventore, error consequuntur assumenda dolore quasi voluptas!</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-6 col-12">
                        <h5>Subtitle 2</h5>    
                        <p class="text-regular">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere voluptates adipisci ea, rem similique officia quibusdam magni, fugit ipsa temporibus modi atque dicta inventore, error consequuntur assumenda dolore quasi voluptas!</p>    
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="form-sample col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h4>Contact Us!</h4>
                    <div class="input-text-wrapper">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="">First name</label>
                                <br>
                                <input type="text" class="input-text custom-input-text">
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="">Last name</label>
                                <br>
                                <input type="text" class="input-text custom-input-text">
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="">Comments</label>
                                <br>
                                <textarea class="custom-textarea"></textarea>
                            </div>                        
                        </div>
                        <button class="button-general button-primary">SEND</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5b/India_Gate_600x400.jpg" alt="">
                </div>
            </div>            
    </section>
</main>
<?php get_footer(); ?>