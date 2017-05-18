/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     17/05/2017 18:43:50                          */
/*==============================================================*/


drop table if exists ACCESO_USUARIO;

drop table if exists ALMACEN;

drop table if exists ASIGNACION_PRODUCTO;

drop table if exists BAJA;

drop table if exists BANCO;

drop table if exists BANCO_CLIENTE;

drop table if exists CAJA;

drop table if exists CAJA_APERTURA;

drop table if exists CAJA_CIERRE;

drop table if exists CALENDARIO;

drop table if exists CARGO;

drop table if exists CHEQUE;

drop table if exists CLIENTE;

drop table if exists CLIENTE_CATEGORIA;

drop table if exists COMPRA;

drop table if exists CONSIGNACION;

drop table if exists CONTACTO_PROVEEDORA;

drop table if exists COTIZACION;

drop table if exists CREDITO;

drop table if exists CUENTA;

drop table if exists DETALLE_ASIGNACION;

drop table if exists DETALLE_BAJA;

drop table if exists DETALLE_CAJA_CIERRE;

drop table if exists DETALLE_COMPRA;

drop table if exists DETALLE_CONSIGNACION;

drop table if exists DETALLE_COTIZACION;

drop table if exists DETALLE_CREDITO;

drop table if exists DETALLE_DEVOLUCION;

drop table if exists DETALLE_EGRESO;

drop table if exists DETALLE_GASTO;

drop table if exists DETALLE_INGRESO;

drop table if exists DETALLE_MOVILIZACION_INGRESO;

drop table if exists DETALLE_MOVILIZACION_SALIDA;

drop table if exists DETALLE_PEDIDO;

drop table if exists DETALLE_VENTA;

drop table if exists DEVOLUCION;

drop table if exists DINERO_ELECTRONICO;

drop table if exists EFECTIVO;

drop table if exists EMPLEADO;

drop table if exists EMPLEADO_LOCAL;

drop table if exists EMPRESA_PROVEEDORA;

drop table if exists FACTURA_COMPRA;

drop table if exists FACTURA_VENTA;

drop table if exists FORMA_PAGO;

drop table if exists GASTO;

drop table if exists GEOREFERENCIA;

drop table if exists INVENTARIO_LOCAL;

drop table if exists LOCALIDAD;

drop table if exists LOCAL_SUCURSAL;

drop table if exists MODULO_SISTEMA;

drop table if exists MOVILIZACION;

drop table if exists NOTA_CREDITO;

drop table if exists NOTA_DEBITO;

drop table if exists PARAMETRO;

drop table if exists PARAMETRO_LOCAL;

drop table if exists PEDIDO;

drop table if exists PERFIL_USUARIO;

drop table if exists PERFIL_USUA_MOD_SIS;

drop table if exists PERMISOS_SISTEMA;

drop table if exists PRODUCTO;

drop table if exists PRODUCTO_EXTRA;

drop table if exists PROVINCIA;

drop table if exists SESION;

drop table if exists TIPO_CHEQUE;

drop table if exists TRANSFERENCIA;

drop table if exists VEHICULO;

drop table if exists VENTA;

/*==============================================================*/
/* Table: ACCESO_USUARIO                                        */
/*==============================================================*/
create table ACCESO_USUARIO
(
   ACC_ID               int not null,
   EMP_ID               int,
   ACC_NOMBREUSUARIO    varchar(20),
   ACC_CLAVEUSUARIO     varchar(20),
   primary key (ACC_ID)
);

/*==============================================================*/
/* Table: ALMACEN                                               */
/*==============================================================*/
create table ALMACEN
(
   ALM_ID               int not null,
   ALM_NOMBRE           varchar(60),
   ALM_RUC              char(13),
   ALM_WEB              varchar(50),
   ALM_MAIL             varchar(100),
   ALM_LOGO             text,
   primary key (ALM_ID)
);

/*==============================================================*/
/* Table: ASIGNACION_PRODUCTO                                   */
/*==============================================================*/
create table ASIGNACION_PRODUCTO
(
   ASIPRO_ID            int not null,
   PED_ID               int,
   ASIPRO_OBSERVACION   text,
   primary key (ASIPRO_ID)
);

/*==============================================================*/
/* Table: BAJA                                                  */
/*==============================================================*/
create table BAJA
(
   BAJ_ID               int not null,
   LOC_ID               int,
   BAJ_FECHA            timestamp,
   BAJ_OBSERVACION      varchar(100),
   primary key (BAJ_ID)
);

/*==============================================================*/
/* Table: BANCO                                                 */
/*==============================================================*/
create table BANCO
(
   BAN_ID               int not null,
   BAN_NOMBRE           char(30),
   BAN_DESCRIPCION      char(100),
   primary key (BAN_ID)
);

/*==============================================================*/
/* Table: BANCO_CLIENTE                                         */
/*==============================================================*/
create table BANCO_CLIENTE
(
   BANCLI_ID            int not null,
   CLI_ID               int,
   BAN_ID               int,
   BANCLI_DESCRIPCION   text,
   primary key (BANCLI_ID)
);

/*==============================================================*/
/* Table: CAJA                                                  */
/*==============================================================*/
create table CAJA
(
   CAJ_ID               int not null,
   LOC_ID               int,
   CAJ_FECHA            timestamp,
   CAJ_VALOR            float,
   CAJ_ESTADO           char(1),
   primary key (CAJ_ID)
);

/*==============================================================*/
/* Table: CAJA_APERTURA                                         */
/*==============================================================*/
create table CAJA_APERTURA
(
   CAJAPE_ID            int not null,
   CAJ_ID               int,
   CAJAPE_FECHA         timestamp,
   CAJAPE_1CENT         int,
   CAJAPE_5CENT         int,
   CAJAPE_10CENT        int,
   CAJAPE_25CENT        int,
   CAJAPE_50CENT        int,
   CAJAPE_1DOL          int,
   CAJAPE_2DOL          int,
   CAJAPE_5DOL          int,
   CAJAPE_10DOL         int,
   CAJAPE_20DOL         int,
   CAJAPE_50DOL         int,
   CAJAPE_100DOL        int,
   CAJAPE_TOTAL         float,
   primary key (CAJAPE_ID)
);

