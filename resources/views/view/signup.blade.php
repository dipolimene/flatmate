@extends('account.master')

@section('signup')

	<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">

							<form class="form" method="POST" action="">

							{{ csrf_field() }}

								<div class="header header-primary text-center">

									<h4>Sign Up</h4>
									<div class="social-line">
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-instagram"></i>
										</a>
									</div>
								</div>

								<p class="text-divider">Or</p>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<input type="text" name="name" class="form-control" placeholder="Full Names" required>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="text" name="email" class="form-control" placeholder="Email" required>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" name="password_confirmation" placeholder="Password" class="form-control" required />
									</div>

									<!-- <div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Subscribe to newsletter
										</label>
									</div> -->

								</div>
								<div class="footer text-center">
									<button type="submit" class="btn btn-simple btn-primary btn-lg">Get Started</button>
								</div>
							</form>
						</div>
					</div>
				</div>

@stop