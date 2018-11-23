import { Component, OnInit } from '@angular/core';
import{Hotel} from '../hotel';
import{HotelService} from '../services/hotel.service';
import{AboutComponent} from '../about/about.component';
import{ActivatedRoute, Params, Router} from '@angular/router';
declare var $: any;

@Component({
  selector: 'app-detail',
  templateUrl: './detail.component.html',
  styleUrls: ['./detail.component.css']
})
export class DetailComponent implements OnInit {
  hotel:Hotel;
  //about: AboutComponent;
  constructor(
      private _hotelService: HotelService,
      private route: ActivatedRoute,
      private router: Router

  ) { }

  ngOnInit() {
    this.detailHotel();
  }
  detailHotel(){
    var id = this.route.snapshot.params['id'];

    this._hotelService
        .showDetail(id)
        .subscribe(hotel=>{
          this.hotel = hotel[0];
          this.hotel.id= id;

        })
  }
  goback(){

    this.router.navigate(['/about']);
   // this.about.onCherche({commune:this.about.commune});
  }

}
