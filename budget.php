<?php
/*
Template Name: budget
*/
// Process the form submission
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Budget for Bright Future I</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background: linear-gradient(to right, #e0eafc, #cfdef3);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 40px 20px;
    }
    .container {
      max-width: 960px;
      background: white;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
      padding: 30px;
      position: relative;
    }
    .date-top-right {
      position: absolute;
      top: 30px;
      right: 30px;
      font-weight: 600;
      font-size: 16px;
      color: #555;
    }
    .info-row label {
      font-weight: 600;
    }
    .budget-form input,
    .info-row input,
    .budget-form select {
      border-radius: 10px;
    }
    .btn {
      border-radius: 10px;
    }
    .table th, .table td {
      vertical-align: middle;
      text-align: center;
    }
    @media screen and (max-width: 768px) {
      .table-responsive {
        overflow-x: auto;
      }
    }
  </style>
</head>
<body>
  <div class="container" id="budgetContent">
    <!-- Top Right Date -->
    <div class="date-top-right" id="currentDate"></div>

    <h2 class="text-center py-5 mb-4">Budget for Bright Future I</h2>

    <div class="row info-row mb-4">
      <div class="col-md-3">
        <label class="info-label">Style / PO Name</label>
        <input type="text" class="form-control" id="styleName" placeholder="Enter Style or PO Name" />
      </div>
      <div class="col-md-3">
        <label class="info-label">Item Name</label>
        <input type="text" class="form-control" id="itemName" placeholder="Enter Item Name" />
      </div>
      <div class="col-md-3">
        <label class="info-label">Order Quantity</label>
        <input type="number" class="form-control" id="orderQty" placeholder="Enter Order Quantity" />
      </div>
      <div class="col-md-3">
        <label class="info-label">Buyer Name</label>
        <input type="text" class="form-control" id="buyerName" placeholder="Enter Buyer Name" />
      </div>
    </div>

    <div class="row mb-4" id="consumptionSection">
      <div class="col-md-6">
        <label>Fabric Consumption (per dozen)</label>
        <input type="number" class="form-control" id="consumptionValue" placeholder="Enter Consumption" />
      </div>
      <div class="col-md-6">
        <label>Yarn QTY, Knitting QTY, Dyeing QTY (Unit: KGS)</label>
        <input type="text" class="form-control" id="consumptionResult" placeholder="Result" readonly />
      </div>
    </div>

    <div class="row g-2 align-items-end budget-form mb-3" id="budgetForm">
      <div class="col-md-2">
        <label>Item</label>
        <select id="itemInput" class="form-control">
          <option value="">Select Item</option>
          <option value="Yarn">Yarn</option>
          <option value="Knitting">Knitting</option>
          <option value="Dyeing">Dyeing</option>
          <option value="Elastane for laycra fabric">Elastane for laycra fabric</option>
          <option value="Collar">Collar</option>
          <option value="Cuff">Cuff</option>
          <option value="Accessories">Accessories</option>
          <option value="CM">CM</option>
          <option value="Zipper">Zipper</option>
          <option value="Allover Print">Allover Print</option>
          <option value="Chest Print">Chest Print</option>
           <option value="Commercial Charges">Commercial Charges</option>
            <option value="Handling Charge">Handling Charge</option>
             <option value="System Charge">System Charge</option>
               <option value="Others">Others</option>


      



          Allover Print
        </select>
      </div>
      <div class="col-md-2">
        <label>Unit Price</label>
        <input type="number" id="unitPrice" class="form-control" placeholder="Unit Price" />
      </div>
      <div class="col-md-2">
        <label>Quantity</label>
        <input type="number" id="qty" class="form-control" placeholder="Quantity" />
      </div>
      <div class="col-md-2">
        <label>Vendor</label>
        <input type="text" id="vendor" class="form-control" placeholder="Vendor" />
      </div>
      <div class="col-md-2">
        <label>Comment</label>
        <input type="text" id="comment" class="form-control" placeholder="Comment" />
      </div>
      <div class="col-md-2">
        <button onclick="addItem()" class="btn btn-success w-100">Add</button>
      </div>
    </div>

    <div class="table-responsive mb-3">
      <table class="table table-bordered">
        <thead class="table-secondary">
          <tr>
            <th>SL</th>
            <th>Item</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Vendor</th>
            <th>Comment</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="budgetTable"></tbody>
        <tfoot>
          <tr>
            <td colspan="4" class="text-end fw-bold">Grand Total</td>
            <td colspan="4" id="grandTotal" class="fw-bold text-center">0</td>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="text-end">
      <button id="downloadBtn" class="btn btn-secondary" onclick="downloadPDF()">Download PDF</button>
    </div>
  </div>
  
  
