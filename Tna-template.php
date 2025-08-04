<?php
/*
Template Name: Tna
*/
// Process the form submission
?>
<?php get_header();?>

<style>
 @media (max-width: 576px) { /* xs/sm breakpoint */
  .responsive-text {
    font-size: 0.60rem; /* ~text-xs */
  }
}
  </style>

<section class="py-5 "  style=" background: linear-gradient(to right, #0f172a, #3b82f6);  color: #fff;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;">

<div class="container tnaSection" style="max-width: 960px;">
  <main id="tnaSection" style=" background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      border-radius: 16px;
      box-shadow: 0 0 25px rgba(0,0,0,0.3);
      padding: 40px 30px;
      margin-top: 60px;">
    <header class="text-center mb-5">
      <h1>TNA (Time & Action) Calendar in Garment Merchandising.</h1>
      <p class="lead">A powerful tool that every successful merchandiser uses.</p>
    </header>
<div class="row g-3 mb-4">
    <div class="col col-md-6">
      <label for="stylePoName" class="form-label">Style / PO Name</label>
      <input type="text" id="stylePoName" class="form-control responsive-text" placeholder="Enter Style or PO Name">
    </div>
    <div class="col col-md-6">
      <label for="itemName" class="form-label">Item Name</label>
      <input type="text" id="itemName" class="form-control responsive-text" placeholder="Enter Item Name">
    </div>
</div>
    <div class="row g-3 mb-4">
      <div class="col-4 col-md-4">
        <label for="orderConfirmDate" class="form-label">Order Confirm Date</label>
        <input type="date" id="orderConfirmDate" class="form-control responsive-text" required>
      </div>
      <div class="col-4 col-md-4">
        <label for="shipmentDate" class="form-label">Shipment Date</label>
        <input type="date" id="shipmentDate" class="form-control responsive-text"  required>
      </div>
      <div class="col-4 col-md-4">
        <label for="orderQty" class="form-label">Order Quantity (pcs)</label>
        <input type="number" id="orderQty" class="form-control responsive-text" min="1" placeholder="Enter MOQ" required>
      </div>
    </div>


   <div class="d-flex justify-content-center gap-2 mb-3">
        <button class="btn btn-primary btn-sm" onclick="generateTNA()">Generate TNA</button>
        <button class="btn btn-success btn-sm" onclick="downloadPDF()">Download as PDF</button>
        <button class="btn btn-danger btn-sm" onclick="clearAll()">Clear All</button>
      </div>
   
   
    <section aria-labelledby="calendarHeading">
      <h2 id="calendarHeading" class="py-4 text-center">Quick TNA Estimate</h2>
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th>Action</th>
            <th>Planned Date</th>
          </tr>
        </thead>
        <tbody id="tnaBody">
          <tr><td>Fabric Booking</td><td id="fabricBooking"></td></tr>
          <tr><td>Trims & Accessories Booking</td><td id="trimsBooking"></td></tr>
          <tr><td>Fit Sample Submission</td><td id="fitSampleSubmission"></td></tr>
          <tr><td>Fit Sample Approval</td><td id="fitSampleApproval"></td></tr>
          <tr><td>Lab-Dip Submission</td><td id="labDipSubmission"></td></tr>
          <tr><td>Lab-Dip Approval</td><td id="labDipApproval"></td></tr>
          <tr><td>PP Sample Submission</td><td id="ppSampleSubmission"></td></tr>
          <tr><td>PP Sample Approval</td><td id="ppSampleApproval"></td></tr>
          <tr><td>Fabric In-House</td><td id="fabricInHouse"></td></tr>
          <tr><td>Trims & Accessories In-House</td><td id="trimsInHouse"></td></tr>
          <tr><td>Production Start</td><td id="productionStart"></td></tr>
          <tr><td><strong>Shipment Date</strong></td><td id="shipmentDateDisplay"></td></tr>
        </tbody>
      </table>
    </section>
  </main>


</div>

<div class="text-center py-4">
  <a href="https://brightfuturei.com/">
    <button class="btn btn-primary btn-lg">Return to Home</button>
  </a>
</div>
</section>
 



<?php get_footer();?>