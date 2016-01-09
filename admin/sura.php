<?php
/**
 * AlQuran Sura File
 * @author Shahriar
 * @version 1.0.1
*/
?>
<div class="out-container" data-ng-app="suraApp" data-ng-controller="suraController" id="suraApp">
	<div class="span6">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-list-alt"></i>
	
				<h3>Sura</h3>
			</div><!-- /widget-header -->
	
			<div class="widget-content">
				<div class="" id="formcontrols">
					<form class="form-horizontal" id="edit-sura" name="suraFrm" method="post" action="" enctype="multipart/form-data">
						<input type="hidden" name="sub" value="addSura" />
						<fieldset>
							<div class="control-group">
								<label class="control-label" for="surano">Sura No</label>
								<div class="controls">
									<input class="span4" min="1" max="114" id="surano" type="number" placeholder="Sura number" data-ng-model="suraNo" name="suraNo" required="required">
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="control-group">
								<label class="control-label" for="suraname">Sura Name</label>
								<div class="controls">
									<input class="span4" id="suraname" type="text" placeholder="Sura name" data-ng-model="suraName" name="suraName" required"required">
								</div><!-- /controls -->
							</div><!-- /control-group -->
				
							<div class="control-group">
								<label class="control-label" for="radiobtns">Select Language</label>
								<div class="controls">
									<select data-ng-model="suraLang" name="suraLang">
										<option data-ng-repeat="p in langs | orderBy:'lang_name'" value="{{p.lang_name}}">
											{{p.lang_name}}
										</option>
									</select>
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="control-group">
								<label class="control-label" for="radiobtns">Select Type</label>
								<div class="controls">
									<select name="suraType">
										<option value="0" selected="selected">Translation</option>
										<option value="1">Pronounciation</option>
									</select>
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="control-group">
								<label class="control-label">Total Verse</label>
								<div class="controls">
									<input class="span4" min="1" type="number" placeholder="Total Verse" data-ng-model="totalVerse" name="suraInfo[verse]">
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="control-group">
								<label class="control-label">Number of Sizdah</label>
								<div class="controls">
									<input class="span4" type="number" min="0" placeholder="Total Sizdah" data-ng-model="TotalSizdah" name="suraInfo[sizdah]">
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="control-group">
								<label class="control-label">Number of Ruku</label>
								<div class="controls">
									<input class="span4" type="number" min="0" placeholder="Total Ruku" data-ng-model="TotalRuku" name="suraInfo[ruku]">
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="control-group">
								<label class="control-label">Place</label>
								<div class="controls">
									<input class="span4" type="text" placeholder="Place" data-ng-model="place" name="suraInfo[place]">
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="suraDetail"></div><!-- /controls -->
							<div class="control-group">
								<div class="controls">
									<div class="btn btn-primary" onclick="addField('Ayat','suraAyat[]','Verse','.suraDetail')">Add Ayat</div>
								</div><!-- /controls -->
							</div><!-- /control-group -->
							
							<div class="form-actions">
								<button class="btn btn-primary" type="submit" id="surabtn" name="suraAdd" onclick="return addData('#edit-sura');">Save</button>
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
	
				<h3>All Sura List</h3>
			</div><!-- /widget-header -->
	
			<div class="widget-content">
				<input type="text" ng-model="searchSura" placeholder="Search Sura" />
				 <p ng-hide="filteredSura.length">There is no result</p>
  				 <p>Number of Sura found: {{filteredSura.length}}</p>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Sura no.</th>
							<th>Name</th>
							<th></th>
							<th>Language</th>
							<th class="td-actions"></th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="sura in filteredSura = (suras | orderBy:'sura_no' | filter:searchSura) ">
							<td>{{sura.sura_no}}</td>
							<td>{{sura.sura_name}}</td>
							<td ng-if="sura.sura_type==0"><span style="padding: 3px 5px;background: #27ae60;border-radius: 2px;">T</span></td>
							<td ng-if="sura.sura_type==1"><span style="padding: 3px 5px;background: #3498db;border-radius: 2px;">P</span></td>
							<td>{{sura.sura_lang}}</td>
							<td class="td-actions">
									<a class="btn btn-danger btn-small btn-icon-only icon-remove" data-ng-click="delSura(sura)"></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div><!-- /widget-content -->
	</div><!-- /widget -->
</div>