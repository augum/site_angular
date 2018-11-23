import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {Routes, RouterModule} from '@angular/router';

import { NavbarComponent } from './navbar/navbar.component';
import { AboutComponent } from './about/about.component';
import { RestaurantComponent } from './restaurant/restaurant.component';
import { SallefeteComponent } from './sallefete/sallefete.component';
import { DetailComponent } from './detail/detail.component';
import {CreationComponent} from "./creation/creation.component";


const routes:Routes =[
  {path:'', redirectTo:'/about',pathMatch:'full'},
  {path:'about', component:AboutComponent},
  {path:'restaurant', component:RestaurantComponent},
  {path:'sallefete', component:SallefeteComponent},
  {path:'detail/:id', component:DetailComponent},
  {path:'creation',component:CreationComponent}

];

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forRoot(routes)
  ],
  exports:[RouterModule],
  declarations: []
})
export class AppRoutingModule { }
