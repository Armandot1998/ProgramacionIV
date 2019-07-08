import { Component, OnInit } from '@angular/core';
import { Product } from '../Product';
import { Service } from '../Service';

@Component({
  selector: 'search-customers',
  templateUrl: './Buscar-Producto.component.html',
  styleUrls: ['./Buscar-Producto.component.css']
})
export class BuscarComponent implements OnInit {

  id: number;
  products: Product[];

  constructor(private dataService: Service) { }

  ngOnInit() {
    this.id = 0;
  }

  private searchCustomers() {
    this.dataService.getProductsById(this.id)
      .subscribe(products => this.products = products);
  }

  onSubmit() {
    this.searchCustomers();
  }
}
