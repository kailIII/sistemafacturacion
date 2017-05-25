import { ModuleWithProviders } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import {PrincipalComponent} from "./components/principal.component";
import {LoginComponent} from "./components/login.component";

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
	{path: "principal", component: PrincipalComponent}

	// {path: "crear-restaurante", component: RestauranteAddComponent},
	// {path: "editar-restaurante/:id", component: RestauranteEditComponent},
	// {path: "donde-como-hoy/:random", component: RestaurantesDetailComponent},
];

export const appRoutingProviders: any[] = [];

export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);