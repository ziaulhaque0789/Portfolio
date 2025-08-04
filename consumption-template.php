<?php
/*
Template Name: Consumption
*/
// Process the form submission
?>
<?php get_header();?>

<style>
    
      
    @media (max-width: 576px) { /* xs/sm breakpoint */
  .responsive-text {
    font-size: 0.70rem; /* ~text-xs */
  }
    
</style>

   <section class="container my-5 py-5" style=" background: linear-gradient(135deg, #43e97b, #203a43, #38f9d7);
      background-repeat: no-repeat; max-width: 960px;">
    <h2 class="text-center mb-4 text-white">Fabric Consumption for Initial Costing</h2>


    <div class="row g-2 mb-3">
    <!-- Body Consumption -->
     <div class="col">
    <div class="card mb-4">
      <div class="card-header bg-success text-white">
        Body Consumption (Top Style)
      </div>
      <div class="card-body">
        <div class="row g-2 mb-3">
          <div class="col">
            <input type="text" class="form-control responsive-text" placeholder="Style Name" id="bodyStyle" />
          </div>
          <div class="col">
            <input type="text" class="form-control responsive-text" placeholder="Item Name" id="bodyItem" />
          </div>
          <div class="col">
            <input type="text" class="form-control responsive-text" placeholder="Buyer Name" id="bodyBuyer" />
          </div>
        </div>
        <p class="text-muted text-center mb-1"><strong>Enter values in CM:</strong> Body Length, Sleeve Length, Chest, GSM, Wastage% (comma-separated)</p>
        <input type="text" class="form-control text-center responsive-text mb-3" placeholder="Type like this: 75,18,56,160,15" id="bodyValues" />
        <div class="d-flex justify-content-center gap-2 mb-3">
          <button class="btn btn-primary btn-sm" onclick="calculateBody()">Calculate</button>
          <button class="btn btn-danger btn-sm" onclick="clearBody()">Clear</button>
          <button class="btn btn-success btn-sm" onclick="downloadBodyPDF()">Download PDF</button>
        </div>
        <p id="bodyResult" class="text-center fw-bold"></p>
      </div>
    </div>
</div>
   <div class="col">
  <!-- Neck Rib -->
  <div class="card mb-4">
    <div class="card-header bg-info text-white">Neck Rib Consumption</div>
    <div class="card-body">
      <div class="row g-2 mb-3">
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Style Name" id="neckStyle" /></div>
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Item Name" id="neckItem" /></div>
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Buyer Name" id="neckBuyer" /></div>
      </div>
      <p class="text-muted text-center mb-1"><strong>Enter values in CM:</strong> Neck Width, Rib Height, Front Neck Drop, Rib GSM, Wastage% (comma-separated)</p>
      <input type="text" class="form-control text-center responsive-text mb-3" placeholder="Type like this: 18,3,10,220,5" id="neckValues" />
      <div class="d-flex justify-content-center gap-2 mb-3">
        <button class="btn btn-primary btn-sm" onclick="calculateNeck()">Calculate</button>
        <button class="btn btn-danger btn-sm" onclick="clearNeck()">Clear</button>
        <button class="btn btn-success btn-sm" onclick="downloadNeckPDF()">Download PDF</button>
      </div>
      <p id="neckResult" class="text-center fw-bold"></p>
    </div>
  </div>

</div>
    </div>

     <div class="row g-2 mb-3">
  <!-- Trouser -->
    <div class="col">
  <div class="card mb-4">
    <div class="card-header bg-secondary text-white">Trouser/Legging Consumption</div>
    <div class="card-body">
      <div class="row g-2 mb-3">
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Style Name" id="trouserStyle" /></div>
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Item Name" id="trouserItem" /></div>
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Buyer Name" id="trouserBuyer" /></div>
      </div>
      <p class="text-muted text-center mb-1"><strong>Enter values in CM:</strong> Front Rise, Back Rise, Inseam, Thai, Waistband, GSM, Wastage% (comma-separated)</p>
      <input type="text" class="form-control text-center mb-3 responsive-text" placeholder="Type like this: 25,35,70,20,5,200,8" id="trouserValues" />
      <div class="d-flex justify-content-center gap-2 mb-3">
        <button class="btn btn-primary btn-sm" onclick="calculateTrouser()">Calculate</button>
        <button class="btn btn-danger btn-sm" onclick="clearTrouser()">Clear</button>
        <button class="btn btn-success btn-sm" onclick="downloadTrouserPDF()">Download PDF</button>
      </div>
      <p id="trouserResult" class="text-center fw-bold"></p>
    </div>
  </div>
</div>
  <!-- Pocket -->
    <div class="col">
  <div class="card mb-4">
    <div class="card-header bg-warning text-dark">Pocket Consumption</div>
    <div class="card-body">
      <div class="row g-2 mb-3">
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Style Name" id="pocketStyle" /></div>
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Item Name" id="pocketItem" /></div>
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Buyer Name" id="pocketBuyer" /></div>
      </div>
      <p class="text-muted text-center mb-1"><strong>Enter values in CM:</strong> Pocket Width, Pocket Height, GSM, Wastage% (comma-separated)</p>
      <input type="text" class="form-control text-center mb-3 responsive-text" placeholder="Type like this: 15,18,180,5" id="pocketValues" />
      <div class="d-flex justify-content-center gap-2 mb-3">
        <button class="btn btn-primary btn-sm" onclick="calculatePocket()">Calculate</button>
        <button class="btn btn-danger btn-sm" onclick="clearPocket()">Clear</button>
        <button class="btn btn-success btn-sm" onclick="downloadPocketPDF()">Download PDF</button>
      </div>
      <p id="pocketResult" class="text-center fw-bold"></p>
    </div>
  </div>
</div>
</div>
 <div class="row g-2 mb-3">
  <!-- Collar -->
    <div class="col">
  <div class="card mb-4">
    <div class="card-header bg-dark text-white">Collar Consumption</div>
    <div class="card-body">
      <div class="row g-2 mb-3">
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Style Name" id="collarStyle" /></div>
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Item Name" id="collarItem" /></div>
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Buyer Name" id="collarBuyer" /></div>
      </div>
      <p class="text-muted text-center mb-1"><strong>Enter values in CM:</strong> Collar Length, Collar Height, Wastage% (comma-separated)</p>
      <input type="text" class="form-control text-center mb-3 responsive-text" placeholder="Type like this: 40,8,5" id="collarValues" />
      <div class="d-flex justify-content-center gap-2 mb-3">
        <button class="btn btn-primary btn-sm" onclick="calculateCollar()">Calculate</button>
        <button class="btn btn-danger btn-sm" onclick="clearCollar()">Clear</button>
        <button class="btn btn-success btn-sm" onclick="downloadCollarPDF()">Download PDF</button>
      </div>
      <p id="collarResult" class="text-center fw-bold"></p>
    </div>
  </div>
</div>
  <!-- Cuff -->
   <div class="col">
  <div class="card mb-4">
    <div class="card-header bg-primary text-white">Cuff Consumption</div>
    <div class="card-body">
      <div class="row g-2 mb-3">
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Style Name" id="cuffStyle" /></div>
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Item Name" id="cuffItem" /></div>
        <div class="col"><input type="text" class="form-control responsive-text" placeholder="Buyer Name" id="cuffBuyer" /></div>
      </div>
      <p class="text-muted text-center mb-1"><strong>Enter values in CM:</strong> Cuff Opening, Cuff Height, Wastage% (comma-separated)</p>
      <input type="text" class="form-control text-center mb-3 responsive-text" placeholder="Type like this: 10,6,5" id="cuffValues" />
      <div class="d-flex justify-content-center gap-2 mb-3">
        <button class="btn btn-primary btn-sm" onclick="calculateCuff()">Calculate</button>
        <button class="btn btn-danger btn-sm" onclick="clearCuff()">Clear</button>
        <button class="btn btn-success btn-sm" onclick="downloadCuffPDF()">Download PDF</button>
      </div>
      <p id="cuffResult" class="text-center fw-bold"></p>
    </div>
  </div>
</div>
  </div>
  </section>

  
<?php get_footer();?>