/*==============================================================*/
/* Table: CAJA_CIERRE                                           */
/*==============================================================*/
create table CAJA_CIERRE
(
   CIER_ID              int not null,
   VEN_ID               int,
   CAJ_ID               int,
   COM_ID               int,
   CIER_FECHA           timestamp,
   CIER_TOTAL           float,
   primary key (CIER_ID)
);

/*==============================================================*/
/* Table: CALENDARIO                                            */
/*==============================================================*/
create table CALENDARIO
(
   CAL_ID               int not null,
   CAL_FECHA            date,
   primary key (CAL_ID)
);

/*==============================================================*/
/* Table: CARGO                                                 */
/*==============================================================*/
create table CARGO
(
   CAR_ID               int not null,
   CAR_NOMBRE           varchar(100),
   CAR_DESCRIPCION      varchar(100),
   primary key (CAR_ID)
);

/*==============================================================*/
/* Table: CHEQUE                                                */
/*==============================================================*/
create table CHEQUE
(
   CHE_ID               int not null,
   TIPCHE_ID            int,
   CUE_ID               int,
   CHE_NUMEROCHEQUE     char(20),
   CHE_VALOR            float,
   CHE_FECHAPAGO        date,
   primary key (CHE_ID)
);

/*==============================================================*/
/* Table: CLIENTE                                               */
/*==============================================================*/
create table CLIENTE
(
   CLI_ID               int not null,
   CLICAT_ID            int,
   CLI_NOMBRE           char(30),
   CLI_APELLIDO         char(30),
   CLI_DIRECCION        char(100),
   CLI_IDENTIFICACION   char(13),
   CLI_TIPOIDENTIFICACION char(2),
   CLI_TELEFONO1        char(15),
   CLI_TELEFONO2        char(15),
   CLI_TELEFONO3        char(15),
   CLI_MAIL             char(50),
   primary key (CLI_ID)
);

/*==============================================================*/
/* Table: CLIENTE_CATEGORIA                                     */
/*==============================================================*/
create table CLIENTE_CATEGORIA
(
   CLICAT_ID            int not null,
   CLICAT_CANTIDAD      int,
   primary key (CLICAT_ID)
);

/*==============================================================*/
/* Table: COMPRA                                                */
/*==============================================================*/
create table COMPRA
(
   COM_ID               int not null,
   COM_FECHA            timestamp,
   COM_TOTAL            float,
   primary key (COM_ID)
);

/*==============================================================*/
/* Table: CONSIGNACION                                          */
/*==============================================================*/
create table CONSIGNACION
(
   CON_ID               int not null,
   LOC_ID               int,
   CLI_ID               int,
   CON_NUMERO           char(9),
   CON_SUBTOTAL         float,
   CON_IVA              int,
   CON_VALORIVA         float,
   CON_VALORIVA0        float,
   CON_ICE              int,
   CON_VALORICE         float,
   CON_DESCUENTO        float,
   CON_TOTAL            float,
   CON_FECHAEMISION     timestamp,
   CON_NUMEROPRODUCTO   int,
   CON_ESTADO           varchar(3),
   CON_SERIE            varchar(20),
   primary key (CON_ID)
);

/*==============================================================*/
/* Table: CONTACTO_PROVEEDORA                                   */
/*==============================================================*/
create table CONTACTO_PROVEEDORA
(
   CONPRO_ID            int not null,
   EMPPRO_ID            int,
   CONPRO_NOMBRE        varchar(30),
   CONPRO_APELLIDO      varchar(30),
   CONPRO_TELEFONO1     varchar(15),
   CONPRO_TELEFONO2     varchar(15),
   CONPRO_MAIL          varchar(50),
   CONPRO_DESCRIPCIONVISITA varchar(100),
   primary key (CONPRO_ID)
);

/*==============================================================*/
/* Table: COTIZACION                                            */
/*==============================================================*/
create table COTIZACION
(
   COT_ID               int not null,
   LOC_ID               int,
   CLI_ID               int,
   COT_NUMEROCOTIZACION char(9),
   COT_SUBTOTAL         float,
   COT_IVA              int,
   COT_VALORIVA         float,
   COT_VALORIVA0        float,
   COT_ICE              int,
   COT_VALORICE         float,
   COT_DESCUENTO        float,
   COT_TOTAL            float,
   COT_FECHAEMISION     date,
   COT_FECHAVALIDEZ     date,
   COT_NUMEROPRODUCTO   int,
   COT_ESTADO           varchar(3),
   COT_SERIE            varchar(20),
   primary key (COT_ID)
);

/*==============================================================*/
/* Table: CREDITO                                               */
/*==============================================================*/
create table CREDITO
(
   CRE_ID               int not null,
   CRE_NUMEROCUOTAS     int,
   CRE_FECHAMAXIMOPAGO  date,
   CRE_VALORDEUDA       float,
   CRE_ESTADO           char(1),
   primary key (CRE_ID)
);

/*==============================================================*/
/* Table: CUENTA                                                */
/*==============================================================*/
create table CUENTA
(
   CUE_ID               int not null,
   BAN_ID               int,
   CUE_NUMEROCUENTA     char(20),
   CUE_TIPOCUENTA       char(1),
   primary key (CUE_ID)
);

/*==============================================================*/
/* Table: DETALLE_ASIGNACION                                    */
/*==============================================================*/
create table DETALLE_ASIGNACION
(
   DETASI_ID            int not null,
   PRO_ID2              int,
   ASIPRO_ID            int,
   DETASI_CANTIDAD      int,
   primary key (DETASI_ID)
);

/*==============================================================*/
/* Table: DETALLE_BAJA                                          */
/*==============================================================*/
create table DETALLE_BAJA
(
   DETBAJ_ID            int not null,
   BAJ_ID               int,
   PRO_ID2              int,
   DETBAJ_CANTIDAD      int,
   DETBAJ_MOTIVOS       varchar(100),
   primary key (DETBAJ_ID)
);

