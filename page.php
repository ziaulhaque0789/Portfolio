<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package better_solutions
 *
 * @version 5.3.0
 */

 get_header();?>
 <style>
 .feature-box {
    transition: transform 0.3s, box-shadow 0.3s;
    background: #ffffff;
    color: #000;
    border-radius: 12px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  
  }

  .feature-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px rgba(0,0,0,0.2);
  }

 
  
  .zia{
      
     background: linear-gradient(135deg, #00c6fb, #005bea); 
    background-size: 200% 200%;
    animation: gradientMove 15s ease infinite;
    color: #fff; @keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  } 
  }
 
 

.header-box {
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/OFFICE 23.jpg');
  background-size: cover;
  background-position: center;
  position: relative;
  overflow: hidden;
  min-height: 250px;
  font-family: 'Segoe UI', sans-serif;
}

.header-box .overlay {
  background: rgba(0, 0, 0, 0.7); /* Keep text readable */
  z-index: 1;
}

.header-box > .position-relative {
  z-index: 2;
}

 
 
 
</style>
<!-- Dashboard -->
  <div class="container zia my-5 py-5 rounded">
<!--
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="center" style="padding: 20px;">
        <table width="600" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" style="max-width: 600px; width: 100%;  box-shadow: 0 10 25px rgba(0, 0, 0, 0.9); border-radius: 10px;">-->
          <!-- Two Columns --><!--
          <tr>
            <td align="center" style="padding: 0;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="two-column">
                <tr>-->
                  <!-- Left Image Column --><!--
                  <td class="column image-column" width="50%" valign="middle" style="padding: 0;">
                    <img src="https://brightfuturei.com/wp-content/uploads/2025/07/blog-picture.jpg" alt="Bright Future" style="width: 100%; max-height: 300px; border-radius: 10px; display: block; border: 0;">
                  </td>
                  -->
                  <!-- Right Text Column --><!--
                  <td class="column text-column" width="50%" valign="middle" style="padding: 20px; font-family: Arial, sans-serif; color: #333333;">
                    <h2 style="margin: 0; font-size: 20px;">Ability to work under pressure & fulfill deadlines.</h2>
                  </td>
                </tr>
              </table>
              
                <table border="0" cellspacing="0" cellpadding="0" style="margin-top: 10px;">
                      <tr>
                        <td align="center" bgcolor="#009245" style="border-radius: 6px;">
                          <a href="https://brightfuturei.com/contact/" 
                             style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px; font-family: Arial, sans-serif;">
                            Contact Me
                          </a>
                        </td>
                      </tr>
                    </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  -->
  


<div class="header-box text-white text-center p-4 p-md-5 mb-5 rounded-4 shadow-lg position-relative">
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 rounded-4"></div>
  <div class="position-relative">
    <h2 class="fw-bold mb-3 display-6 text-white display-md-5">Smart assistant in apparel merchandising.</h2>
    <p class="lead fs-6 fs-md-5">
      Helping merchandisers like you make faster, smarter costing decisions — built from real factory floor experience.
    </p>
  </div>
</div>



    <!-- Feature Grid -->
    <div class="row g-3">
      <div class="col-6 hover-animate shadow-sms" style=" .hover-animate:hover {
  transform: scale(1.03);
  box-shadow: 0 0.8rem 1.5rem rgba(0, 0, 0, 0.15);
}">
        <a href="https://brightfuturei.com/consumption/" class="text-decoration-none">
           <div class="p-4 text-center feature-box">
          <h6>CONSUMPTION</h6> 
          <button class="btn btn-outline-primary w-100 mt-2">Calculate</button>
        </div>
        </a>
      </div>

      <div class="col-6">
        <a href="https://brightfuturei.com/cm/" class="text-decoration-none">
         <div class="p-4 text-center feature-box">
          <h6>CM</h6>
          <button class="btn btn-outline-primary w-100 mt-2">Calculate</button>
        </div>
        </a>
      </div>

      <div class="col-6">
        <a href="https://brightfuturei.com/yarn-count/" class="text-decoration-none">
         <div class="p-4 text-center feature-box">
          <h6>YARN COUNT</h6>
          <button class="btn btn-outline-primary w-100 mt-2">Calculate</button>
        </div>
        </a>
      </div>

      <div class="col-6">
        <a href="https://brightfuturei.com/costing/" class="text-decoration-none">
          <div class="p-4 text-center feature-box">
          <h6>COSTING</h6>
          <button class="btn btn-outline-primary w-100 mt-2">Calculate</button>
        </div>
        </a>
      </div>

      <div class="col-6">
        <a href="https://brightfuturei.com/tna/" class="text-decoration-none">
         <div class="p-4 text-center feature-box">
          <h6 class="mb-2">TNA</h6>
          <button class="btn btn-outline-info w-100">Calculate</button>
        </div>
        </a>
      </div>
      
      <div class="col-6">
        <a href="https://brightfuturei.com/budget/" class="text-decoration-none">
         <div class="p-4 text-center feature-box">
          <h6 class="mb-2">BUDGET</h6>
          <button class="btn btn-outline-info w-100">Calculate</button>
        </div>
        </a>
      </div>
      
    </div>
  </div>



     <!--   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3602557870695275"
     crossorigin="anonymous"></script>
     
   
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKPZ3Z9M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3602557870695275"
     data-ad-slot="1532958923"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


