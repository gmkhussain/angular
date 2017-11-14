# AngularJS
==============

### Input value not visible in angularJS is ignored
```
<input type="text" ng-model="InputName" ng-init="InputName='James Deo'" value="James Deo">
```



### If input value is blank, assign "some new value" value with AngularJS

```
<div ng-app="app">
	<input ng-model="emailSubject"  placeholder="Email Subject" />

	<span ng-if="!emailSubject">New Message</span>
	<span ng-if="emailSubject">{{emailSubject}}</span>
</div>
```


### How to hide brackets until page loaded in AngularJS {{ }}
```
//add class="ng-cloak" or ng-cloak to an element like this
<div class="ng-cloak">
	{{ something }}
</div>
```



### Select with JSON data in AngularJS with ng-options
```
data.JSON
{
	"count": 2,
	"data": [{
		"name": "Alex Josh",
		"email": "alex@josh.com",
		"phone": "+11245457",
		"followup": "2017/10/18",
		
		
		"country": [
					  {
						"id": "1",
						"val": "Japan"
					  },
					  {
						"id": "2",
						"val": "China"
					  },
					  {
						"id": "3",
						"val": "UK"
					  }
					]
					
					
	}]
}
```

index.PHP
```
	<select ng-options="selected.val for selected in lead.country" ng-model="customPerson">
		<option value="" disabled>Country</option>
	</select>
```