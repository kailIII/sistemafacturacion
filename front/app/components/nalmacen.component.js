"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = require("@angular/core");
var router_1 = require("@angular/router");
// import {LoginComponent} from '../components/login.component';
// import {LoginService} from '../services/login.service';
// import {SolicitudService} from '../services/solicitud.service';
// import {TabMenuModule,MenuItem} from 'primeng/primeng';
var NalmacenComponent = (function () {
    // public identity;
    // public token;
    // public funcionario;
    // public errorMessage;
    // public status;
    // public info;
    // public datoMenu;
    // public datoMenuIteracion;
    // public datoMenuMostrar: Array<any>;
    // public NoMostrar;
    // public datoSol;
    // public datoSolIteracion;
    // public datoSolIteracion1;
    // public datoSolMostrar1: Array<any>;
    // public datociudadtodos;
    // public ciuIteracionl;
    // public ciuIteracion;
    // public ciu1;
    // public datosciudad;
    // public datoSolMostrar: Array<any>;
    // public datosciudad1;
    // public datociudadtodos1;
    // public datosciudad2;
    // public datociudadtodos2;
    // public datoSolMostrara: Array<any>;
    // public datoSolMostrarp: Array<any>;
    function NalmacenComponent(
        // 	private _loginService: LoginService,
        // 	private _solicitudService: SolicitudService,
        _router, _route) {
        this._router = _router;
        this._route = _route;
        this.titulo = "Componente Nuevo Almacen";
    }
    NalmacenComponent.prototype.ngOnInit = function () {
        // this.menuUsuario();
        // this.identity = this._loginService.getIdentity();
        // this.token = this._loginService.getToken();
        // this.funcionario = {
        // 	'fun_id': this.identity.sub
        // };
        // this.datoSolIteracion1 = {
        // 	'solId' : '',
        // 	'solIdsolicitud' : '',
        // 	'solFecharealizacion' : '',
        // 	'solEstado' : '',
        // 	'solCiudades' : '',
        // 	'perNombrecompleto' : ''
        // };
        // this.OnVerDetalleSol();
    };
    NalmacenComponent.prototype.OnMasSucursal = function () {
        this._router.navigate(['/sucursal']);
    };
    NalmacenComponent.prototype.OnGuardarAlmacen = function () {
        console.log("Se guardo la informacion de la sucursal");
        window.location.href = '/principal';
    };
    return NalmacenComponent;
}());
NalmacenComponent = __decorate([
    core_1.Component({
        selector: "nalmacen",
        templateUrl: "app/view/nalmacen.html" /*,
        providers: [LoginService, SolicitudService]*/
    }),
    __metadata("design:paramtypes", [router_1.Router,
        router_1.ActivatedRoute])
], NalmacenComponent);
exports.NalmacenComponent = NalmacenComponent;
//# sourceMappingURL=nalmacen.component.js.map