import { NgModule, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpModule, JsonpModule } from '@angular/http';
import { FormsModule } from '@angular/forms';

import { AppComponent }  from './app.component';
import {LoginComponent} from "./components/login.component";
import {PrincipalComponent} from "./components/principal.component";

import { routing, appRoutingProviders } from './app.routing';
// import {EditorModule, SharedModule, MultiSelectModule,CalendarModule, DropdownModule,TabViewModule,DataTableModule, PanelModule} from 'primeng/primeng';
import { CommonModule } from '@angular/common';
// import { PdfViewerComponent } from 'ng2-pdf-viewer';
// import { DatePipe } from './pipes/formatDate.pipe';
// import {ModalModule} from "ng2-modal";
// import {FileUploadModule } from 'ng2-file-upload';

@NgModule({
  imports:      [ 
              BrowserModule, 
              HttpModule, 
              FormsModule, 
              routing, 
              CommonModule
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
              AppComponent,
              LoginComponent,
              PrincipalComponent
  ],
  providers:    [ appRoutingProviders],
  bootstrap:    [ AppComponent ],
  schemas: [CUSTOM_ELEMENTS_SCHEMA ]

})

export class AppModule { }
