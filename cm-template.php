<?php
/*
Template Name: CM
*/
// Process the form submission
?>

<?php get_header();?>

<style>
 @media (max-width: 576px) { /* xs/sm breakpoint */
  .responsive-text {
    font-size: 0.50rem; /* ~text-xs */
  }
}
  </style>

<section id="cm-calculator" class="py-5" style="background: linear-gradient(90deg, #9ebd13 0%, #008552 100%);
  color: #fff;">
<div class="container tnaSection" style="max-width: 960px;">
  <main id="tnaSection" style=" background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      border-radius: 16px;
      box-shadow: 0 0 25px rgba(0,0,0,0.3);
      padding: 40px 30px;
      margin-top: 60px;">
    
    <!-- Section Title -->
    <header class="text-center my-4">
      <h2 class="fw-bold text-info border-bottom border-3 py-2 d-none d-lg-block">
        Effective Method to Calculate Garment Cost of Making (CM)
      </h2>
      <h4 class="fw-bold text-info border-bottom border-3 py-2 d-lg-none">
        Simple Garment CM Calculation
      </h4>
    
    </header>

    <!-- First CM Calculator Block -->
    <div class="card border-0 shadow-lg p-4 mb-5">
      <h5 class="text-center text-primary mb-4">Quick CM Estimate (Basic)</h5>

      <div class="row g-3">
        <div class="col-4 col-md-4">
          <label for="quantityOfMachines" class="form-label text-center responsive-text">Total Number of Machines</label>
          <input type="number" id="quantityOfMachines" class="form-control responsive-text" placeholder="machine QTY ">
        </div>
        <div class="col-4 col-md-4">
          <label for="productionQuantity" class="form-label text-center responsive-text">Production Quantity (Per 10 Hours)</label>
          <input type="number" id="productionQuantity" class="form-control responsive-text" placeholder="production QTY ">
        </div>
        <div class="col-4 col-md-4">
          <label for="costPerMachine" class="form-label text-center responsive-text">Cost per  Machine &nbsp;&nbsp;&nbsp; ($)</label>
          <input type="number" id="costPerMachine" class="form-control responsive-text" placeholder="machine cost ">
        </div>
      </div>

      <div class="row g-3 align-items-center mt-4">
        <div class="col-6 col-md-6">
          <h6 class="text-primary text-center responsive-text mb-0">Estimated CM per Dozen</h6>
        </div>
        <div class="col-6 col-md-6">
          <div id="output6" class="bg-light text-dark text-center responsive-text p-2 rounded text-center fw-bold fs-5"></div>
        </div>
      </div>

      <div class="row g-2 mt-4">
        <div class="col-4 col-md-4">
          <button class="btn btn-primary text-center responsive-text w-100" onclick="calculate6()">Calculate</button>
        </div>
        <div class="col-4 col-md-4">
          <button class="btn btn-success text-center responsive-text w-100" onclick="saveResult6()">Save</button>
        </div>
        <div class="col-4 col-md-4">
          <button class="btn btn-danger text-center responsive-text w-100" onclick="clearInputs6()">Clear</button>
        </div>
      </div>
    </div>

    <!-- Informational Note -->
    <div class="alert alert-info shadow-lg d-none d-lg-block">
      <p class="mb-0">
        <strong>Note:</strong> This is a basic APP. Actual CM can vary based on rent, utility costs, machine depreciation, worker, and other overheads. Let’s explore a more detailed breakdown below.
      </p>
    </div>

    <!-- Second CM Calculator (Detailed Method) -->
    <div class="card border-0 shadow-lg p-4 mt-5">
      <h5 class="text-center text-primary mb-4">Advanced CM Estimation (Detailed)</h5>

      <div class="row g-3">
        <div class="col-4 col-md-4">
          <label for="A" class="form-label text-center responsive-text">Monthly Expenses ($)</label>
          <input type="number" id="A" class="form-control responsive-text" placeholder="monthly cost">
        </div>
        <div class="col-4 col-md-4">
          <label for="B" class="form-label text-center responsive-text">Total Machines in Production</label>
          <input type="number" id="B" class="form-control  responsive-text" placeholder="total machines QTY">
        </div>
        <div class="col-4 col-md-4">
          <label for="C" class="form-label text-center responsive-text">Machines per &nbsp;&nbsp;&nbsp; Layout</label>
          <input type="number" id="C" class="form-control responsive-text" placeholder="layout machines QTY">
        </div>
      </div>

      <div class="row g-3 mt-2">
        <div class="col-4 col-md-4">
          <label for="D" class="form-label text-center responsive-text">Hourly Production Target</label>
          <input type="number" id="D" class="form-control responsive-text" placeholder="production QTY">
        </div>
        <div class="col-4 col-md-4">
          <label for="E" class="form-label text-center responsive-text">Working Days (Monthly)</label>
          <input type="number" id="E" class="form-control responsive-text" placeholder="Monthly working day">
        </div>
        <div class="col-4 col-md-4">
          <label for="F" class="form-label text-center responsive-text">Working Hours per Day</label>
          <input type="number" id="F" class="form-control responsive-text" placeholder="working hours per day ">
        </div>
      </div>

      <div class="row g-3 align-items-center mt-4">
        <div class="col-6 col-md-6">
          <h6 class="text-primary mb-0 text-center responsive-text">Estimated CM per Dozen</h6>
        </div>
        <div class="col-6 col-md-6">
          <div id="output15" class="bg-light text-dark p-2 rounded text-center responsive-text fw-bold fs-5"></div>
        </div>
      </div>

      <div class="row g-2 mt-4">
        <div class="col-4 col-md-4">
          <button class="btn btn-primary text-center responsive-text w-100" onclick="calculate15()">Calculate</button>
        </div>
        <div class="col-4 col-md-4">
          <button class="btn btn-success text-center responsive-text w-100" onclick="saveResult15()">Save</button>
        </div>
        <div class="col-4 col-md-4">
          <button class="btn btn-danger text-center responsive-text w-100" onclick="clearInputs15()">Clear</button>
        </div>
      </div>
    </div>

    <!-- Hidden textarea for copy/save -->
    <textarea id="hiddenResult" class="d-none"></textarea>
  </div>
  
  </main>
  </div>
  <div class="text-center py-4">
  <a href="https://brightfuturei.com/">
    <button class="btn btn-primary btn-lg">Return to Home</button>
  </a>
</div>
</section>





<?php get_footer();?>