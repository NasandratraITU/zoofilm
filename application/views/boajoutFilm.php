<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Ajout d'un nouveau film</h3>
							</div>
							<div class="module-body">
			
									<form class="form-horizontal row-fluid" action="<?php echo base_url('admin/ajouterfilm.html');?>" method="post">

                                        
										<input type="hidden" value = "<?php echo($idsuivant);?>" name = "idfilm" id="basicinput" placeholder="" class="span8">
											

										<div class="control-group">
											<label class="control-label" for="basicinput">Titre</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="" name="titre" class="span8">
											</div>
                                        </div>
                                        
										<div class="control-group">
											<label class="control-label" for="basicinput">Genre</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8" name="idgenre">
                                                    <!-- <option value="">Select here..</option> -->
                                                    <?php foreach($listgenre as $genre){?>
                                                        <option value="<?php echo($genre['IDGENRE']);?>"><?php echo($genre['GENRE']);?></option>
                                                    <?php } ?>
												</select>
											</div>
                                        </div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Acteur</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="" name="acteur" class="span8">
											</div>
                                        </div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Durée</label>
											<div class="controls">
												<input type="number" id="basicinput" placeholder="" name="duree" class="span8">
											</div>
                                        </div>

                                       

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Date de sortie</label>
											<div class="controls">
												<input type="number" id="basicinput" placeholder="" name="sortie" class="span8">
											</div>
                                        </div>



										<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												<textarea name = "description" class="span8" rows="5"></textarea>
											</div>
                                        </div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Date de diffusion</label>
											<div class="controls">
												<input type="date" id="basicinput" placeholder="" name="datediffusion" class="span8">
											</div>
                                        </div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Heure de diffusion</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8" name="heurediffusion">
													<!-- <option value="">Select here..</option> -->
													<option value="9">9</option>
													<option value="15">15</option>
													<option value="18">18</option>
												</select>
											</div>
                                        </div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Salle n°</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8" name="salle">
													<!-- <option value="">Select here..</option> -->
													<?php foreach($listsalle as $salle){?>
                                                        <option value="<?php echo($salle['IDSALLE']);?>"><?php echo($salle['NOMSALLE']);?></option>
                                                    <?php } ?>
												</select>
											</div>
                                        </div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-success">Ajouter le film</button>
											</div>
                                        </div>
                                        
									</form>
							</div>
                        </div>
                        
                        
						
						
					</div><!--/.content-->
                </div><!--/.span9-->
<!--                 
<form action="<?php echo site_url('Controle/test');?>" enctype="multipart/form-data" method="post">
    <input type="file" name="monimage">
    <input type="submit" value="valider">
</form> -->


<form class="form-horizontal row-fluid" action="<?php echo base_url('admin/upload-1.html');?>" enctype="multipart/form-data" method="post">
	<div class="control-group">
		<label class="control-label" for="basicinput">Choisir votre image</label>
		<div class="controls">
			<input type="file" id="basicinput" name="image1" class="span8">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<input type="submit" value="valider" class="btn btn-success"/>
		</div>
	</div>

</form>