/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     22/5/2017 13:15:00                           */
/*==============================================================*/


drop table ACCESO_USUARIO;

drop table ALMACEN;

drop table ASIGNACION_PRODUCTO;

drop table BAJA;

drop table BANCO;

drop table BANCO_CLIENTE;

drop table CAJA;

drop table CAJA_APERTURA;

drop table CAJA_CIERRE;

drop table CALENDARIO;

drop table CARGO;

drop table CHEQUE;

drop table CLIENTE;

drop table CLIENTE_CATEGORIA;

drop table COMPRA;

drop table CONSIGNACION;

drop table CONTACTO_PROVEEDORA;

drop table COTIZACION;

drop table CREDITO;

drop table CUENTA;

drop table DETALLE_ASIGNACION;

drop table DETALLE_BAJA;

drop table DETALLE_CAJA_CIERRE;

drop table DETALLE_COMPRA;

drop table DETALLE_CONSIGNACION;

drop table DETALLE_COTIZACION;

drop table DETALLE_CREDITO;

drop table DETALLE_DEVOLUCION;

drop table DETALLE_EGRESO;

drop table DETALLE_GASTO;

drop table DETALLE_INGRESO;

drop table DETALLE_MOVILIZACION_INGRESO;

drop table DETALLE_MOVILIZACION_SALIDA;

drop table DETALLE_PEDIDO;

drop table DETALLE_VENTA;

drop table DEVOLUCION;

drop table DINERO_ELECTRONICO;

drop table EFECTIVO;

drop table EMPLEADO;

drop table EMPLEADO_LOCAL;

drop table EMPRESA_PROVEEDORA;

drop table FACTURA_COMPRA;

drop table FACTURA_VENTA;

drop table FORMA_PAGO;

drop table GASTO;

drop table GEOREFERENCIA;

drop table INVENTARIO_LOCAL;

drop table LOCALIDAD;

drop table LOCAL_SUCURSAL;

drop table MODULO_SISTEMA;

drop table MOVILIZACION;

drop table NOTA_CREDITO;

drop table NOTA_DEBITO;

drop table PARAMETRO;

drop table PARAMETRO_LOCAL;

drop table PEDIDO;

drop table PERFIL_USUARIO;

drop table PERFIL_USUA_MOD_SIS;

drop table PERMISOS_SISTEMA;

drop table PRODUCTO;

drop table PRODUCTO_EXTRA;

drop table PROVINCIA;

drop table SESION;

drop table TIPO_CHEQUE;

drop table TRANSFERENCIA;

drop table VEHICULO;

drop table VENTA;

/*==============================================================*/
/* Table: ACCESO_USUARIO                                        */
/*==============================================================*/
create table ACCESO_USUARIO (
   ACC_ID               INT4                 not null,
   EMP_ID               INT4                 null,
   ACC_NOMBREUSUARIO    VARCHAR(20)          null,
   ACC_CLAVEUSUARIO     VARCHAR(20)          null,
   constraint PK_ACCESO_USUARIO primary key (ACC_ID)
);

/*==============================================================*/
/* Table: ALMACEN                                               */
/*==============================================================*/
create table ALMACEN (
   ALM_ID               INT4                 not null,
   ALM_NOMBRE           VARCHAR(60)          null,
   ALM_RUC              CHAR(13)             null,
   ALM_WEB              VARCHAR(50)          null,
   ALM_MAIL             VARCHAR(100)         null,
   ALM_LOGO             TEXT                 null,
   constraint PK_ALMACEN primary key (ALM_ID)
);

/*==============================================================*/
/* Table: ASIGNACION_PRODUCTO                                   */
/*==============================================================*/
create table ASIGNACION_PRODUCTO (
   ASIPRO_ID            INT4                 not null,
   PED_ID               INT4                 null,
   ASIPRO_OBSERVACION   TEXT                 null,
   constraint PK_ASIGNACION_PRODUCTO primary key (ASIPRO_ID)
);

/*==============================================================*/
/* Table: BAJA                                                  */
/*==============================================================*/
create table BAJA (
   BAJ_ID               INT4                 not null,
   LOC_ID               INT4                 null,
   BAJ_FECHA            DATE                 null,
   BAJ_OBSERVACION      VARCHAR(100)         null,
   constraint PK_BAJA primary key (BAJ_ID)
);

/*==============================================================*/
/* Table: BANCO                                                 */
/*==============================================================*/
create table BANCO (
   BAN_ID               INT4                 not null,
   BAN_NOMBRE           CHAR(30)             null,
   BAN_DESCRIPCION      CHAR(100)            null,
   constraint PK_BANCO primary key (BAN_ID)
);

/*==============================================================*/
/* Table: BANCO_CLIENTE                                         */
/*==============================================================*/
create table BANCO_CLIENTE (
   BANCLI_ID            INT4                 not null,
   CLI_ID               INT4                 null,
   BAN_ID               INT4                 null,
   BANCLI_DESCRIPCION   TEXT                 null,
   constraint PK_BANCO_CLIENTE primary key (BANCLI_ID)
);

/*==============================================================*/
/* Table: CAJA                                                  */
/*==============================================================*/
create table CAJA (
   CAJ_ID               INT4                 not null,
   LOC_ID               INT4                 null,
   CAJ_FECHA            DATE                 null,
   CAJ_VALOR            FLOAT8               null,
   CAJ_ESTADO           CHAR(1)              null,
   constraint PK_CAJA primary key (CAJ_ID)
);

/*==============================================================*/
/* Table: CAJA_APERTURA                                         */
/*==============================================================*/
create table CAJA_APERTURA (
   CAJAPE_ID            INT4                 not null,
   CAJ_ID               INT4                 null,
   CAJAPE_FECHA         DATE                 null,
   CAJAPE_1CENT         INT4                 null,
   CAJAPE_5CENT         INT4                 null,
   CAJAPE_10CENT        INT4                 null,
   CAJAPE_25CENT        INT4                 null,
   CAJAPE_50CENT        INT4                 null,
   CAJAPE_1DOL          INT4                 null,
   CAJAPE_2DOL          INT4                 null,
   CAJAPE_5DOL          INT4                 null,
   CAJAPE_10DOL         INT4                 null,
   CAJAPE_20DOL         INT4                 null,
   CAJAPE_50DOL         INT4                 null,
   CAJAPE_100DOL        INT4                 null,
   CAJAPE_TOTAL         FLOAT8               null,
   constraint PK_CAJA_APERTURA primary key (CAJAPE_ID)
);

/*==============================================================*/
/* Table: CAJA_CIERRE                                           */
/*==============================================================*/
create table CAJA_CIERRE (
   CIER_ID              INT4                 not null,
   VEN_ID               INT4                 null,
   CAJ_ID               INT4                 null,
   COM_ID               INT4                 null,
   CIER_FECHA           DATE                 null,
   CIER_TOTAL           FLOAT8               null,
   constraint PK_CAJA_CIERRE primary key (CIER_ID)
);

/*==============================================================*/
/* Table: CALENDARIO                                            */
/*==============================================================*/
create table CALENDARIO (
   CAL_ID               INT4                 not null,
   CAL_FECHA            DATE                 null,
   constraint PK_CALENDARIO primary key (CAL_ID)
);

/*==============================================================*/
/* Table: CARGO                                                 */
/*==============================================================*/
create table CARGO (
   CAR_ID               INT4                 not null,
   CAR_NOMBRE           VARCHAR(100)         null,
   CAR_DESCRIPCION      VARCHAR(100)         null,
   constraint PK_CARGO primary key (CAR_ID)
);

