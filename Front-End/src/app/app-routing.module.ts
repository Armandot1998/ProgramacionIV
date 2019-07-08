import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { MostrarListComponent } from './Mostrar-lista/Mostrar-lista.component';
import { BuscarComponent } from './Buscar-Producto/Buscar-Producto.component';

const routes: Routes = [
    { path: '', redirectTo: 'customer', pathMatch: 'full' },
    { path: 'Lista', component: MostrarListComponent },
    { path: 'Buscar', component: BuscarComponent },
];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
})

export class AppRoutingModule { }
