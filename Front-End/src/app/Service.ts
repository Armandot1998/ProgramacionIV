import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map } from "rxjs/operators";


  const url = "http://127.0.0.1:8000/products";
@Injectable({
  providedIn: 'root'
})
export class Service {

  private baseUrl = '/products';


  constructor(private http: HttpClient) { }
  private extractData(res: Response) {
    let body = res;
    return body || {};
  }

  getProducts() :Observable<any>  {
    return this.http.get(url).pipe(map(this.extractData));
    }

  getProductsList(): Observable<any> {
    return this.http.get(`${this.baseUrl}`);
  }

  getProductsById(id: number): Observable<any> {
    return this.http.get(`${url}/${id}`);
  }

  deleteAll(): Observable<any> {
    return this.http.delete(`${this.baseUrl}` + `/delete`, { responseType: 'text' });
  }
}
