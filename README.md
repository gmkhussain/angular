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





## How to Add Bootstrap to an Angular CLI project
* open [`cmd`]
* type [`npm install bootstrap@3.1.1`] press enter
* open [`.angular-cli.json`] file.

```
...
// find following code and add required files
...
	"styles": [
        "../node_modules/bootstrap/dist/css/bootstrap.min.css",
        "../src/assets/css/ionicons.min.css",
        "../src/assets/css/stylized.css",
        "styles.css"
      ],
      "scripts": [
        "../src/assets/js/jquery-2.2.4.min.js",
        "../node_modules/bootstrap/dist/js/bootstrap.min.js",
        "../src/assets/js/kodeized.js"
      ]
```



### How to add JS on component level in Angular 5
```
// in your component.TS file
ngAfterViewInit() {

     alert("do some java script");
	  
  }
```




### Bootstrap progress bar with angular 5
```
//file.ts
public myWidth = 59;

//file.html
<div [style.width]="myWidth + '%'" >
```







### How to set Bootstrap navbar active class in Angular 5

```
<ul class="nav navbar-nav">
  <li [routerLinkActive]="['active']"> <a [routerLink]="['home']">Home</a></li>
  <li [routerLinkActive]="['active']"> <a [routerLink]="['contact']">Contact</a></li>
</ul>
```






### How to add class on "first-child" and "last-child" with ngFor in Angular 5
```
//[class.active]="index==0" //First Child
//[class.active]="first" //First Child
//[class.active]="last" //Last Child
<ul>
	<li *ngFor="let time of alarmlist.timeframe; let i = index; let first = first; let last = last" [attr.data-index]="i" [class.active]="last"></li>
</ul>
```




### Cannot find name 'jQuery' - Failed to compile Angular 5
```
//add in typings.d.ts [Tested]
declare var $: any;
declare var jQuery: any;
```

```
//Not Tested
npm install --save-dev

and then add

"types": [
"jquery"
]

in file tsconfig.json
```



### How to call function every 2 mins in Angular 5
```
//name.component.ts
import {Observable} from 'rxjs/Rx';

  Observable.interval(2000 * 60).subscribe(x => {
    //doSomething();
	console.log("Observable message")
  });
```



### How to use *ngIf else in Angular 5

<div *ngIf="store == open then hasContent else hasNoContent"></div>

<ng-template #hasContent> Store is Open </ng-template>
<ng-template #hasNoContent> Store is Closed </ng-template>


























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