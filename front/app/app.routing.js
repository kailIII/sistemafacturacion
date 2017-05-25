"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var router_1 = require("@angular/router");
var principal_component_1 = require("./components/principal.component");
var login_component_1 = require("./components/login.component");
// import { AppComponent }  from './app.component';
// import {AppComponent} from "./app.component";
var appRoutes = [
    {
        path: '',
        redirectTo: '/',
        pathMatch: 'full'
    },
    // {path: "/", component: LoginComponent},
    { path: "", component: login_component_1.LoginComponent },
    { path: "principal", component: principal_component_1.PrincipalComponent }
    // {path: "crear-restaurante", component: RestauranteAddComponent},
    // {path: "editar-restaurante/:id", component: RestauranteEditComponent},
    // {path: "donde-como-hoy/:random", component: RestaurantesDetailComponent},
];
exports.appRoutingProviders = [];
exports.routing = router_1.RouterModule.forRoot(appRoutes);
//# sourceMappingURL=app.routing.js.map