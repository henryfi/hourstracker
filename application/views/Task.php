<h1 class="page-header">Add Task</h1>

<div ng-controller="TaskInputCtrl">
	<form class="form-inline" role="form" ng-submit="addTask()">
	  <div class="form-group">		
	    <label class="sr-only" for="date">Date</label>
	    <input type="date" class="form-control" id="date" placeholder="yyyy-MM-dd" ng-model="date" ng-required="true">

	  </div>
	  <div class="form-group">
	    <label class="sr-only" for="project">Project</label>
	    <select id="project" class="form-control" ng-model="project" ng-required="true" ng-options="p.id as p.name for p in projects">
	    </select>
	  </div>

	  <div class="form-group">
	    <label class="sr-only" for="task">Task</label>
	    <input style="width: 400px;" type="text" class="form-control" id="task" placeholder="Task" ng-model="task" ng-required="true">
	  </div>
	  <div class="form-group">
	    <label class="sr-only" for="hours">Hours</label>
	    <input type="number" step="any" style="width: 100px;" class="form-control" id="hours" placeholder="Hours" ng-model="hours" ng-required="true">
	  </div>
	  <!--
	  <div class="form-group">
	    <label class="sr-only" for="notes">Notes</label>
	    <input type="text" class="form-control" id="notes" placeholder="Notes" ng-model="notes">
	  </div>
		-->
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<div ng-show="tasks.length == 0">
		<h3>No tasks added for the selected time period.</h3>
	</div>
	<div ng-show="tasks.length > 0" class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Date</th>
					<th>Project</th>
					<th>Task</th>
					<th>Hours</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="t in tasks" ng-mouseover="showControls=true" ng-mouseout="showControls=false">
					<td>{{t.date}}</td>
					<td>{{t.project}}</td>
					<td>{{t.task}}</td>
					<td>{{t.hours}}</td>
					<td style="width: 60px;">
						<div ng-mouseover="showControls=true" ng-show="showControls">
							<button ng-click="deleteTask(t.id)" type="button" class="btn btn-danger btn-sm btn-xs">Poista</button>
						</div>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th>Total: {{tasks | total:'hours'}}</th>
					<th></th>	
				</tr>
		</table>
	</div>
</div>