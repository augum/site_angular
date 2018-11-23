import { Injectable } from '@angular/core';
import{Http,Headers,RequestOptions} from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class HotelService {
  server ='http://hotel:8080/';
  headers: Headers = new Headers;
  options : any;
  constructor(private _http:Http) {

    this.headers.append('enctype','multipart/form-data');
    this.headers.append('Content-Type','application/json');
    this.headers.append('X-Requested-with','XMLHttpRequest');
    this.options = new RequestOptions({headers: this.headers});
  }
  AddProfile(info){
    var data = JSON.stringify(info);

    return this._http.post(this.server+"insert",data,this.options).map(
        res=>res.json()
    );
  }
  showHotel(commune:string){
    return this._http.get(this.server+"select_hotel/"+commune)
        .map(resp => resp.json());
  }
  showDetail(id){
    return this._http.get(this.server+"select_detail/"+id).map(
        res => res.json()
    );
  }
}