/*==============================================================*/
/* Table: CHEQUE                                                */
/*==============================================================*/
create table CHEQUE (
   CHE_ID               INT4                 not null,
   TIPCHE_ID            INT4                 null,
   CUE_ID               INT4                 null,
   CHE_NUMEROCHEQUE     CHAR(20)             null,
   CHE_VALOR            FLOAT8               null,
   CHE_FECHAPAGO        DATE                 null,
   constraint PK_CHEQUE primary key (CHE_ID)
);

/*==============================================================*/
/* Table: CLIENTE                                               */
/*==============================================================*/
create table CLIENTE (
   CLI_ID               INT4                 not null,
   CLICAT_ID            INT4                 null,
   CLI_NOMBRE           CHAR(30)             null,
   CLI_APELLIDO         CHAR(30)             null,
   CLI_DIRECCION        CHAR(100)            null,
   CLI_IDENTIFICACION   CHAR(13)             null,
   CLI_TIPOIDENTIFICACION CHAR(2)              null,
   CLI_TELEFONO1        CHAR(15)             null,
   CLI_TELEFONO2        CHAR(15)             null,
   CLI_TELEFONO3        CHAR(15)             null,
   CLI_MAIL             CHAR(50)             null,
   constraint PK_CLIENTE primary key (CLI_ID)
);

/*==============================================================*/
/* Table: CLIENTE_CATEGORIA                                     */
/*==============================================================*/
create table CLIENTE_CATEGORIA (
   CLICAT_ID            INT4                 not null,
   CLICAT_CANTIDAD      INT4                 null,
   constraint PK_CLIENTE_CATEGORIA primary key (CLICAT_ID)
);

/*==============================================================*/
/* Table: COMPRA                                                */
/*==============================================================*/
create table COMPRA (
   COM_ID               INT4                 not null,
   COM_FECHA            DATE                 null,
   COM_TOTAL            FLOAT8               null,
   constraint PK_COMPRA primary key (COM_ID)
);

/*==============================================================*/
/* Table: CONSIGNACION                                          */
/*==============================================================*/
create table CONSIGNACION (
   CON_ID               INT4                 not null,
   LOC_ID               INT4                 null,
   CLI_ID               INT4                 null,
   CON_NUMERO           CHAR(9)              null,
   CON_SUBTOTAL         FLOAT8               null,
   CON_IVA              INT4                 null,
   CON_VALORIVA         FLOAT8               null,
   CON_VALORIVA0        FLOAT8               null,
   CON_ICE              INT4                 null,
   CON_VALORICE         FLOAT8               null,
   CON_DESCUENTO        FLOAT8               null,
   CON_TOTAL            FLOAT8               null,
   CON_FECHAEMISION     DATE                 null,
   CON_NUMEROPRODUCTO   INT4                 null,
   CON_ESTADO           VARCHAR(3)           null,
   CON_SERIE            VARCHAR(20)          null,
   constraint PK_CONSIGNACION primary key (CON_ID)
);

/*==============================================================*/
/* Table: CONTACTO_PROVEEDORA                                   */
/*==============================================================*/
create table CONTACTO_PROVEEDORA (
   CONPRO_ID            INT4                 not null,
   EMPPRO_ID            INT4                 null,
   CONPRO_NOMBRE        VARCHAR(30)          null,
   CONPRO_APELLIDO      VARCHAR(30)          null,
   CONPRO_TELEFONO1     VARCHAR(15)          null,
   CONPRO_TELEFONO2     VARCHAR(15)          null,
   CONPRO_MAIL          VARCHAR(50)          null,
   CONPRO_DESCRIPCIONVISITA VARCHAR(100)         null,
   constraint PK_CONTACTO_PROVEEDORA primary key (CONPRO_ID)
);

/*==============================================================*/
/* Table: COTIZACION                                            */
/*==============================================================*/
create table COTIZACION (
   COT_ID               INT4                 not null,
   LOC_ID               INT4                 null,
   CLI_ID               INT4                 null,
   COT_NUMEROCOTIZACION CHAR(9)              null,
   COT_SUBTOTAL         FLOAT8               null,
   COT_IVA              INT4                 null,
   COT_VALORIVA         FLOAT8               null,
   COT_VALORIVA0        FLOAT8               null,
   COT_ICE              INT4                 null,
   COT_VALORICE         FLOAT8               null,
   COT_DESCUENTO        FLOAT8               null,
   COT_TOTAL            FLOAT8               null,
   COT_FECHAEMISION     DATE                 null,
   COT_FECHAVALIDEZ     DATE                 null,
   COT_NUMEROPRODUCTO   INT4                 null,
   COT_ESTADO           VARCHAR(3)           null,
   COT_SERIE            VARCHAR(20)          null,
   constraint PK_COTIZACION primary key (COT_ID)
);

/*==============================================================*/
/* Table: CREDITO                                               */
/*==============================================================*/
create table CREDITO (
   CRE_ID               INT4                 not null,
   CRE_NUMEROCUOTAS     INT4                 null,
   CRE_FECHAMAXIMOPAGO  DATE                 null,
   CRE_VALORDEUDA       FLOAT8               null,
   CRE_ESTADO           CHAR(1)              null,
   constraint PK_CREDITO primary key (CRE_ID)
);

/*==============================================================*/
/* Table: CUENTA                                                */
/*==============================================================*/
create table CUENTA (
   CUE_ID               INT4                 not null,
   BAN_ID               INT4                 null,
   CUE_NUMEROCUENTA     CHAR(20)             null,
   CUE_TIPOCUENTA       CHAR(1)              null,
   constraint PK_CUENTA primary key (CUE_ID)
);

/*==============================================================*/
/* Table: DETALLE_ASIGNACION                                    */
/*==============================================================*/
create table DETALLE_ASIGNACION (
   DETASI_ID            INT4                 not null,
   PRO_ID2              INT4                 null,
   ASIPRO_ID            INT4                 null,
   DETASI_CANTIDAD      INT4                 null,
   constraint PK_DETALLE_ASIGNACION primary key (DETASI_ID)
);

/*==============================================================*/
/* Table: DETALLE_BAJA                                          */
/*==============================================================*/
create table DETALLE_BAJA (
   DETBAJ_ID            INT4                 not null,
   BAJ_ID               INT4                 null,
   PRO_ID2              INT4                 null,
   DETBAJ_CANTIDAD      INT4                 null,
   DETBAJ_MOTIVOS       VARCHAR(100)         null,
   constraint PK_DETALLE_BAJA primary key (DETBAJ_ID)
);

/*==============================================================*/
/* Table: DETALLE_CAJA_CIERRE                                   */
/*==============================================================*/
create table DETALLE_CAJA_CIERRE (
   DETCIE_ID            INT4                 not null,
   CIER_ID              INT4                 null,
   DETCIE_FECHA         DATE                 null,
   DETCIE_1CENT         INT4                 null,
   DETCIE_5CENT         INT4                 null,
   DETCIE_10CENT        INT4                 null,
   DETCIE_25CENT        INT4                 null,
   DETCIE_50CENT        INT4                 null,
   DETCIE_1DOL          INT4                 null,
   DETCIE_2DOL          INT4                 null,
   DETCIE_5DOL          INT4                 null,
   DETCIE_10DOL         INT4                 null,
   DETCIE_20DOL         INT4                 null,
   DETCIE_50DOL         INT4                 null,
   DETCIE_100DOL        INT4                 null,
   DETCIE_TOTAL         FLOAT8               null,
   constraint PK_DETALLE_CAJA_CIERRE primary key (DETCIE_ID)
);