/*==============================================================*/
/* Table: DETALLE_CAJA_CIERRE                                   */
/*==============================================================*/
create table DETALLE_CAJA_CIERRE
(
   DETCIE_ID            int not null,
   CIER_ID              int,
   DETCIE_FECHA         timestamp,
   DETCIE_1CENT         int,
   DETCIE_5CENT         int,
   DETCIE_10CENT        int,
   DETCIE_25CENT        int,
   DETCIE_50CENT        int,
   DETCIE_1DOL          int,
   DETCIE_2DOL          int,
   DETCIE_5DOL          int,
   DETCIE_10DOL         int,
   DETCIE_20DOL         int,
   DETCIE_50DOL         int,
   DETCIE_100DOL        int,
   DETCIE_TOTAL         float,
   primary key (DETCIE_ID)
);

/*==============================================================*/
/* Table: DETALLE_COMPRA                                        */
/*==============================================================*/
create table DETALLE_COMPRA
(
   DETCOM_ID            int not null,
   PRO_ID               int not null,
   PRO_ID2              int,
   FACCOM_ID            int,
   DETCOM_CANTIDAD      int,
   DETCOM_COSTOUNITARIO float,
   DETCOM_COSTOTOTAL    float,
   primary key (DETCOM_ID, PRO_ID)
);

/*==============================================================*/
/* Table: DETALLE_CONSIGNACION                                  */
/*==============================================================*/
create table DETALLE_CONSIGNACION
(
   DETCON_ID            int not null,
   CON_ID               int,
   PRO_ID2              int,
   DETCON_CANTIDAD      int,
   DETCON_VALORUNITARIO float,
   DETCON_VALORTOTAL    float,
   primary key (DETCON_ID)
);

/*==============================================================*/
/* Table: DETALLE_COTIZACION                                    */
/*==============================================================*/
create table DETALLE_COTIZACION
(
   DETCOT_ID            int not null,
   COT_ID               int,
   PRO_ID2              int,
   DETCOT_CANTIDAD      float,
   DETCOT_VALORUNITARIO float,
   DETCOT_VALORTOTAL    float,
   primary key (DETCOT_ID)
);

/*==============================================================*/
/* Table: DETALLE_CREDITO                                       */
/*==============================================================*/
create table DETALLE_CREDITO
(
   DETCRE_ID            int not null,
   FORPAG_ID            int,
   CRE_ID               int,
   DETCRE_NUMEROCUOTA   int,
   DETCRE_VALORPAGADO   float,
   DETCRE_FECHAPAGADO   timestamp,
   DETCRE_SALDODEUDA    float,
   primary key (DETCRE_ID)
);

/*==============================================================*/
/* Table: DETALLE_DEVOLUCION                                    */
/*==============================================================*/
create table DETALLE_DEVOLUCION
(
   DETDEV_ID            int not null,
   DEV_ID               int,
   PRO_ID2              int,
   DETDEV_CANTIDAD      int,
   DETDEV_MOTIVO        text,
   primary key (DETDEV_ID)
);

/*==============================================================*/
/* Table: DETALLE_EGRESO                                        */
/*==============================================================*/
create table DETALLE_EGRESO
(
   DETEGR_ID            int not null,
   COM_ID               int,
   primary key (DETEGR_ID)
);

/*==============================================================*/
/* Table: DETALLE_GASTO                                         */
/*==============================================================*/
create table DETALLE_GASTO
(
   DETGAS_ID            int not null,
   GAS_ID               int,
   PROEXT_ID            int,
   DETGAS_CANTIDAD      int,
   DETGAS_VALORUNITARIO float,
   DETGAS_VALORTOTAL    float,
   primary key (DETGAS_ID)
);

/*==============================================================*/
/* Table: DETALLE_INGRESO                                       */
/*==============================================================*/
create table DETALLE_INGRESO
(
   DETING_ID            int not null,
   VEN_ID               int,
   primary key (DETING_ID)
);

/*==============================================================*/
/* Table: DETALLE_MOVILIZACION_INGRESO                          */
/*==============================================================*/
create table DETALLE_MOVILIZACION_INGRESO
(
   DETMOVI_ID           int not null,
   MOV_ID               int,
   PRO_ID2              int,
   primary key (DETMOVI_ID)
);

/*==============================================================*/
/* Table: DETALLE_MOVILIZACION_SALIDA                           */
/*==============================================================*/
create table DETALLE_MOVILIZACION_SALIDA
(
   DETMOVS_ID           int not null,
   MOV_ID               int,
   PRO_ID2              int,
   primary key (DETMOVS_ID)
);

/*==============================================================*/
/* Table: DETALLE_PEDIDO                                        */
/*==============================================================*/
create table DETALLE_PEDIDO
(
   DETPED_ID            int not null,
   PED_ID               int,
   PRO_ID2              int,
   DETPED_CANTIDAD      int,
   primary key (DETPED_ID)
);

/*==============================================================*/
/* Table: DETALLE_VENTA                                         */
/*==============================================================*/
create table DETALLE_VENTA
(
   DETVEN_ID            int not null,
   FACVEN_ID            int,
   PRO_ID2              int,
   DETVEN_CANTIDAD      int,
   DETVEN_VALORUNITARIO float,
   DETVEN_VALORTOTAL    float,
   primary key (DETVEN_ID)
);

/*==============================================================*/
/* Table: DEVOLUCION                                            */
/*==============================================================*/
create table DEVOLUCION
(
   DEV_ID               int not null,
   CLI_ID               int,
   LOC_ID               int,
   DEV_FECHA            timestamp,
   DEV_MOTIVOS          text,
   primary key (DEV_ID)
);

/*==============================================================*/
/* Table: DINERO_ELECTRONICO                                    */
/*==============================================================*/
create table DINERO_ELECTRONICO
(
   DINELE_ID            int not null,
   DINELE_CELULAR       char(13),
   DINELE_VALOR         float,
   DINELE_FECHAPAGO     date,
   DINELE_HORAPAGO      time,
   DINELE_ESTADO        char(3),
   primary key (DINELE_ID)
);

/*==============================================================*/
/* Table: EFECTIVO                                              */
/*==============================================================*/
create table EFECTIVO
(
   EFE_ID               int not null,
   EFE_VALOR            float,
   primary key (EFE_ID)
);

