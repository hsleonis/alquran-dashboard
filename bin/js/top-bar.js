var count=1;
jQuery(document).ready(function($){
	/*
	$.ajax({
			type: "GET",  
			url: '' ,  
			dataType:'html',
			success: function(data) {
				$('body').prepend(data);
				//also assign the back to post url				
				$('#header-menu-wrap #back-to-post').attr('href', $('body').attr('data-post'));	
			},
			error: function() {            
			}
	});
	*/
	$("button#surabtn").on("click",function(){
		
	});
	$('.mainnav > li').click(function(){
		$('.mainnav > li').removeClass('active');
		$(this).addClass('active');
	});
});

function addField(title,variable,placeholder,par){
	var fieldWrapper = $("<div class=\"control-group\">");
	var label = $("<label class=\"control-label\">"+title+" "+count+":</label>");
	var controls = $("<div class=\"controls\">");
	var textarea = $("<textarea class=\"span3\" type=\"text\" placeholder=\"Verse\" name=\""+variable+"\"></textarea>");
    var removeButton = $("<input type=\"button\" class=\"remove btn btn-primary\" style=\"margin-left:5px;\" value=\"x\" />");
    removeButton.click(function() {
        $(this).parent().parent().remove();
    });
    fieldWrapper.append(label);
    fieldWrapper.append(controls);
    controls.append(textarea);
    controls.append(removeButton);
    $(par).append(fieldWrapper);
    count++;
}

function addData(frm){
	var dat = $(frm).serializeJSON();
	$.ajax({
			type: "POST",
			url: 'apis/sura' ,
			data: dat,
			success: function(data) {
				alert("Sura Added!");
				document.getElementById('edit-sura').reset();
				$('.remove').parent().parent().remove();
				count=1;
				var scope = angular.element($("#suraApp")).scope();
			    scope.$apply(function(){
			 		$.ajax({
						type: "POST",
						url: 'apis/sura' ,
						data: "{sub: 'getSura'}",
						success: function(response) {
							scope.suras=response;
						}     
			    	});
				});
			}
	});
	return false;
}

!function(e,r){if("function"==typeof define&&define.amd)define(["exports","jquery"],function(e,i){return r(e,i)});else if("undefined"!=typeof exports){var i=require("jquery");r(exports,i)}else r(e,e.jQuery||e.Zepto||e.ender||e.$)}(this,function(e,r){function i(e,i){function n(e,r,i){return e[r]=i,e}function a(e,r){for(var i,a=e.match(t.key);void 0!==(i=a.pop());)if(t.push.test(i)){var o=s(e.replace(/\[\]$/,""));r=n([],o,r)}else t.fixed.test(i)?r=n([],i,r):t.named.test(i)&&(r=n({},i,r));return r}function s(e){return void 0===h[e]&&(h[e]=0),h[e]++}function o(e){switch(r('[name="'+e.name+'"]',i).attr("type")){case"checkbox":return"on"===e.value?!0:e.value;default:return e.value}}function u(r){if(!t.validate.test(r.name))return this;var i=a(r.name,o(r));return c=e.extend(!0,c,i),this}function f(r){if(!e.isArray(r))throw new Error("formSerializer.addPairs expects an Array");for(var i=0,t=r.length;t>i;i++)this.addPair(r[i]);return this}function d(){return c}function l(){return JSON.stringify(d())}var c={},h={};this.addPair=u,this.addPairs=f,this.serialize=d,this.serializeJSON=l}var t={validate:/^[a-z_][a-z0-9_]*(?:\[(?:\d*|[a-z0-9_]+)\])*$/i,key:/[a-z0-9_]+|(?=\[\])/gi,push:/^$/,fixed:/^\d+$/,named:/^[a-z0-9_]+$/i};return i.patterns=t,i.serializeObject=function(){return this.length>1?new Error("jquery-serialize-object can only serialize one form at a time"):new i(r,this).addPairs(this.serializeArray()).serialize()},i.serializeJSON=function(){return this.length>1?new Error("jquery-serialize-object can only serialize one form at a time"):new i(r,this).addPairs(this.serializeArray()).serializeJSON()},"undefined"!=typeof r.fn&&(r.fn.serializeObject=i.serializeObject,r.fn.serializeJSON=i.serializeJSON),e.FormSerializer=i,i});