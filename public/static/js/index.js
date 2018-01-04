angular.module('myApp', [])//创建app模块
.controller('signUpController', function ($scope) {//添加控制器
	$scope.userdata = {};
	$scope.submitForm = function () {
		console.log($scope.userdata);//打印信息
		if ($scope.form.$invalid) alert("请检查输入的信息");
		else alert("提交成功")
	};
})
.directive('compare', function () {//脏检查
	var o = {};
	o.strict = "AE";
	o.scope = {orgText: "=compare"}
	o.require = "ngModel";
	o.link = function (sco, ele, att, con) {
		con.$validators.compare = function (v) {
			return v == sco.orgText;
		}
		sco.$watch("orgText", function () {
			con.$validate();
		});
	}
	return o;
})