/*==============================================================*/
/* Table: EMPLEADO                                              */
/*==============================================================*/
create table EMPLEADO
(
   EMP_ID               int not null,
   EMP_NOMBRE           varchar(30),
   EMP_APELLIDO         varchar(30),
   EMP_DIRECCION        text,
   EMP_TELEFONO1        varchar(15),
   EMP_TELEFONO2        varchar(15),
   EMP_TIPOSANGRE       varchar(5),
   EMP_CORREO           varchar(50),
   EMP_AVISAREMERGENCIA varchar(50),
   EMP_TELEFONOEMERGENCIA varchar(50),
   EMP_PARENTEZCOEMERGENCIA varchar(20),
   EMP_DESCRIPCIONALERGIAS text,
   EMP_DESCRIPCIONGENERAL text,
   EMP_ESTADO           char(1),
   EMP_FECHANACIMIENTO  date,
   primary key (EMP_ID)
);

/*==============================================================*/
/* Table: EMPLEADO_LOCAL                                        */
/*==============================================================*/
create table EMPLEADO_LOCAL
(
   EMPLOC_ID            int not null,
   CAR_ID               int,
   EMP_ID               int,
   LOC_ID               int,
   EMPLOC_FECHAINGRESO  date,
   EMPLOC_FECHASALIDA   date,
   EMPLOC_MOTIVOSALIDA  varchar(100),
   EMPLOC_ESTADO        char(1),
   primary key (EMPLOC_ID)
);

/*==============================================================*/
/* Table: EMPRESA_PROVEEDORA                                    */
/*==============================================================*/
create table EMPRESA_PROVEEDORA
(
   EMPPRO_ID            int not null,
   EMPPRO_NOMBRE        varchar(60),
   EMPPRO_DIRECCION     text,
   EMPPRO_TELEFONO1     varchar(20),
   EMPPRO_TELEFONO2     varchar(20),
   EMPPRO_RUC           char(13),
   EMPPRO_CIUDAD        varchar(50),
   EMPPRO_RAZONSOCIAL   varchar(50),
   EMPPRO_FAX           varchar(20),
   EMPPRO_MAIL          varchar(50),
   primary key (EMPPRO_ID)
);

/*==============================================================*/
/* Table: FACTURA_COMPRA                                        */
/*==============================================================*/
create table FACTURA_COMPRA
(
   FACCOM_ID            int not null,
   FORPAG_ID            int,
   LOC_ID               int,
   EMPPRO_ID            int,
   FACCOM_NUMEROFACTURA char(9),
   FACCOM_SUBTOTAL      float,
   FACCOM_IVA           float,
   FACCOM_VALORIVA      float,
   FACCOM_VALORIVA0     float,
   FACCOM_ICE           float,
   FACCOM_VALORICE      float,
   FACCOM_DESCUENTO     float,
   FACCOM_TOTAL         float,
   FACCOM_FECHA         date,
   FACCOM_NUMEROPRODUCTOS int,
   FACCOM_ESTADO        char(3),
   FACCOM_SERIE         char(20),
   FACCOM_TIPODOC       char(3),
   primary key (FACCOM_ID)
);

/*==============================================================*/
/* Table: FACTURA_VENTA                                         */
/*==============================================================*/
create table FACTURA_VENTA
(
   FACVEN_ID            int not null,
   CLI_ID               int,
   FORPAG_ID            int,
   LOC_ID               int,
   FACVEN_NUMEROFACTURA char(9),
   FACVEN_SUBTOTAL      float,
   FACVEN_IVA           float,
   FACVEN_VALORIVA      float,
   FACVEN_VALORIVA0     float,
   FACVEN_ICE           float,
   FACVEN_VALORICE      float,
   FACVEN_DESCUENTO     float,
   FACVEN_TOTAL         float,
   FACVEN_FECHA         date,
   FACVEN_NUMEROPRODUCTOS int,
   FACVEN_ESTADO        char(3),
   FACVEN_SERIE         char(20),
   primary key (FACVEN_ID)
);

/*==============================================================*/
/* Table: FORMA_PAGO                                            */
/*==============================================================*/
create table FORMA_PAGO
(
   FORPAG_ID            int not null,
   CRE_ID               int,
   EFE_ID               int,
   NOTCRE_ID            int,
   DINELE_ID            int,
   NOTCRE_ID2           int,
   CHE_ID               int,
   TRA_ID               int,
   FORPAG_TOTAL         float,
   FORPAG_FECHA         date,
   FORPAG_ESTADO        char(3),
   primary key (FORPAG_ID)
);

/*==============================================================*/
/* Table: GASTO                                                 */
/*==============================================================*/
create table GASTO
(
   GAS_ID               int not null,
   LOCA_ID              int,
   EMPLOC_ID            int,
   LOC_ID               int,
   GAS_NUMERO           char(9),
   GAS_FECHA            date,
   GAS_SUBTOTAL         float,
   GAS_IVA              int,
   GAS_VALORIVA         float,
   GAS_VALORIVA0        float,
   GAS_ICE              int,
   GAS_VALORICE         float,
   GAS_DESCUENTO        float,
   GAS_TOTAL            float,
   GAS_ESTADO           char(3),
   primary key (GAS_ID)
);

/*==============================================================*/
/* Table: GEOREFERENCIA                                         */
/*==============================================================*/
create table GEOREFERENCIA
(
   GEO_ID               int not null,
   GEO_CIUDAD           varchar(100),
   GEO_PROVINCIA        varchar(100),
   GEO_REGION           varchar(100),
   GEO_PAIS             varchar(100),
   GEO_SECTOR           text,
   primary key (GEO_ID)
);

/*==============================================================*/
/* Table: INVENTARIO_LOCAL                                      */
/*==============================================================*/
create table INVENTARIO_LOCAL
(
   INVLOC_ID            int not null,
   DETCOM_ID            int,
   PRO_ID               int,
   DETBAJ_ID            int,
   DETMOVS_ID           int,
   DETCON_ID            int,
   DETASI_ID            int,
   DETMOVI_ID           int,
   DETVEN_ID            int,
   PRO_ID2              int,
   DETDEV_ID            int,
   LOC_ID               int,
   INVLOC_CANTIDADMOVIMIENTO int,
   INVLOC_TIPOMOVIMIENTO char(2),
   INVLOC_STOCKREALES   int,
   INVLOC_STOCKSINCONSIGNACION int,
   INVLOC_FECHAREGISTRO date,
   INVLOC_COSTOUNITARIO float,
   INVLOC_COSTOTOTAL    float,
   INVLOC_PVPSUGERIDO   float,
   INVLOC_LOCALORIGEN   int,
   INVLOC_LOCALDESTINO  int,
   primary key (INVLOC_ID)
);

