"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var router_1 = require("@angular/router");
var principal_component_1 = require("./components/principal.component");
var login_component_1 = require("./components/login.component");
var nalmacen_component_1 = require("./components/nalmacen.component");
var nlocal_component_1 = require("./components/nlocal.component");
var nempleado_component_1 = require("./components/nempleado.component");
var nproveedor_component_1 = require("./components/nproveedor.component");
var nproducto_component_1 = require("./components/nproducto.component");
var ncompra_component_1 = require("./components/ncompra.component");
var nventa_component_1 = require("./components/nventa.component");
var vinventario_component_1 = require("./components/vinventario.component");
var nsucursal_component_1 = require("./components/nsucursal.component");
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
    { path: "principal", component: principal_component_1.PrincipalComponent },
    { path: "almacen", component: nalmacen_component_1.NalmacenComponent },
    { path: "local", component: nlocal_component_1.NlocalComponent },
    { path: "empleado", component: nempleado_component_1.NempleadoComponent },
    { path: "proveedor", component: nproveedor_component_1.NproveedorComponent },
    { path: "producto", component: nproducto_component_1.NproductoComponent },
    { path: "compra", component: ncompra_component_1.NcompraComponent },
    { path: "venta", component: nventa_component_1.NventaComponent },
    { path: "inventario", component: vinventario_component_1.VinventarioComponent },
    { path: "sucursal", component: nsucursal_component_1.NsucursalComponent },
];
exports.appRoutingProviders = [];
exports.routing = router_1.RouterModule.forRoot(appRoutes);
//# sourceMappingURL=app.routing.js.map