/*==============================================================*/
/* Table: DETALLE_COMPRA                                        */
/*==============================================================*/
create table DETALLE_COMPRA (
   DETCOM_ID            INT4                 not null,
   PRO_ID               INT4                 not null,
   PRO_ID2              INT4                 null,
   FACCOM_ID            INT4                 null,
   DETCOM_CANTIDAD      INT4                 null,
   DETCOM_COSTOUNITARIO FLOAT8               null,
   DETCOM_COSTOTOTAL    FLOAT8               null,
   constraint PK_DETALLE_COMPRA primary key (DETCOM_ID, PRO_ID)
);

/*==============================================================*/
/* Table: DETALLE_CONSIGNACION                                  */
/*==============================================================*/
create table DETALLE_CONSIGNACION (
   DETCON_ID            INT4                 not null,
   CON_ID               INT4                 null,
   PRO_ID2              INT4                 null,
   DETCON_CANTIDAD      INT4                 null,
   DETCON_VALORUNITARIO FLOAT8               null,
   DETCON_VALORTOTAL    FLOAT8               null,
   constraint PK_DETALLE_CONSIGNACION primary key (DETCON_ID)
);

/*==============================================================*/
/* Table: DETALLE_COTIZACION                                    */
/*==============================================================*/
create table DETALLE_COTIZACION (
   DETCOT_ID            INT4                 not null,
   COT_ID               INT4                 null,
   PRO_ID2              INT4                 null,
   DETCOT_CANTIDAD      FLOAT8               null,
   DETCOT_VALORUNITARIO FLOAT8               null,
   DETCOT_VALORTOTAL    FLOAT8               null,
   constraint PK_DETALLE_COTIZACION primary key (DETCOT_ID)
);

/*==============================================================*/
/* Table: DETALLE_CREDITO                                       */
/*==============================================================*/
create table DETALLE_CREDITO (
   DETCRE_ID            INT4                 not null,
   FORPAG_ID            INT4                 null,
   CRE_ID               INT4                 null,
   DETCRE_NUMEROCUOTA   INT4                 null,
   DETCRE_VALORPAGADO   FLOAT8               null,
   DETCRE_FECHAPAGADO   DATE                 null,
   DETCRE_SALDODEUDA    FLOAT8               null,
   constraint PK_DETALLE_CREDITO primary key (DETCRE_ID)
);

/*==============================================================*/
/* Table: DETALLE_DEVOLUCION                                    */
/*==============================================================*/
create table DETALLE_DEVOLUCION (
   DETDEV_ID            INT4                 not null,
   DEV_ID               INT4                 null,
   PRO_ID2              INT4                 null,
   DETDEV_CANTIDAD      INT4                 null,
   DETDEV_MOTIVO        TEXT                 null,
   constraint PK_DETALLE_DEVOLUCION primary key (DETDEV_ID)
);

/*==============================================================*/
/* Table: DETALLE_EGRESO                                        */
/*==============================================================*/
create table DETALLE_EGRESO (
   DETEGR_ID            INT4                 not null,
   COM_ID               INT4                 null,
   constraint PK_DETALLE_EGRESO primary key (DETEGR_ID)
);

/*==============================================================*/
/* Table: DETALLE_GASTO                                         */
/*==============================================================*/
create table DETALLE_GASTO (
   DETGAS_ID            INT4                 not null,
   GAS_ID               INT4                 null,
   PROEXT_ID            INT4                 null,
   DETGAS_CANTIDAD      INT4                 null,
   DETGAS_VALORUNITARIO FLOAT8               null,
   DETGAS_VALORTOTAL    FLOAT8               null,
   constraint PK_DETALLE_GASTO primary key (DETGAS_ID)
);

/*==============================================================*/
/* Table: DETALLE_INGRESO                                       */
/*==============================================================*/
create table DETALLE_INGRESO (
   DETING_ID            INT4                 not null,
   VEN_ID               INT4                 null,
   constraint PK_DETALLE_INGRESO primary key (DETING_ID)
);

/*==============================================================*/
/* Table: DETALLE_MOVILIZACION_INGRESO                          */
/*==============================================================*/
create table DETALLE_MOVILIZACION_INGRESO (
   DETMOVI_ID           INT4                 not null,
   MOV_ID               INT4                 null,
   PRO_ID2              INT4                 null,
   constraint PK_DETALLE_MOVILIZACION_INGRES primary key (DETMOVI_ID)
);

/*==============================================================*/
/* Table: DETALLE_MOVILIZACION_SALIDA                           */
/*==============================================================*/
create table DETALLE_MOVILIZACION_SALIDA (
   DETMOVS_ID           INT4                 not null,
   MOV_ID               INT4                 null,
   PRO_ID2              INT4                 null,
   constraint PK_DETALLE_MOVILIZACION_SALIDA primary key (DETMOVS_ID)
);

/*==============================================================*/
/* Table: DETALLE_PEDIDO                                        */
/*==============================================================*/
create table DETALLE_PEDIDO (
   DETPED_ID            INT4                 not null,
   PED_ID               INT4                 null,
   PRO_ID2              INT4                 null,
   DETPED_CANTIDAD      INT4                 null,
   constraint PK_DETALLE_PEDIDO primary key (DETPED_ID)
);

/*==============================================================*/
/* Table: DETALLE_VENTA                                         */
/*==============================================================*/
create table DETALLE_VENTA (
   DETVEN_ID            INT4                 not null,
   FACVEN_ID            INT4                 null,
   PRO_ID2              INT4                 null,
   DETVEN_CANTIDAD      INT4                 null,
   DETVEN_VALORUNITARIO FLOAT8               null,
   DETVEN_VALORTOTAL    FLOAT8               null,
   constraint PK_DETALLE_VENTA primary key (DETVEN_ID)
);

/*==============================================================*/
/* Table: DEVOLUCION                                            */
/*==============================================================*/
create table DEVOLUCION (
   DEV_ID               INT4                 not null,
   CLI_ID               INT4                 null,
   LOC_ID               INT4                 null,
   DEV_FECHA            DATE                 null,
   DEV_MOTIVOS          TEXT                 null,
   constraint PK_DEVOLUCION primary key (DEV_ID)
);

/*==============================================================*/
/* Table: DINERO_ELECTRONICO                                    */
/*==============================================================*/
create table DINERO_ELECTRONICO (
   DINELE_ID            INT4                 not null,
   DINELE_CELULAR       CHAR(13)             null,
   DINELE_VALOR         FLOAT8               null,
   DINELE_FECHAPAGO     DATE                 null,
   DINELE_HORAPAGO      TIME                 null,
   DINELE_ESTADO        CHAR(3)              null,
   constraint PK_DINERO_ELECTRONICO primary key (DINELE_ID)
);

/*==============================================================*/
/* Table: EFECTIVO                                              */
/*==============================================================*/
create table EFECTIVO (
   EFE_ID               INT4                 not null,
   EFE_VALOR            FLOAT8               null,
   constraint PK_EFECTIVO primary key (EFE_ID)
);

/*==============================================================*/
/* Table: EMPLEADO                                              */
/*==============================================================*/
create table EMPLEADO (
   EMP_ID               INT4                 not null,
   EMP_NOMBRE           VARCHAR(30)          null,
   EMP_APELLIDO         VARCHAR(30)          null,
   EMP_DIRECCION        TEXT                 null,
   EMP_TELEFONO1        VARCHAR(15)          null,
   EMP_TELEFONO2        VARCHAR(15)          null,
   EMP_TIPOSANGRE       VARCHAR(5)           null,
   EMP_CORREO           VARCHAR(50)          null,
   EMP_AVISAREMERGENCIA VARCHAR(50)          null,
   EMP_TELEFONOEMERGENCIA VARCHAR(50)          null,
   EMP_PARENTEZCOEMERGENCIA VARCHAR(20)          null,
   EMP_DESCRIPCIONALERGIAS TEXT                 null,
   EMP_DESCRIPCIONGENERAL TEXT                 null,
   EMP_ESTADO           CHAR(1)              null,
   EMP_FECHANACIMIENTO  DATE                 null,
   constraint PK_EMPLEADO primary key (EMP_ID)
);