/*==============================================================*/
/* Table: LOCALIDAD                                             */
/*==============================================================*/
create table LOCALIDAD
(
   LOCA_ID              int not null,
   PROV_ID              int,
   LOCA_NOMBRE          varchar(60),
   primary key (LOCA_ID)
);

/*==============================================================*/
/* Table: LOCAL_SUCURSAL                                        */
/*==============================================================*/
create table LOCAL_SUCURSAL
(
   LOC_ID               int not null,
   GEO_ID               int,
   PARLOC_ID            int,
   ALM_ID               int,
   LOC_NOMBRE           char(60),
   LOC_DIRECCION        text,
   LOC_ESTADO           char(1),
   LOC_FAX              varchar(20),
   LOC_TELEFONO1        varchar(20),
   LOC_TELEFONO2        varchar(20),
   LOC_DESCRIPCION      varchar(150),
   LOC_CODIGO           varchar(15),
   LOC_FECHAINAGURACION date,
   LOC_FECHACIERRE      date,
   LOC_MATRIZ_O_SUCURSAL char(1),
   LOC_RUC              char(13),
   LOC_MAIL             varchar(100),
   primary key (LOC_ID)
);

/*==============================================================*/
/* Table: MODULO_SISTEMA                                        */
/*==============================================================*/
create table MODULO_SISTEMA
(
   MODSIS_ID            int not null,
   MODSIS_NOMBRE        varchar(50),
   MODSIS_PADRE         int,
   MODSIS_UBICACION     varchar(200),
   MODSIS_ESTADO        char(1),
   MODSIS_NOMBREMOSTRAR varchar(50),
   primary key (MODSIS_ID)
);

/*==============================================================*/
/* Table: MOVILIZACION                                          */
/*==============================================================*/
create table MOVILIZACION
(
   MOV_ID               int not null,
   LOCA_ID              int,
   CAL_ID               int,
   VEH_ID               int,
   MOV_RUTA             varchar(100),
   MOV_ESTADO           char(1),
   primary key (MOV_ID)
);

/*==============================================================*/
/* Table: NOTA_CREDITO                                          */
/*==============================================================*/
create table NOTA_CREDITO
(
   NOTCRE_ID            int not null,
   primary key (NOTCRE_ID)
);

/*==============================================================*/
/* Table: NOTA_DEBITO                                           */
/*==============================================================*/
create table NOTA_DEBITO
(
   NOTCRE_ID2           int not null,
   primary key (NOTCRE_ID2)
);

/*==============================================================*/
/* Table: PARAMETRO                                             */
/*==============================================================*/
create table PARAMETRO
(
   PAR_ID               int not null,
   PAR_NOMBRE           varchar(100),
   PAR_TIPO             varchar(10),
   PAR_FECHAREGISTRO    date,
   PAR_ESTADOACTIVO     char(1),
   primary key (PAR_ID)
);

/*==============================================================*/
/* Table: PARAMETRO_LOCAL                                       */
/*==============================================================*/
create table PARAMETRO_LOCAL
(
   PARLOC_ID            int not null,
   PAR_ID               int,
   PARLOC_VALOR         float,
   PARLOC_FECHAHABILITADO date,
   PARLOC_FECHADESHABILITADO date,
   PARLOC_ESTADO        char(1),
   primary key (PARLOC_ID)
);

/*==============================================================*/
/* Table: PEDIDO                                                */
/*==============================================================*/
create table PEDIDO
(
   PED_ID               int not null,
   LOC_ID               int,
   PED_FECHAEMISION     date,
   PED_OBSERVACION      text,
   LOC_DESTINO          int,
   primary key (PED_ID)
);

/*==============================================================*/
/* Table: PERFIL_USUARIO                                        */
/*==============================================================*/
create table PERFIL_USUARIO
(
   PERUSU_ID            int not null,
   PERUSU_NOMBRE        varchar(30),
   PERUSU_DESCRIPCION   varchar(100),
   primary key (PERUSU_ID)
);

/*==============================================================*/
/* Table: PERFIL_USUA_MOD_SIS                                   */
/*==============================================================*/
create table PERFIL_USUA_MOD_SIS
(
   PUMS_ID              int not null,
   MODSIS_ID            int,
   PERUSU_ID            int,
   PUMS_DESCRIPCION     varchar(150),
   primary key (PUMS_ID)
);

/*==============================================================*/
/* Table: PERMISOS_SISTEMA                                      */
/*==============================================================*/
create table PERMISOS_SISTEMA
(
   PERSIS_ID            int not null,
   EMPLOC_ID            int,
   PUMS_ID              int,
   PERSIS_FECHAINICIO   date,
   PERSIS_FECHAFIN      date,
   PERSIS_MOTIVOSFIN    text,
   PERSIS_ESTADO        char(1),
   primary key (PERSIS_ID)
);

/*==============================================================*/
/* Table: PRODUCTO                                              */
/*==============================================================*/
create table PRODUCTO
(
   PRO_ID2              int not null,
   PRO_CODIGO           char(20),
   PRO_FECHAREGISTRO    date,
   PRO_ESTADO           char(13),
   PRO_NOMBRE           char(50),
   PRO_CONTENIDO        char(10),
   PRO_DESCRIPCION      char(100),
   PRO_TIPOUSO          char(10),
   PRO_GRAVAIVA         char(1),
   PRO_GRAVAICE         char(1),
   PRO_FECHAELABORACION date,
   PRO_FECHACADUCIDAD   date,
   PRO_CODIGOPROV       char(30),
   PRO_TIPO             char(1),
   primary key (PRO_ID2)
);

