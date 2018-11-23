import { Component, OnInit } from '@angular/core';
import{HotelService} from '../services/hotel.service';
import{Hotel} from '../hotel';
import{ActivatedRoute, Params, Router} from '@angular/router';
import 'rxjs/add/operator/map';
import {Http} from "@angular/http";
import {isBoolean} from "util";

declare var $:  any;

@Component({
  selector: 'app-creation',
  templateUrl: './creation.component.html',
  styleUrls: ['./creation.component.css']
})
export class CreationComponent implements OnInit {

  constructor(
      private router:Router,
      private hotelService:HotelService,
  ) { }

  ngOnInit() {
  }
  model = new  Hotel();
  AddHotel(){
    this.hotelService
        .AddProfile(this.model)
        .subscribe(response =>{
          console.log(response);
          //this.messageService.showMessage("div#msg1","alert-info","new profile has been success","glyphicon-ok");
        })
  }
}