/*==============================================================*/
/* Table: EMPLEADO_LOCAL                                        */
/*==============================================================*/
create table EMPLEADO_LOCAL (
   EMPLOC_ID            INT4                 not null,
   CAR_ID               INT4                 null,
   EMP_ID               INT4                 null,
   LOC_ID               INT4                 null,
   EMPLOC_FECHAINGRESO  DATE                 null,
   EMPLOC_FECHASALIDA   DATE                 null,
   EMPLOC_MOTIVOSALIDA  VARCHAR(100)         null,
   EMPLOC_ESTADO        CHAR(1)              null,
   constraint PK_EMPLEADO_LOCAL primary key (EMPLOC_ID)
);

/*==============================================================*/
/* Table: EMPRESA_PROVEEDORA                                    */
/*==============================================================*/
create table EMPRESA_PROVEEDORA (
   EMPPRO_ID            INT4                 not null,
   EMPPRO_NOMBRE        VARCHAR(60)          null,
   EMPPRO_DIRECCION     TEXT                 null,
   EMPPRO_TELEFONO1     VARCHAR(20)          null,
   EMPPRO_TELEFONO2     VARCHAR(20)          null,
   EMPPRO_RUC           CHAR(13)             null,
   EMPPRO_CIUDAD        VARCHAR(50)          null,
   EMPPRO_RAZONSOCIAL   VARCHAR(50)          null,
   EMPPRO_FAX           VARCHAR(20)          null,
   EMPPRO_MAIL          VARCHAR(50)          null,
   constraint PK_EMPRESA_PROVEEDORA primary key (EMPPRO_ID)
);

/*==============================================================*/
/* Table: FACTURA_COMPRA                                        */
/*==============================================================*/
create table FACTURA_COMPRA (
   FACCOM_ID            INT4                 not null,
   FORPAG_ID            INT4                 null,
   LOC_ID               INT4                 null,
   EMPPRO_ID            INT4                 null,
   FACCOM_NUMEROFACTURA CHAR(9)              null,
   FACCOM_SUBTOTAL      FLOAT8               null,
   FACCOM_IVA           FLOAT8               null,
   FACCOM_VALORIVA      FLOAT8               null,
   FACCOM_VALORIVA0     FLOAT8               null,
   FACCOM_ICE           FLOAT8               null,
   FACCOM_VALORICE      FLOAT8               null,
   FACCOM_DESCUENTO     FLOAT8               null,
   FACCOM_TOTAL         FLOAT8               null,
   FACCOM_FECHA         DATE                 null,
   FACCOM_NUMEROPRODUCTOS INT4                 null,
   FACCOM_ESTADO        CHAR(3)              null,
   FACCOM_SERIE         CHAR(20)             null,
   FACCOM_TIPODOC       CHAR(3)              null,
   constraint PK_FACTURA_COMPRA primary key (FACCOM_ID)
);

/*==============================================================*/
/* Table: FACTURA_VENTA                                         */
/*==============================================================*/
create table FACTURA_VENTA (
   FACVEN_ID            INT4                 not null,
   CLI_ID               INT4                 null,
   FORPAG_ID            INT4                 null,
   LOC_ID               INT4                 null,
   FACVEN_NUMEROFACTURA CHAR(9)              null,
   FACVEN_SUBTOTAL      FLOAT8               null,
   FACVEN_IVA           FLOAT8               null,
   FACVEN_VALORIVA      FLOAT8               null,
   FACVEN_VALORIVA0     FLOAT8               null,
   FACVEN_ICE           FLOAT8               null,
   FACVEN_VALORICE      FLOAT8               null,
   FACVEN_DESCUENTO     FLOAT8               null,
   FACVEN_TOTAL         FLOAT8               null,
   FACVEN_FECHA         DATE                 null,
   FACVEN_NUMEROPRODUCTOS INT4                 null,
   FACVEN_ESTADO        CHAR(3)              null,
   FACVEN_SERIE         CHAR(20)             null,
   constraint PK_FACTURA_VENTA primary key (FACVEN_ID)
);

/*==============================================================*/
/* Table: FORMA_PAGO                                            */
/*==============================================================*/
create table FORMA_PAGO (
   FORPAG_ID            INT4                 not null,
   CRE_ID               INT4                 null,
   EFE_ID               INT4                 null,
   NOTCRE_ID            INT4                 null,
   DINELE_ID            INT4                 null,
   NOTCRE_ID2           INT4                 null,
   CHE_ID               INT4                 null,
   TRA_ID               INT4                 null,
   FORPAG_TOTAL         FLOAT8               null,
   FORPAG_FECHA         DATE                 null,
   FORPAG_ESTADO        CHAR(3)              null,
   constraint PK_FORMA_PAGO primary key (FORPAG_ID)
);

/*==============================================================*/
/* Table: GASTO                                                 */
/*==============================================================*/
create table GASTO (
   GAS_ID               INT4                 not null,
   LOCA_ID              INT4                 null,
   EMPLOC_ID            INT4                 null,
   LOC_ID               INT4                 null,
   GAS_NUMERO           CHAR(9)              null,
   GAS_FECHA            DATE                 null,
   GAS_SUBTOTAL         FLOAT8               null,
   GAS_IVA              INT4                 null,
   GAS_VALORIVA         FLOAT8               null,
   GAS_VALORIVA0        FLOAT8               null,
   GAS_ICE              INT4                 null,
   GAS_VALORICE         FLOAT8               null,
   GAS_DESCUENTO        FLOAT8               null,
   GAS_TOTAL            FLOAT8               null,
   GAS_ESTADO           CHAR(3)              null,
   constraint PK_GASTO primary key (GAS_ID)
);

/*==============================================================*/
/* Table: GEOREFERENCIA                                         */
/*==============================================================*/
create table GEOREFERENCIA (
   GEO_ID               INT4                 not null,
   GEO_CIUDAD           VARCHAR(100)         null,
   GEO_PROVINCIA        VARCHAR(100)         null,
   GEO_REGION           VARCHAR(100)         null,
   GEO_PAIS             VARCHAR(100)         null,
   GEO_SECTOR           TEXT                 null,
   constraint PK_GEOREFERENCIA primary key (GEO_ID)
);

/*==============================================================*/
/* Table: INVENTARIO_LOCAL                                      */
/*==============================================================*/
create table INVENTARIO_LOCAL (
   INVLOC_ID            INT4                 not null,
   DETCOM_ID            INT4                 null,
   PRO_ID               INT4                 null,
   DETBAJ_ID            INT4                 null,
   DETMOVS_ID           INT4                 null,
   DETCON_ID            INT4                 null,
   DETASI_ID            INT4                 null,
   DETMOVI_ID           INT4                 null,
   DETVEN_ID            INT4                 null,
   PRO_ID2              INT4                 null,
   DETDEV_ID            INT4                 null,
   LOC_ID               INT4                 null,
   INVLOC_CANTIDADMOVIMIENTO INT4                 null,
   INVLOC_TIPOMOVIMIENTO CHAR(2)              null,
   INVLOC_STOCKREALES   INT4                 null,
   INVLOC_STOCKSINCONSIGNACION INT4                 null,
   INVLOC_FECHAREGISTRO DATE                 null,
   INVLOC_COSTOUNITARIO FLOAT8               null,
   INVLOC_COSTOTOTAL    FLOAT8               null,
   INVLOC_PVPSUGERIDO   FLOAT8               null,
   INVLOC_LOCALORIGEN   INT4                 null,
   INVLOC_LOCALDESTINO  INT4                 null,
   constraint PK_INVENTARIO_LOCAL primary key (INVLOC_ID)
);

