<h1 class="page-header">Manage Users</h1>

<div ng-controller="UsersCtrl">
	<form class="form-inline" role="form" ng-submit="addUser()">
	  <div class="form-group">		
	    <input type="text" class="form-control" id="name" placeholder="Name" ng-model="user.name" ng-required="true">
	  </div>
	  <div class="form-group">		
	    <input type="text" class="form-control" id="username" placeholder="Username" ng-model="user.username" ng-required="true">
	  </div>
	  <div class="form-group">		
	    <input type="text" class="form-control" id="email" placeholder="email" ng-model="user.email" ng-required="true">
	  </div>
	  <button type="submit" class="btn btn-primary">Add</button>
	</form>


	<div ng-show="users.length > 0" class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Status</th>	
					<th>Activation link</th>	
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="u in users" ng-mouseover="showControls=true" ng-mouseout="showControls=false">
					<td>{{u.name}}</td>
					<td>{{u.username}}</td>
					<td>{{u.status}}</td>
					<th><a ng-if="u.status == 'created'" href="<?php echo URL::base(TRUE); ?>auth/activate/{{u.activation_hash}}"><?php echo URL::base(TRUE); ?>auth/activate/{{u.activation_hash}}</a></th>	
					<td style="width: 100px;">
						<div ng-mouseover="showControls=true" ng-show="showControls">
							<button ng-click="deleteProject(p.id)" type="button" class="btn btn-danger btn-sm btn-xs">Poista</button>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>