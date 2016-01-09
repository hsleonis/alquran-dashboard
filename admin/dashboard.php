<?php
/**
 * AlQuran Dashboard
 * @author Shahriar
 * @version 1.0.1
*/
?>
<div class="out-container" data-ng-app="langApp" data-ng-controller="langController">
	<div class="span6">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-dashboard"></i>
	
				<h3>Dashboard</h3>
			</div><!-- /widget-header -->
	
			<div class="widget-content">
				<div class="" id="formcontrols">
					<form class="form-horizontal" id="langForm" name="langForm" data-ng-submit="newLang()">
						<fieldset>
							<div class="control-group">
								<label class="control-label" for="language">Add Language</label>
				
								<div class="controls">
									<input class="span4" id="language" type="text" placeholder="Language" name="langName" data-ng-model="langName" required="required">
								</div><!-- /controls -->
							</div><!-- /control-group -->
				
							<div class="form-actions">
								<button class="btn btn-primary" data-ng-disabled="langForm.$invalid" type="submit">Save</button>
								<button class="btn" type="reset">Cancel</button>
							</div><!-- /form-actions -->
						</fieldset>
					</form>
				</div>
			</div><!-- /widget-content -->
		</div><!-- /widget -->
	</div>
	<div class="span6" style="margin-left: 10px;">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-map-marker"></i>
	
				<h3>Languages</h3>
			</div><!-- /widget-header -->
	
			<div class="widget-content">
				<input type="text" ng-model="searchLang" placeholder="Search Language" />
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th class="td-actions"></th>
						</tr>
					</thead>
				
					<tbody>
						<tr data-ng-repeat="p in langs | orderBy:'lang_name' | filter:searchLang">
							<td>{{p.lang_name}}</td>
							<td class="td-actions">
								<a class="btn btn-danger btn-small btn-icon-only icon-remove" data-ng-click="delLang(p)"></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><!-- /out-container -->