/*==============================================================*/
/* Table: LOCALIDAD                                             */
/*==============================================================*/
create table LOCALIDAD (
   LOCA_ID              INT4                 not null,
   PROV_ID              INT4                 null,
   LOCA_NOMBRE          VARCHAR(60)          null,
   constraint PK_LOCALIDAD primary key (LOCA_ID)
);

/*==============================================================*/
/* Table: LOCAL_SUCURSAL                                        */
/*==============================================================*/
create table LOCAL_SUCURSAL (
   LOC_ID               INT4                 not null,
   GEO_ID               INT4                 null,
   PARLOC_ID            INT4                 null,
   ALM_ID               INT4                 null,
   LOC_NOMBRE           CHAR(60)             null,
   LOC_DIRECCION        TEXT                 null,
   LOC_ESTADO           CHAR(1)              null,
   LOC_FAX              VARCHAR(20)          null,
   LOC_TELEFONO1        VARCHAR(20)          null,
   LOC_TELEFONO2        VARCHAR(20)          null,
   LOC_DESCRIPCION      VARCHAR(150)         null,
   LOC_CODIGO           VARCHAR(15)          null,
   LOC_FECHAINAGURACION DATE                 null,
   LOC_FECHACIERRE      DATE                 null,
   LOC_MATRIZ_O_SUCURSAL CHAR(1)              null,
   LOC_RUC              CHAR(13)             null,
   LOC_MAIL             VARCHAR(100)         null,
   constraint PK_LOCAL_SUCURSAL primary key (LOC_ID)
);

/*==============================================================*/
/* Table: MODULO_SISTEMA                                        */
/*==============================================================*/
create table MODULO_SISTEMA (
   MODSIS_ID            INT4                 not null,
   MODSIS_NOMBRE        VARCHAR(50)          null,
   MODSIS_PADRE         INT4                 null,
   MODSIS_UBICACION     VARCHAR(200)         null,
   MODSIS_ESTADO        CHAR(1)              null,
   MODSIS_NOMBREMOSTRAR VARCHAR(50)          null,
   constraint PK_MODULO_SISTEMA primary key (MODSIS_ID)
);

/*==============================================================*/
/* Table: MOVILIZACION                                          */
/*==============================================================*/
create table MOVILIZACION (
   MOV_ID               INT4                 not null,
   LOCA_ID              INT4                 null,
   CAL_ID               INT4                 null,
   VEH_ID               INT4                 null,
   MOV_RUTA             VARCHAR(100)         null,
   MOV_ESTADO           CHAR(1)              null,
   constraint PK_MOVILIZACION primary key (MOV_ID)
);

/*==============================================================*/
/* Table: NOTA_CREDITO                                          */
/*==============================================================*/
create table NOTA_CREDITO (
   NOTCRE_ID            INT4                 not null,
   constraint PK_NOTA_CREDITO primary key (NOTCRE_ID)
);

/*==============================================================*/
/* Table: NOTA_DEBITO                                           */
/*==============================================================*/
create table NOTA_DEBITO (
   NOTCRE_ID2           INT4                 not null,
   constraint PK_NOTA_DEBITO primary key (NOTCRE_ID2)
);

/*==============================================================*/
/* Table: PARAMETRO                                             */
/*==============================================================*/
create table PARAMETRO (
   PAR_ID               INT4                 not null,
   PAR_NOMBRE           VARCHAR(100)         null,
   PAR_TIPO             VARCHAR(10)          null,
   PAR_FECHAREGISTRO    DATE                 null,
   PAR_ESTADOACTIVO     CHAR(1)              null,
   constraint PK_PARAMETRO primary key (PAR_ID)
);

/*==============================================================*/
/* Table: PARAMETRO_LOCAL                                       */
/*==============================================================*/
create table PARAMETRO_LOCAL (
   PARLOC_ID            INT4                 not null,
   PAR_ID               INT4                 null,
   PARLOC_VALOR         FLOAT8               null,
   PARLOC_FECHAHABILITADO DATE                 null,
   PARLOC_FECHADESHABILITADO DATE                 null,
   PARLOC_ESTADO        CHAR(1)              null,
   constraint PK_PARAMETRO_LOCAL primary key (PARLOC_ID)
);

/*==============================================================*/
/* Table: PEDIDO                                                */
/*==============================================================*/
create table PEDIDO (
   PED_ID               INT4                 not null,
   LOC_ID               INT4                 null,
   PED_FECHAEMISION     DATE                 null,
   PED_OBSERVACION      TEXT                 null,
   LOC_DESTINO          INT4                 null,
   constraint PK_PEDIDO primary key (PED_ID)
);

/*==============================================================*/
/* Table: PERFIL_USUARIO                                        */
/*==============================================================*/
create table PERFIL_USUARIO (
   PERUSU_ID            INT4                 not null,
   PERUSU_NOMBRE        VARCHAR(30)          null,
   PERUSU_DESCRIPCION   VARCHAR(100)         null,
   constraint PK_PERFIL_USUARIO primary key (PERUSU_ID)
);

/*==============================================================*/
/* Table: PERFIL_USUA_MOD_SIS                                   */
/*==============================================================*/
create table PERFIL_USUA_MOD_SIS (
   PUMS_ID              INT4                 not null,
   MODSIS_ID            INT4                 null,
   PERUSU_ID            INT4                 null,
   PUMS_DESCRIPCION     VARCHAR(150)         null,
   constraint PK_PERFIL_USUA_MOD_SIS primary key (PUMS_ID)
);

/*==============================================================*/
/* Table: PERMISOS_SISTEMA                                      */
/*==============================================================*/
create table PERMISOS_SISTEMA (
   PERSIS_ID            INT4                 not null,
   EMPLOC_ID            INT4                 null,
   PUMS_ID              INT4                 null,
   PERSIS_FECHAINICIO   DATE                 null,
   PERSIS_FECHAFIN      DATE                 null,
   PERSIS_MOTIVOSFIN    TEXT                 null,
   PERSIS_ESTADO        CHAR(1)              null,
   constraint PK_PERMISOS_SISTEMA primary key (PERSIS_ID)
);

/*==============================================================*/
/* Table: PRODUCTO                                              */
/*==============================================================*/
create table PRODUCTO (
   PRO_ID2              INT4                 not null,
   PRO_CODIGO           CHAR(20)             null,
   PRO_FECHAREGISTRO    DATE                 null,
   PRO_ESTADO           CHAR(13)             null,
   PRO_NOMBRE           CHAR(50)             null,
   PRO_CONTENIDO        CHAR(10)             null,
   PRO_DESCRIPCION      CHAR(100)            null,
   PRO_TIPOUSO          CHAR(10)             null,
   PRO_GRAVAIVA         CHAR(1)              null,
   PRO_GRAVAICE         CHAR(1)              null,
   PRO_FECHAELABORACION DATE                 null,
   PRO_FECHACADUCIDAD   DATE                 null,
   PRO_CODIGOPROV       CHAR(30)             null,
   PRO_TIPO             CHAR(1)              null,
   constraint PK_PRODUCTO primary key (PRO_ID2)
);

