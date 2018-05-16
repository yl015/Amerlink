<!DOCTYPE html>
<html>
<head>
	<title>Todo List</title>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.angularjs.org/1.5.7/angular.min.js"></script>
	<script type="text/javascript" src="https://code.angularjs.org/1.5.7/angular-route.min.js"></script>
	<script type="text/javascript" src="https://code.angularjs.org/1.5.8/angular-animate.min.js"></script>
	<script type="text/javascript" src="../js/libraries/ui-bootstrap-tpls-2.0.0.min.js"></script>

	<script src="https://npmcdn.com/angular-toastr/dist/angular-toastr.tpls.js"></script>
	<link rel="stylesheet" href="https://npmcdn.com/angular-toastr/dist/angular-toastr.css" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/helpers.css">

	<script type="text/javascript" src="../js/todoService.js"></script>
	<script type="text/javascript" src="../js/mainRoutes.js"></script>
	<script type="text/javascript" src="../js/mainApp.js"></script>

</head>
<body ng-app="mainApp">
<div class="col">
    <div id="wrapper">

	    <!-- Page Content -->
	    <div id="page-content-wrapper">
	        <div class="container">
	            <ng-view></ng-view>
	        </div>
	    </div>
	    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>
</html>