<br>
<div class="row">
		<div class="container">
          <h1 class="text-center" style="color:black"><?php echo($titre);?></h1>
					<p class="text-center"><em>"<?php echo $citation ;?>"</em></p>
					
		</div>
	</div>
    <div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row mb-5">
          <!-- <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <img src="<?php echo base_url();?>assets/images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">Indisputed 4</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 625 S. Berendo St Unit 607 Los Angeles, CA 90005</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">7,000</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div> -->
			
        <?php foreach($listFilm as $film)
        { ?>
            <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
            <a href="<?php echo base_url('cinema/numerofilm-'.$film['IDFILM'].'.html');?>">
                <img width="800px" height="1000px" src="<?php echo base_url();?>assets/images/<?php echo($film['IMAGEFILM']);?>" alt="image_<?php echo($film['TITREFILM']);?>" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <!-- <a href="#" class="property-favorite active"><span class="icon-heart-o"></span></a> -->
                <h2 class="property-title"><a href="<?php echo base_url('cinema/numerofilm-'.$film['IDFILM'].'.html');?>"><?php echo($film['TITREFILM']);?></a></h2>
				<!-- <strong class="property-price text-primary mb-3 d-block text-danger">25 places restantes</strong> -->
                <span class="property-icon icon-room"></span> Acteur : <?php echo($film['ACTEUR']);?><br>
                <span class="property-icon icon-room"></span> Date : <?php echo($film['DATEFILM']);?><br>
                <span class="property-icon icon-room"></span> A : <?php echo($film['HEUREDATE']);?> heures <br>
              </div>
            </div>
            </div>
        <?php } ?>
          

          <!-- <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-info">Lease</span>
                </div>
                <img src="<?php echo base_url();?>assets/images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">853 S Lucerne Blvd</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 853 S Lucerne Blvd Unit 101 Los Angeles, CA 90005</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">5,500</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div> -->

        </div>
        <!-- <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>  
        </div> -->
        
      </div>
    </div>