/*==============================================================*/
/* Table: PRODUCTO_EXTRA                                        */
/*==============================================================*/
create table PRODUCTO_EXTRA (
   PROEXT_ID            INT4                 not null,
   PROEXT_NOMBRE        VARCHAR(30)          null,
   PROEXT_DESCRIPCION   VARCHAR(70)          null,
   PROEXT_TIPO          VARCHAR(10)          null,
   constraint PK_PRODUCTO_EXTRA primary key (PROEXT_ID)
);

/*==============================================================*/
/* Table: PROVINCIA                                             */
/*==============================================================*/
create table PROVINCIA (
   PROV_ID              INT4                 not null,
   PROV_NOMBRE          VARCHAR(60)          null,
   PROV_REGION          VARCHAR(10)          null,
   constraint PK_PROVINCIA primary key (PROV_ID)
);

/*==============================================================*/
/* Table: SESION                                                */
/*==============================================================*/
create table SESION (
   SES_ID               INT4                 not null,
   EMPLOC_ID            INT4                 null,
   SES_FECHAINGRESO     DATE                 null,
   SES_NUMINTENTO       INT4                 null,
   SES_HORAINGRESO      TIME                 null,
   SES_DESCRIPCIONINGRESO TEXT                 null,
   constraint PK_SESION primary key (SES_ID)
);

/*==============================================================*/
/* Table: TIPO_CHEQUE                                           */
/*==============================================================*/
create table TIPO_CHEQUE (
   TIPCHE_ID            INT4                 not null,
   TIPCHE_NOMBRE        VARCHAR(15)          null,
   constraint PK_TIPO_CHEQUE primary key (TIPCHE_ID)
);

/*==============================================================*/
/* Table: TRANSFERENCIA                                         */
/*==============================================================*/
create table TRANSFERENCIA (
   TRA_ID               INT4                 not null,
   CUE_ID               INT4                 null,
   TRA_NUMERODOCUMENTO  CHAR(20)             null,
   TRA_FECHA            DATE                 null,
   TRA_VALOR            FLOAT8               null,
   constraint PK_TRANSFERENCIA primary key (TRA_ID)
);

/*==============================================================*/
/* Table: VEHICULO                                              */
/*==============================================================*/
create table VEHICULO (
   VEH_ID               INT4                 not null,
   VEH_TIPO             VARCHAR(15)          null,
   VEH_MODELO           VARCHAR(20)          null,
   VEH_CILINDRAJE       VARCHAR(15)          null,
   VEH_TONELAJE         VARCHAR(15)          null,
   constraint PK_VEHICULO primary key (VEH_ID)
);

/*==============================================================*/
/* Table: VENTA                                                 */
/*==============================================================*/
create table VENTA (
   VEN_ID               INT4                 not null,
   VEN_FECHA            DATE                 null,
   VEN_TOTAL            FLOAT8               null,
   constraint PK_VENTA primary key (VEN_ID)
);

alter table ACCESO_USUARIO
   add constraint FK_ACCESO_U_EMP_ACCUS_EMPLEADO foreign key (EMP_ID)
      references EMPLEADO (EMP_ID)
      on delete restrict on update restrict;

alter table ASIGNACION_PRODUCTO
   add constraint FK_ASIGNACI_PED_ASIPR_PEDIDO foreign key (PED_ID)
      references PEDIDO (PED_ID)
      on delete restrict on update restrict;

alter table BAJA
   add constraint FK_BAJA_LOCSUC_BA_LOCAL_SU foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID)
      on delete restrict on update restrict;

alter table BANCO_CLIENTE
   add constraint FK_BANCO_CL_BAN_BANCL_BANCO foreign key (BAN_ID)
      references BANCO (BAN_ID)
      on delete restrict on update restrict;

alter table BANCO_CLIENTE
   add constraint FK_BANCO_CL_CLI_BANCL_CLIENTE foreign key (CLI_ID)
      references CLIENTE (CLI_ID)
      on delete restrict on update restrict;

alter table CAJA
   add constraint FK_CAJA_LOCSUC_CA_LOCAL_SU foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID)
      on delete restrict on update restrict;

alter table CAJA_APERTURA
   add constraint FK_CAJA_APE_CAJ_CAJAP_CAJA foreign key (CAJ_ID)
      references CAJA (CAJ_ID)
      on delete restrict on update restrict;

alter table CAJA_CIERRE
   add constraint FK_CAJA_CIE_CAJ_CAJCI_CAJA foreign key (CAJ_ID)
      references CAJA (CAJ_ID)
      on delete restrict on update restrict;

alter table CAJA_CIERRE
   add constraint FK_CAJA_CIE_COM_CAJCI_COMPRA foreign key (COM_ID)
      references COMPRA (COM_ID)
      on delete restrict on update restrict;

alter table CAJA_CIERRE
   add constraint FK_CAJA_CIE_VEN_CAJCI_VENTA foreign key (VEN_ID)
      references VENTA (VEN_ID)
      on delete restrict on update restrict;

alter table CHEQUE
   add constraint FK_CHEQUE_CUE_CHE_CUENTA foreign key (CUE_ID)
      references CUENTA (CUE_ID)
      on delete restrict on update restrict;

alter table CHEQUE
   add constraint FK_CHEQUE_TIPCHE_CH_TIPO_CHE foreign key (TIPCHE_ID)
      references TIPO_CHEQUE (TIPCHE_ID)
      on delete restrict on update restrict;

alter table CLIENTE
   add constraint FK_CLIENTE_CLICAT_CL_CLIENTE_ foreign key (CLICAT_ID)
      references CLIENTE_CATEGORIA (CLICAT_ID)
      on delete restrict on update restrict;

alter table CONSIGNACION
   add constraint FK_CONSIGNA_CLI_CON_CLIENTE foreign key (CLI_ID)
      references CLIENTE (CLI_ID)
      on delete restrict on update restrict;

alter table CONSIGNACION
   add constraint FK_CONSIGNA_LOCSUC_CO_LOCAL_SU foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID)
      on delete restrict on update restrict;

alter table CONTACTO_PROVEEDORA
   add constraint FK_CONTACTO_EMPPRO_CO_EMPRESA_ foreign key (EMPPRO_ID)
      references EMPRESA_PROVEEDORA (EMPPRO_ID)
      on delete restrict on update restrict;

alter table COTIZACION
   add constraint FK_COTIZACI_CLI_COT_CLIENTE foreign key (CLI_ID)
      references CLIENTE (CLI_ID)
      on delete restrict on update restrict;

alter table COTIZACION
   add constraint FK_COTIZACI_LOCSUC_CO_LOCAL_SU foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID)
      on delete restrict on update restrict;

alter table CUENTA
   add constraint FK_CUENTA_BAN_CUE_BANCO foreign key (BAN_ID)
      references BANCO (BAN_ID)
      on delete restrict on update restrict;

alter table DETALLE_ASIGNACION
   add constraint FK_DETALLE__ASIPRO_DE_ASIGNACI foreign key (ASIPRO_ID)
      references ASIGNACION_PRODUCTO (ASIPRO_ID)
      on delete restrict on update restrict;

alter table DETALLE_ASIGNACION
   add constraint FK_DETALLE__PRO_DETAS_PRODUCTO foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2)
      on delete restrict on update restrict;

alter table DETALLE_BAJA
   add constraint FK_DETALLE__BAJ_DETBA_BAJA foreign key (BAJ_ID)
      references BAJA (BAJ_ID)
      on delete restrict on update restrict;

alter table DETALLE_BAJA
   add constraint FK_DETALLE__PRO_DETBA_PRODUCTO foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2)
      on delete restrict on update restrict;

alter table DETALLE_CAJA_CIERRE
   add constraint FK_DETALLE__CAJCIE_DE_CAJA_CIE foreign key (CIER_ID)
      references CAJA_CIERRE (CIER_ID)
      on delete restrict on update restrict;