-->




  <section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold text-primary mb-4">My Services</h2>
     <p class="text-center"> I am committed to transparency, fast communication, and building long-term partnerships you can count on.</p>
    <div class="row g-4">

      <!-- Experience -->
      <div class="col-md-6">
  <div class="p-4 bg-white p-4 shadow rounded h-100 border-start border-4 border-primary">
    <h3 class="mb-3 text-primary">
      <i class="fas fa-clipboard-check text-success me-2"></i>Apparel Merchandising Services
    </h3>
    <p class="lead">
      With strong planning and merchandising strategies, I provide you with services from the day after the order is confirmed to delivery, so that your products do not go through any delays, avoid air shipments, and deliver quality garments on time.
    </p>
    <ul class="list-unstyled mt-3">
      <li class="mb-2">
        <i class="fas fa-calendar-check text-success me-2"></i> Production Planning & Order Follow-up
      </li>
      <li class="mb-2">
        <i class="fas fa-boxes-packing text-success me-2"></i> Fabric & Trims Sourcing
      </li>
      <li class="mb-2">
        <i class="fas fa-ruler-combined text-success me-2"></i> Sample Development & Approvals
      </li>
      <li class="mb-2">
        <i class="fas fa-truck-fast text-success me-2"></i> Shipment Planning & On-time Delivery
      </li>
    </ul>
    <a href="https://brightfuturei.com/contact/" class="btn btn-primary mt-3">
      <i class="fas fa-paper-plane me-1"></i> Request a Quote
    </a>
  </div>
</div>

      <!-- Web Dev Skill -->
    

        <div class="col-lg-6">
        <div class="bg-white p-4 shadow rounded h-100 border-start border-4 border-success">
          <h3 class="fw-bold text-success mb-3"><i class="bi bi-laptop-fill text-primary me-2"></i>Web Development & Digital Solutions</h3>
          <p class="mb-4 lead">I build responsive, fast, and user-friendly websites tailored to your brand or business. Whether you're a startup, small business, or personal brand — I help you stand out online with clean code and modern design.</p>
          <ul class="list-unstyled">
            <li class="mb-3">
              💻 <strong>Custom Website Development:</strong> Using React, Bootstrap, or WordPress to match your goals.
            </li>
            <li class="mb-3">
              💌 <strong>HTML Email Templates:</strong> Mobile-friendly designs that work across all major platforms.
            </li>
            <li class="mb-3">
              🧩 <strong>Landing Pages & Portfolios:</strong> Designed to convert and showcase your work beautifully.
            </li>
            <li class="mb-3">
              🛠️ <strong>Ongoing Support:</strong> Need edits or fixes? I’m just a message away.
            </li>
          </ul>

          <a href="https://brightfuturei.com/contact/" class="btn btn-primary mt-3">
      <i class="fas fa-paper-plane me-1"></i> Request a Quote
    </a>
        </div>
      </div>

    </div>

  </div>
</section>



<?php get_footer();?>
