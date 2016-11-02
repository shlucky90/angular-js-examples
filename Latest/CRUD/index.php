<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AngularJS Insert Update Delete Using PHP MySQL</title>
	<!-- Bootstrap -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200' rel='stylesheet' type='text/css'>	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body data-ng-app="postModule" data-ng-controller="PostController" data-ng-init="init()">
<input type="hidden" id="base_path" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
<div class="container">
	<h2 class="title text-center">AngularJS Insert Update Delete Using PHP MySQL</h2>	
	<div class="row mt80">
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 animated bounceInLeft">
			<div class="alert alert-danger text-center alert-failure-div" role="alert" style="display: none">
				<p></p>
			</div>
			<div class="alert alert-success text-center alert-success-div" role="alert" style="display: none">
				<p></p>
			</div>
			<form class="ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-valid-email" novalidate="" name="userForm">
				<div class="form-group">
					<label for="exampleInputEmail1">Name</label> 
					<input data-ng-minlength="3" required="" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-minlength" id="name" name="name" placeholder="Name" data-ng-model="tempUser.name" type="text">
					<span class="help-block error ng-binding ng-hide" data-ng-show="userForm.name.$invalid &amp;&amp; userForm.name.$dirty">
						Please enter name
					</span>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label> 
					<input data-ng-minlength="3" required="" class="form-control ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required ng-valid-minlength" id="email" name="email" placeholder="Email" data-ng-model="tempUser.email" type="email">
					<span class="help-block error ng-binding ng-hide" data-ng-show="userForm.email.$invalid &amp;&amp; userForm.email.$dirty">
						Please enter email
					</span>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Company Name</label>  
					<input data-ng-minlength="3" required="" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-minlength" id="company_name" name="company_name" placeholder="Company Name" data-ng-model="tempUser.companyName" type="text">
					<span class="help-block error ng-binding ng-hide" data-ng-show="userForm.company_name.$invalid &amp;&amp; userForm.company_name.$dirty">
						Please enter company name
					</span>
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Designation</label> 
					<input data-ng-minlength="3" required="" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-minlength" id="designation" name="designation" placeholder="Designation" data-ng-model="tempUser.designation" type="text">
					<span class="help-block error ng-binding ng-hide" data-ng-show="userForm.designation.$invalid &amp;&amp; userForm.designation.$dirty">
						Please enter designation
					</span>
				</div>
				<!-- <input type="hidden" data-ng-model='tempUser.id'>  -->
				<div class="text-center">
					<button disabled="disabled" ng-disabled="userForm.$invalid" data-loading-text="Saving User..." ng-hide="tempUser.id" type="submit" class="btn btn-save" data-ng-click="addUser()">Save User</button>
					<button disabled="disabled" ng-disabled="userForm.$invalid" data-loading-text="Updating User..." ng-hide="!tempUser.id" type="submit" class="btn btn-save ng-hide" data-ng-click="updateUser()">Update User</button>
				</div>
				
			</form>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 animated bounceInRight">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th width="5%">#</th>
							<th width="20%">Name</th>
							<th width="20%">Email</th>
							<th width="20%">Company Name</th>
							<th width="15%">Designation</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
							<!-- ngRepeat: user in post.users | orderBy : '-id' -->
							<tr class="ng-scope" data-ng-repeat="user in post.users">
								<th class="ng-binding" scope="row">{{ user.id }}</th>
								<td class="ng-binding"> {{ user.name }} </td>
								<td class="ng-binding"> {{ user.email }} </td>
								<td class="ng-binding"> {{ user.companyName }} </td>
								<td class="ng-binding"> {{ user.designation }} </td>
								<td> <a href="javascript:;" data-ng-click="editUser(user)"> Edit</a> | <a href="javascript:;" data-ng-click="deleteUser(user)">Delete</a> </td>
							</tr><!-- end ngRepeat: user in post.users | orderBy : '-id' -->
						</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


	<!-- Script -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/angular.js"></script>
	<script src="js/angular-custom.js"></script>
</body>
</html>