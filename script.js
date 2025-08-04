// --- Core SPA Navigation Functions (from your original script) ---



// t-shirt consumption start

function getNumber(val) {
  const num = parseFloat(val);
  return isNaN(num) ? 0 : num;
}

let lastBodyResult = null;

function calculateBody() {
  const style = document.getElementById("bodyStyle").value.trim();
  const item = document.getElementById("bodyItem").value.trim();
  const buyer = document.getElementById("bodyBuyer").value.trim();
  const values = document.getElementById("bodyValues").value.trim().split(',');

  const resultDisplay = document.getElementById("bodyResult");
  resultDisplay.className = "text-center fw-bold";

  if (!style || !item || !buyer) {
    resultDisplay.textContent = "Please fill in Style, Item, and Buyer.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  if (values.length !== 5 || values.some(v => isNaN(parseFloat(v)))) {
    resultDisplay.textContent = "Enter 5 numbers: Body, Sleeve, Chest, GSM, Wastage%.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const [body, sleeve, chest, gsm, wastage] = values.map(getNumber);

  if (body <= 0 || sleeve <= 0 || chest <= 0 || gsm <= 0 || wastage < 0) {
    resultDisplay.textContent = "Values must be positive. Wastage can be 0 or more.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const consumption = (
    ((body + sleeve + 8) * (chest + 4)) * 2 * 12 * gsm / 10000000
  ) * (1 + (wastage / 100));

  resultDisplay.textContent = `✅ Body Consumption: ${consumption.toFixed(4)} Kg/Dozen`;
  resultDisplay.classList.add("text-success");

  lastBodyResult = { style, item, buyer, body, sleeve, chest, gsm, wastage, consumption: consumption.toFixed(4) };
}

function clearBody() {
  document.getElementById("bodyStyle").value = "";
  document.getElementById("bodyItem").value = "";
  document.getElementById("bodyBuyer").value = "";
  document.getElementById("bodyValues").value = "";
  const resultDisplay = document.getElementById("bodyResult");
  resultDisplay.textContent = "";
  resultDisplay.className = "text-center fw-bold";
  lastBodyResult = null;
}

function downloadBodyPDF() {
  if (!lastBodyResult) {
    alert("Please calculate first!");
    return;
  }

  const div = document.createElement("div");
  div.innerHTML = `
    <h3 style="font-size:20px;">Body Fabric Consumption</h3>
    <p><strong>Style:</strong> ${lastBodyResult.style}</p>
    <p><strong>Item:</strong> ${lastBodyResult.item}</p>
    <p><strong>Buyer:</strong> ${lastBodyResult.buyer}</p>
    <hr/>
    <p><strong>Body Length:</strong> ${lastBodyResult.body} CM</p>
    <p><strong>Sleeve Length:</strong> ${lastBodyResult.sleeve} CM</p>
    <p><strong>Chest:</strong> ${lastBodyResult.chest} CM</p>
    <p><strong>GSM:</strong> ${lastBodyResult.gsm}</p>
    <p><strong>Wastage:</strong> ${lastBodyResult.wastage}%</p>
    <h4><strong>Consumption:</strong> ${lastBodyResult.consumption} Kg/Dozen</h4>
  `;

  const opt = {
    margin: 0.5,
    filename: `${lastBodyResult.style}_body_consumption.pdf`,
    image: { type: "jpeg", quality: 0.98 },
    html2canvas: { scale: 2 },
    jsPDF: { unit: "in", format: "a4", orientation: "portrait" }
  };

  html2pdf().set(opt).from(div).save();
}



// ---- Neck Rib ----
let lastNeckResult = null;
function calculateNeck() {
  const style = document.getElementById("neckStyle").value.trim();
  const item = document.getElementById("neckItem").value.trim();
  const buyer = document.getElementById("neckBuyer").value.trim();
  const values = document.getElementById("neckValues").value.trim().split(',');

  const resultDisplay = document.getElementById("neckResult");
  resultDisplay.className = "text-center fw-bold";

  if (!style || !item || !buyer) {
    resultDisplay.textContent = "Please fill in all fields.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  if (values.length !== 5 || values.some(v => isNaN(parseFloat(v)))) {
    resultDisplay.textContent = "Enter: Neck Width, Rib Height, Drop, GSM, Wastage%.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const [nw, rh, fnd, gsm, wastage] = values.map(getNumber);
  if (nw <= 0 || rh <= 0 || fnd <= 0 || gsm <= 0 || wastage < 0) {
    resultDisplay.textContent = "Invalid values.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const result = (((((nw * 2) + 4 + fnd) * ((rh * 2) + 2) * gsm) / 10000000) * 12) * (1 + wastage / 100);
  resultDisplay.textContent = `✅ Neck Rib: ${result.toFixed(4)} Kg/Dozen`;
  resultDisplay.classList.add("text-success");
  lastNeckResult = { style, item, buyer, result: result.toFixed(4) };
}
function clearNeck() {
  ["neckStyle","neckItem","neckBuyer","neckValues"].forEach(id => document.getElementById(id).value = "");
  document.getElementById("neckResult").textContent = "";
  lastNeckResult = null;
}
function downloadNeckPDF() {
  if (!lastNeckResult) return alert("Calculate first.");
  const div = document.createElement("div");
  div.innerHTML = `<h3>Neck Rib Consumption</h3>
  <p><strong>Style:</strong> ${lastNeckResult.style}</p>
  <p><strong>Item:</strong> ${lastNeckResult.item}</p>
  <p><strong>Buyer:</strong> ${lastNeckResult.buyer}</p>
  <h4>Consumption: ${lastNeckResult.result} Kg/Dozen</h4>`;
  html2pdf().from(div).save(`${lastNeckResult.style}_neck.pdf`);
}

// ---- Trouser ----
let lastTrouserResult = null;
function calculateTrouser() {
  const style = document.getElementById("trouserStyle").value.trim();
  const item = document.getElementById("trouserItem").value.trim();
  const buyer = document.getElementById("trouserBuyer").value.trim();
  const values = document.getElementById("trouserValues").value.trim().split(',');

  const resultDisplay = document.getElementById("trouserResult");
  resultDisplay.className = "text-center fw-bold";

  if (!style || !item || !buyer) {
    resultDisplay.textContent = "Please fill in all fields.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  if (values.length !== 7 || values.some(v => isNaN(parseFloat(v)))) {
    resultDisplay.textContent = "Enter: Front Rise, Back Rise, Inseam, Thai, Waistband, GSM, Wastage%.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const [fr, br, il, th, wbh, gsm, wastage] = values.map(getNumber);
  if (fr <= 0 || br <= 0 || il <= 0 || th <= 0 || wbh <= 0 || gsm <= 0 || wastage < 0) {
    resultDisplay.textContent = "Invalid values.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const result = (((((fr + br) / 2) + 4 + (il + (wbh * 2) + 6)) * ((th + 4) * 4) * gsm / 10000000) * 12) * (1 + wastage / 100);
  resultDisplay.textContent = `✅ Trouser: ${result.toFixed(4)} Kg/Dozen`;
  resultDisplay.classList.add("text-success");
  lastTrouserResult = { style, item, buyer, result: result.toFixed(4) };
}
function clearTrouser() {
  ["trouserStyle","trouserItem","trouserBuyer","trouserValues"].forEach(id => document.getElementById(id).value = "");
  document.getElementById("trouserResult").textContent = "";
  lastTrouserResult = null;
}
function downloadTrouserPDF() {
  if (!lastTrouserResult) return alert("Calculate first.");
  const div = document.createElement("div");
  div.innerHTML = `<h3>Trouser Consumption</h3>
  <p><strong>Style:</strong> ${lastTrouserResult.style}</p>
  <p><strong>Item:</strong> ${lastTrouserResult.item}</p>
  <p><strong>Buyer:</strong> ${lastTrouserResult.buyer}</p>
  <h4>Consumption: ${lastTrouserResult.result} Kg/Dozen</h4>`;
  html2pdf().from(div).save(`${lastTrouserResult.style}_trouser.pdf`);
}

// ---- Pocket ----
let lastPocketResult = null;
function calculatePocket() {
  const style = document.getElementById("pocketStyle").value.trim();
  const item = document.getElementById("pocketItem").value.trim();
  const buyer = document.getElementById("pocketBuyer").value.trim();
  const values = document.getElementById("pocketValues").value.trim().split(',');

  const resultDisplay = document.getElementById("pocketResult");
  resultDisplay.className = "text-center fw-bold";

  if (!style || !item || !buyer) {
    resultDisplay.textContent = "Please fill in all fields.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  if (values.length !== 4 || values.some(v => isNaN(parseFloat(v)))) {
    resultDisplay.textContent = "Enter: Width, Height, GSM, Wastage%.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const [pw, ph, gsm, wastage] = values.map(getNumber);
  if (pw <= 0 || ph <= 0 || gsm <= 0 || wastage < 0) {
    resultDisplay.textContent = "Invalid values.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const result = (((pw + 4) * (ph + 4) * gsm / 10000000) * 12) * (1 + wastage / 100);
  resultDisplay.textContent = `✅ Pocket: ${result.toFixed(4)} Kg/Dozen`;
  resultDisplay.classList.add("text-success");
  lastPocketResult = { style, item, buyer, result: result.toFixed(4) };
}
function clearPocket() {
  ["pocketStyle","pocketItem","pocketBuyer","pocketValues"].forEach(id => document.getElementById(id).value = "");
  document.getElementById("pocketResult").textContent = "";
  lastPocketResult = null;
}
function downloadPocketPDF() {
  if (!lastPocketResult) return alert("Calculate first.");
  const div = document.createElement("div");
  div.innerHTML = `<h3>Pocket Consumption</h3>
  <p><strong>Style:</strong> ${lastPocketResult.style}</p>
  <p><strong>Item:</strong> ${lastPocketResult.item}</p>
  <p><strong>Buyer:</strong> ${lastPocketResult.buyer}</p>
  <h4>Consumption: ${lastPocketResult.result} Kg/Dozen</h4>`;
  html2pdf().from(div).save(`${lastPocketResult.style}_pocket.pdf`);
}

// ---- Collar ----
let lastCollarResult = null;
function calculateCollar() {
  const style = document.getElementById("collarStyle").value.trim();
  const item = document.getElementById("collarItem").value.trim();
  const buyer = document.getElementById("collarBuyer").value.trim();
  const values = document.getElementById("collarValues").value.trim().split(',');

  const resultDisplay = document.getElementById("collarResult");
  resultDisplay.className = "text-center fw-bold";

  if (!style || !item || !buyer) {
    resultDisplay.textContent = "Please fill in all fields.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  if (values.length !== 3 || values.some(v => isNaN(parseFloat(v)))) {
    resultDisplay.textContent = "Enter: Length, Height, Wastage%.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const [cl, ch, wastage] = values.map(getNumber);
  if (cl <= 0 || ch <= 0 || wastage < 0) {
    resultDisplay.textContent = "Invalid values.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const result = (((cl + 1) * (ch + 1) * 0.00009090 * 12)) * (1 + wastage / 100);
  resultDisplay.textContent = `✅ Collar: ${result.toFixed(4)} Kg/Dozen`;
  resultDisplay.classList.add("text-success");
  lastCollarResult = { style, item, buyer, result: result.toFixed(4) };
}
function clearCollar() {
  ["collarStyle","collarItem","collarBuyer","collarValues"].forEach(id => document.getElementById(id).value = "");
  document.getElementById("collarResult").textContent = "";
  lastCollarResult = null;
}
function downloadCollarPDF() {
  if (!lastCollarResult) return alert("Calculate first.");
  const div = document.createElement("div");
  div.innerHTML = `<h3>Collar Consumption</h3>
  <p><strong>Style:</strong> ${lastCollarResult.style}</p>
  <p><strong>Item:</strong> ${lastCollarResult.item}</p>
  <p><strong>Buyer:</strong> ${lastCollarResult.buyer}</p>
  <h4>Consumption: ${lastCollarResult.result} Kg/Dozen</h4>`;
  html2pdf().from(div).save(`${lastCollarResult.style}_collar.pdf`);
}

// ---- Cuff ----
let lastCuffResult = null;
function calculateCuff() {
  const style = document.getElementById("cuffStyle").value.trim();
  const item = document.getElementById("cuffItem").value.trim();
  const buyer = document.getElementById("cuffBuyer").value.trim();
  const values = document.getElementById("cuffValues").value.trim().split(',');

  const resultDisplay = document.getElementById("cuffResult");
  resultDisplay.className = "text-center fw-bold";

  if (!style || !item || !buyer) {
    resultDisplay.textContent = "Please fill in all fields.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  if (values.length !== 3 || values.some(v => isNaN(parseFloat(v)))) {
    resultDisplay.textContent = "Enter: Opening, Height, Wastage%.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const [so, ch, wastage] = values.map(getNumber);
  if (so <= 0 || ch <= 0 || wastage < 0) {
    resultDisplay.textContent = "Invalid values.";
    resultDisplay.classList.add("text-danger");
    return;
  }

  const result = (((((so * 2) + 2) * (ch + 2) * 2) * 0.00009090 * 12)) * (1 + wastage / 100);
  resultDisplay.textContent = `✅ Cuff: ${result.toFixed(4)} Kg/Dozen`;
  resultDisplay.classList.add("text-success");
  lastCuffResult = { style, item, buyer, result: result.toFixed(4) };
}
function clearCuff() {
  ["cuffStyle","cuffItem","cuffBuyer","cuffValues"].forEach(id => document.getElementById(id).value = "");
  document.getElementById("cuffResult").textContent = "";
  lastCuffResult = null;
}
function downloadCuffPDF() {
  if (!lastCuffResult) return alert("Calculate first.");
  const div = document.createElement("div");
  div.innerHTML = `<h3>Cuff Consumption</h3>
  <p><strong>Style:</strong> ${lastCuffResult.style}</p>
  <p><strong>Item:</strong> ${lastCuffResult.item}</p>
  <p><strong>Buyer:</strong> ${lastCuffResult.buyer}</p>
  <h4>Consumption: ${lastCuffResult.result} Kg/Dozen</h4>`;
  html2pdf().from(div).save(`${lastCuffResult.style}_cuff.pdf`);
}



//cuff consumption end



//costing start
  



//costing end


// --- Yarn Count Calculator Logic (from previous response) ---

document.addEventListener("DOMContentLoaded", function () {
    initializeYarnCountCalculator();
});

const calculateYarnCount = (gsm, fabricType) => {
    const multipliers = {
        fleece: 7200,
        sj: 4320,
        terry: 6240,
        interlock: 7200,
        pique: 5200,
        lacost: 5500,
        "lycra-fleece": 7200,
        "lycra-sj": 4320,
        "lycra-terry": 6240,
        "lycra-interlock": 7200,
        "lycra-pique": 5200,
        "lycra-lacost": 5200,
        "rib-1x1": 6000,
        "rib-2x1": 6250,
        "lycra-rib-1x1": 6000,
        "lycra-rib-2x1": 6250,
    };

    const multiplier = multipliers[fabricType] || 4320; // Default to sj multiplier if type not found
    const adjustedGsm = fabricType.includes("lycra") && !fabricType.includes("rib") ? gsm - 50 : gsm;

    if (adjustedGsm <= 0) {
        return "Invalid GSM for selected fabric type";
    }

    return (multiplier / adjustedGsm).toFixed(2);
};

function initializeYarnCountCalculator() {
    const calculateButton = document.getElementById("calculate-yarn-count-btn");
    const fabricTypeSelect = document.getElementById("fabric-type");
    const gsmInput = document.getElementById("yarn-gsm");
    const resultDisplay = document.getElementById("yarn-count-result");

    // Only proceed if all elements are found (they should be if loaded correctly)
    if (calculateButton && fabricTypeSelect && gsmInput && resultDisplay) {
        calculateButton.addEventListener("click", () => {
            const fabricType = fabricTypeSelect.value;
            const gsm = parseFloat(gsmInput.value);

            if (isNaN(gsm) || gsm <= 0) {
                resultDisplay.textContent = "Please enter a valid GSM.";
                resultDisplay.style.color = "red";
                return;
            }

            if (!fabricType) {
                resultDisplay.textContent = "Please select a fabric type.";
                resultDisplay.style.color = "red";
                return;
            }

            const result = calculateYarnCount(gsm, fabricType);
            resultDisplay.textContent = result;
            resultDisplay.style.color = "#007bff";
        });

        // Optional: Clear error message when inputs change
        fabricTypeSelect.addEventListener('change', () => {
            resultDisplay.textContent = "Select fabric type and enter GSM";
            resultDisplay.style.color = "#007bff";
        });
        gsmInput.addEventListener('input', () => {
            resultDisplay.textContent = "Select fabric type and enter GSM";
            resultDisplay.style.color = "#007bff";
        });

    } else {
        console.warn("Yarn Count Calculator elements not found in the DOM for initialization.");
    }
}


//cm start



function calculate6() {
    var quantityOfMachines = parseFloat(document.getElementById('quantityOfMachines').value);
    var productionQuantity = parseFloat(document.getElementById('productionQuantity').value);
    var costPerMachine = parseFloat(document.getElementById('costPerMachine').value);
    

    var result = (((quantityOfMachines * costPerMachine) / productionQuantity) * 12 );

    // Round the result to two decimal places
    var roundedResult = result.toFixed(2);

    // Display result
    document.getElementById('output6').innerText = '$' + roundedResult;

    // Store the input values and result in the hidden textarea
    document.getElementById('hiddenResult').value = `Quantity Of Machines: ${quantityOfMachines}\nProduction Quantity: ${productionQuantity}\nCost Per Machine: ${costPerMachine}\nC.M Per Dozen: ${roundedResult}`;
}

function saveResult6() {
    // Retrieve the result with input values from the hidden textarea
    var resultToSave = document.getElementById('hiddenResult').value;

    

    // Prompt the user for a file name
    var fileName = prompt("Enter file name:", "result.txt");

    if (fileName) {
        // Create a Blob containing the result
        var blob = new Blob([resultToSave], { type: 'text/plain' });

        // Create a link element
        var link = document.createElement('a');

        // Set the href attribute with the object URL of the Blob
        link.href = window.URL.createObjectURL(blob);

        // Set the download attribute with the desired file name
        link.download = fileName;

        // Append the link to the document
        document.body.appendChild(link);

        // Programmatically click the link to trigger the download
        link.click();

        // Remove the link from the document
        document.body.removeChild(link);
    }


    // Function to create a table from the textarea content
    function createTableFromTextarea() {
        // Get the textarea content
        var textareaContent = document.getElementById('hiddenResult').value;
  
        // Split the content into rows
        var rows = textareaContent.split('\n');
  
        // Create the table element
        var table = document.getElementById('dynamicTable');
  
        // Create rows and cells based on textarea content
        rows.forEach(function(rowContent, rowIndex) {
          var cells = rowContent.split(',');
  
          // Create a new row
          var row = table.insertRow(rowIndex);
  
          // Create cells and populate them with content
          cells.forEach(function(cellContent, cellIndex) {
            var cell = row.insertCell(cellIndex);
            cell.textContent = cellContent.trim();
          });
        });
      }
  
      // Call the function to create the table (you can trigger this based on some event)
      createTableFromTextarea();
}


function clearInputs6() {
    // Clear the value of the input fields
    document.getElementById('quantityOfMachines').value = '';
    document.getElementById('productionQuantity').value = '';
    document.getElementById('costPerMachine').value = '';
   


    // Clear the result
    document.getElementById('output6').innerText = '';
}


//cm end


//cm2 START
function calculate15() {
    var A = parseFloat(document.getElementById('A').value);
    var B = parseFloat(document.getElementById('B').value);
    var C = parseFloat(document.getElementById('C').value);
    var D = parseFloat(document.getElementById('D').value);
    var E = parseFloat(document.getElementById('E').value);
    var F = parseFloat(document.getElementById('F').value);
    

    var result = (((A / E) / B) * C) / (D * F) * 12;


    // Round the result to two decimal places
    var roundedResult = result.toFixed(2);

    // Display result
    document.getElementById('output15').innerText = '$' + roundedResult;

    // Store the input values and result in the hidden textarea
    document.getElementById('hiddenResult').value = `Total monthly expenses: ${A}\nTotal number of machines used for production: ${B}\nNumber of machines used per layout: ${C}\nProduction target per hour: ${D}\nWorking days in a month: ${E}\nWorking hours per day: ${F}\nC.M Per Dozen: ${roundedResult}`;
}

function saveResult15() {
    // Retrieve the result with input values from the hidden textarea
    var resultToSave = document.getElementById('hiddenResult').value;

    

    // Prompt the user for a file name
    var fileName = prompt("Enter file name:", "result.txt");

    if (fileName) {
        // Create a Blob containing the result
        var blob = new Blob([resultToSave], { type: 'text/plain' });

        // Create a link element
        var link = document.createElement('a');

        // Set the href attribute with the object URL of the Blob
        link.href = window.URL.createObjectURL(blob);

        // Set the download attribute with the desired file name
        link.download = fileName;

        // Append the link to the document
        document.body.appendChild(link);

        // Programmatically click the link to trigger the download
        link.click();

        // Remove the link from the document
        document.body.removeChild(link);
    }


    // Function to create a table from the textarea content
    function createTableFromTextarea() {
        // Get the textarea content
        var textareaContent = document.getElementById('hiddenResult').value;
  
        // Split the content into rows
        var rows = textareaContent.split('\n');
  
        // Create the table element
        var table = document.getElementById('dynamicTable');
  
        // Create rows and cells based on textarea content
        rows.forEach(function(rowContent, rowIndex) {
          var cells = rowContent.split(',');
  
          // Create a new row
          var row = table.insertRow(rowIndex);
  
          // Create cells and populate them with content
          cells.forEach(function(cellContent, cellIndex) {
            var cell = row.insertCell(cellIndex);
            cell.textContent = cellContent.trim();
          });
        });
      }
  
      // Call the function to create the table (you can trigger this based on some event)
      createTableFromTextarea();
}


function clearInputs15() {
    // Clear the value of the input fields
    document.getElementById('A').value = '';
    document.getElementById('B').value = '';
    document.getElementById('C').value = '';
    document.getElementById('D').value = '';
    document.getElementById('E').value = '';
    document.getElementById('F').value = '';
   


    // Clear the result
    document.getElementById('output15').innerText = '';
}


//cm2 end
function formatDate(date) {
  if (!(date instanceof Date) || isNaN(date)) return '';
  const d = String(date.getDate()).padStart(2, '0');
  const m = String(date.getMonth() + 1).padStart(2, '0');
  const y = date.getFullYear();
  return `${d}/${m}/${y}`;
}

function generateTNA() {
  const orderDateInput = document.getElementById("orderConfirmDate").value;
  const shipDateInput = document.getElementById("shipmentDate").value;
  const qty = parseInt(document.getElementById("orderQty").value);

  const orderDate = new Date(orderDateInput);
  const shipDate = new Date(shipDateInput);

  if (!orderDateInput || !shipDateInput || isNaN(qty)) {
    alert("Please fill all fields correctly.");
    return;
  }

  const addDays = (date, days) => {
    const d = new Date(date);
    d.setDate(d.getDate() + days);
    return formatDate(d);
  };

  // Determine production offset based on quantity
  let productionOffset;
  if (qty > 50000) productionOffset = 30;
  else if (qty > 20000) productionOffset = 20;
  else if (qty > 10000) productionOffset = 15;
  else productionOffset = 10;

  // Calculate production start and other dependent dates
  const productionStartDate = new Date(shipDate);
  productionStartDate.setDate(productionStartDate.getDate() - productionOffset);

const fitSampleSubmissionDate = new Date(productionStartDate);
  fitSampleSubmissionDate.setDate(fitSampleSubmissionDate.getDate() - 40);

const fitSampleApprovalDate = new Date(productionStartDate);
  fitSampleApprovalDate.setDate(fitSampleApprovalDate.getDate() - 30);


 const labDipSubmissionDate = new Date(productionStartDate);
  labDipSubmissionDate.setDate(labDipSubmissionDate.getDate() - 45);

 const labDipApprovalDate = new Date(productionStartDate);
  labDipApprovalDate.setDate(labDipApprovalDate.getDate() - 35);

  const ppSampleSubmissionDate = new Date(productionStartDate);
  ppSampleSubmissionDate.setDate(ppSampleSubmissionDate.getDate() - 25);

  const ppSampleApprovalDate = new Date(productionStartDate);
  ppSampleApprovalDate.setDate(ppSampleApprovalDate.getDate() - 15);

  const fabricInHouseDate = new Date(productionStartDate);
  fabricInHouseDate.setDate(fabricInHouseDate.getDate() - 10);

  const trimsInHouseDate = new Date(productionStartDate);
  trimsInHouseDate.setDate(trimsInHouseDate.getDate() - 7);

  // Display dates in the table
  document.getElementById("fabricBooking").textContent = addDays(orderDate, 3);
  document.getElementById("trimsBooking").textContent = addDays(orderDate, 3);
  document.getElementById("fitSampleSubmission").textContent = formatDate(fitSampleSubmissionDate);
  document.getElementById("fitSampleApproval").textContent = formatDate(fitSampleApprovalDate);
  document.getElementById("labDipSubmission").textContent = formatDate(labDipSubmissionDate);
  document.getElementById("labDipApproval").textContent = formatDate(labDipApprovalDate);
  document.getElementById("ppSampleSubmission").textContent = formatDate(ppSampleSubmissionDate);
  document.getElementById("ppSampleApproval").textContent = formatDate(ppSampleApprovalDate);
  document.getElementById("fabricInHouse").textContent = formatDate(fabricInHouseDate);
  document.getElementById("trimsInHouse").textContent = formatDate(trimsInHouseDate);
  document.getElementById("productionStart").textContent = formatDate(productionStartDate);
  document.getElementById("shipmentDateDisplay").textContent = formatDate(shipDate);
}

function downloadPDF() {
  const element = document.getElementById("tnaSection");

  // Scroll to top to prevent blank first page
  window.scrollTo(0, 0);

  // Temporarily adjust styles to prevent blank page in PDF
  const main = document.querySelector("main");
  const originalMarginTop = main.style.marginTop;
  const originalPaddingTop = main.style.paddingTop;

  main.style.marginTop = "0px";
  main.style.paddingTop = "10px";

  // Hide all elements with class="no-print"
  const elementsToHide = document.querySelectorAll('.no-print');
  elementsToHide.forEach(el => el.style.display = 'none');

  const opt = {
    margin: [0.2, 0.2, 0.2, 0.2],
    filename: 'TNA-Calendar.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: {
      scale: 2,
      useCORS: true,
      scrollY: 0,
      windowWidth: document.body.scrollWidth,
      windowHeight: document.body.scrollHeight
    },
    jsPDF: {
      unit: 'in',
      format: 'a4',
      orientation: 'portrait'
    },
    pagebreak: { mode: ['avoid-all', 'css', 'legacy'] }
  };

  html2pdf().set(opt).from(element).save().then(() => {
    // Restore visibility and styles after PDF generation
    elementsToHide.forEach(el => el.style.display = '');
    main.style.marginTop = originalMarginTop;
    main.style.paddingTop = originalPaddingTop;
  });
}

function clearAll() {
  document.getElementById("orderConfirmDate").value = "";
  document.getElementById("shipmentDate").value = "";
  document.getElementById("orderQty").value = "";

  const fields = [
    "fabricBooking", "trimsBooking", "fitSampleSubmission", "fitSampleApproval",
    "labDipSubmission", "labDipApproval", "ppSampleSubmission", "ppSampleApproval",
    "fabricInHouse", "trimsInHouse", "productionStart", "shipmentDateDisplay"
  ];
  fields.forEach(id => document.getElementById(id).textContent = "");
}