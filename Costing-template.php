<?php
/*
Template Name: Costing
*/

// Process the form submission
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
 

  <style>
    
    h2 {
      text-align: center;
      color: #007bff;
    }
    .form-group {
      margin-bottom: 10px;
    }
    label {
      display: block;
      font-weight: bold;
    }
    input {
      width: 100%;
      padding: 6px;
      margin-top: 4px;
      margin-bottom: 8px;
    }
    .buttons {
      margin-top: 20px;
      display: flex;
      gap: 10px;
    }
    button {
      padding: 10px;
      flex: 1;
      font-size: 16px;
      cursor: pointer;
    }
    #output7 {
      margin-top: 20px;
      font-size: 18px;
      font-weight: bold;
      background: #fff;
      padding: 10px;
      border: 1px solid #ccc;
    }
    @media print {
      .buttons {
        display: none;
      }

      .Return1{

         display: none;
      }

    }

  @media (max-width: 576px) { /* xs/sm breakpoint */
  .responsive-text {
    font-size: 0.60rem; /* ~text-xs */
  }
}


  </style>


</head>
<body>

<section class="py-5" style="background: linear-gradient(135deg, #96fbc4, #f9d423, #38f9d7);
  color: #fff; 
  font-family: 'Segoe UI', sans-serif; ">
    
     <div class="container tnaSection" style="max-width: 960px;">
     <main id="tnaSection" style=" background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      border-radius: 16px;
      box-shadow: 0 0 25px rgba(0,0,0,0.3);
      padding: 40px 30px;
     ">
  <!-- Heading -->
 
  
  <h2 class="pb-3">Smart Apparel Costing </h2>
 <h5 class="text-center Return1 text-muted border-bottom border-info border-3 pb-2 mb-4">
      Enter 0 for non-applicable fields.
    </h5>
  <div class="row">
 <div class="col-4 col-md-4 ">
      <label for="stylePoName" class="form-label responsive-text text-center">PO Name</label>
      <input type="text" id="stylePoName" class="form-control responsive-text text-center" placeholder="Style Name">
    </div>
    <div class="col-4 col-md-4 ">
      <label for="itemName" class="form-label responsive-text text-center">Item Name</label>
      <input type="text" id="itemName" class="form-control responsive-text text-center" placeholder="Item Name">
    </div>

       <div class="col-4 col-md-4 ">
      <label for="itemName" class="form-label responsive-text text-center">Order QTY</label>
      <input type="text" id="itemName" class="form-control responsive-text text-center" placeholder="Order QTY">
    </div>

  </div>
 <div class="row">
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Consumption (kg/dozen)</label><input class="text-center responsive-text" id="consumption" /></div>
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Spandex (kg/dozen)</label><input class="text-center responsive-text" id="spandex" /></div>
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Yarn Price &nbsp;&nbsp;&nbsp;($/kg)</label><input class="text-center responsive-text" id="yarnPrice" /></div>
  </div>
  <div class="row">
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Spandex Price ($/kg)</label><input class="text-center responsive-text"  id="spandexPrice" /></div>
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Knitting Price ($/kg)</label><input class="text-center responsive-text" id="knittingPrice" /></div>
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Dyeing Price ($/kg)</label><input class="text-center responsive-text" id="dyeingPrice" /></div>

  </div>
  <div class="row">
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Allover Print Price ($/kg)</label><input class="text-center responsive-text" id="alloverPrintPrice" /></div>
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Chest Print Price ($/dozen)</label><input class="text-center responsive-text" id="chestPrintPrice" /></div>
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Accessories Price ($/dozen)</label><input class="text-center responsive-text" id="accessoriesPrice" /></div>
  </div>
  <div class="row">
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Cost Of Making ($/dozen)</label><input class="text-center responsive-text" id="costOfMaking" /></div>
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Commercial Charges (%)</label><input class="text-center responsive-text" id="commercialCharges" /></div>
  <div class="form-group col-4 col-md-4"><label class="text-center responsive-text">Handling Charge (%)</label><input class="text-center responsive-text" id="handlingCharge" /></div>
</div>


     <div id="output7" class="text-center"> Estimated Price per Piece:</div>

  <div id="CostingBtn" class="buttons">
    <button class="btn btn-primary responsive-text w-100" onclick="calculate7()">Get Result</button>
    <button class="btn btn-success responsive-text w-100" onclick="window.print()">Print / Save as PDF</button>
    <button class="btn btn-danger responsive-text w-100" onclick="clearInputs7()">Clear</button>
  </div>




  </main>
  </div>

   <div class="text-center Return1 py-1">
  <a href="https://brightfuturei.com/">
    <button class="btn btn-primary shadow-lg btn-lg">Return to Home</button>
  </a>
</div>
  </section>
  

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>

 function getNumber(id) {
      const val = parseFloat(document.getElementById(id).value);
      return isNaN(val) ? 0 : val;
    }

    function calculate7() {
      const consumption = getNumber('consumption');
      const spandex = getNumber('spandex');
      const yarnPrice = getNumber('yarnPrice');
      const spandexPrice = getNumber('spandexPrice');
      const knittingPrice = getNumber('knittingPrice');
      const dyeingPrice = getNumber('dyeingPrice');
      const alloverPrintPrice = getNumber('alloverPrintPrice');
      const chestPrintPrice = getNumber('chestPrintPrice');
      const accessoriesPrice = getNumber('accessoriesPrice');
      const costOfMaking = getNumber('costOfMaking');
      const commercialCharges = getNumber('commercialCharges');
      const handlingCharge = getNumber('handlingCharge');

      const total = (
        ((consumption * yarnPrice) +
        (spandex * spandexPrice) +
        (consumption * knittingPrice) +
        (consumption * dyeingPrice) +
        alloverPrintPrice +
        chestPrintPrice +
        accessoriesPrice +
        costOfMaking) *
        (1 + (commercialCharges + handlingCharge) / 100)
      ) / 12;

      document.getElementById('output7').innerText = "💰 Estimated Price per Piece: $ " + total.toFixed(2);
    }

    function clearInputs7() {
      document.querySelectorAll("input").forEach(el => el.value = '');
      document.getElementById('output7').innerText = '';
    }



</script>
</body>
</html>