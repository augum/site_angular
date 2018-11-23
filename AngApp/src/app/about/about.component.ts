import { Component, OnInit } from '@angular/core';
import{HotelService} from '../services/hotel.service';
import{Hotel} from '../hotel';
import{ActivatedRoute, Params, Router} from '@angular/router';
import 'rxjs/add/operator/map';
import {Http} from "@angular/http";
import {isBoolean} from "util";
declare var $: any;

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.css']
})
export class AboutComponent implements OnInit {
  hotels:any;
  search:boolean= false;
  pagePhotos:any;
  commune:string='';
  constructor(
      private _hotelService: HotelService,
      private route: ActivatedRoute,
      private router: Router,

  ) { }

  ngOnInit() {
    //this.onCherche();
  }
  onCherche(dataForm){
     this.search=true;
    this._hotelService.showHotel(dataForm.commune)
        .subscribe(data=>{
          this.hotels = data;
          this.search= false;
        })

    console.log(dataForm);

  }
}
