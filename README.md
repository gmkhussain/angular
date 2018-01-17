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
```javascript
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
```javascript
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

```javascript
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
```javascript
// in your component.TS file
ngAfterViewInit() {

     alert("do some java script");
	  
  }
```




### Bootstrap progress bar with angular 5
```javascript
//file.ts
public myWidth = 59;

//file.html
<div [style.width]="myWidth + '%'" >
```







### How to set Bootstrap navbar active class in Angular 5

```javascript
<ul class="nav navbar-nav">
  <li [routerLinkActive]="['active']"> <a [routerLink]="['home']">Home</a></li>
  <li [routerLinkActive]="['active']"> <a [routerLink]="['contact']">Contact</a></li>
</ul>
```






### How to add class on "first-child" and "last-child" with ngFor in Angular 5
```javascript
//[class.active]="index==0" //First Child
//[class.active]="first" //First Child
//[class.active]="last" //Last Child
<ul>
	<li *ngFor="let time of alarmlist.timeframe; let i = index; let first = first; let last = last" [attr.data-index]="i" [class.active]="last"></li>
</ul>
```




### Cannot find name 'jQuery' - Failed to compile Angular 5
```javascript
//add in typings.d.ts [Tested]
declare var $: any;
declare var jQuery: any;
```

```javascript
//Not Tested
npm install --save-dev

and then add

"types": [
"jquery"
]

in file tsconfig.json
```



### How to call function every 2 mins in Angular 5
```javascript
//name.component.ts
import {Observable} from 'rxjs/Rx';

  Observable.interval(2000 * 60).subscribe(x => {
    //doSomething();
	console.log("Observable message")
  });
```



### How to use *ngIf else in Angular 5
```javascript
<div *ngIf="store == open then hasContent else hasNoContent"></div>

<ng-template #hasContent> Store is Open </ng-template>
<ng-template #hasNoContent> Store is Closed </ng-template>
```






### How to create routing in Angular 5

Use the CLI to generate it. c:\projectName\src\app>
```javascript
 ng generate module app-routing --flat --module=app
	//--flat puts the file in src/app instead of its own folder.
	//--module=app tells the CLI to register it in the imports array of the AppModule.
```

<b>Output:</b> src/app/app-routing.module.ts (generated file)
<br/>
<b>Note:</b> Create component (page e.g about, contact)

#### app-routing.module.ts
```javascript
			import { NgModule }             from '@angular/core';
			import { RouterModule, Routes } from '@angular/router';
			import { AboutComponent }      from './about/about.component';
			import { ContactComponent }      from './contact/contact.component';

			const routes: Routes = [
			  { path: '', component: AboutComponent }, //Default Page
			  { path: 'about', component: AboutComponent },
			  { path: 'contact', component: ContactComponent }
			];

			@NgModule({
			  exports: [ RouterModule ],
			  imports: [ RouterModule.forRoot(routes) ]
			})

			export class AppRoutingModule {}
```


				
#### app.component.html
```html
		<h1>{{title}}</h1>
		<nav>
		  <a routerLink="/about">about</a>
		  <a routerLink="/contact">Contact</a>
		</nav>
		<router-outlet></router-outlet>
```




#### How to delete a component in Angular 5
```ng g c demoComponent``` It creates a separate folder named demoComponent.
It generate HTML,CSS,ts and a spec file dedicated to demoComponent.
Also, It adds dependency inside app.module.ts file to add that component to your project.

<b>so do it in reverse order</b>
Remove Dependency from ```app.module.ts```
Delete that component folder.




### How to load data from JSON to local file with http.get() in Angular 5

1. Inside your ```assets``` folder create a ```FileName.json``` file.

2. Go to ```angular.cli.json``` inside your project and inside the assets array put another object (after the package.json object) like this: (<b>Optional</b>)

```{ "glob": "FileName.json", "input": "./", "output": "./assets/" }```

full example from angular.cli.json
```javascript
"apps": [
    {
      "root": "src",
      "outDir": "dist",
      "assets": [
        "assets",
        "favicon.ico",
        { "glob": "package.json", "input": "../", "output": "./assets/" },
        { "glob": "FileName.json", "input": "./", "output": "./assets/" }
      ],
```


3. Now can access your file via localhost. http://localhost:your_port/assets/FileName.json


4. Now GET request to retrieve your .JSON file

```javascript
 constructor(private http: HttpClient) {}
        // Make the HTTP request:
        this.http.get('http://localhost:your_port/assets/data.json')
                 .subscribe(data => {
                   console.log(data)
                });
```




























# AngularJS


### Input value not visible in angularJS is ignored
```html
<input type="text" ng-model="InputName" ng-init="InputName='James Deo'" value="James Deo">
```



### If input value is blank, assign "some new value" value with AngularJS

```html
<div ng-app="app">
	<input ng-model="emailSubject"  placeholder="Email Subject" />

	<span ng-if="!emailSubject">New Message</span>
	<span ng-if="emailSubject">{{emailSubject}}</span>
</div>
```


### How to hide brackets until page loaded in AngularJS {{ }}
```html
//add class="ng-cloak" or ng-cloak to an element like this
<div class="ng-cloak">
	{{ something }}
</div>
```



### Select with JSON data in AngularJS with ng-options
```html
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
```html
	<select ng-options="selected.val for selected in lead.country" ng-model="customPerson">
		<option value="" disabled>Country</option>
	</select>
```