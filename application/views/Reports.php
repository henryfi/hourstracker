<h1 class="page-header">Create report</h1>

<form role="form" method="post" action="<?=URL::base();?>report/download/">
  <div class="row">
    <div class="col-lg-5">
      <div class="row">
        <div class="col-lg-6 form-group">		
          <label for="start-date">Start date</label><br />
          <input type="date" name="startDate" class="form-control" id="start-date" placeholder="yyyy-MM-dd" ng-model="startDate" ng-required="true">
        </div>
        <div class="col-lg-6 form-group">		
          <label for="end-date">End date</label><br />
          <input type="date" name="endDate" class="form-control" id="end-date" placeholder="yyyy-MM-dd" ng-model="endDate" ng-required="true">
        </div>
      </div>
      <div class="form-group">
        <label for="project">Project</label><br />
        <select id="project" class="form-control" ng-model="project" ng-required="true" ng-options="p.id as p.name for p in projects" />
        <input type="hidden" name="project" value="{{project}}" />
      </div>
    </div>
  <div class="col-lg-5">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Users to include</div>
      <table class="table">
        <tr ng-repeat="user in users">
          <td style="width:30px;">
            <input type="checkbox" name="users[]" value="{{user.id}}" checklist-model="selectedUsers" checklist-value="user.id">
          </td>
          <td>
            {{user.name}}
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>

  <input type="button" class="btn btn-primary" ng-click="showReport()" value="Show report" />
  <input type="submit" class="btn btn-info" value="Create Excel" />
</form>

<h4 ng-show="tasks.length == 0">No tasks found</h4>
<div ng-show="tasks.length > 0" class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Date</th>
          <th>Project</th>
          <th>Task by</th>
          <th>Task</th>
          <th>Hours</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="t in tasks" ng-mouseover="showControls=true" ng-mouseout="showControls=false">
          <td>{{t.date}}</td>
          <td>{{t.project}}</td>
          <td>{{t.by_user_name}}</td>
          <td>{{t.task}}</td>
          <td>{{t.hours}}</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>Total: {{tasks | total:'hours'}}</th>
        </tr>
    </table>
  </div>