<div class="text-center py-4">
  <a href="https://brightfuturei.com/" target="_blank">
    <button class="btn btn-primary btn-lg">Return to Home</button>
  </a>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <script>
    const table = document.getElementById("budgetTable");
    let rowCount = 0;

    function addItem() {
      const item = document.getElementById("itemInput").value;
      const price = parseFloat(document.getElementById("unitPrice").value);
      const qty = parseFloat(document.getElementById("qty").value);
      const vendor = document.getElementById("vendor").value;
      const comment = document.getElementById("comment").value;

      if (!item || isNaN(price) || isNaN(qty)) return alert("Please fill all fields correctly.");

      const total = price * qty;
      rowCount++;

      const row = table.insertRow();
      row.innerHTML = `
        <td>${rowCount}</td>
        <td>${item}</td>
        <td>${price.toFixed(2)}</td>
        <td>${qty}</td>
        <td>${total.toFixed(2)}</td>
        <td>${vendor}</td>
        <td>${comment}</td>
        <td><button class="btn btn-sm btn-danger" onclick="removeRow(this)">Delete</button></td>
      `;

      updateGrandTotal();
      clearInputs();
    }

    function removeRow(btn) {
      const row = btn.closest("tr");
      table.deleteRow(row.rowIndex - 1);
      updateGrandTotal();
    }

    function updateGrandTotal() {
      let total = 0;
      for (let i = 0; i < table.rows.length; i++) {
        total += parseFloat(table.rows[i].cells[4].innerText);
      }
      document.getElementById("grandTotal").innerText = total.toFixed(2);
    }

    function clearInputs() {
      document.getElementById("itemInput").value = "";
      document.getElementById("unitPrice").value = "";
      document.getElementById("qty").value = "";
      document.getElementById("vendor").value = "";
      document.getElementById("comment").value = "";
    }

    document.getElementById("consumptionValue").addEventListener("input", () => {
      const qty = parseFloat(document.getElementById("orderQty").value);
      const cons = parseFloat(document.getElementById("consumptionValue").value);
      const result = qty && cons ? (qty / 12 * cons).toFixed(2) : "";
      document.getElementById("consumptionResult").value = result;
    });

    function downloadPDF() {
      const consumptionSection = document.getElementById("consumptionSection");
      const downloadBtn = document.getElementById("downloadBtn");
      const budgetForm = document.getElementById("budgetForm");

      // Temporarily hide sections
      consumptionSection.style.display = "none";
      downloadBtn.style.display = "none";
      budgetForm.style.display = "none";

      const element = document.getElementById("budgetContent");
      const opt = {
        margin: 0.5,
        filename: 'budget-sheet.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
      };

      html2pdf().set(opt).from(element).save().then(() => {
        // Restore visibility
        consumptionSection.style.display = "flex";
        downloadBtn.style.display = "inline-block";
        budgetForm.style.display = "flex";
      });
    }

    // Set current date
    const currentDate = new Date().toLocaleDateString('en-GB');
    document.getElementById("currentDate").innerText = "Date: " + currentDate;
  </script>
</body>
</html>



