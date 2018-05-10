<?php get_header();
    /* Template Name: Sampler template */ 
?>
	<main role="main">
		<section class="sampler container general-wrap">
            <h2>UI Sampler</h2>               
            
            <p class="text-regular">
                This sampler has every base component for a basic website, do not change or modify the way sampler works.
                You can add and edit the values acording to the project you are working on.
            </p>

            <section class="color-pallete" id="palette">
                <h4>Color Palette</h4>    
                <p class="text-regular">Every color uses the "clr" prefix for a better comprehension.</p> 
                <div class="row">
                    <div class="color-rec col-lg-2 col-md-2 col-sm-6 col-xs-12 rec-error">
                        <p class="text-color">$clr-error</p>
                    </div>                                        
                    <div class="color-rec col-lg-2 col-md-2 col-sm-6 col-xs-12 rec-success">
                        <p class="text-color">$clr-success</p>
                    </div>                                                           
                    <div class="color-rec col-lg-2 col-md-2 col-sm-6 col-xs-12 rec-primary">
                        <p class="text-color">$clr-primary</p>
                    </div>                     
                    <div class="color-rec col-lg-2 col-md-2 col-sm-6 col-xs-12 rec-regular-gray">
                        <p class="text-color">$clr-gray</p>
                    </div>                                                                                                                                       
                </div>            
            </section>

            
           <section class="headings" id="headings">
                <h4>Headings</h4>    
                <p class="text-regular">The fonts used in the entire project are Open Sans.</p> 
                <div class="headings-wrap">
                    <div><h1>Heading 01 - Open Sans Regular 60px @clr-primary</h1></div>
                    <div><h2>Heading 02 - Open Sans Regular 40px @clr-primary</h2></div>
                    <div><h3>Heading 03 - Open Sans Regular 32px @clr-primary</h3></div>
                    <div><h4>Heading 04 - Open Sans Regular 28px @clr-primary</h4></div>                   
                </div>
           </section>

           
           <section class="paragraphs" id="paragraphs">
                <h4>Paragraphs</h4>    
                <p class="text-regular">The fonts used in the entire project are Montserrat and Open Sans, only the headings use Montserrat.</p> 
                <div class="paragraphs-wrap row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <p>Class: .text-bold</p>
                        <p class="text-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni quaerat veritatis, aspernatur sapiente nulla eligendi atque.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <p>Class: .text-semibold</p>
                        <p class="text-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni quaerat veritatis, aspernatur sapiente nulla eligendi atque.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <p>Class: .text-regular</p>
                        <p class="text-regular">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni quaerat veritatis, aspernatur sapiente nulla eligendi atque.</p>     
                    </div>                
                </div>
           </section>
           

        <h3 class="sampler-title">Components</h3>   
        <hr>
        <section class="buttons" id="buttons">
            <h4>Buttons</h4>    
            <p class="text-regular">Buttons in different states.</p> 
            <div class="buttons-wrap">                  
                  <button class="button-general button-primary">13 PX BOLD</button>
                  <button class="button-general button-error">13 PX BOLD</button>
                  <button class="button-general button-success">13 PX BOLD</button>                  
            </div>
            <button class="btn collapsable-btn html-collapse" role="button" data-toggle="collapse" href="#buttonsWrap">
                <span>HTML</span>
                <i class="fa fa-plus-circle"></i>
            </button>
            <div class="txt-container collapse" id="buttonsWrap">
                <xmp>
                    <button class="button-general button-primary">13 PX BOLD</button>
                    <button class="button-general button-error">13 PX BOLD</button>
                    <button class="button-general button-success">13 PX BOLD</button>  
                </xmp>
            </div>
        </section>

        <section class="lists" id="lists">
            <h4>Lists</h4>
            <div class="row">
                <div class="col-xs-6 col-md-6 col sm-6 col-6">
                    <h4>Unordered list</h4>
                    <ul>
                        <li class="text-regular">Cras justo odio</li>
                        <li class="text-regular">Dapibus ac facilisis in</li>
                        <li class="text-regular">Morbi leo risus</li>
                        <li class="text-regular">Porta ac consectetur ac</li>
                        <li class="text-regular">Vestibulum at eros</li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-6 col sm-6 col-6">
                    <h4>Ordered list</h4>
                    <ol>
                        <li class="text-regular">Cras justo odio</li>
                        <li class="text-regular">Dapibus ac facilisis in</li>
                        <li class="text-regular">Morbi leo risus</li>
                        <li class="text-regular">Porta ac consectetur ac</li>
                        <li class="text-regular">Vestibulum at eros</li>
                    </ol>
                </div>
            </div>
            <br>
             <button class="btn collapsable-btn html-collapse" role="button" data-toggle="collapse" href="#listsWrap">
                <span>HTML</span>
                <i class="fa fa-plus-circle"></i>
            </button>
            <div class="txt-container collapse" id="listsWrap">
                <xmp>                    
                        <h4>Unordered list</h4>
                        <ul>
                            <li class="text-regular">Cras justo odio</li>
                            <li class="text-regular">Dapibus ac facilisis in</li>
                            <li class="text-regular">Morbi leo risus</li>
                            <li class="text-regular">Porta ac consectetur ac</li>
                            <li class="text-regular">Vestibulum at eros</li>
                        </ul>
                    
                        <h4>Ordered list</h4>
                        <ol>
                            <li class="text-regular">Cras justo odio</li>
                            <li class="text-regular">Dapibus ac facilisis in</li>
                            <li class="text-regular">Morbi leo risus</li>
                            <li class="text-regular">Porta ac consectetur ac</li>
                            <li class="text-regular">Vestibulum at eros</li>
                        </ol>                    
                </xmp>
            </div>
        </section>
        
        <section class="carrousel" id="carrousel">
            <h4>Basic carrousel</h4>
            <div class="sampler-slider">
                <div><img src="<?php echo get_template_directory_uri() ?>/images/slider.jpg" alt=""></div>
                <div><img src="<?php echo get_template_directory_uri() ?>/images/slider.jpg" alt=""></div>
                <div><img src="<?php echo get_template_directory_uri() ?>/images/slider.jpg" alt=""></div>
            </div>

            <button class="btn collapsable-btn html-collapse" role="button" data-toggle="collapse" href="#sliderWrap">
                <span>HTML</span>
                <i class="fa fa-plus-circle"></i>
            </button>
            <br>
            <div class="txt-container collapse" id="sliderWrap">
                <xmp>
                    <div class="sampler-slider">
                        <div><img src="<?php echo get_template_directory_uri() ?>/images/slider.jpg" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri() ?>/images/slider.jpg" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri() ?>/images/slider.jpg" alt=""></div>
                    </div>
                </xmp>
            </div>
            <br>
             <button class="btn collapsable-btn html-collapse" role="button" data-toggle="collapse" href="#sliderjsWrap">
                <span>JS</span>
                <i class="fa fa-plus-circle"></i>
            </button>
            <div class="txt-container collapse" id="sliderjsWrap">
                <xmp>
                    jQuery('.sampler-slider').slick({
                        dots: true,
                        infinite: true,
                        speed: 300,
                        slidesToShow: 1,
                        adaptiveHeight: true,
                        arrows: false
                    });
                </xmp>
            </div>
            <p class="text-regular">
                Slick Slider has many options to edit, you can customize te styles and the way it works
                depending of the project. For more information on slick slider, follew the next link.
            </p>
            <a href="http://kenwheeler.github.io/slick/" target="_blank">Slick Slider Docs</a>
        </section>
        
    <section class="accordion" id="accordion">
        <h4>Accordion / Collapse </h4>
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Collapsible Group Item #1
                    </a>
                </h5>
            </div>
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
                <div class="card-block">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
     
            <button class="btn collapsable-btn html-collapse" role="button" data-toggle="collapse" href="#collapseWrap">
                            <span>HTML</span>
                            <i class="fa fa-plus-circle"></i>
            </button>
            <div class="txt-container collapse" id="collapseWrap">
                <xmp>
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Collapsible Group Item #1
                        </a>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
                </xmp>
            </div>        
