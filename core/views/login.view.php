<div id="login">
	<form action="core/controllers/login.controller.php" method="POST" class="form-horizontal" role="form">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header bg-dark text-white">
                        <h3><?= $language['__TITLE_LOGIN__'] ?><h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-xs-12 text-center">
                                <label for="usr"><?= $language['__USERNAME_LOGIN__'] ?></label>
                                <input type="text" name="user" id="inputUsr" class="form-control text-center" value="" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12 text-center">
                                <label for="pass"><?= $language['__USERPASS_LOGIN__'] ?></label>
                                <input type="password" name="pass" id="inputPass" class="form-control text-center" value="" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted bg-dark text-white">
                        <div class="form-group">
							<div class="col-md-4 col-xs-4 offset-md-4 offset-xs-4">
								<button type="submit" class="btn btn-light btn-lg"><?= $language['__SUBMIT_LOGIN__'] ?></button>
							</div>
						</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
		</div>
	</form>
</div>