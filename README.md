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