</section>
<p class="text-regular">
        The previous example uses Bootstrap 4 collapse functionality. You can check the documentation in the follwing link
    </p>                
    <a href="http://v4-alpha.getbootstrap.com/components/collapse/" target="_blank">Collapsible Docs</a>


<section class="tabs" id="tabs">
    <h4>Tabs</h4>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
    <br>
    <button class="btn collapsable-btn html-collapse" role="button" data-toggle="collapse" href="#tabsWrap">
        <span>HTML</span>
            <i class="fa fa-plus-circle"></i>
    </button>
            <div class="txt-container collapse" id="tabsWrap">
                <xmp>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul> 
                </xmp>
            </div>

</section>

        <section class="form-controls" id="form-controls">                      
            <section class="input-text" id="input-text">
                <h4>Input Text & Custom Select</h4>    
                <p class="text-regular">Custom input text and it's states.</p> 
                    <div class="input-text-wrapper row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label for="">Regular and Active input text</label>
                            <input type="text" class="input-text custom-input-text">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label for="">Error input text</label>
                            <input type="text" class="input-text-error custom-input-text">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="custom-select-form">
                                <select>
                                    <option value="house">Buy a house</option>
                                    <option value="cards">Pay credit cards</option>
                                    <option value="travel">Travel</option>
                                </select>
                            </div>                           
                        </div>
                    </div> 
                    <br>
            <button class="btn collapsable-btn html-collapse" role="button" data-toggle="collapse" href="#formControlsWrap">
                <span>HTML</span>
                <i class="fa fa-plus-circle"></i>
            </button>
            <div class="txt-container collapse" id="formControlsWrap">
                <xmp>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label for="">Regular and Active input text</label>
                            <input type="text" class="input-text custom-input-text">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <label for="">Error input text</label>
                            <input type="text" class="input-text-error custom-input-text">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="custom-select-form">
                                <select>
                                    <option value="house">Buy a house</option>
                                    <option value="cards">Pay credit cards</option>
                                    <option value="travel">Travel</option>
                                </select>
                            </div>                           
                        </div>
                </xmp>
            </div>
            </section>
        </section>

        
</section>  
        
        
        <!--- SAMPLER MENU -->
       <!--  <section class="nav-sampler">
            <nav class="navbar navbar-toggleable-md navbar-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Brand</a>
                        <ul class="navbar-nav mr-auto sub-menu">
                            <li class="nav-item"><a class="nav-link" href="#palette">Color Palette</a></li>
                            <li class="nav-item"><a class="nav-link" href="#headings">Headings</a></li>
                            <li class="nav-item"><a class="nav-link" href="#paragraphs">Paragraphs</a></li>
                            <li class="nav-item"><a class="nav-link" href="#icons">Icons</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Components</a>
                        <ul class="navbar-nav mr-auto sub-menu">                            
                            <li class="nav-item"><a class="nav-link" href="#buttons">Buttons</a></li>
                            <li class="nav-item"><a class="nav-link" href="#form-controls">Form controls</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        
                    </li>
                    </ul>           
                </div>
            </nav>
        </section>  -->       

	</main>


<?php get_footer(); ?>