alter table DETALLE_COMPRA
   add constraint FK_DETALLE__FACCOM_DE_FACTURA_ foreign key (FACCOM_ID)
      references FACTURA_COMPRA (FACCOM_ID)
      on delete restrict on update restrict;

alter table DETALLE_COMPRA
   add constraint FK_DETALLE__PRO_DETCO_PRODUCTO foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2)
      on delete restrict on update restrict;

alter table DETALLE_CONSIGNACION
   add constraint FK_DETALLE__CON_DETCO_CONSIGNA foreign key (CON_ID)
      references CONSIGNACION (CON_ID)
      on delete restrict on update restrict;

alter table DETALLE_CONSIGNACION
   add constraint FK_DETALLE__PRO_DETCO_PRODUCTO foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2)
      on delete restrict on update restrict;

alter table DETALLE_COTIZACION
   add constraint FK_DETALLE__COT_DETCO_COTIZACI foreign key (COT_ID)
      references COTIZACION (COT_ID)
      on delete restrict on update restrict;

alter table DETALLE_COTIZACION
   add constraint FK_DETALLE__PRO_DETCO_PRODUCTO foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2)
      on delete restrict on update restrict;

alter table DETALLE_CREDITO
   add constraint FK_DETALLE__CRE_DETCR_CREDITO foreign key (CRE_ID)
      references CREDITO (CRE_ID)
      on delete restrict on update restrict;

alter table DETALLE_CREDITO
   add constraint FK_DETALLE__FORPAG_DE_FORMA_PA foreign key (FORPAG_ID)
      references FORMA_PAGO (FORPAG_ID)
      on delete restrict on update restrict;

alter table DETALLE_DEVOLUCION
   add constraint FK_DETALLE__DEV_DETDE_DEVOLUCI foreign key (DEV_ID)
      references DEVOLUCION (DEV_ID)
      on delete restrict on update restrict;

alter table DETALLE_DEVOLUCION
   add constraint FK_DETALLE__PRO_DETDE_PRODUCTO foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2)
      on delete restrict on update restrict;

alter table DETALLE_EGRESO
   add constraint FK_DETALLE__COM_DETEG_COMPRA foreign key (COM_ID)
      references COMPRA (COM_ID)
      on delete restrict on update restrict;

alter table DETALLE_GASTO
   add constraint FK_DETALLE__GAS_DETGA_GASTO foreign key (GAS_ID)
      references GASTO (GAS_ID)
      on delete restrict on update restrict;

alter table DETALLE_GASTO
   add constraint FK_DETALLE__PROEXT_DE_PRODUCTO foreign key (PROEXT_ID)
      references PRODUCTO_EXTRA (PROEXT_ID)
      on delete restrict on update restrict;

alter table DETALLE_INGRESO
   add constraint FK_DETALLE__VEN_DETIN_VENTA foreign key (VEN_ID)
      references VENTA (VEN_ID)
      on delete restrict on update restrict;

alter table DETALLE_MOVILIZACION_INGRESO
   add constraint FK_DETALLE__MOV_DETMO_MOVILIZA foreign key (MOV_ID)
      references MOVILIZACION (MOV_ID)
      on delete restrict on update restrict;

alter table DETALLE_MOVILIZACION_INGRESO
   add constraint FK_DETALLE__PRO_DETMO_PRODUCTO foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2)
      on delete restrict on update restrict;

alter table DETALLE_MOVILIZACION_SALIDA
   add constraint FK_DETALLE__MOV_DETMO_MOVILIZA foreign key (MOV_ID)
      references MOVILIZACION (MOV_ID)
      on delete restrict on update restrict;

alter table DETALLE_MOVILIZACION_SALIDA
   add constraint FK_DETALLE__PRO_DETMO_PRODUCTO foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2)
      on delete restrict on update restrict;

alter table DETALLE_PEDIDO
   add constraint FK_DETALLE__PER_DETPE_PEDIDO foreign key (PED_ID)
      references PEDIDO (PED_ID)
      on delete restrict on update restrict;

alter table DETALLE_PEDIDO
   add constraint FK_DETALLE__PRO_DETPE_PRODUCTO foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2)
      on delete restrict on update restrict;

alter table DETALLE_VENTA
   add constraint FK_DETALLE__FACVEN_DE_FACTURA_ foreign key (FACVEN_ID)
      references FACTURA_VENTA (FACVEN_ID)
      on delete restrict on update restrict;

alter table DETALLE_VENTA
   add constraint FK_DETALLE__PRO_DETVE_PRODUCTO foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2)
      on delete restrict on update restrict;

alter table DEVOLUCION
   add constraint FK_DEVOLUCI_CLI_DEV_CLIENTE foreign key (CLI_ID)
      references CLIENTE (CLI_ID)
      on delete restrict on update restrict;

alter table DEVOLUCION
   add constraint FK_DEVOLUCI_LOCSUC_DE_LOCAL_SU foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID)
      on delete restrict on update restrict;

alter table EMPLEADO_LOCAL
   add constraint FK_EMPLEADO_CAR_EMPLO_CARGO foreign key (CAR_ID)
      references CARGO (CAR_ID)
      on delete restrict on update restrict;

alter table EMPLEADO_LOCAL
   add constraint FK_EMPLEADO_EMP_EMPLO_EMPLEADO foreign key (EMP_ID)
      references EMPLEADO (EMP_ID)
      on delete restrict on update restrict;

alter table EMPLEADO_LOCAL
   add constraint FK_EMPLEADO_LOC_EMPLO_LOCAL_SU foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID)
      on delete restrict on update restrict;

alter table FACTURA_COMPRA
   add constraint FK_FACTURA__EMPPRO_FA_EMPRESA_ foreign key (EMPPRO_ID)
      references EMPRESA_PROVEEDORA (EMPPRO_ID)
      on delete restrict on update restrict;

alter table FACTURA_COMPRA
   add constraint FK_FACTURA__FORPAG_FA_FORMA_PA foreign key (FORPAG_ID)
      references FORMA_PAGO (FORPAG_ID)
      on delete restrict on update restrict;

alter table FACTURA_COMPRA
   add constraint FK_FACTURA__LOCSUC_FA_LOCAL_SU foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID)
      on delete restrict on update restrict;

alter table FACTURA_VENTA
   add constraint FK_FACTURA__CLI_FACVE_CLIENTE foreign key (CLI_ID)
      references CLIENTE (CLI_ID)
      on delete restrict on update restrict;

alter table FACTURA_VENTA
   add constraint FK_FACTURA__FORPAG_FA_FORMA_PA foreign key (FORPAG_ID)
      references FORMA_PAGO (FORPAG_ID)
      on delete restrict on update restrict;

alter table FACTURA_VENTA
   add constraint FK_FACTURA__LOCSUC_FA_LOCAL_SU foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID)
      on delete restrict on update restrict;

alter table FORMA_PAGO
   add constraint FK_FORMA_PA_CHE_FORPA_CHEQUE foreign key (CHE_ID)
      references CHEQUE (CHE_ID)
      on delete restrict on update restrict;

alter table FORMA_PAGO
   add constraint FK_FORMA_PA_CRE_FORPA_CREDITO foreign key (CRE_ID)
      references CREDITO (CRE_ID)
      on delete restrict on update restrict;

alter table FORMA_PAGO
   add constraint FK_FORMA_PA_DINELE_FO_DINERO_E foreign key (DINELE_ID)
      references DINERO_ELECTRONICO (DINELE_ID)
      on delete restrict on update restrict;

