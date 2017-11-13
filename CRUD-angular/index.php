<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <title>Webslesson Tutorial | AngularJS Tutorial with PHP - Delete Mysql Table Data</title>  
		   
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
      </head>  
      <body>  
		
           <br /><br />  
		   
		   
           <div class="container" style="width:500px;">  
                
				
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                     
					 <div class="alert">{{outPut}}</div>
		
					 <label>First Name</label>  
                     <input type="text" name="first_name" ng-model="firstname" class="form-control" />  
                     <br />  
                     <label>Last Name</label>  
                     <input type="text" name="last_name" ng-model="lastname" class="form-control" />  
                     <br />  
                     <input type="hidden" ng-model="id" />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}"/>  
                     <br /><br />  
					 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>First Name</th>  
                               <th>Last Name</th>  
                               <th>Update</th>  
                               <th>Delete</th>  
                          </tr>  
                          <tr ng-repeat="x in names">  
                               <td>{{x.first_name}}</td>  
                               <td>{{x.last_name}}</td>  
                               <td><button ng-click="updateData(x.id, x.first_name, x.last_name)" class="btn btn-info btn-xs">Update</button></td>  
                               <td><button ng-click="deleteData(x.id )"class="btn btn-danger btn-xs">Delete</button></td>  
                          </tr>  
                     </table> 
					 
                </div>  
				
				
		   <code>
		    --  
 -- Table structure for table `tbl_user`  
 --  
 CREATE TABLE IF NOT EXISTS `tbl_user` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `first_name` varchar(200) NOT NULL,  
  `last_name` varchar(200) NOT NULL,  
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;  
 --  
 -- Dumping data for table `tbl_user`  
 --  
 INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`) VALUES  
 (31, 'Tom', 'Cruze'),  
 (30, 'Bill', 'Gates'),  
 (29, 'John', 'Smith'),  
 (28, 'Big', 'Show'),  
 (27, 'Smith', 'Johnson'),  
 (26, 'The', 'Rock'),  
 (25, 'Peter', 'Parker'),  
 (18, 'Mark', 'John');  
 
 </code>
 
				
           </div>  
      </body>  
 </html>
 
 <script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      
	  $scope.btnName = "ADD";
	  
      
	  $scope.insertData = function(){  
           if($scope.firstname == null)  
           {  
                alert("First Name is required");  
           }  
           else if($scope.lastname == null)  
           {  
                alert("Last Name is required");  
           }  
           else  
           {  
                $http.post(  
                     "insert.php",  
                     {'firstname':$scope.firstname, 'lastname':$scope.lastname, 'btnName':$scope.btnName, 'id':$scope.id}  
                ).success(function(data){ 
                     alert(data);  
                     $scope.firstname = null;  
                     $scope.lastname = null;  
                     $scope.btnName = "ADD";
$scope.outPut ="ADDED"					 ;
                     $scope.displayData();  
                });  
           }  
      }
	  
	  
	  $scope.displayData = function(){  
           $http.get("select.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }
	  
      
	  
	  $scope.updateData = function(id, first_name, last_name){  
           $scope.id = id;  
           $scope.firstname = first_name;  
           $scope.lastname = last_name;  
           $scope.btnName = "Update";  
      }
	  
	  
      $scope.deleteData = function(id){
           if(confirm("Are you sure you want to delete this data?"))  
           {  
                $http.post("delete.php", {'id':id})  
                .success(function(data){  
                     alert(data);  
                     $scope.displayData();  
                });  
           }  
           else  
           {  
                return false;  
           }  
      }
	  
	  
 });  
 </script>  