<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header();?>

    
 <section id="contact" class="py-5" style="background: linear-gradient(135deg, #8BC34A, #2c5364, #4CAF50); 
      color: white;
      font-family: 'Segoe UI', sans-serif;">
 <div class="container tnaSection" style="max-width: 960px;">
  <main id="tnaSection" style=" background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      border-radius: 16px;
      box-shadow: 0 0 25px rgba(0,0,0,0.3);
      padding: 40px 30px;
      margin-top: 60px;">
      
    <h2 class="text-center display-5 text-dark  fw-bold  pb-2 mb-5">
     Contact Me – Let’s Build Something Together
    </h2>

    <div class="row text-dark g-5">
      <!-- Contact Info -->
      <div class="col-lg-5 bg-white rounded shadow-lg">
        <h3 class="fw-semibold mb-3">I'd Love to Hear From You</h3>
        <p class="text-dark mb-4">
          Have a project in mind? Need advice? Or just want to say hi? 
          Don’t hesitate—I'm always happy to connect.
        </p>

         <ul class="list-unstyled">
          <li class="mb-3 d-flex align-items-center">
           
            <a href="mailto:zia@brightfuturei.com" class="text-white text-decoration-none">
          <button class="btn btn-outline-primary w-100 mt-2"> <i class="bi bi-envelope fs-5 text-black me-3"></i> zia@brightfuturei.com</button>
            </a>
          </li>
          <li class="mb-3 d-flex align-items-center">
            <a href="tel:+8801327227048" class="text-white text-decoration-none">

 <button class="btn btn-outline-primary w-100 mt-2"> <i class="bi bi-telephone fs-5 text-black me-3"></i> +88 01327227048</button>
            </a>
          </li>
          <li class="mb-3 d-flex align-items-center">

          <a href="https://maps.app.goo.gl/Jf8cYmEV6FKsjPVx8" rel="noopener" >
              <button class="btn btn-outline-primary w-100 mt-2">   <i class="bi bi-geo-alt fs-5 text-black me-3"></i>  <span>Mirpur-12, Dhaka, Bangladesh</span></button>
            </a>
          </li>
          <li class="mt-2">
            <a href="https://maps.app.goo.gl/Jf8cYmEV6FKsjPVx8" rel="noopener" class="btn btn-outline-primary btn-sm">
              View Location on Map
            </a>
          </li>
        </ul>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-7">
        <div class="card shadow-lg border-0">
          <div class="card-body p-4 p-lg-5">
            <form id="contactForm" class="row gy-3" novalidate>
              <div class="col-12">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>
              <div class="col-12">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" id="subject" name="subject" class="form-control" required>
              </div>
              <div class="col-12">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
              </div>
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary px-4">Send Message</button>
              </div>
            </form>
            <div id="response" class="mt-3 text-success text-center"></div>
          </div>
        </div>
      </div>
    </div>
    
    
    </main>
    
     <div class="text-center py-3">
  <a href="https://brightfuturei.com/">
    <button class="btn btn-primary shadow-lg btn-lg">Return to Home</button>
  </a>
</div>
  </div>
  
</section>






        
<?php get_footer();?>