/*==============================================================*/
/* Table: PRODUCTO_EXTRA                                        */
/*==============================================================*/
create table PRODUCTO_EXTRA
(
   PROEXT_ID            int not null,
   PROEXT_NOMBRE        varchar(30),
   PROEXT_DESCRIPCION   varchar(70),
   PROEXT_TIPO          varchar(10),
   primary key (PROEXT_ID)
);

/*==============================================================*/
/* Table: PROVINCIA                                             */
/*==============================================================*/
create table PROVINCIA
(
   PROV_ID              int not null,
   PROV_NOMBRE          varchar(60),
   PROV_REGION          varchar(10),
   primary key (PROV_ID)
);

/*==============================================================*/
/* Table: SESION                                                */
/*==============================================================*/
create table SESION
(
   SES_ID               int not null,
   EMPLOC_ID            int,
   SES_FECHAINGRESO     date,
   SES_NUMINTENTO       int,
   SES_HORAINGRESO      time,
   SES_DESCRIPCIONINGRESO text,
   primary key (SES_ID)
);

/*==============================================================*/
/* Table: TIPO_CHEQUE                                           */
/*==============================================================*/
create table TIPO_CHEQUE
(
   TIPCHE_ID            int not null,
   TIPCHE_NOMBRE        varchar(15),
   primary key (TIPCHE_ID)
);

/*==============================================================*/
/* Table: TRANSFERENCIA                                         */
/*==============================================================*/
create table TRANSFERENCIA
(
   TRA_ID               int not null,
   CUE_ID               int,
   TRA_NUMERODOCUMENTO  char(20),
   TRA_FECHA            date,
   TRA_VALOR            float,
   primary key (TRA_ID)
);

/*==============================================================*/
/* Table: VEHICULO                                              */
/*==============================================================*/
create table VEHICULO
(
   VEH_ID               int not null,
   VEH_TIPO             varchar(15),
   VEH_MODELO           varchar(20),
   VEH_CILINDRAJE       varchar(15),
   VEH_TONELAJE         varchar(15),
   primary key (VEH_ID)
);

/*==============================================================*/
/* Table: VENTA                                                 */
/*==============================================================*/
create table VENTA
(
   VEN_ID               int not null,
   VEN_FECHA            timestamp,
   VEN_TOTAL            float,
   primary key (VEN_ID)
);

alter table ACCESO_USUARIO add constraint FK_EMP_ACCUSU foreign key (EMP_ID)
      references EMPLEADO (EMP_ID) on delete restrict on update restrict;

alter table ASIGNACION_PRODUCTO add constraint FK_PED_ASIPRO foreign key (PED_ID)
      references PEDIDO (PED_ID) on delete restrict on update restrict;

alter table BAJA add constraint FK_LOCSUC_BAJ foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID) on delete restrict on update restrict;

alter table BANCO_CLIENTE add constraint FK_BAN_BANCLI foreign key (BAN_ID)
      references BANCO (BAN_ID) on delete restrict on update restrict;

alter table BANCO_CLIENTE add constraint FK_CLI_BANCLI foreign key (CLI_ID)
      references CLIENTE (CLI_ID) on delete restrict on update restrict;

alter table CAJA add constraint FK_LOCSUC_CAJ foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID) on delete restrict on update restrict;

alter table CAJA_APERTURA add constraint FK_CAJ_CAJAPE foreign key (CAJ_ID)
      references CAJA (CAJ_ID) on delete restrict on update restrict;

alter table CAJA_CIERRE add constraint FK_CAJ_CAJCIE foreign key (CAJ_ID)
      references CAJA (CAJ_ID) on delete restrict on update restrict;

alter table CAJA_CIERRE add constraint FK_COM_CAJCIE foreign key (COM_ID)
      references COMPRA (COM_ID) on delete restrict on update restrict;

alter table CAJA_CIERRE add constraint FK_VEN_CAJCIE foreign key (VEN_ID)
      references VENTA (VEN_ID) on delete restrict on update restrict;

alter table CHEQUE add constraint FK_CUE_CHE foreign key (CUE_ID)
      references CUENTA (CUE_ID) on delete restrict on update restrict;

alter table CHEQUE add constraint FK_TIPCHE_CHE foreign key (TIPCHE_ID)
      references TIPO_CHEQUE (TIPCHE_ID) on delete restrict on update restrict;

alter table CLIENTE add constraint FK_CLICAT_CLI foreign key (CLICAT_ID)
      references CLIENTE_CATEGORIA (CLICAT_ID) on delete restrict on update restrict;

alter table CONSIGNACION add constraint FK_CLI_CON foreign key (CLI_ID)
      references CLIENTE (CLI_ID) on delete restrict on update restrict;

alter table CONSIGNACION add constraint FK_LOCSUC_CON foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID) on delete restrict on update restrict;

alter table CONTACTO_PROVEEDORA add constraint FK_EMPPRO_CONPRO foreign key (EMPPRO_ID)
      references EMPRESA_PROVEEDORA (EMPPRO_ID) on delete restrict on update restrict;

alter table COTIZACION add constraint FK_CLI_COT foreign key (CLI_ID)
      references CLIENTE (CLI_ID) on delete restrict on update restrict;

alter table COTIZACION add constraint FK_LOCSUC_COT foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID) on delete restrict on update restrict;

alter table CUENTA add constraint FK_BAN_CUE foreign key (BAN_ID)
      references BANCO (BAN_ID) on delete restrict on update restrict;

alter table DETALLE_ASIGNACION add constraint FK_ASIPRO_DETASI foreign key (ASIPRO_ID)
      references ASIGNACION_PRODUCTO (ASIPRO_ID) on delete restrict on update restrict;

alter table DETALLE_ASIGNACION add constraint FK_PRO_DETASI foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2) on delete restrict on update restrict;

alter table DETALLE_BAJA add constraint FK_BAJ_DETBAJ foreign key (BAJ_ID)
      references BAJA (BAJ_ID) on delete restrict on update restrict;

alter table DETALLE_BAJA add constraint FK_PRO_DETBAJ foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2) on delete restrict on update restrict;

alter table DETALLE_CAJA_CIERRE add constraint FK_CAJCIE_DETCAJCIE foreign key (CIER_ID)
      references CAJA_CIERRE (CIER_ID) on delete restrict on update restrict;

