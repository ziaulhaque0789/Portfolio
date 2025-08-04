<?php
/*
Template Name: yarn-Count
*/
// Process the form submission
?>

<?php get_header();?>


  <section class=" py-5" style="background: linear-gradient(135deg, #43e97b, #f9d423, #38f9d7);
  color: #fff;">
      <div class="container tnaSection" style="max-width: 960px;">
  <main id="tnaSection" style=" background-color: rgba(255, 255, 255, 0.95);
      color: #333;
      border-radius: 16px;
      box-shadow: 0 0 25px rgba(0,0,0,0.3);
      padding: 40px 30px;
      margin-top: 60px;">
      
   <h1 class="text-center section-title mb-4">Yarn Count Converter by GSM</h1>
    <p class="text-center text-muted lead mb-5">Use the tool below to get yarn count for various fabric types based on GSM. Ideal for textile engineers and merchandisers.</p>
        

  <div class="alert alert-info text-center fs-4">
    Yarn count is always an even number. Adjust the result by ±1 to maintain evenness.
  </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="fabric-type" class="form-label">Fabric Type</label>
                        <select id="fabric-type" class="form-select">
                            <option value="">Select fabric type</option>
                            <option value="fleece">Fleece</option>
                            <option value="sj">Single Jersey</option>
                            <option value="terry">Terry</option>
                            <option value="interlock">Interlock</option>
                            <option value="pique">Pique</option>
                            <option value="lacost">Lacost</option>
                            <option value="lycra-fleece">Lycra Fleece</option>
                            <option value="lycra-sj">Lycra Single Jersey</option>
                            <option value="lycra-terry">Lycra Terry</option>
                            <option value="lycra-interlock">Lycra Interlock</option>
                            <option value="lycra-pique">Lycra Pique</option>
                            <option value="lycra-lacost">Lycra Lacost</option>
                            <option value="rib-1x1">1x1 Rib Cotton</option>
                            <option value="rib-2x1">2x1 Rib Cotton</option>
                            <option value="lycra-rib-1x1">1x1 Rib Lycra</option>
                            <option value="lycra-rib-2x1">2x1 Rib Lycra</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="yarn-gsm" class="form-label">GSM</label>
                        <input id="yarn-gsm" type="number" class="form-control" placeholder="put GSM " />
                    </div>
                </div>

                <div class="bg-light p-4 rounded mt-4">
                    <label class="form-label font-weight-semibold">Yarn Count:</label>
                    <div id="yarn-count-result" class="text-xl font-weight-bold text-primary">
                        Select fabric type and enter GSM
                    </div>
                </div>

                <button id="calculate-yarn-count-btn" class="btn btn-primary mt-4">
                    Calculate Yarn Count
                </button>
            </div>
        </div>
    </div>
</div>

</main>
</div>


<div class="text-center py-4 ">
  <a href="https://brightfuturei.com/">
    <button class="btn btn-primary btn-lg shadow-lg">Return to Home</button>
  </a>
</div>

</section>



<?php get_footer();?>