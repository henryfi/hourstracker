<?php include 'header.php' ?>

<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">
		<ul class="nav nav-sidebar" ng-controller="NavCtrl">
			<li ng-repeat="item in menu" ng-class="{active: isActive(item.url)}">
				<a  ng-href="{{item.url}}">{{item.label}}</a>
			</li>
		</ul>

		<?php if(User::role() == 'admin') : ?>
		<ul class="nav nav-sidebar">
			<li><a href="">Nav item</a></li>
			<li><a href="">Nav item again</a></li>
			<li><a href="">One more nav</a></li>
			<li><a href="">Another nav item</a></li>
			<li><a href="">More navigation</a></li>
		</ul>
		<?php endif; ?>
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div ng-view></div>					
	</div>
</div>

<?php include 'footer.php' ?>