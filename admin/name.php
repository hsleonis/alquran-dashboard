<?php
/**
 * AlQuran Allah Name
 * @author Shahriar
 * @version 1.0.1
*/
?>
<div class="out-container" data-ng-app="nameApp" data-ng-controller="nameController">
	<div class="span6">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-star"></i>
	
				<h3>Allah Name</h3>
			</div><!-- /widget-header -->
	
			<div class="widget-content">
				<div class="" id="formcontrols">
					<form class="form-horizontal" id="nameForm" name="nameForm" data-ng-submit="newName()">
						<fieldset>
							<div class="control-group">
								<label class="control-label" for="language">Add Name</label>
				
								<div class="controls">
									<input class="span4" id="nameName" type="text" placeholder="Name" name="nameName" data-ng-model="nameName" required="required">
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="control-group">
								<label class="control-label" for="radiobtns">Select Language</label>
								<div class="controls">
									<select data-ng-model="nameLang" name="nameLang">
										<option data-ng-repeat="p in langs | orderBy:'lang_name'" value="{{p.lang_name}}">
											{{p.lang_name}}
										</option>
									</select>
								</div><!-- /controls -->
							</div><!-- /control-group -->
				
							<div class="form-actions">
								<button class="btn btn-primary" data-ng-disabled="nameForm.$invalid" type="submit">Save</button>
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
	
				<h3>Allah Names</h3>
			</div><!-- /widget-header -->
	
			<div class="widget-content">
				<input type="text" ng-model="searchName" placeholder="Search Name" />
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Language</th>
							<th class="td-actions"></th>
						</tr>
					</thead>
				
					<tbody>
						<tr data-ng-repeat="p in names | orderBy:'name_lang' | filter:searchName">
							<td>{{p.name_details}}</td>
							<td>{{p.name_lang}}</td>
							<td class="td-actions">
								<a class="btn btn-danger btn-small btn-icon-only icon-remove" data-ng-click="delName(p)"></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><!-- /out-container -->