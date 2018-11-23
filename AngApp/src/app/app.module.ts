import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import{FormsModule} from '@angular/forms';
import {AppRoutingModule} from './app-routing.module';


import { AppComponent } from './app.component';
import { AboutComponent } from './about/about.component';
import { NavbarComponent } from './navbar/navbar.component';
import { RestaurantComponent } from './restaurant/restaurant.component';
import { SallefeteComponent } from './sallefete/sallefete.component'

import{HotelService} from './services/hotel.service';
import{RestaurantService} from './services/restaurant.service';
import {SallefeteService} from "./services/sallefete.service";
import {HttpModule} from "@angular/http";
import { DetailComponent } from './detail/detail.component';
import { CreationComponent } from './creation/creation.component';



@NgModule({
  declarations: [
    AppComponent,
    AboutComponent,
    NavbarComponent,
    RestaurantComponent,
    SallefeteComponent,
    DetailComponent,
    CreationComponent,

  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpModule
  ],
  providers: [
    HotelService,
    RestaurantService,
    SallefeteService

  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