alter table FORMA_PAGO
   add constraint FK_FORMA_PA_EFE_FORPA_EFECTIVO foreign key (EFE_ID)
      references EFECTIVO (EFE_ID)
      on delete restrict on update restrict;

alter table FORMA_PAGO
   add constraint FK_FORMA_PA_NOTCRE_FO_NOTA_CRE foreign key (NOTCRE_ID)
      references NOTA_CREDITO (NOTCRE_ID)
      on delete restrict on update restrict;

alter table FORMA_PAGO
   add constraint FK_FORMA_PA_NOTDEB_FO_NOTA_DEB foreign key (NOTCRE_ID2)
      references NOTA_DEBITO (NOTCRE_ID2)
      on delete restrict on update restrict;

alter table FORMA_PAGO
   add constraint FK_FORMA_PA_TRA_FORPA_TRANSFER foreign key (TRA_ID)
      references TRANSFERENCIA (TRA_ID)
      on delete restrict on update restrict;

alter table GASTO
   add constraint FK_GASTO_EMPLOC_GA_EMPLEADO foreign key (EMPLOC_ID)
      references EMPLEADO_LOCAL (EMPLOC_ID)
      on delete restrict on update restrict;

alter table GASTO
   add constraint FK_GASTO_LOCSUC_GA_LOCAL_SU foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID)
      on delete restrict on update restrict;

alter table GASTO
   add constraint FK_GASTO_LOC_GAS_LOCALIDA foreign key (LOCA_ID)
      references LOCALIDAD (LOCA_ID)
      on delete restrict on update restrict;

alter table INVENTARIO_LOCAL
   add constraint FK_INVENTAR_DETASI_IN_DETALLE_ foreign key (DETASI_ID)
      references DETALLE_ASIGNACION (DETASI_ID)
      on delete restrict on update restrict;

alter table INVENTARIO_LOCAL
   add constraint FK_INVENTAR_DETBAJ_IN_DETALLE_ foreign key (DETBAJ_ID)
      references DETALLE_BAJA (DETBAJ_ID)
      on delete restrict on update restrict;

alter table INVENTARIO_LOCAL
   add constraint FK_INVENTAR_DETCOM_IN_DETALLE_ foreign key (DETCOM_ID, PRO_ID)
      references DETALLE_COMPRA (DETCOM_ID, PRO_ID)
      on delete restrict on update restrict;

alter table INVENTARIO_LOCAL
   add constraint FK_INVENTAR_DETCON_IN_DETALLE_ foreign key (DETCON_ID)
      references DETALLE_CONSIGNACION (DETCON_ID)
      on delete restrict on update restrict;

alter table INVENTARIO_LOCAL
   add constraint FK_INVENTAR_DETDEV_IN_DETALLE_ foreign key (DETDEV_ID)
      references DETALLE_DEVOLUCION (DETDEV_ID)
      on delete restrict on update restrict;

alter table INVENTARIO_LOCAL
   add constraint FK_INVENTAR_DETMOVING_DETALLE_ foreign key (DETMOVI_ID)
      references DETALLE_MOVILIZACION_INGRESO (DETMOVI_ID)
      on delete restrict on update restrict;

alter table INVENTARIO_LOCAL
   add constraint FK_INVENTAR_DETMOVSAL_DETALLE_ foreign key (DETMOVS_ID)
      references DETALLE_MOVILIZACION_SALIDA (DETMOVS_ID)
      on delete restrict on update restrict;

alter table INVENTARIO_LOCAL
   add constraint FK_INVENTAR_DETVEN_IN_DETALLE_ foreign key (DETVEN_ID)
      references DETALLE_VENTA (DETVEN_ID)
      on delete restrict on update restrict;

alter table INVENTARIO_LOCAL
   add constraint FK_INVENTAR_LOCSUC_IN_LOCAL_SU foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID)
      on delete restrict on update restrict;

alter table INVENTARIO_LOCAL
   add constraint FK_INVENTAR_PRO_INVLO_PRODUCTO foreign key (PRO_ID2)
      references PRODUCTO (PRO_ID2)
      on delete restrict on update restrict;

alter table LOCALIDAD
   add constraint FK_LOCALIDA_PROV_LOC_PROVINCI foreign key (PROV_ID)
      references PROVINCIA (PROV_ID)
      on delete restrict on update restrict;

alter table LOCAL_SUCURSAL
   add constraint FK_LOCAL_SU_ALM_LOCSU_ALMACEN foreign key (ALM_ID)
      references ALMACEN (ALM_ID)
      on delete restrict on update restrict;

alter table LOCAL_SUCURSAL
   add constraint FK_LOCAL_SU_GEO_LOCSU_GEOREFER foreign key (GEO_ID)
      references GEOREFERENCIA (GEO_ID)
      on delete restrict on update restrict;

alter table LOCAL_SUCURSAL
   add constraint FK_LOCAL_SU_PARLOC_LO_PARAMETR foreign key (PARLOC_ID)
      references PARAMETRO_LOCAL (PARLOC_ID)
      on delete restrict on update restrict;

alter table MOVILIZACION
   add constraint FK_MOVILIZA_CAL_MOV_CALENDAR foreign key (CAL_ID)
      references CALENDARIO (CAL_ID)
      on delete restrict on update restrict;

alter table MOVILIZACION
   add constraint FK_MOVILIZA_LOC_MOV_LOCALIDA foreign key (LOCA_ID)
      references LOCALIDAD (LOCA_ID)
      on delete restrict on update restrict;

alter table MOVILIZACION
   add constraint FK_MOVILIZA_VEH_MOV_VEHICULO foreign key (VEH_ID)
      references VEHICULO (VEH_ID)
      on delete restrict on update restrict;

alter table PARAMETRO_LOCAL
   add constraint FK_PARAMETR_PAR_PARLO_PARAMETR foreign key (PAR_ID)
      references PARAMETRO (PAR_ID)
      on delete restrict on update restrict;

alter table PEDIDO
   add constraint FK_PEDIDO_LOCSUC_PE_LOCAL_SU foreign key (LOC_ID)
      references LOCAL_SUCURSAL (LOC_ID)
      on delete restrict on update restrict;

alter table PERFIL_USUA_MOD_SIS
   add constraint FK_PERFIL_U_MODSIS_PE_MODULO_S foreign key (MODSIS_ID)
      references MODULO_SISTEMA (MODSIS_ID)
      on delete restrict on update restrict;

alter table PERFIL_USUA_MOD_SIS
   add constraint FK_PERFIL_U_PERUSU_PE_PERFIL_U foreign key (PERUSU_ID)
      references PERFIL_USUARIO (PERUSU_ID)
      on delete restrict on update restrict;

alter table PERMISOS_SISTEMA
   add constraint FK_PERMISOS_EMPLOC_PE_EMPLEADO foreign key (EMPLOC_ID)
      references EMPLEADO_LOCAL (EMPLOC_ID)
      on delete restrict on update restrict;

alter table PERMISOS_SISTEMA
   add constraint FK_PERMISOS_PERUSUMOD_PERFIL_U foreign key (PUMS_ID)
      references PERFIL_USUA_MOD_SIS (PUMS_ID)
      on delete restrict on update restrict;

alter table SESION
   add constraint FK_SESION_EMPLOC_SE_EMPLEADO foreign key (EMPLOC_ID)
      references EMPLEADO_LOCAL (EMPLOC_ID)
      on delete restrict on update restrict;

alter table TRANSFERENCIA
   add constraint FK_TRANSFER_CUE_TRA_CUENTA foreign key (CUE_ID)
      references CUENTA (CUE_ID)
      on delete restrict on update restrict;

