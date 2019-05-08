<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Modifier vos films</h3>
							</div>
							<div class="module-body">
								
								<table class="table">
								  <thead>
									<tr>
									  <th>Titre</th>
									  <th>Genre</th>
									  <th>Acteur</th>
									  <th>Action</th>
									</tr>
								  </thead>
								  <tbody>
                                    <?php foreach($listfilm as $film)
                                    { ?>
                                        <tr>
                                            <td><?php echo($film['TITREFILM']);?></td>
                                            <td><?php echo($film['GENRE']);?></td>
                                            <td><?php echo($film['ACTEUR']);?></td>
                                            <td><a href="<?php echo base_url('admin/modificationfilm-'.$film['IDFILM'].'-0.html');?>"><button class="btn btn-inverse">Modifier</button></a></td>
                                        </tr>
                                    <?php } ?>
								  </tbody>
								</table>
								<br />
								<!-- <hr /> -->
								<br />
							</div>
						</div><!--/.module-->
					<br />
					</div><!--/.content-->
				</div><!--/.span9-->