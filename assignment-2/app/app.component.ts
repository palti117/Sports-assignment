import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'ladder';
  headers = ["name", "roll"];
  rows = [{"name":"Berger 	Prince","roll":1},
  	{"name":"Earline Daugherty","roll":2},
  	{"name":"Lopez Weber","roll":3},
  	{"name":"Newman Porter","roll":4},
  	{"name":"Celina Ware","roll":5},
  	{"name":"Mcmillan Mooney","roll":6},
  	{"name":"Norton Walton","roll":7},
  	{"name":"England Raymond","roll":8},
  	{"name":"Davenport Dyer","roll":9},
  	{"name":"Dolores Frost","roll":10},
  	{"name":"Winters Baker","roll":11},
  	{"name":"Alexis Miranda","roll":12},
  	{"name":"Coleen Jacobson","roll":13},
  	{"name":"Eugenia Melton","roll":14},
  	{"name":"Elizabeth Strickland","roll":15},
  	{"name":"Merle Lyons","roll":16},
  	{"name":"Morgan Franks","roll":17},
  	{"name":"Nash Rollins","roll":18},
  	{"name":"Diann Tucker","roll":19},
  	{"name":"Oneil Ortiz","roll":20}
  	]
}
