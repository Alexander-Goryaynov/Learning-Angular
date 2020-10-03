import { Injectable } from '@angular/core';
import { Product } from './product';
import { Observable, of } from 'rxjs';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ProductService {

  private productsUrl = 'http://localhost:80/fakeServer.php';

  constructor(private httpClient: HttpClient) { }

  getProduct(id: number): Observable<Product> {
    return this.httpClient.get<Product>(this.productsUrl + '?id=' + id.toString());
  }

  getProducts(): Observable<Product[]> {
    return this.httpClient.get<Product[]>(this.productsUrl);
  }
  /*
  POST-запрос выполняется так:
  httpOptions = { headers: new HttpHeaders({ 'Content-Type': 'application/json' })};
  this.http.post<Product>(this.productsUrl, product, httpOptions);
  */
}
