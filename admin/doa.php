<?php
/**
 * AlQuran Doa File
 * @author Shahriar
 * @version 1.0.1
*/
?>
<div class="out-container" data-ng-controller="doaController" data-ng-app="doaApp" id="doaApp">
	<div class="span6">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-list-alt"></i>
	
				<h3>Doa</h3>
			</div><!-- /widget-header -->
	
			<div class="widget-content">
				<div class="" id="formcontrols">
					<form class="form-horizontal" id="editdoa" name="doaFrm" method="post"  data-ng-submit="newdoa()" enctype="multipart/form-data">
						<input type="hidden" name="sub" value="adddoa" />
						<fieldset>
							<div class="control-group">
								<label class="control-label" for="doaname">Doa Name</label>
								<div class="controls">
									<input class="span4" id="doaname" type="text" placeholder="Doa name" data-ng-model="doaName" name="doaName" required="required">
								</div><!-- /controls -->
							</div><!-- /control-group -->
				
							<div class="control-group">
								<label class="control-label" for="radiobtns">Select Language</label>
								<div class="controls">
									<select data-ng-model="doaLang" name="doaLang">
										<option data-ng-repeat="p in langs | orderBy:'lang_name'" value="{{p.lang_name}}">
											{{p.lang_name}}
										</option>
									</select>
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="control-group">
								<label class="control-label" for="radiobtns">Select Type</label>
								<div class="controls">
									<select name="doaType" data-ng-model="doaType">
										<option value="0" selected="selected">Translation</option>
										<!--<option value="1">Pronounciation</option>-->
									</select>
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="doaDetail"></div><!-- /controls -->
							<div class="control-group">
								<div class="controls">
									<textarea class="span4" id="doadet" type="text" placeholder="Details" data-ng-model="doaDet" name="doaDet" required"required"></textarea>
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="form-actions">
								<button class="btn btn-primary" type="submit" id="doabtn" name="doaAdd" data-ng-click="newDoa()" data-ng-valid="editdoa.$invalid">Save</button>
								<button class="btn">Cancel</button>
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
				<i class="icon-list-alt"></i>
	
				<h3>All Doa List</h3>
			</div><!-- /widget-header -->
	
			<div class="widget-content">
				<input type="text" ng-model="searchdoa" placeholder="Search Doa" />
				 <p ng-hide="filtereddoa.length">There is no result</p>
  				 <p>Number of Doa Found: {{filtereddoa.length}}</p>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Doa Name</th>
							<th></th>
							<th>Language</th>
							<th class="td-actions"></th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="doa in filtereddoa = (doas | orderBy:'doa_name' | filter:searchdoa) ">
							<td>{{doa.doa_name}}</td>
							<td ng-if="doa.doa_type==0"><span style="padding: 3px 5px;background: #27ae60;border-radius: 2px;">T</span></td>
							<td ng-if="doa.doa_type==1"><span style="padding: 3px 5px;background: #3498db;border-radius: 2px;">P</span></td>
							<td>{{doa.doa_lang}}</td>
							<td class="td-actions">
									<a class="btn btn-danger btn-small btn-icon-only icon-remove" data-ng-click="delDoa(doa)"></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div><!-- /widget-content -->
	</div><!-- /widget -->
</div>