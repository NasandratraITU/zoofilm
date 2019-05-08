<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Modifier votre film</h3>
							</div>
							<div class="module-body">
			
									<form method="post" class="form-horizontal row-fluid" action="<?php echo base_url('admin/modifierfilm.html');?>">

                                       <input type="hidden" value="<?php echo $film[0]['IDFILM'] ;?>" name="idfilm">
									   <?php if(isset($para) && $para==1)
										{ ;?>
											<strong style="color:green">Film modifié avec succes</strong>
											<!-- <div class="control-group">
												<label class="control-label" for="basicinput">Titre</label>
												<div class="controls">
													<input type="text" id="basicinput" value="<?php echo($film[0]['TITREFILM']);?>" name="titre" class="span8">
												</div>
                                        	</div> -->

										<?php };?>

										<div class="control-group">
											<label class="control-label" for="basicinput">Titre</label>
											<div class="controls">
												<input type="text" id="basicinput" value="<?php echo($film[0]['TITREFILM']);?>" name="titre" class="span8">
											</div>
                                        </div>
                                        
										
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Acteur</label>
											<div class="controls">
												<input type="text" id="basicinput" value="<?php echo($film[0]['ACTEUR']);?>" name="acteur" class="span8">
											</div>
                                        </div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Durée</label>
											<div class="controls">
												<input type="number" id="basicinput" value="<?php echo($film[0]['DUREE']);?>" name="duree" class="span8">
											</div>
                                        </div>

                                       
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Date de sortie</label>
											<div class="controls">
												<input type="number" id="basicinput" value="<?php echo($film[0]['DATESORTIE']);?>" name="sortie" class="span8">
											</div>
                                        </div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												<textarea name = "description" class="span8" rows="5"><?php echo($film[0]['DESCRIPTIONFILM']);?></textarea>
											</div>
                                        </div>
                                        
									
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-success">Modifier ce film</button>
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