<br/>


  <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Nos meilleurs catégories</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magnam officiis ipsa eum pariatur labore fugit amet eaque iure vitae, repellendus laborum in modi reiciendis quis! Optio minima quibusdam, laboriosam.</p> -->
            <p>"Vous aimez plutôt le romantisme ou l'action ? La comédie ou le drame ? Tous se trouvent chez nous, n'hesitez pas à reserver vos places et rendez vous dans nos salles de projections !"</p>
          </div>
        </div>
      </div>
      <div class="row">
      <?php foreach($listGenre as $genre)
{ ?>

      <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
      <div class="team-member">

      <a href="<?php echo base_url('cinema/genre-'.$genre['IDGENRE'].'.html');?>"><img src="<?php echo base_url();?>assets/images/<?php echo ($genre['IMAGEPRINCIPALE']);?>" alt="image_genre_<?php echo($genre['GENRE']);?>" class="img-fluid rounded mb-4"></a>

        <div class="text">
        <a href="<?php echo base_url('cinema/genre-'.$genre['IDGENRE'].'.html');?>"><h2 class="mb-2 font-weight-light text-black h4"><?php echo($genre['GENRE']);?></h2></a>
          <!-- <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span> -->
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cumque vitae voluptates culpa earum similique corrupti itaque veniam doloribus amet perspiciatis recusandae sequi nihil tenetur ad, modi quos id magni!</p> -->
          <p><?php echo($genre['DESCRIPTIONGENRE']);?></p>
        </div>
      </div>
    </div>

<?php } ;?>

         

          
        </div>
    </div>
    </div>


    
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Pourquoi nous choisir ?</h2>
            </div>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur corporis, eaque, deleniti cupiditate officia.</p> -->
            <p>Actif depuis plus de 10 ans dans la reservation de cinema à Madagascar, nous sommes certainement le meilleur référence dans le domaine cinématographique dans toute la grande île. Ne perdez pas de temps ! Reservation facile et rapide !</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <span class="icon flaticon-house"></span>
              <h2 class="service-heading">Plusieurs batiments</h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p> -->
              <p>Plus de 5 studios dans la capitale, et encore plusieurs dans les provinces, nous sommes déja un grand réseau de projection cinematographique.</p>
              <!-- <p><span class="read-more">Read More</span></p> -->
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <span class="icon flaticon-sold"></span>
              <h2 class="service-heading">Vente de film</h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p> -->
              <p>A part la reservation, nous sommes les premiers distributeurs de nouveauté en matière de <strong>film</strong> dans l'île</p>
              <!-- <p><span class="read-more">Read More</span></p> -->
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <span class="icon flaticon-camera"></span>
              <h2 class="service-heading">Securité et droit d'auteur</h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p> -->
              <p>Nous nous engageons fermement de l'attestation de sécurité dans nos salles de projection et salles de ventes.</p>
              <!-- <p><span class="read-more">Read More</span></p> -->
            </a>
          </div>
        </div>
      </div>
    </div>