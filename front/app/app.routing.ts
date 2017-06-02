import { ModuleWithProviders } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import {PrincipalComponent} from "./components/principal.component";
import {LoginComponent} from "./components/login.component";
import {NalmacenComponent} from "./components/nalmacen.component";
import {NlocalComponent} from "./components/nlocal.component";
import {NempleadoComponent} from "./components/nempleado.component";
import {NproveedorComponent} from "./components/nproveedor.component";
import {NproductoComponent} from "./components/nproducto.component";
import {NcompraComponent} from "./components/ncompra.component";
import {NventaComponent} from "./components/nventa.component";
import {VinventarioComponent} from "./components/vinventario.component";
import {NsucursalComponent} from "./components/nsucursal.component";

// import { AppComponent }  from './app.component';

// import {AppComponent} from "./app.component";

const appRoutes: Routes = [
{
	path: '',
	redirectTo: '/',
	pathMatch: 'full'
},
// {path: "/", component: LoginComponent},
{path: "", component: LoginComponent},
{path: "principal", component: PrincipalComponent},
{path: "almacen", component: NalmacenComponent},
{path: "local", component: NlocalComponent},
{path: "empleado", component: NempleadoComponent},
{path: "proveedor", component: NproveedorComponent},
{path: "producto", component: NproductoComponent},
{path: "compra", component: NcompraComponent},
{path: "venta", component: NventaComponent},
{path: "inventario", component: VinventarioComponent},
{path: "sucursal", component: NsucursalComponent},
// {path: "crear-restaurante", component: RestauranteAddComponent},
// {path: "editar-restaurante/:id", component: RestauranteEditComponent},
// {path: "donde-como-hoy/:random", component: RestaurantesDetailComponent},
];

export const appRoutingProviders: any[] = [];

export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);