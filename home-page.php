

<?php 
/**
Template Name: Home
 */
get_header(); 

$feature_image_1 = get_field('feature_image_1');
$feature_title_1 = get_field('feature_title_1');
$feature_content_1 = get_field('feature_content_1');
$feature_image_2 = get_field('feature_image_2');
$feature_title_2 = get_field('feature_title_2');
$feature_content_2 = get_field('feature_content_2');
$feature_image_3 = get_field('feature_image_3');
$feature_title_3 = get_field('feature_title_3');
$feature_content_3 = get_field('feature_content_3');

?>

<section id="header-home">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-box">
                        <h1 class="text-center"><?php bloginfo('name'); ?></h1>
                        <p class="text-center"><?php bloginfo('description') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>
<section id="features-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-md-4">
                <div class="feature">
                    <i class="<?php echo $feature_image_1; ?>"></i>
                    <p class="lead text-center"><?php echo $feature_title_1; ?></p>
                    <p class="feature-text text-center"><?php echo $feature_content_1; ?></p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="feature">
                    <i class="<?php echo $feature_image_2; ?>"></i>
                    <p class="lead text-center"><?php echo $feature_title_2; ?></p>
                    <p class="feature-text text-center"><?php echo $feature_content_2; ?></p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="feature">
                    <i class="<?php echo $feature_image_3; ?>"></i>
                    <p class="lead text-center"><?php echo $feature_title_3; ?></p>
                    <p class="feature-text text-center"><?php echo $feature_content_3; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="carousel-section">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="d-block w-100 carousel-picture-1"></div>
      <div class="carousel-caption d-none d-md-block">
        <h5>Free Transportation</h5>
        <p>Here at our fictional university we provide free transportation to get to and from classes.</p>
      </div>
    </div>
    <div class="carousel-item">
        <div class="d-block w-100 carousel-picture-2"></div>
        <div class="carousel-caption d-none d-md-block">
            <h5>Food Plans</h5>
            <p>Having to spend your money on expensive classes and books, and not enough money for food?  We provide food plans that are very cheap in price.</p>
        </div>
    </div>
    <div class="carousel-item">
        <div class="d-block w-100 carousel-picture-3"></div>
        <div class="carousel-caption d-none d-md-block">
            <h5>Personal Dashboard</h5>
            <p>You can access and customize your own personal dashboard.  This is to keep students and teachers organized.</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<section id="info-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
            <h3 class="mt-5">Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odit ipsa dolorem velit quae dignissimos eum exercitationem, molestias harum facere totam, iure provident veritatis eos.</p>
                <h3>Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odit ipsa dolorem velit quae dignissimos eum exercitationem, molestias harum facere totam, iure provident veritatis eos.</p>
                <h3>Lorem Ipsum</h3>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odit ipsa dolorem velit quae dignissimos eum exercitationem, molestias harum facere totam, iure provident veritatis eos.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="mt-5 mb-5" style="background-image: url(<?php echo get_theme_file_uri('/images/university-grades-01.png') ?>); width: 100%; height: 100%; background-size: cover;"></div>
            </div>
            <div class="col-12 col-md-4">
                <h3 class="mt-5">Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odit ipsa dolorem velit quae dignissimos eum exercitationem, molestias harum facere totam, iure provident veritatis eos.</p>
                <h3>Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odit ipsa dolorem velit quae dignissimos eum exercitationem, molestias harum facere totam, iure provident veritatis eos.</p>
                <h3>Lorem Ipsum</h3>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odit ipsa dolorem velit quae dignissimos eum exercitationem, molestias harum facere totam, iure provident veritatis eos.</p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>