alter table DETALLE_COMPRA add constraint FK_FACCOM_DETCOM foreign key (FACCOM_ID)
      references FACTURA_COMPRA (FACCOM_ID) on delete restrict on update restrict;

alter table DETALLE_COMPRA add constraint FK_PRO_DETCOM foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2) on delete restrict on update restrict;

alter table DETALLE_CONSIGNACION add constraint FK_CON_DETCON foreign key (CON_ID)
      references CONSIGNACION (CON_ID) on delete restrict on update restrict;

alter table DETALLE_CONSIGNACION add constraint FK_PRO_DETCON foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2) on delete restrict on update restrict;

alter table DETALLE_COTIZACION add constraint FK_COT_DETCOT foreign key (COT_ID)
      references COTIZACION (COT_ID) on delete restrict on update restrict;

alter table DETALLE_COTIZACION add constraint FK_PRO_DETCOT foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2) on delete restrict on update restrict;

alter table DETALLE_CREDITO add constraint FK_CRE_DETCRE foreign key (CRE_ID)
      references CREDITO (CRE_ID) on delete restrict on update restrict;

alter table DETALLE_CREDITO add constraint FK_FORPAG_DETCRE foreign key (FORPAG_ID)
      references FORMA_PAGO (FORPAG_ID) on delete restrict on update restrict;

alter table DETALLE_DEVOLUCION add constraint FK_DEV_DETDEV foreign key (DEV_ID)
      references DEVOLUCION (DEV_ID) on delete restrict on update restrict;

alter table DETALLE_DEVOLUCION add constraint FK_PRO_DETDEV foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2) on delete restrict on update restrict;

alter table DETALLE_EGRESO add constraint FK_COM_DETEGR foreign key (COM_ID)
      references COMPRA (COM_ID) on delete restrict on update restrict;

alter table DETALLE_GASTO add constraint FK_GAS_DETGAS foreign key (GAS_ID)
      references GASTO (GAS_ID) on delete restrict on update restrict;

alter table DETALLE_GASTO add constraint FK_PROEXT_DETGAS foreign key (PROEXT_ID)
      references PRODUCTO_EXTRA (PROEXT_ID) on delete restrict on update restrict;

alter table DETALLE_INGRESO add constraint FK_VEN_DETING foreign key (VEN_ID)
      references VENTA (VEN_ID) on delete restrict on update restrict;

alter table DETALLE_MOVILIZACION_INGRESO add constraint FK_MOV_DETMOVING foreign key (MOV_ID)
      references MOVILIZACION (MOV_ID) on delete restrict on update restrict;

alter table DETALLE_MOVILIZACION_INGRESO add constraint FK_PRO_DETMOVING foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2) on delete restrict on update restrict;

alter table DETALLE_MOVILIZACION_SALIDA add constraint FK_MOV_DETMOVSAL foreign key (MOV_ID)
      references MOVILIZACION (MOV_ID) on delete restrict on update restrict;

alter table DETALLE_MOVILIZACION_SALIDA add constraint FK_PRO_DETMOVSAL foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2) on delete restrict on update restrict;

alter table DETALLE_PEDIDO add constraint FK_PER_DETPED foreign key (PED_ID)
      references PEDIDO (PED_ID) on delete restrict on update restrict;

alter table DETALLE_PEDIDO add constraint FK_PRO_DETPED foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2) on delete restrict on update restrict;

alter table DETALLE_VENTA add constraint FK_FACVEN_DETVEN foreign key (FACVEN_ID)
      references FACTURA_VENTA (FACVEN_ID) on delete restrict on update restrict;

alter table DETALLE_VENTA add constraint FK_PRO_DETVEN foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2) on delete restrict on update restrict;

alter table DEVOLUCION add constraint FK_CLI_DEV foreign key (CLI_ID)
      references CLIENTE (CLI_ID) on delete restrict on update restrict;

alter table DEVOLUCION add constraint FK_LOCSUC_DEV foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID) on delete restrict on update restrict;

alter table EMPLEADO_LOCAL add constraint FK_CAR_EMPLOC foreign key (CAR_ID)
      references CARGO (CAR_ID) on delete restrict on update restrict;

alter table EMPLEADO_LOCAL add constraint FK_EMP_EMPLOC foreign key (EMP_ID)
      references EMPLEADO (EMP_ID) on delete restrict on update restrict;

alter table EMPLEADO_LOCAL add constraint FK_LOC_EMPLOC foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID) on delete restrict on update restrict;

alter table FACTURA_COMPRA add constraint FK_EMPPRO_FACCOM foreign key (EMPPRO_ID)
      references EMPRESA_PROVEEDORA (EMPPRO_ID) on delete restrict on update restrict;

alter table FACTURA_COMPRA add constraint FK_FORPAG_FACCOM foreign key (FORPAG_ID)
      references FORMA_PAGO (FORPAG_ID) on delete restrict on update restrict;

alter table FACTURA_COMPRA add constraint FK_LOCSUC_FACCOM foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID) on delete restrict on update restrict;

alter table FACTURA_VENTA add constraint FK_CLI_FACVEN foreign key (CLI_ID)
      references CLIENTE (CLI_ID) on delete restrict on update restrict;

alter table FACTURA_VENTA add constraint FK_FORPAG_FACVEN foreign key (FORPAG_ID)
      references FORMA_PAGO (FORPAG_ID) on delete restrict on update restrict;

alter table FACTURA_VENTA add constraint FK_LOCSUC_FACVEN foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID) on delete restrict on update restrict;

alter table FORMA_PAGO add constraint FK_CHE_FORPAG foreign key (CHE_ID)
      references CHEQUE (CHE_ID) on delete restrict on update restrict;

alter table FORMA_PAGO add constraint FK_CRE_FORPAG foreign key (CRE_ID)
      references CREDITO (CRE_ID) on delete restrict on update restrict;

alter table FORMA_PAGO add constraint FK_DINELE_FORPAG foreign key (DINELE_ID)
      references DINERO_ELECTRONICO (DINELE_ID) on delete restrict on update restrict;

