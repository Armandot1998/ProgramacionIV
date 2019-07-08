import { Component, OnInit } from '@angular/core';
import { Observable } from 'rxjs';

import { Service } from '../Service';
import { Product } from '../Product';

@Component({
  selector: 'Mostrar-lista',
  templateUrl: './Mostrar-lista.component.html',
  styleUrls: ['./Mostrar-lista.component.css']
})
export class MostrarListComponent implements OnInit {
  products: any = [];

  categories: Observable<Product[]>;

  constructor(private Service: Service) { }


  ngOnInit() {
    this. getCategories();
  }

  getCategories() {
    this.products = [];
    this.Service.getProducts().subscribe((data: {}) => {
      console.log(data);
      this.products = data;
    });
  }

  reloadData() {
    this.categories = this.Service.getProductsList();
  }
}
