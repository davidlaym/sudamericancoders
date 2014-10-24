var sudCodersHomeApp = angular.module('sudCodersHome',['ngSanitize']);

sudCodersHomeApp.filter('formatDateToDayAndMonth',['$log',function($log){
	var months = ['','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
	return function(input){
	//	2014/09/30 15:45:39 +0000
		var periods=input.split(/[\s:\/]+/);
		$log.log("fecha:"+periods);
		//new Date(year, month, day, hours, minutes, seconds, milliseconds)
		var date = new Date(periods[0],periods[1],periods[2],periods[3],periods[4],periods[5]);
		//$log.log("fecha:"+date);
		return months[date.getMonth()]+', '+date.getDate();
	}
}]);


sudCodersHomeApp.filter('formatDescription',['$log',function($log){
/*
	function replaceSomething(input,toReplace,replacement){
		var hTagPattern = new RegExp(toReplace,"gi");
		return input.replace(hTagPattern,replacement;
	}


*/
	return function(input){
		//$log.log('Línea original:'+input);
		//$log.log('-------------------------------------------------------------------------------');
		var oefPattern = new RegExp("\n","gi");
		input=input.replace(oefPattern,"<br/>");
		return input;
	};

}]);



sudCodersHomeApp.filter('formatOverview',['$log',function($log){

	return function(input){
		//$log.log('Línea original:'+input);
		//$log.log('-------------------------------------------------------------------------------');
//		var oefPattern = new RegExp("\n.*","gi");
		var position = input.indexOf("\n");
		input=input.substring(0,position);
		return input;
	};

}]);

sudCodersHomeApp.filter('formarPlayerURL',['$log',function($log){
/*
	function replaceSomething(input,toReplace,replacement){
		var hTagPattern = new RegExp(toReplace,"gi");
		return input.replace(hTagPattern,replacement;
	}


*/
	return function(input){
		//$log.log('Línea original:'+input);
		//$log.log('-------------------------------------------------------------------------------');
		return "https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/"+input+"&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true";
	};

}]);



sudCodersHomeApp.controller('EpisodesController',['$scope','$http','$sce','$log',function($scope,$http,$sce,$log){
	//$scope.items=[{title:'hola'}];
	//Client id para App sudamericanCodersHome
	$scope.clientId='c9d9cc9c52bb5fa9853dadb584000bb0';
	$http.get('http://api.soundcloud.com/users/114009695/tracks.json?client_id='+$scope.clientId).
	//$http.get('http://gdata.youtube.com/feeds/api/users/chech0x1/uploads?max-results=3&alt=json').
	success(function(data, status, headers, config){
		//$scope.items=angular.fromJson(data).feed.entry;
		if(status==200){
			$scope.items=angular.fromJson(data);
		}
	})
	.error(function(data, status, headers, config){
		
	});
	$scope.getEpisodeCode=function(item){
		var code=item.title.replace(/-.*/g,"").replace(/.*_/g,"");
		return code.trim();
	};
	$scope.getEpisodeTitle=function(item){
		var title=item.title.replace(/.*-/g,"");
		return title.trim();
	};
	$scope.getURL=function(item){
		//var url=item.download_url+'?client_id='+$scope.clientId;
		var url = item.stream_url+'?client_id='+$scope.clientId;
		//$log.log("url de descarga"+url);
		url = $sce.trustAsResourceUrl(url);
		
		return url;
	};
	$scope.getPlayerURL=function(item){
		var url="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/"+item.id+"&amp;color=0066cc&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false";
		//var url="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/"+item.id+"&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true";
		$log.log(url);
		url = $sce.trustAsResourceUrl(url);
		
		return url;
	};
	
}]);


sudCodersHomeApp.controller('CodersController',['$scope','$log',function($scope,$log){
	$scope.coders=[
	{nombre:"Juan Cristobal Olivares",twitter:'juancriolivares',foto:'juancristobalolivares.jpg',linkedin:'www.linkedin.com/profile/view?id=58496921'},
	{nombre:"Agustín Villena",twitter:'agustinvillena',foto:'agustinvillena.jpg',linkedin:'cl.linkedin.com/in/agustinvillena'},
	{nombre:"Germán González",twitter:'taichi2000',foto:'germangonzalez.jpg',linkedin:'cl.linkedin.com/in/cvgermangonzalez'},
	{nombre:"Sergio Campos",twitter:'chech0x',foto:'sergiocampos.jpg',linkedin:'cl.linkedin.com/in/scamposv'}
	];
}]);

/*sudCodersHomeApp.controller('NAVController',['$scope','$location',function($scope,$location){
	$scope.go=function(path){
		$location.path(path);
	};
}]);*/