alter table FORMA_PAGO add constraint FK_EFE_FORPAG foreign key (EFE_ID)
      references EFECTIVO (EFE_ID) on delete restrict on update restrict;

alter table FORMA_PAGO add constraint FK_NOTCRE_FORPAG foreign key (NOTCRE_ID)
      references NOTA_CREDITO (NOTCRE_ID) on delete restrict on update restrict;

alter table FORMA_PAGO add constraint FK_NOTDEB_FORPAG foreign key (NOTCRE_ID2)
      references NOTA_DEBITO (NOTCRE_ID2) on delete restrict on update restrict;

alter table FORMA_PAGO add constraint FK_TRA_FORPAG foreign key (TRA_ID)
      references TRANSFERENCIA (TRA_ID) on delete restrict on update restrict;

alter table GASTO add constraint FK_EMPLOC_GAS foreign key (EMPLOC_ID)
      references EMPLEADO_LOCAL (EMPLOC_ID) on delete restrict on update restrict;

alter table GASTO add constraint FK_LOCSUC_GAS foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID) on delete restrict on update restrict;

alter table GASTO add constraint FK_LOC_GAS foreign key (LOCA_ID)
      references LOCALIDAD (LOCA_ID) on delete restrict on update restrict;

alter table INVENTARIO_LOCAL add constraint FK_DETASI_INVLOC foreign key (DETASI_ID)
      references DETALLE_ASIGNACION (DETASI_ID) on delete restrict on update restrict;

alter table INVENTARIO_LOCAL add constraint FK_DETBAJ_INVLOC foreign key (DETBAJ_ID)
      references DETALLE_BAJA (DETBAJ_ID) on delete restrict on update restrict;

alter table INVENTARIO_LOCAL add constraint FK_DETCOM_INVLOC foreign key (DETCOM_ID, PRO_ID)
      references DETALLE_COMPRA (DETCOM_ID, PRO_ID) on delete restrict on update restrict;

alter table INVENTARIO_LOCAL add constraint FK_DETCON_INVLOC foreign key (DETCON_ID)
      references DETALLE_CONSIGNACION (DETCON_ID) on delete restrict on update restrict;

alter table INVENTARIO_LOCAL add constraint FK_DETDEV_INVLOC foreign key (DETDEV_ID)
      references DETALLE_DEVOLUCION (DETDEV_ID) on delete restrict on update restrict;

alter table INVENTARIO_LOCAL add constraint FK_DETMOVING_INVLOC foreign key (DETMOVI_ID)
      references DETALLE_MOVILIZACION_INGRESO (DETMOVI_ID) on delete restrict on update restrict;

alter table INVENTARIO_LOCAL add constraint FK_DETMOVSAL_INVLOC foreign key (DETMOVS_ID)
      references DETALLE_MOVILIZACION_SALIDA (DETMOVS_ID) on delete restrict on update restrict;

alter table INVENTARIO_LOCAL add constraint FK_DETVEN_INVLOC foreign key (DETVEN_ID)
      references DETALLE_VENTA (DETVEN_ID) on delete restrict on update restrict;

alter table INVENTARIO_LOCAL add constraint FK_LOCSUC_INVLOC foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID) on delete restrict on update restrict;

alter table INVENTARIO_LOCAL add constraint FK_PRO_INVLOC foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2) on delete restrict on update restrict;

alter table LOCALIDAD add constraint FK_PROV_LOC foreign key (PROV_ID)
      references PROVINCIA (PROV_ID) on delete restrict on update restrict;

alter table LOCAL_SUCURSAL add constraint FK_ALM_LOCSUC foreign key (ALM_ID)
      references ALMACEN (ALM_ID) on delete restrict on update restrict;

alter table LOCAL_SUCURSAL add constraint FK_GEO_LOCSUC foreign key (GEO_ID)
      references GEOREFERENCIA (GEO_ID) on delete restrict on update restrict;

alter table LOCAL_SUCURSAL add constraint FK_PARLOC_LOCSUC foreign key (PARLOC_ID)
      references PARAMETRO_LOCAL (PARLOC_ID) on delete restrict on update restrict;

alter table MOVILIZACION add constraint FK_CAL_MOV foreign key (CAL_ID)
      references CALENDARIO (CAL_ID) on delete restrict on update restrict;

alter table MOVILIZACION add constraint FK_LOC_MOV foreign key (LOCA_ID)
      references LOCALIDAD (LOCA_ID) on delete restrict on update restrict;

alter table MOVILIZACION add constraint FK_VEH_MOV foreign key (VEH_ID)
      references VEHICULO (VEH_ID) on delete restrict on update restrict;

alter table PARAMETRO_LOCAL add constraint FK_PAR_PARLOC foreign key (PAR_ID)
      references PARAMETRO (PAR_ID) on delete restrict on update restrict;

alter table PEDIDO add constraint FK_LOCSUC_PED foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID) on delete restrict on update restrict;

alter table PERFIL_USUA_MOD_SIS add constraint FK_MODSIS_PERUSUMODSIS foreign key (MODSIS_ID)
      references MODULO_SISTEMA (MODSIS_ID) on delete restrict on update restrict;

alter table PERFIL_USUA_MOD_SIS add constraint FK_PERUSU_PERUSUMODSIS foreign key (PERUSU_ID)
      references PERFIL_USUARIO (PERUSU_ID) on delete restrict on update restrict;

alter table PERMISOS_SISTEMA add constraint FK_EMPLOC_PERSIS foreign key (EMPLOC_ID)
      references EMPLEADO_LOCAL (EMPLOC_ID) on delete restrict on update restrict;

alter table PERMISOS_SISTEMA add constraint FK_PERUSUMODSIS_PERSIS foreign key (PUMS_ID)
      references PERFIL_USUA_MOD_SIS (PUMS_ID) on delete restrict on update restrict;

alter table SESION add constraint FK_EMPLOC_SES foreign key (EMPLOC_ID)
      references EMPLEADO_LOCAL (EMPLOC_ID) on delete restrict on update restrict;

alter table TRANSFERENCIA add constraint FK_CUE_TRA foreign key (CUE_ID)
      references CUENTA (CUE_ID) on delete restrict on update restrict;

