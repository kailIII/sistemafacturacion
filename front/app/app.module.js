"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = require("@angular/core");
var platform_browser_1 = require("@angular/platform-browser");
var http_1 = require("@angular/http");
var forms_1 = require("@angular/forms");
var app_component_1 = require("./app.component");
var login_component_1 = require("./components/login.component");
var principal_component_1 = require("./components/principal.component");
var app_routing_1 = require("./app.routing");
// import {EditorModule, SharedModule, MultiSelectModule,CalendarModule, DropdownModule,TabViewModule,DataTableModule, PanelModule} from 'primeng/primeng';
var common_1 = require("@angular/common");
// import { PdfViewerComponent } from 'ng2-pdf-viewer';
// import { DatePipe } from './pipes/formatDate.pipe';
// import {ModalModule} from "ng2-modal";
// import {FileUploadModule } from 'ng2-file-upload';
var AppModule = (function () {
    function AppModule() {
    }
    return AppModule;
}());
AppModule = __decorate([
    core_1.NgModule({
        imports: [
            platform_browser_1.BrowserModule,
            http_1.HttpModule,
            forms_1.FormsModule,
            app_routing_1.routing,
            common_1.CommonModule
            // ,
            // PanelModule,
            // DataTableModule,
            // EditorModule,
            // SharedModule,
            // MultiSelectModule,
            // CalendarModule,
            // DropdownModule,
            // TabViewModule,
            // FileUploadModule,
            // ModalModule
        ],
        declarations: [
            app_component_1.AppComponent,
            login_component_1.LoginComponent,
            principal_component_1.PrincipalComponent
        ],
        providers: [app_routing_1.appRoutingProviders],
        bootstrap: [app_component_1.AppComponent],
        schemas: [core_1.CUSTOM_ELEMENTS_SCHEMA]
    })
], AppModule);
exports.AppModule = AppModule;
//# sourceMappingURL=app.module.js.map