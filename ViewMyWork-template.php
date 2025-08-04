<?php
/*
Template Name: ViewMyWork
*/
?>

<?php get_header();?>

<section class="py-5 my-5 bg-dark text-white" id="see-my-work" style="background: linear-gradient(to right, #1e3c72, #2a5298);">
  <div class="container">
    <h2 class="text-center display-5 fw-bold mb-4 border-bottom border-light pb-2">My Work in Action</h2>
    <p class="lead text-center mb-5">From supply chain precision to pixel-perfect code, here’s a glimpse of the work that bridges my worlds — apparel merchandising & web development.</p>

    <!-- Tabs -->
    <ul class="nav nav-pills justify-content-center mb-4" id="workTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="apparel-tab" data-bs-toggle="pill" data-bs-target="#apparel" type="button" role="tab">Apparel Merchandising</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="web-tab" data-bs-toggle="pill" data-bs-target="#web" type="button" role="tab">Web Development</button>
      </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="workTabsContent">
      <!-- Apparel Merchandising Projects -->
      <div class="tab-pane fade show active" id="apparel" role="tabpanel">
        <div class="row g-4">
          <div class="col-md-4">
          <div class="card project-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png" class="card-img-top" alt="Apparel-Marketing">
            <div class="card-body">
              <h5 class="card-title"> Apparel Marketing</h5>
              <p class="card-text">If necessary, I try to do marketing, where I am 75% successful which leads to the development of the organization.</p>
            </div>
          </div>
        </div>

<div class="col-md-4">
          <div class="card project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.png" class="card-img-top" alt="Product Sourcing">
            <div class="card-body">
              <h5 class="card-title">Product Sourcing</h5>
              <p class="card-text">I identify reliable suppliers for timely garment production, negotiate cost reductions, and strive to source sustainable materials.</p>
            </div>
          </div>
        </div>
<div class="col-md-4">
          <div class="card project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.png" class="card-img-top" alt="Seasonal Line Planning">
            <div class="card-body">
              <h5 class="card-title">Seasonal Line Planning </h5>
              <p class="card-text"> sometime plan lines based on buyer needs, ensuring timely implementation and consistency.I ensure that each line is meets expectations.</p>
            </div>
          </div>
        </div>
        </div>

        <div class="row my-3 g-4">
        <div class="col-md-4">
          <div class="card project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4.1.png" class="card-img-top" alt="Knitwear">
            <div class="card-body">
              <h5 class="card-title"> Costing & Negotiation </h5>
              <p class="card-text">I provide detailed cost breakdowns and negotiate with suppliers to ensure value and efficiency.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-comonication.png" class="card-img-top" alt="Knitwear">
            <div class="card-body">
              <h5 class="card-title"> Buyer Communication</h5>
              <p class="card-text">I maintain clear, timely communication with clients and buyers, ensuring satisfaction at every step.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/time.png" class="card-img-top" alt="Knitwear">
            <div class="card-body">
              <h5 class="card-title">TNA calendars </h5>
              <p class="card-text"> I create and manage TNA calendars to track every step of the production process. This helps ensure timely delivery.</p>
            </div>
          </div>
        </div>
      </div>
      </div>

      <!-- Web Development Projects -->
      <div class="tab-pane fade" id="web" role="tabpanel">
        <div class="row g-4">

            <div class="col-md-4">
          <div class="card project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/protfolio-project.png" class="card-img-top" alt="Portfolio Website">
            <div class="card-body">
              <h5 class="card-title">Personal Portfolio</h5>
              <p class="card-text">Designed and coded a responsive portfolio site using HTML, CSS, JS, and Bootstrap 5.3.</p>
              <a href="#" class="btn btn-outline-primary btn-sm" target="_blank">View Project</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/HTML email template.jpg" class="card-img-top" alt="Email Template">
            <div class="card-body">
              <h5 class="card-title">HTML Email Template</h5>
              <p class="card-text">Crafted professional and mobile-optimized email templates for apparel brand promotions.</p>
              <a href="#" class="btn btn-outline-primary btn-sm" target="_blank">View Template</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landingpage.png" class="card-img-top" alt="Landing Page">
            <div class="card-body">
              <h5 class="card-title">Product Landing Page</h5>
              <p class="card-text">Built a modern product showcase page with animation and interactivity using Bootstrap.</p>
              <a href="#" class="btn btn-outline-primary btn-sm" target="_blank">Live Demo</a>
            </div>
          </div>
        </div>
      </div>
          <!-- Web development projects listed here -->
        </div>
      </div>
    </div>
  </div>
</section>

 <div class="container py-5" id="sample-development">
        <h2 class="text-center mb-4">Sample Development as per Buyer’s Instructions</h2>
        <div class="row g-4">
      
          <!-- Fit Sample -->
          <div class="col-md-4">
            <div class="card h-100 project-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fit sample.png" class="card-img-top" alt="Fit Sample">
              <div class="card-body">
                <h5 class="card-title">Fit Sample</h5>
                <p class="card-text">Developed to ensure correct garment fit and measurements based on buyer tech pack. Critical step before proceeding to bulk production.</p>
              </div>
            </div>
          </div>
      
          <!-- Photo Sample -->
          <div class="col-md-4">
            <div class="card h-100 project-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Photo-Sample.png" class="card-img-top" alt="Photo Sample">
              <div class="card-body">
                <h5 class="card-title">Photo Sample</h5>
                <p class="card-text">Prepared for online platforms or catalogs to display actual product visuals. Accuracy in color and styling is crucial.</p>
              </div>
            </div>
          </div>
      
          <!-- Photoshoot Sample -->
          <div class="col-md-4">
            <div class="card h-100 project-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photoshoot1.png" class="card-img-top" alt="Photoshoot Sample">
              <div class="card-body">
                <h5 class="card-title">Photoshoot Sample</h5>
                <p class="card-text">Delivered for model photography, campaigns, and promotional use. Fabric appearance and perfect stitching are prioritized.</p>
              </div>
            </div>
          </div>
      
          <!-- Salesman Sample -->
          <div class="col-md-4">
            <div class="card h-100 project-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/PP-SAMPLE.png" class="card-img-top" alt="Pre-Production Sample">
              <div class="card-body">
                <h5 class="card-title">Pre-Production (PP) Sample</h5>
                <p class="card-text">Final approval sample made with bulk trims, fabric, and construction to verify readiness for production line.</p>
              </div>
            </div>
          </div>
      
          <!-- Size Set Sample -->
          <div class="col-md-4">
            <div class="card h-100 project-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/size-set1.png" class="card-img-top" alt="Size Set Sample">
              <div class="card-body">
                <h5 class="card-title">Size Set Sample</h5>
                <p class="card-text">Created in all sizes to confirm pattern grading and measurement specs before starting bulk production.</p>
              </div>
            </div>
          </div>
      
          <!-- Pre-production Sample -->
          <div class="col-md-4">
            <div class="card h-100 project-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shipping-sample.png" class="card-img-top" alt="Pre-Production Sample">
              <div class="card-body">
                <h5 class="card-title">Shipping Sample</h5>
                <p class="card-text">Shipping samples are the final approved products sent before bulk delivery to ensure everything matches buyer expectations.</p>
              </div>
            </div>
          </div>
      
        </div>
      </div>
    </div>
    
    <div class="text-center py-4">
  <a href="https://brightfuturei.com/">
    <button class="btn btn-primary btn-lg">Return to Home</button>
  </a>
</div>


<?php get_footer();?>