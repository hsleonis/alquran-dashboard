<?php
/**
 * AlQuran Hadith File
 * @author Shahriar
 * @version 1.0.1
*/
?>
<div class="out-container" data-ng-controller="hadithController" data-ng-app="hadithApp" id="hadithApp">
	<div class="span6">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-list-alt"></i>
	
				<h3>Hadith</h3>
			</div><!-- /widget-header -->
	
			<div class="widget-content">
				<div class="" id="formcontrols">
					<form class="form-horizontal" id="editHadith" name="hadithFrm" method="post"  data-ng-submit="newHadith()" enctype="multipart/form-data">
						<input type="hidden" name="sub" value="addhadith" />
						<fieldset>
							<div class="control-group">
								<label class="control-label" for="hadithbook">Hadith Book</label>
								<div class="controls">
									<input class="span4" id="hadithbook" type="text" placeholder="Hadith book" data-ng-model="hadithBook" name="hadithBook" required="required">
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="control-group">
								<label class="control-label" for="hadithref">Reference</label>
								<div class="controls">
									<input class="span4" id="hadithref" type="text" placeholder="Reference" data-ng-model="hadithRef" name="hadithRef" required"required">
								</div><!-- /controls -->
							</div><!-- /control-group -->
				
							<div class="control-group">
								<label class="control-label" for="radiobtns">Select Language</label>
								<div class="controls">
									<select data-ng-model="hadithLang" name="hadithLang">
										<option data-ng-repeat="p in langs | orderBy:'lang_name'" value="{{p.lang_name}}">
											{{p.lang_name}}
										</option>
									</select>
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="control-group">
								<label class="control-label" for="radiobtns">Select Type</label>
								<div class="controls">
									<select name="hadithType" data-ng-model="hadithType">
										<option value="0" selected="selected">Translation</option>
										<!--<option value="1">Pronounciation</option>-->
									</select>
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="hadithDetail"></div><!-- /controls -->
							<div class="control-group">
								<div class="controls">
									<textarea class="span4" id="hadithdet" type="text" placeholder="Details" data-ng-model="hadithDet" name="hadithDet" required"required"></textarea>
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="form-actions">
								<button class="btn btn-primary" type="submit" id="hadithbtn" name="hadithAdd" data-ng-click="editHadith.$invalid">Save</button>
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
	
				<h3>All hadith List</h3>
			</div><!-- /widget-header -->
	
			<div class="widget-content">
				<input type="text" ng-model="searchhadith" placeholder="Search Hadith" />
				 <p ng-hide="filteredhadith.length">There is no result</p>
  				 <p>Number of Hadith Found: {{filteredhadith.length}}</p>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Hadith name</th>
							<th>Ref.</th>
							<th></th>
							<th>Language</th>
							<th class="td-actions"></th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="hadith in filteredhadith = (hadiths | orderBy:'hadith_book' | filter:searchhadith) ">
							<td>{{hadith.hadith_book}}</td>
							<td>{{hadith.hadith_ref}}</td>
							<td ng-if="hadith.hadith_type==0"><span style="padding: 3px 5px;background: #27ae60;border-radius: 2px;">T</span></td>
							<td ng-if="hadith.hadith_type==1"><span style="padding: 3px 5px;background: #3498db;border-radius: 2px;">P</span></td>
							<td>{{hadith.hadith_lang}}</td>
							<td class="td-actions">
									<a class="btn btn-danger btn-small btn-icon-only icon-remove" data-ng-click="delHadith(hadith)"></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div><!-- /widget-content -->
	</div><!-- /widget -->
</div>