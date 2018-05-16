<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <h1>Todo List</h1>
        <form ng-submit="addTodos()">        	
	        <input ng-model="myinput" type="text" name="todo" placeholder="Enter your tasks" class="form-control input-lg">
        </form>             
    </div>
    <div class="col-lg-8 col-lg-offset-2">
    <br />
		<uib-tabset type="pills">
		    <uib-tab heading="Pending Tasks">
		    	<h3>Pending tasks</h3>

		    	<div class="row text-center" ng-hide="anyActiveTodos">
		    		<div class="col-md-12">
		    			<h3>No tasks for today</h3>
		    		</div>
		    	</div>

		    	<div class="col-lg-offset-1" ng-show="anyActiveTodos">
			    	<ul ng-repeat="list in lists" style="list-style-type: none;">
			    		<li>
				    		<div class="row">
				    			<div class="col-md-4">
				    				<input type="checkbox" name="check" ng-model="list.status" ng-click="done(list)"> 
				    				<span ng-class="{'task-crossout': showDone(list)}"> {{list.task}} </span>
				    			</div>
			    			</div>
			    		</li>
			    	</ul>
		    	</div>
		    </uib-tab>
		    <uib-tab heading="Completed Tasks">
		    	<h3>Completed tasks</h3>
		    	<div class="col-lg-offset-1">
			    	<ul ng-repeat="list in completedTodos" style="list-style-type: none;">
			    		<li>
				    		<div class="row">
				    			<div class="col-md-4">
				    				<span ng-class="{'task-crossout': showDone(list)}"> {{list.task}} </span>
				    			</div>
			    			</div>
			    		</li>
			    	</ul>
		    	</div>
		    </uib-tab>
		    <uib-tab heading="Show all Tasks">
		    	<h3>All tasks</h3>
		    	<div class="col-lg-offset-1">
			    	<ul ng-repeat="list in allTodos" style="list-style-type: none;">
			    		<li>
				    		<div class="row">
				    			<div class="col-md-4">
				    				<input type="checkbox" name="check" ng-model="showDone(list)" ng-click="done(list)" ng-show="!showDone(list)"> 
				    				<span ng-class="{'task-crossout': showDone(list)}"> {{list.task}} </span>
				    			</div>
			    			</div>
			    		</li>
			    	</ul>
		    	</div>
		    </uib-tab>
		    
		</uib-tabset>

    	
    </div>
</div>