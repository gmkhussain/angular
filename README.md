# <img src="https://cdn-images-1.medium.com/max/250/1*nWtdFBcmwNz0cRB8YidO0w.png" style="position: relative; top: 5px;" height="80" /> Angular (2+)


## Setup

<img src="https://jaystack.com/wp-content/uploads/2015/12/nodejs-logo-e1497443346889.png" height="24"/> NodeJS Required 

* Open command prompt 
* Install CLI: Type [`npm install -g @angular/cli`] press Enter
* Verification: Type [`ng --verison`] press Enter
* Create New Project: Type [`ng new project-name`] press Enter <b>Check folder</b>
* Now you can start coding...



### Recommanded IDE/Code Editor [Visual Studio Code](https://code.visualstudio.com)

<img src="https://cloud.githubusercontent.com/assets/11839736/16642200/6624dde0-43bd-11e6-8595-c81885ba0dc2.png" />



## Install Typescript
* [`npm install -g typescript`]
* [`tsc --version`]


### Typescript compile command
* [`tsc filename.ts`]


## How to edit index page

* App-folder>src>app>app.component.html 
* App-folder>src>app>app.component.ts 




## How to Run Application in Angular
* Open App folder
* Type [`ng serve`] press Enter
* Browser on http://localhost:4200/





## How fetch data from JSON format in Angular 4


### file: app.component.ts 
```
import { Component, Pipe, PipeTransform } from '@angular/core'; //make sure Pipe added


// AppComponent for JSON
export class AppComponent {

  title = 'My Data';
  dataJson = [
    {
      "name": "Jennifer Deo",
      "age": "32"
  },
  {
      "name": "Alex Josh",
      "age": "28"
  }
  ];
  myData = this.dataJson[0];
}
```



### file: app.component.html
```
<ul>
    <li *ngFor="let data of dataJson">
     Name:  {{ data.name }} <br/>
     Age:  {{ data.age }} 
    </li>
</ul>
```














# AngularJS


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