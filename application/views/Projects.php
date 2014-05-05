<h1 class="page-header">Manage Projects</h1>

<div ng-controller="ProjectsCtrl">
	<form class="form-inline" role="form" ng-submit="addProject()">
	  <div class="form-group">		
	    <label class="sr-only" for="date">Name</label>
	    <input type="text" class="form-control" id="date" placeholder="Project name" ng-model="project" ng-required="true">
	  </div>
	  <button type="submit" class="btn btn-primary">Add</button>
	</form>


	<div ng-show="projects.length > 0" class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Project</th>
					<th></th>	
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="p in projects" ng-mouseover="showControls=true" ng-mouseout="showControls=false">
					<td>{{p.name}}</td>
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