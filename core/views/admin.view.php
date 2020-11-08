<div id="admin">
	<div class="container center">
		<div class="row"> <!-- TITLE row -->
			<div class="col-md-12 text-center title">
				<h1><?= $language['__TITLE_ADMIN__']?></h1>
			</div>
		</div> <!-- TITLE row -->
	<!-- Modal Buttons ROW 1 ADDMODALS-->
		<div class="row"> 
			<!-- Add User -->
				<div class="col-md-3">
					<button type="button" class="btn btn-default btn-big btn-green" data-toggle='modal'  href='#addUser' aria-label='Left Align'><i class="fa fa-user-o sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_ADDUSERS_ADMIN__']?></button>
				</div>
				<!-- Configuration Modal -->
					<div class="modal fade" id="addUser">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title text-center"><?= $language['__TITLE_ADDUSERS_ADMIN__']?></h4>
								</div>
								<div class="modal-body">
									<form action = "core/controllers/adduser.controller.php" method="POST" class="form text-center">	
									  	<!-- Employee DATA -->
										  	<div class="row"> <!-- Codigo, Level -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userCode"><?= $language['__USERFORM_CODE_ADMIN__']?></label>
												    	<input type="number" class="form-control" name="userCode" id="userCode" placeholder="<?= $language['__USERFORM_CODE_ADMIN__']?>"> 
											  		</div>
												</div>
										  		<div class="col-md-6">
											  		<div class="form-group">
														<label for='userLevel'><?= $language['__USERFORM_LEVEL_ADMIN__']?></label>
														<select class="form-control" name="userLevel">
															<option value="" disabled selected hidden><?= $language['__USERFORM_LEVEL_ADMIN__'] ?></option>
														  	<option value="admin"><?= $language['__USERFORM_LEVELADMIN_ADMIN__'] ?></option>
														  	<option value="supervisor"><?= $language['__USERFORM_LEVELSUPERVISOR_ADMIN__'] ?></option>
														  	<option value="consultant"><?= $language['__USERFORM_LEVELCONSULTANT_ADMIN__'] ?></option>
														  	<option value="dispatcher"><?= $language['__USERFORM_LEVELDISPATCHER_ADMIN__'] ?></option>
														</select>
													</div>
												</div>
											</div> <!-- Codigo, Level -->

											<div class="row"> <!-- Name and lastName -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userName"><?= $language['__USERFORM_NAME_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userName" id="userName" placeholder="<?= $language['__USERFORM_NAME_ADMIN__']?>"> 
											  		</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userLastName"><?= $language['__USERFORM_LASTNAME_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userLastName" id="userLastName" placeholder="<?= $language['__USERFORM_LASTNAME_ADMIN__']?>"> 
											  		</div>
												</div>
											</div> <!-- Name and lastName -->

											<div class="row"> <!-- User and Password -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userUser"><?= $language['__USERFORM_USER_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userUser" id="userUser" placeholder="<?= $language['__USERFORM_USER_ADMIN__']?>"> 
											  		</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userPass"><?= $language['__USERFORM_PASSWORD_ADMIN__']?></label>
												    	<input type="password" class="form-control" name="userPass" id="userPass" placeholder="<?= $language['__USERFORM_PASSWORD_ADMIN__']?>"> 
											  		</div>
												</div>
											</div> <!-- User and Password -->
										<!-- Employee DATA -->
											<div class="row">
												<div class="col-md-12">
											  		<div class="form-group">
														<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
														<select class="form-control">
															<?php

														  	  	echo "<option value='' disabled selected hidden> Lista de usuarios </option>";
														  	  	foreach ($userList as $value) {
														  	  		echo "<option>" . $value['name'] . " ". $value['lastname'] . " | " . $value['user_type'] . "</option>";
														  	  	}
														  	?>
														</select>
													</div>
												</div>
											</div>
										  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
										</form>
									</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
								</div>
							</div>
						</div>
					</div>
				<!-- Configuration Modal -->
			<!-- Add User -->
			<!-- ________________________________________________________________________________________ -->
            <!-- Add User -->
				<div class="col-md-3">
					<button type="button" class="btn btn-default btn-big btn-green" data-toggle='modal'  href='#addUser' aria-label='Left Align'><i class="fa fa-user-o sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_ADDUSERS_ADMIN__']?></button>
				</div>
				<!-- Configuration Modal -->
					<div class="modal fade" id="addUser">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title text-center"><?= $language['__TITLE_ADDUSERS_ADMIN__']?></h4>
								</div>
								<div class="modal-body">
									<form action = "core/controllers/adduser.controller.php" method="POST" class="form text-center">	
									  	<!-- Employee DATA -->
										  	<div class="row"> <!-- Codigo, Level -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userCode"><?= $language['__USERFORM_CODE_ADMIN__']?></label>
												    	<input type="number" class="form-control" name="userCode" id="userCode" placeholder="<?= $language['__USERFORM_CODE_ADMIN__']?>"> 
											  		</div>
												</div>
										  		<div class="col-md-6">
											  		<div class="form-group">
														<label for='userLevel'><?= $language['__USERFORM_LEVEL_ADMIN__']?></label>
														<select class="form-control" name="userLevel">
															<option value="" disabled selected hidden><?= $language['__USERFORM_LEVEL_ADMIN__'] ?></option>
														  	<option value="admin"><?= $language['__USERFORM_LEVELADMIN_ADMIN__'] ?></option>
														  	<option value="supervisor"><?= $language['__USERFORM_LEVELSUPERVISOR_ADMIN__'] ?></option>
														  	<option value="consultant"><?= $language['__USERFORM_LEVELCONSULTANT_ADMIN__'] ?></option>
														  	<option value="dispatcher"><?= $language['__USERFORM_LEVELDISPATCHER_ADMIN__'] ?></option>
														</select>
													</div>
												</div>
											</div> <!-- Codigo, Level -->

											<div class="row"> <!-- Name and lastName -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userName"><?= $language['__USERFORM_NAME_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userName" id="userName" placeholder="<?= $language['__USERFORM_NAME_ADMIN__']?>"> 
											  		</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userLastName"><?= $language['__USERFORM_LASTNAME_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userLastName" id="userLastName" placeholder="<?= $language['__USERFORM_LASTNAME_ADMIN__']?>"> 
											  		</div>
												</div>
											</div> <!-- Name and lastName -->

											<div class="row"> <!-- User and Password -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userUser"><?= $language['__USERFORM_USER_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userUser" id="userUser" placeholder="<?= $language['__USERFORM_USER_ADMIN__']?>"> 
											  		</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userPass"><?= $language['__USERFORM_PASSWORD_ADMIN__']?></label>
												    	<input type="password" class="form-control" name="userPass" id="userPass" placeholder="<?= $language['__USERFORM_PASSWORD_ADMIN__']?>"> 
											  		</div>
												</div>
											</div> <!-- User and Password -->
										<!-- Employee DATA -->
											<div class="row">
												<div class="col-md-12">
											  		<div class="form-group">
														<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
														<select class="form-control">
															<?php

														  	  	echo "<option value='' disabled selected hidden> Lista de usuarios </option>";
														  	  	foreach ($userList as $value) {
														  	  		echo "<option>" . $value['name'] . " ". $value['lastname'] . " | " . $value['user_type'] . "</option>";
														  	  	}
														  	?>
														</select>
													</div>
												</div>
											</div>
										  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
										</form>
									</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
								</div>
							</div>
						</div>
					</div>
				<!-- Configuration Modal -->
            <!-- Add User -->
            <!-- ________________________________________________________________________________________ -->
            <!-- Add User -->
				<div class="col-md-3">
					<button type="button" class="btn btn-default btn-big btn-green" data-toggle='modal'  href='#addUser' aria-label='Left Align'><i class="fa fa-user-o sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_ADDUSERS_ADMIN__']?></button>
				</div>
				<!-- Configuration Modal -->
					<div class="modal fade" id="addUser">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title text-center"><?= $language['__TITLE_ADDUSERS_ADMIN__']?></h4>
								</div>
								<div class="modal-body">
									<form action = "core/controllers/adduser.controller.php" method="POST" class="form text-center">	
									  	<!-- Employee DATA -->
										  	<div class="row"> <!-- Codigo, Level -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userCode"><?= $language['__USERFORM_CODE_ADMIN__']?></label>
												    	<input type="number" class="form-control" name="userCode" id="userCode" placeholder="<?= $language['__USERFORM_CODE_ADMIN__']?>"> 
											  		</div>
												</div>
										  		<div class="col-md-6">
											  		<div class="form-group">
														<label for='userLevel'><?= $language['__USERFORM_LEVEL_ADMIN__']?></label>
														<select class="form-control" name="userLevel">
															<option value="" disabled selected hidden><?= $language['__USERFORM_LEVEL_ADMIN__'] ?></option>
														  	<option value="admin"><?= $language['__USERFORM_LEVELADMIN_ADMIN__'] ?></option>
														  	<option value="supervisor"><?= $language['__USERFORM_LEVELSUPERVISOR_ADMIN__'] ?></option>
														  	<option value="consultant"><?= $language['__USERFORM_LEVELCONSULTANT_ADMIN__'] ?></option>
														  	<option value="dispatcher"><?= $language['__USERFORM_LEVELDISPATCHER_ADMIN__'] ?></option>
														</select>
													</div>
												</div>
											</div> <!-- Codigo, Level -->

											<div class="row"> <!-- Name and lastName -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userName"><?= $language['__USERFORM_NAME_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userName" id="userName" placeholder="<?= $language['__USERFORM_NAME_ADMIN__']?>"> 
											  		</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userLastName"><?= $language['__USERFORM_LASTNAME_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userLastName" id="userLastName" placeholder="<?= $language['__USERFORM_LASTNAME_ADMIN__']?>"> 
											  		</div>
												</div>
											</div> <!-- Name and lastName -->

											<div class="row"> <!-- User and Password -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userUser"><?= $language['__USERFORM_USER_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userUser" id="userUser" placeholder="<?= $language['__USERFORM_USER_ADMIN__']?>"> 
											  		</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userPass"><?= $language['__USERFORM_PASSWORD_ADMIN__']?></label>
												    	<input type="password" class="form-control" name="userPass" id="userPass" placeholder="<?= $language['__USERFORM_PASSWORD_ADMIN__']?>"> 
											  		</div>
												</div>
											</div> <!-- User and Password -->
										<!-- Employee DATA -->
											<div class="row">
												<div class="col-md-12">
											  		<div class="form-group">
														<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
														<select class="form-control">
															<?php

														  	  	echo "<option value='' disabled selected hidden> Lista de usuarios </option>";
														  	  	foreach ($userList as $value) {
														  	  		echo "<option>" . $value['name'] . " ". $value['lastname'] . " | " . $value['user_type'] . "</option>";
														  	  	}
														  	?>
														</select>
													</div>
												</div>
											</div>
										  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
										</form>
									</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
								</div>
							</div>
						</div>
					</div>
				<!-- Configuration Modal -->
			<!-- Add User -->
            <!-- ________________________________________________________________________________________ -->
            <!-- Add User -->
				<div class="col-md-3">
					<button type="button" class="btn btn-default btn-big btn-green" data-toggle='modal'  href='#addUser' aria-label='Left Align'><i class="fa fa-user-o sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_ADDUSERS_ADMIN__']?></button>
				</div>
				<!-- Configuration Modal -->
					<div class="modal fade" id="addUser">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title text-center"><?= $language['__TITLE_ADDUSERS_ADMIN__']?></h4>
								</div>
								<div class="modal-body">
									<form action = "core/controllers/adduser.controller.php" method="POST" class="form text-center">	
									  	<!-- Employee DATA -->
										  	<div class="row"> <!-- Codigo, Level -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userCode"><?= $language['__USERFORM_CODE_ADMIN__']?></label>
												    	<input type="number" class="form-control" name="userCode" id="userCode" placeholder="<?= $language['__USERFORM_CODE_ADMIN__']?>"> 
											  		</div>
												</div>
										  		<div class="col-md-6">
											  		<div class="form-group">
														<label for='userLevel'><?= $language['__USERFORM_LEVEL_ADMIN__']?></label>
														<select class="form-control" name="userLevel">
															<option value="" disabled selected hidden><?= $language['__USERFORM_LEVEL_ADMIN__'] ?></option>
														  	<option value="admin"><?= $language['__USERFORM_LEVELADMIN_ADMIN__'] ?></option>
														  	<option value="supervisor"><?= $language['__USERFORM_LEVELSUPERVISOR_ADMIN__'] ?></option>
														  	<option value="consultant"><?= $language['__USERFORM_LEVELCONSULTANT_ADMIN__'] ?></option>
														  	<option value="dispatcher"><?= $language['__USERFORM_LEVELDISPATCHER_ADMIN__'] ?></option>
														</select>
													</div>
												</div>
											</div> <!-- Codigo, Level -->

											<div class="row"> <!-- Name and lastName -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userName"><?= $language['__USERFORM_NAME_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userName" id="userName" placeholder="<?= $language['__USERFORM_NAME_ADMIN__']?>"> 
											  		</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userLastName"><?= $language['__USERFORM_LASTNAME_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userLastName" id="userLastName" placeholder="<?= $language['__USERFORM_LASTNAME_ADMIN__']?>"> 
											  		</div>
												</div>
											</div> <!-- Name and lastName -->

											<div class="row"> <!-- User and Password -->
										  		<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userUser"><?= $language['__USERFORM_USER_ADMIN__']?></label>
												    	<input type="text" class="form-control" name="userUser" id="userUser" placeholder="<?= $language['__USERFORM_USER_ADMIN__']?>"> 
											  		</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
												    	<label for="userPass"><?= $language['__USERFORM_PASSWORD_ADMIN__']?></label>
												    	<input type="password" class="form-control" name="userPass" id="userPass" placeholder="<?= $language['__USERFORM_PASSWORD_ADMIN__']?>"> 
											  		</div>
												</div>
											</div> <!-- User and Password -->
										<!-- Employee DATA -->
											<div class="row">
												<div class="col-md-12">
											  		<div class="form-group">
														<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
														<select class="form-control">
															<?php

														  	  	echo "<option value='' disabled selected hidden> Lista de usuarios </option>";
														  	  	foreach ($userList as $value) {
														  	  		echo "<option>" . $value['name'] . " ". $value['lastname'] . " | " . $value['user_type'] . "</option>";
														  	  	}
														  	?>
														</select>
													</div>
												</div>
											</div>
										  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
										</form>
									</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
								</div>
							</div>
						</div>
					</div>
				<!-- Configuration Modal -->
			<!-- Add User -->
		</div>
	<!-- Modal Buttons ROW 1 ADDMODALS--> 

	<!-- ________________________________________________________________________________________ -->
	<!-- Modal Buttons ROW 2 DELETEMODALS-->
		<div class="row"> 
			<!-- Delete User-->
				<div class="col-md-3">
					<button type="button" class="btn btn-default btn-big btn-red" data-toggle='modal'  href='#deleteUser' aria-label='Left Align'><i class="fa fa-minus-circle sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_DELETEUSER_ADMIN__']?></button>
					<!-- Configuration Modal -->
						<div class="modal fade" id="deleteUser">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title text-center"><?= $language['__TITLE_DELETEUSER_ADMIN__']?></h4>
									</div>
									<div class="modal-body">
										<form action = "core/controllers/deleteuser.controller.php" method="POST" class="form text-center">	
											<div class="row">
												<div class="col-md-12">
												  	<div class="form-group">
														<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
														<select class="form-control" name ="userCode">
															<?php
															  	echo "<option disabled selected hidden> Lista de usuarios </option>";
															  	foreach ($userList as $value) {
															  	  	echo "<option value= ".$value['code'].">" . $value['code'] . " " . $value['name'] . "</option>";
															  	}
															?>
														</select>
													</div>
												</div>
											</div>
										  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
									</div>
								</div>
							</div>
						</div>
					<!-- Configuration Modal -->
				</div>
			<!-- Delete User-->
			<!-- ________________________________________________________________________________________ -->
			<!-- Delete User-->
                <div class="col-md-3">
					<button type="button" class="btn btn-default btn-big btn-red" data-toggle='modal'  href='#deleteUser' aria-label='Left Align'><i class="fa fa-minus-circle sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_DELETEUSER_ADMIN__']?></button>
					<!-- Configuration Modal -->
						<div class="modal fade" id="deleteUser">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title text-center"><?= $language['__TITLE_DELETEUSER_ADMIN__']?></h4>
									</div>
									<div class="modal-body">
										<form action = "core/controllers/deleteuser.controller.php" method="POST" class="form text-center">	
											<div class="row">
												<div class="col-md-12">
												  	<div class="form-group">
														<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
														<select class="form-control" name ="userCode">
															<?php
															  	echo "<option disabled selected hidden> Lista de usuarios </option>";
															  	foreach ($userList as $value) {
															  	  	echo "<option value= ".$value['code'].">" . $value['code'] . " " . $value['name'] . "</option>";
															  	}
															?>
														</select>
													</div>
												</div>
											</div>
										  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
									</div>
								</div>
							</div>
						</div>
					<!-- Configuration Modal -->
				</div>
			<!-- Delete User-->
            <!-- ________________________________________________________________________________________ -->
            <!-- Delete User-->
				<div class="col-md-3">
					<button type="button" class="btn btn-default btn-big btn-red" data-toggle='modal'  href='#deleteUser' aria-label='Left Align'><i class="fa fa-minus-circle sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_DELETEUSER_ADMIN__']?></button>
					<!-- Configuration Modal -->
						<div class="modal fade" id="deleteUser">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title text-center"><?= $language['__TITLE_DELETEUSER_ADMIN__']?></h4>
									</div>
									<div class="modal-body">
										<form action = "core/controllers/deleteuser.controller.php" method="POST" class="form text-center">	
											<div class="row">
												<div class="col-md-12">
												  	<div class="form-group">
														<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
														<select class="form-control" name ="userCode">
															<?php
															  	echo "<option disabled selected hidden> Lista de usuarios </option>";
															  	foreach ($userList as $value) {
															  	  	echo "<option value= ".$value['code'].">" . $value['code'] . " " . $value['name'] . "</option>";
															  	}
															?>
														</select>
													</div>
												</div>
											</div>
										  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
									</div>
								</div>
							</div>
						</div>
					<!-- Configuration Modal -->
				</div>
			<!-- Delete User-->
            <!-- ________________________________________________________________________________________ -->
            <!-- Delete User-->
				<div class="col-md-3">
					<button type="button" class="btn btn-default btn-big btn-red" data-toggle='modal'  href='#deleteUser' aria-label='Left Align'><i class="fa fa-minus-circle sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_DELETEUSER_ADMIN__']?></button>
					<!-- Configuration Modal -->
						<div class="modal fade" id="deleteUser">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title text-center"><?= $language['__TITLE_DELETEUSER_ADMIN__']?></h4>
									</div>
									<div class="modal-body">
										<form action = "core/controllers/deleteuser.controller.php" method="POST" class="form text-center">	
											<div class="row">
												<div class="col-md-12">
												  	<div class="form-group">
														<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
														<select class="form-control" name ="userCode">
															<?php
															  	echo "<option disabled selected hidden> Lista de usuarios </option>";
															  	foreach ($userList as $value) {
															  	  	echo "<option value= ".$value['code'].">" . $value['code'] . " " . $value['name'] . "</option>";
															  	}
															?>
														</select>
													</div>
												</div>
											</div>
										  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
									</div>
								</div>
							</div>
						</div>
					<!-- Configuration Modal -->
				</div>
			<!-- Delete User-->
		</div>
	<!-- Modal Buttons ROW 2 DELETEMODALS-->
	<!-- ________________________________________________________________________________________ -->
	<!-- Modal Buttons ROW 3 EDIT -->
		<div class="row">
			<!-- Save user data in hidden inputs to be able to populate the inputs when selecting an user -->
				
			<!-- Save user data in hidden inputs to be able to populate the inputs when selecting an user -->
			<!-- Edit User-->
                <div class="col-md-3">
                    <button type="button" class="btn btn-default btn-big btn-primary" data-toggle='modal'  href='#editUser' aria-label='Left Align'><i class="fa fa-pencil-square-o sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_EDITUSER_ADMIN__']?></button>
					<!-- Configuration Modal -->
						<div class="modal fade" id="editUser">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title text-center"><?= $language['__TITLE_EDITUSER_ADMIN__']?></h4>
									</div>
									<div class="modal-body">
										<form action = "core/controllers/updateuser.controller.php" method="POST" class="form text-center">	
										  	<!-- Employee DATA -->
											  	<div class="row"> <!-- Codigo, Level -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userCode"><?= $language['__USERFORM_CODE_ADMIN__']?></label>
													    	<input type="number" class="form-control" name="UserCode" id="editUserCode" placeholder="<?= $language['__USERFORM_CODE_ADMIN__']?>"> 
												  		</div>
													</div>
											  		<div class="col-md-6">
												  		<div class="form-group">
															<label for='userLevel'><?= $language['__USERFORM_LEVEL_ADMIN__']?></label>
															<select class="form-control" name="userLevel">
																<option value="" disabled selected hidden><?= $language['__USERFORM_LEVEL_ADMIN__'] ?></option>
															  	<option value="admin"><?= $language['__USERFORM_LEVELADMIN_ADMIN__'] ?></option>
															  	<option value="supervisor"><?= $language['__USERFORM_LEVELSUPERVISOR_ADMIN__'] ?></option>
															  	<option value="consultant"><?= $language['__USERFORM_LEVELCONSULTANT_ADMIN__'] ?></option>
															  	<option value="dispatcher"><?= $language['__USERFORM_LEVELDISPATCHER_ADMIN__'] ?></option>
															</select>
														</div>
													</div>
												</div> <!-- Codigo, Level -->

												<div class="row"> <!-- Name and lastName -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userName"><?= $language['__USERFORM_NAME_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userName" id="editUserName" placeholder="<?= $language['__USERFORM_NAME_ADMIN__']?>"> 
												  		</div>
													</div>
													<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userLastName"><?= $language['__USERFORM_LASTNAME_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userLastName" id="editUserLastName" placeholder="<?= $language['__USERFORM_LASTNAME_ADMIN__']?>"> 
												  		</div>
													</div>
												</div> <!-- Name and lastName -->

												<div class="row"> <!-- User and Password -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userUser"><?= $language['__USERFORM_USER_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userUser" id="editUserUser" placeholder="<?= $language['__USERFORM_USER_ADMIN__']?>"> 
												  		</div>
													</div>
													<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userPass"><?= $language['__USERFORM_PASSWORD_ADMIN__']?></label>
													    	<input type="password" class="form-control" name="userPass" id="editUserPass" placeholder="<?= $language['__USERFORM_PASSWORD_ADMIN__']?>"> 
												  		</div>
													</div>
												</div> <!-- User and Password -->
											<!-- Employee DATA -->
												<div class="row">
													<div class="col-md-12">
												  		<div class="form-group">
															<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
															<select class="form-control">
																<?php

															  	  	echo "<option value='' disabled selected hidden> Lista de usuarios </option>";
															  	  	foreach ($userList as $value) {
															  	  		echo "<option value=".$value['id_user']." name = 'id_user']>" . $value['name'] . " ". $value['lastname'] . " | " . $value['user_type'] . "</option>";
															  	  	}
															  	?>
															</select>
														</div>
													</div>
												</div>
											  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
											</form>
										</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
									</div>
								</div>
							</div>
						</div>
					<!-- Configuration Modal -->
				</div>
            <!-- Edit User-->
            <!-- ________________________________________________________________________________________ -->
            <!-- Edit User-->
                <div class="col-md-3">
                    <button type="button" class="btn btn-default btn-big btn-primary" data-toggle='modal'  href='#editUser' aria-label='Left Align'><i class="fa fa-pencil-square-o sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_EDITUSER_ADMIN__']?></button>
					<!-- Configuration Modal -->
						<div class="modal fade" id="editUser">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title text-center"><?= $language['__TITLE_EDITUSER_ADMIN__']?></h4>
									</div>
									<div class="modal-body">
										<form action = "core/controllers/updateuser.controller.php" method="POST" class="form text-center">	
										  	<!-- Employee DATA -->
											  	<div class="row"> <!-- Codigo, Level -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userCode"><?= $language['__USERFORM_CODE_ADMIN__']?></label>
													    	<input type="number" class="form-control" name="UserCode" id="editUserCode" placeholder="<?= $language['__USERFORM_CODE_ADMIN__']?>"> 
												  		</div>
													</div>
											  		<div class="col-md-6">
												  		<div class="form-group">
															<label for='userLevel'><?= $language['__USERFORM_LEVEL_ADMIN__']?></label>
															<select class="form-control" name="userLevel">
																<option value="" disabled selected hidden><?= $language['__USERFORM_LEVEL_ADMIN__'] ?></option>
															  	<option value="admin"><?= $language['__USERFORM_LEVELADMIN_ADMIN__'] ?></option>
															  	<option value="supervisor"><?= $language['__USERFORM_LEVELSUPERVISOR_ADMIN__'] ?></option>
															  	<option value="consultant"><?= $language['__USERFORM_LEVELCONSULTANT_ADMIN__'] ?></option>
															  	<option value="dispatcher"><?= $language['__USERFORM_LEVELDISPATCHER_ADMIN__'] ?></option>
															</select>
														</div>
													</div>
												</div> <!-- Codigo, Level -->

												<div class="row"> <!-- Name and lastName -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userName"><?= $language['__USERFORM_NAME_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userName" id="editUserName" placeholder="<?= $language['__USERFORM_NAME_ADMIN__']?>"> 
												  		</div>
													</div>
													<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userLastName"><?= $language['__USERFORM_LASTNAME_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userLastName" id="editUserLastName" placeholder="<?= $language['__USERFORM_LASTNAME_ADMIN__']?>"> 
												  		</div>
													</div>
												</div> <!-- Name and lastName -->

												<div class="row"> <!-- User and Password -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userUser"><?= $language['__USERFORM_USER_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userUser" id="editUserUser" placeholder="<?= $language['__USERFORM_USER_ADMIN__']?>"> 
												  		</div>
													</div>
													<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userPass"><?= $language['__USERFORM_PASSWORD_ADMIN__']?></label>
													    	<input type="password" class="form-control" name="userPass" id="editUserPass" placeholder="<?= $language['__USERFORM_PASSWORD_ADMIN__']?>"> 
												  		</div>
													</div>
												</div> <!-- User and Password -->
											<!-- Employee DATA -->
												<div class="row">
													<div class="col-md-12">
												  		<div class="form-group">
															<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
															<select class="form-control">
																<?php

															  	  	echo "<option value='' disabled selected hidden> Lista de usuarios </option>";
															  	  	foreach ($userList as $value) {
															  	  		echo "<option value=".$value['id_user']." name = 'id_user']>" . $value['name'] . " ". $value['lastname'] . " | " . $value['user_type'] . "</option>";
															  	  	}
															  	?>
															</select>
														</div>
													</div>
												</div>
											  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
											</form>
										</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
									</div>
								</div>
							</div>
						</div>
					<!-- Configuration Modal -->
				</div>
            <!-- Edit User-->
            <!-- ________________________________________________________________________________________ -->
            <!-- Edit User-->
                <div class="col-md-3">
                    <button type="button" class="btn btn-default btn-big btn-primary" data-toggle='modal'  href='#editUser' aria-label='Left Align'><i class="fa fa-pencil-square-o sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_EDITUSER_ADMIN__']?></button>
					<!-- Configuration Modal -->
						<div class="modal fade" id="editUser">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title text-center"><?= $language['__TITLE_EDITUSER_ADMIN__']?></h4>
									</div>
									<div class="modal-body">
										<form action = "core/controllers/updateuser.controller.php" method="POST" class="form text-center">	
										  	<!-- Employee DATA -->
											  	<div class="row"> <!-- Codigo, Level -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userCode"><?= $language['__USERFORM_CODE_ADMIN__']?></label>
													    	<input type="number" class="form-control" name="UserCode" id="editUserCode" placeholder="<?= $language['__USERFORM_CODE_ADMIN__']?>"> 
												  		</div>
													</div>
											  		<div class="col-md-6">
												  		<div class="form-group">
															<label for='userLevel'><?= $language['__USERFORM_LEVEL_ADMIN__']?></label>
															<select class="form-control" name="userLevel">
																<option value="" disabled selected hidden><?= $language['__USERFORM_LEVEL_ADMIN__'] ?></option>
															  	<option value="admin"><?= $language['__USERFORM_LEVELADMIN_ADMIN__'] ?></option>
															  	<option value="supervisor"><?= $language['__USERFORM_LEVELSUPERVISOR_ADMIN__'] ?></option>
															  	<option value="consultant"><?= $language['__USERFORM_LEVELCONSULTANT_ADMIN__'] ?></option>
															  	<option value="dispatcher"><?= $language['__USERFORM_LEVELDISPATCHER_ADMIN__'] ?></option>
															</select>
														</div>
													</div>
												</div> <!-- Codigo, Level -->

												<div class="row"> <!-- Name and lastName -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userName"><?= $language['__USERFORM_NAME_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userName" id="editUserName" placeholder="<?= $language['__USERFORM_NAME_ADMIN__']?>"> 
												  		</div>
													</div>
													<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userLastName"><?= $language['__USERFORM_LASTNAME_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userLastName" id="editUserLastName" placeholder="<?= $language['__USERFORM_LASTNAME_ADMIN__']?>"> 
												  		</div>
													</div>
												</div> <!-- Name and lastName -->

												<div class="row"> <!-- User and Password -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userUser"><?= $language['__USERFORM_USER_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userUser" id="editUserUser" placeholder="<?= $language['__USERFORM_USER_ADMIN__']?>"> 
												  		</div>
													</div>
													<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userPass"><?= $language['__USERFORM_PASSWORD_ADMIN__']?></label>
													    	<input type="password" class="form-control" name="userPass" id="editUserPass" placeholder="<?= $language['__USERFORM_PASSWORD_ADMIN__']?>"> 
												  		</div>
													</div>
												</div> <!-- User and Password -->
											<!-- Employee DATA -->
												<div class="row">
													<div class="col-md-12">
												  		<div class="form-group">
															<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
															<select class="form-control">
																<?php

															  	  	echo "<option value='' disabled selected hidden> Lista de usuarios </option>";
															  	  	foreach ($userList as $value) {
															  	  		echo "<option value=".$value['id_user']." name = 'id_user']>" . $value['name'] . " ". $value['lastname'] . " | " . $value['user_type'] . "</option>";
															  	  	}
															  	?>
															</select>
														</div>
													</div>
												</div>
											  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
											</form>
										</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
									</div>
								</div>
							</div>
						</div>
					<!-- Configuration Modal -->
				</div>
            <!-- Edit User-->
            <!-- ________________________________________________________________________________________ -->
            <!-- Edit User-->
                <div class="col-md-3">
                    <button type="button" class="btn btn-default btn-big btn-primary" data-toggle='modal'  href='#editUser' aria-label='Left Align'><i class="fa fa-pencil-square-o sm-fa" aria-hidden="true"> </i> <br><?= $language['__TITLE_EDITUSER_ADMIN__']?></button>
					<!-- Configuration Modal -->
						<div class="modal fade" id="editUser">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title text-center"><?= $language['__TITLE_EDITUSER_ADMIN__']?></h4>
									</div>
									<div class="modal-body">
										<form action = "core/controllers/updateuser.controller.php" method="POST" class="form text-center">	
										  	<!-- Employee DATA -->
											  	<div class="row"> <!-- Codigo, Level -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userCode"><?= $language['__USERFORM_CODE_ADMIN__']?></label>
													    	<input type="number" class="form-control" name="UserCode" id="editUserCode" placeholder="<?= $language['__USERFORM_CODE_ADMIN__']?>"> 
												  		</div>
													</div>
											  		<div class="col-md-6">
												  		<div class="form-group">
															<label for='userLevel'><?= $language['__USERFORM_LEVEL_ADMIN__']?></label>
															<select class="form-control" name="userLevel">
																<option value="" disabled selected hidden><?= $language['__USERFORM_LEVEL_ADMIN__'] ?></option>
															  	<option value="admin"><?= $language['__USERFORM_LEVELADMIN_ADMIN__'] ?></option>
															  	<option value="supervisor"><?= $language['__USERFORM_LEVELSUPERVISOR_ADMIN__'] ?></option>
															  	<option value="consultant"><?= $language['__USERFORM_LEVELCONSULTANT_ADMIN__'] ?></option>
															  	<option value="dispatcher"><?= $language['__USERFORM_LEVELDISPATCHER_ADMIN__'] ?></option>
															</select>
														</div>
													</div>
												</div> <!-- Codigo, Level -->

												<div class="row"> <!-- Name and lastName -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userName"><?= $language['__USERFORM_NAME_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userName" id="editUserName" placeholder="<?= $language['__USERFORM_NAME_ADMIN__']?>"> 
												  		</div>
													</div>
													<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userLastName"><?= $language['__USERFORM_LASTNAME_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userLastName" id="editUserLastName" placeholder="<?= $language['__USERFORM_LASTNAME_ADMIN__']?>"> 
												  		</div>
													</div>
												</div> <!-- Name and lastName -->

												<div class="row"> <!-- User and Password -->
											  		<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userUser"><?= $language['__USERFORM_USER_ADMIN__']?></label>
													    	<input type="text" class="form-control" name="userUser" id="editUserUser" placeholder="<?= $language['__USERFORM_USER_ADMIN__']?>"> 
												  		</div>
													</div>
													<div class="col-md-6"> 
														<div class="form-group">
													    	<label for="userPass"><?= $language['__USERFORM_PASSWORD_ADMIN__']?></label>
													    	<input type="password" class="form-control" name="userPass" id="editUserPass" placeholder="<?= $language['__USERFORM_PASSWORD_ADMIN__']?>"> 
												  		</div>
													</div>
												</div> <!-- User and Password -->
											<!-- Employee DATA -->
												<div class="row">
													<div class="col-md-12">
												  		<div class="form-group">
															<label for='userList'><?= $language['__USERFORM_USERLIST_ADMIN__']?></label>
															<select class="form-control">
																<?php

															  	  	echo "<option value='' disabled selected hidden> Lista de usuarios </option>";
															  	  	foreach ($userList as $value) {
															  	  		echo "<option value=".$value['id_user']." name = 'id_user']>" . $value['name'] . " ". $value['lastname'] . " | " . $value['user_type'] . "</option>";
															  	  	}
															  	?>
															</select>
														</div>
													</div>
												</div>
											  	<button type="submit" class="btn btn-default"><?= $language['__FORMS_SUBMIT_ADMIN__']?></button>
											</form>
										</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"><?= $language ['__CLOSE_MODAL__'] ?></button>
									</div>
								</div>
							</div>
						</div>
					<!-- Configuration Modal -->
				</div>
            <!-- Edit User-->
		</div>
	<!-- Modal Buttons ROW 3 EDIT -->
	</div>
</div>