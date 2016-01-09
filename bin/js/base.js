(function(angular) {
  'use strict';
	// Header Control
	var app = angular.module('menu', ['ngAnimate','ngFileUpload']);
	app.controller('shahriar', ['$scope', function($scope) {
	    $scope.templates =
	      [{name: 'Dashboard', url: 'admin/dashboard.php', icon: 'icon-dashboard'},
	      {name: 'Allah Name', url: 'admin/name.php', icon: 'icon-star'},
	      //{name: 'User', url: 'admin/user.php', icon: 'icon-user-md'},
	      {name: 'Sura', url: 'admin/sura.php', icon: 'icon-list-alt'},
	      {name: 'Hadith', url: 'admin/hadith.php', icon: 'icon-columns'},
	      {name: 'Doa', url: 'admin/doa.php', icon: 'icon-paste'},
	      //{name: 'Wallpaper', url: 'admin/wallpaper.php', icon: 'icon-picture'}
	      ];
	      
	    $scope.path = $scope.templates[0]['url'];
	    $scope.nav = function(path){
	    	$scope.path = path;
	    };
	  }]);
	  // Language Control
	  app.controller('langController', function($scope,$http) {
	  	$scope.langs = [];
	  	var API="apis/lang";
	  	
	  	$http.post(API,{sub: 'getLang'})
	  	.success(function (response) {
   			$scope.langs=response;
   		});
   		$scope.newLang = function(){
   			$http.post(API,
   			{sub: 'addLang', langName: $scope.langName})
	        .success(function(data, status, headers, config){
	            $scope.langs.push({lang_id:'',lang_name: $scope.langName});
	   			$scope.langName='';
	        });
   		};
   		$scope.delLang = function(item){
			$http.post(API,
   			{sub: 'delLang', langID: item.lang_id})
	        .success(function(data, status, headers, config){
	            var index=$scope.langs.indexOf(item);
      			$scope.langs.splice(index,1);
	        });
   		};
	  });
	  // Sura control
	  app.controller('suraController', function($scope,$http) {
	  	$scope.langs = [];
	  	var API="apis/lang";
	  	$http.post(API,{sub: 'getLang'})
	  	.success(function (response) {
   			$scope.langs=response;
   		});
   		
   		API="apis/sura";
	  	$http.post(API,{sub: 'getSura'})
	  	.success(function (response) {
   			$scope.suras=response;
   		});
   		$scope.delSura = function(item){
			$http.post(API,
   			{sub: 'delSura', suraID: item.sura_id})
	        .success(function(data, status, headers, config){
	            var index=$scope.suras.indexOf(item);
      			$scope.suras.splice(index,1);
	        });
   		};	
	  });
	  // Hadith control
	  app.controller('hadithController', function($scope,$http) {
	  	$scope.langs = [];
	  	var API="apis/lang";
	  	$http.post(API,{sub: 'getLang'})
	  	.success(function (response) {
   			$scope.langs=response;
   		});
   		
   		API="apis/hadith";
	  	$http.post(API,{sub: 'getHadith'})
	  	.success(function (response) {
   			$scope.hadiths=response;
   		});
   		$scope.newHadith = function(){
   			$http.post(API,
   			{sub: 'addHadith', hadithBook: $scope.hadithBook, hadithRef: $scope.hadithRef, hadithDet: $scope.hadithDet, hadithLang: $scope.hadithLang, hadithType: $scope.hadithType})
	        .success(function(data, status, headers, config){
	            $scope.hadiths.push({hadith_id: '', hadith_book: $scope.hadithBook, hadith_ref: $scope.hadithRef, hadith_details: $scope.hadithDet, hadith_lang: $scope.hadithLang, hadith_type: $scope.hadithType});
	   			document.getElementById('editHadith').reset();
	        });
   		};
   		$scope.delHadith = function(item){
			$http.post(API,
   			{sub: 'delHadith', hadithID: item.hadith_id})
	        .success(function(data, status, headers, config){
	            var index=$scope.hadiths.indexOf(item);
      			$scope.hadiths.splice(index,1);
	        });
   		};
	  });
	  // Name Control
	  app.controller('nameController', function($scope,$http) {
	  	$scope.langs = [];
	  	var API="apis/lang";
	  	
	  	$http.post(API,{sub: 'getLang'})
	  	.success(function (response) {
   			$scope.langs=response;
   		});
   		
   		var API="apis/name";
   		$http.post(API,{sub: 'getName'})
	  	.success(function (response) {
   			$scope.names=response;
   		});
   		$scope.newName = function(){
   			$http.post(API,
   			{sub: 'addName', nameName: $scope.nameName, nameLang: $scope.nameLang})
	        .success(function(data, status, headers, config){
	            $scope.names.push({lang_id:'',name_details: $scope.nameName, name_lang: $scope.nameLang});
	   			$scope.nameName=$scope.nameLang='';
	        });
   		};
   		$scope.delName = function(item){
			$http.post(API,
   			{sub: 'delName', nameID: item.name_id})
	        .success(function(data, status, headers, config){
	            var index=$scope.names.indexOf(item);
      			$scope.names.splice(index,1);
	        });
   		};
	  });
	  // Doa control
	  app.controller('doaController', function($scope,$http) {
	  	$scope.langs = [];
	  	var API="apis/lang";
	  	$http.post(API,{sub: 'getLang'})
	  	.success(function (response) {
   			$scope.langs=response;
   		});
   		
   		API="apis/doa";
   		$scope.doas=[];
	  	$http.post(API,{sub: 'getDoa'})
	  	.success(function (response) {
   			$scope.doas=response;
   		});
   		$scope.newDoa = function(){
   			$http.post(API,
   			{sub: 'addDoa', doaName: $scope.doaName, doaDet: $scope.doaDet, doaLang: $scope.doaLang, doaType: $scope.doaType})
	        .success(function(data, status, headers, config){
	            $scope.doas.push({doa_id: '', doa_name: $scope.doaName, doa_details: $scope.doaDet, doa_lang: $scope.doaLang, doa_type: $scope.doaType});
	   			document.getElementById('editdoa').reset();
	        });
   		};
   		$scope.delDoa = function(item){
			$http.post(API,
   			{sub: 'delDoa', doaID: item.doa_id})
	        .success(function(data, status, headers, config){
	            var index=$scope.doas.indexOf(item);
      			$scope.doas.splice(index,1);
	        });
   		};
	  });
	  
	  
	  // Cool
})(window.angular);