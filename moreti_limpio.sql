

CREATE TABLE cliente (
    codigo character varying NOT NULL,
    nombre character varying NOT NULL,
    apellido_uno character varying NOT NULL,
    apellido_dos character varying NOT NULL,
    direccion character varying NOT NULL,
    email character varying NOT NULL,
    telefono character varying NOT NULL,
    celular character varying NOT NULL,
    genero "char" NOT NULL,
    municipio character varying NOT NULL
);



CREATE TABLE cliente_factura (
    id_cliente character varying(10) NOT NULL,
    cod_factura character varying(10) NOT NULL
);



CREATE TABLE color_madera (
    id character varying(10) NOT NULL,
    nombre_color character varying(20) NOT NULL
);



CREATE TABLE decorativo (
    codigo character varying(10) NOT NULL,
    nombre character varying(15) NOT NULL,
    detalles character varying(50) NOT NULL
);



CREATE TABLE decorativo_factura (
    cod_decorativo character varying(10) NOT NULL,
    cod_factura character varying(10) NOT NULL
);



CREATE TABLE derivados (
    codigo character varying(10) NOT NULL,
    nombre character varying(15),
    valor integer,
    cantidad_existente character varying(10),
    tipo_derivado character varying(10)
);



CREATE TABLE empleado (
    id character varying(10) NOT NULL,
    nombre character varying(20) NOT NULL,
    apellido_uno character varying(15) NOT NULL,
    apellido_dos character varying(15) NOT NULL,
    direccion character varying(25) NOT NULL,
    email character varying(25) NOT NULL,
    telefono character varying(7) NOT NULL,
    celular character varying(10) NOT NULL,
    genero "char" NOT NULL,
    municipio character varying(10) NOT NULL
);



CREATE TABLE empleado_proyecto (
    id_empleado character varying(10) NOT NULL,
    cod_proyecto character varying(10) NOT NULL
);


CREATE TABLE empleado_tipo_especialidad (
    id_empleado character varying(10) NOT NULL,
    cod_tipo_especialidad character varying(10) NOT NULL
);


CREATE TABLE factura (
    codigo character varying(10) NOT NULL,
    fecha date NOT NULL,
    impuestos integer NOT NULL,
    total integer NOT NULL
);


CREATE TABLE factura_proyecto (
    cod_factura character varying(10) NOT NULL,
    cod_proyecto character varying(10) NOT NULL
);


CREATE TABLE genero (
    codigo "char" NOT NULL,
    tipo character varying(15) NOT NULL
);



CREATE TABLE municipio (
    codigo character varying(10) NOT NULL,
    nombre character varying(20) NOT NULL
);




CREATE TABLE pedido (
    codigo character varying(10) NOT NULL,
    fecha date NOT NULL,
    detalle character varying(80) NOT NULL,
    cantidad numeric NOT NULL,
    total integer NOT NULL
);


CREATE TABLE producto (
    codigo character varying(10) NOT NULL,
    nombre character varying(15) NOT NULL,
    valor integer NOT NULL,
    detalles character varying(30) NOT NULL,
    cod_tipo_producto character varying(10),
    cod_tipo_derivado character varying(10),
    cod_tipo_madera character varying(10) NOT NULL
);


CREATE SEQUENCE producto_cod_tipo_manera_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;



CREATE TABLE producto_factura (
    cod_producto character varying(10) NOT NULL,
    cod_factura character varying(10) NOT NULL
);


CREATE TABLE proveedor (
    nit character varying(12) NOT NULL,
    empresa character varying(20) NOT NULL,
    nombre character varying(20),
    apellido_uno character varying(15),
    apellido_dos character varying(15),
    direccion_empresa character varying(25),
    email character varying(25),
    telefono character varying(7),
    celular character varying(10),
    cod_genero "char",
    cod_municipio character varying(10)
);


CREATE TABLE proveedor_pedido (
    nit_proveedor character varying(12) NOT NULL,
    cod_proyecto character varying(10) NOT NULL,
    cod_derivado character varying(10) NOT NULL
);


CREATE TABLE proyecto (
    codigo character varying(10) NOT NULL,
    fecha_inicio date NOT NULL,
    fecha_entrega date NOT NULL,
    descripcion character varying(50) NOT NULL,
    valor integer NOT NULL,
    cod_factura character varying(10) NOT NULL
);


CREATE TABLE proyecto_tipo_especialidad (
    cod_proyecto character varying(10) NOT NULL,
    cod_tipo_especialidad character varying(10) NOT NULL
);



CREATE TABLE servicios (
    codigo character varying(10) NOT NULL,
    cod_tipo_servicio character varying(10) NOT NULL,
    cod_factura character varying(10) NOT NULL,
    cod_especialidad character varying(10) NOT NULL
);



CREATE TABLE servicios_factura (
    cod_servicio character varying(10) NOT NULL,
    cod_factura character varying(10) NOT NULL
);



CREATE TABLE tipo_derivado (
    codigo character varying(10) NOT NULL,
    nombre_tipo_derivado character varying(20) NOT NULL
);



CREATE TABLE tipo_especialidad (
    codigo character varying(10) NOT NULL,
    nombre character varying(15) NOT NULL
);



CREATE TABLE tipo_producto (
    codigo character varying(10) NOT NULL,
    nombre character varying(30) NOT NULL
);



CREATE TABLE tipo_servicio (
    codigo character varying(10) NOT NULL,
    nombre character varying(20)
);


INSERT INTO cliente VALUES ('8656343545', 'Angela', 'Ferreira', 'Villamizar', 'Calle 52 34-54', 'gfhxf@fdg.com', '2343543', '3546465454', '2', '4');





INSERT INTO color_madera VALUES ('1', 'Negro');
INSERT INTO color_madera VALUES ('2', 'Castaño');
INSERT INTO color_madera VALUES ('3', 'Ocre');


INSERT INTO decorativo VALUES ('32432', 'hfghf', 'Este es un ejemplo de prueba');



INSERT INTO derivados VALUES ('7654', 'Material P', 20000, '20', '3');



INSERT INTO empleado VALUES ('6454645645', 'elpersonaje', 'Perez', 'Gil', 'Calle 11 32-63', 'elpersonaje1@mail.com', '6512938', '3129475839', '3', '3');



INSERT INTO factura VALUES ('678687', '2018-10-09', 25000, 50000);
INSERT INTO factura VALUES ('1234', '2018-09-06', 58000, 600000);
INSERT INTO factura VALUES ('5678', '2018-09-15', 66000, 850000);
INSERT INTO factura VALUES ('9101', '2018-09-16', 45000, 530000);


INSERT INTO genero VALUES ('1', 'Masculino');
INSERT INTO genero VALUES ('2', 'Femenino');
INSERT INTO genero VALUES ('3', 'Otros');



INSERT INTO municipio VALUES ('1', 'Bucaramanga');
INSERT INTO municipio VALUES ('2', 'Bogota');
INSERT INTO municipio VALUES ('3', 'Barranca');
INSERT INTO municipio VALUES ('4', 'Lebrija');



INSERT INTO pedido VALUES ('32432', '2018-09-13', 'Esta es otra prueba', 2, 50000);

INSERT INTO producto VALUES ('456', 'Somier', 800000, 'Somier a medida 195x140 cms', '3', '2', '1');




INSERT INTO proveedor VALUES ('123', 'elproveedor', 'juan', 'quintero', 'sanchez', 'Cra 13 60-56', 'elproveedor@mail.com', '1234567', '1234567990', '1', '1');


INSERT INTO proyecto VALUES ('2442', '2018-09-02', '2018-10-02', 'Proyecto de prueba', 350000, '1234');



INSERT INTO servicios VALUES ('3564', '2', '1234', '3');



INSERT INTO tipo_derivado VALUES ('1', 'Derivado 1');
INSERT INTO tipo_derivado VALUES ('2', 'Derivado 2');
INSERT INTO tipo_derivado VALUES ('3', 'Derivado 3');



INSERT INTO tipo_especialidad VALUES ('1', 'Especialidad 1');
INSERT INTO tipo_especialidad VALUES ('2', 'Especialidad 2');
INSERT INTO tipo_especialidad VALUES ('3', 'Especialidad 3');


INSERT INTO tipo_producto VALUES ('1', 'Mesa');
INSERT INTO tipo_producto VALUES ('2', 'Mueble');
INSERT INTO tipo_producto VALUES ('3', 'Cama');


INSERT INTO tipo_servicio VALUES ('1', 'Servicio 1');
INSERT INTO tipo_servicio VALUES ('2', 'Servicio 2');
INSERT INTO tipo_servicio VALUES ('3', 'Servicio 3');


ALTER TABLE ONLY cliente_factura
    ADD CONSTRAINT cliente_factura_pkey PRIMARY KEY (id_cliente, cod_factura);



ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (codigo);



ALTER TABLE ONLY color_madera
    ADD CONSTRAINT color_madera_pkey PRIMARY KEY (id);


ALTER TABLE ONLY decorativo_factura
    ADD CONSTRAINT decorativo_factura_pkey PRIMARY KEY (cod_decorativo, cod_factura);


ALTER TABLE ONLY decorativo
    ADD CONSTRAINT decorativo_pkey PRIMARY KEY (codigo);


ALTER TABLE ONLY derivados
    ADD CONSTRAINT derivados_pkey PRIMARY KEY (codigo);


ALTER TABLE ONLY empleado
    ADD CONSTRAINT empleado_pkey PRIMARY KEY (id);


ALTER TABLE ONLY empleado_proyecto
    ADD CONSTRAINT empleado_proyecto_pkey PRIMARY KEY (id_empleado, cod_proyecto);

ALTER TABLE ONLY empleado_tipo_especialidad
    ADD CONSTRAINT empleado_tipo_especialidad_pkey PRIMARY KEY (id_empleado, cod_tipo_especialidad);


ALTER TABLE ONLY factura_proyecto
    ADD CONSTRAINT factara_proyecto_pkey PRIMARY KEY (cod_factura, cod_proyecto);



ALTER TABLE ONLY factura
    ADD CONSTRAINT factura_pkey PRIMARY KEY (codigo);


ALTER TABLE ONLY genero
    ADD CONSTRAINT genero_pkey PRIMARY KEY (codigo);



ALTER TABLE ONLY municipio
    ADD CONSTRAINT municipio_pkey PRIMARY KEY (codigo);

ALTER TABLE ONLY pedido
    ADD CONSTRAINT pedido_pkey PRIMARY KEY (codigo);


ALTER TABLE ONLY producto_factura
    ADD CONSTRAINT producto_factura_pkey PRIMARY KEY (cod_producto, cod_factura);



ALTER TABLE ONLY producto
    ADD CONSTRAINT producto_pkey PRIMARY KEY (codigo);



ALTER TABLE ONLY proveedor_pedido
    ADD CONSTRAINT proveedor_pedido_pkey PRIMARY KEY (nit_proveedor, cod_proyecto, cod_derivado);


ALTER TABLE ONLY proveedor
    ADD CONSTRAINT proveedor_pkey PRIMARY KEY (nit);



ALTER TABLE ONLY proyecto
    ADD CONSTRAINT proyecto_pkey PRIMARY KEY (codigo);

ALTER TABLE ONLY proyecto_tipo_especialidad
    ADD CONSTRAINT proyecto_tipo_especialidad_pkey PRIMARY KEY (cod_proyecto, cod_tipo_especialidad);



ALTER TABLE ONLY servicios_factura
    ADD CONSTRAINT servicios_factura_pkey PRIMARY KEY (cod_servicio, cod_factura);


ALTER TABLE ONLY servicios
    ADD CONSTRAINT servicios_pkey PRIMARY KEY (codigo);


ALTER TABLE ONLY tipo_derivado
    ADD CONSTRAINT tipo_derivado_pkey PRIMARY KEY (codigo);


ALTER TABLE ONLY tipo_especialidad
    ADD CONSTRAINT tipo_especialidad_pkey PRIMARY KEY (codigo);


ALTER TABLE ONLY tipo_producto
    ADD CONSTRAINT tipo_producto_pkey PRIMARY KEY (codigo);

ALTER TABLE ONLY tipo_servicio
    ADD CONSTRAINT tipo_servicio_pkey PRIMARY KEY (codigo);


ALTER TABLE ONLY cliente_factura
    ADD CONSTRAINT cliente_factura_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;



ALTER TABLE ONLY cliente_factura
    ADD CONSTRAINT cliente_factura_id_cliente_fkey FOREIGN KEY (id_cliente) REFERENCES cliente(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_genero_fkey FOREIGN KEY (genero) REFERENCES genero(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_municipio_fkey FOREIGN KEY (municipio) REFERENCES municipio(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY decorativo_factura
    ADD CONSTRAINT decorativo_factura_cod_decorativo_fkey FOREIGN KEY (cod_decorativo) REFERENCES decorativo(codigo) ON UPDATE CASCADE ON DELETE CASCADE;



ALTER TABLE ONLY decorativo_factura
    ADD CONSTRAINT decorativo_factura_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY derivados
    ADD CONSTRAINT derivados_tipo_derivado_fkey FOREIGN KEY (tipo_derivado) REFERENCES tipo_derivado(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY empleado
    ADD CONSTRAINT empleado_genero_fkey FOREIGN KEY (genero) REFERENCES genero(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY empleado
    ADD CONSTRAINT empleado_municipio_fkey FOREIGN KEY (municipio) REFERENCES municipio(codigo) ON UPDATE CASCADE ON DELETE CASCADE;



ALTER TABLE ONLY empleado_proyecto
    ADD CONSTRAINT empleado_proyecto_cod_proyecto_fkey FOREIGN KEY (cod_proyecto) REFERENCES proyecto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;



ALTER TABLE ONLY empleado_proyecto
    ADD CONSTRAINT empleado_proyecto_id_empleado_fkey FOREIGN KEY (id_empleado) REFERENCES empleado(id) ON UPDATE CASCADE ON DELETE CASCADE;



ALTER TABLE ONLY empleado_tipo_especialidad
    ADD CONSTRAINT empleado_tipo_especialidad_cod_tipo_especialidad_fkey FOREIGN KEY (cod_tipo_especialidad) REFERENCES tipo_especialidad(codigo) ON UPDATE CASCADE ON DELETE CASCADE;



ALTER TABLE ONLY empleado_tipo_especialidad
    ADD CONSTRAINT empleado_tipo_especialidad_id_empleado_fkey FOREIGN KEY (id_empleado) REFERENCES empleado(id) ON UPDATE CASCADE ON DELETE CASCADE;



ALTER TABLE ONLY factura_proyecto
    ADD CONSTRAINT factura_proyecto_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY factura_proyecto
    ADD CONSTRAINT factura_proyecto_cod_proyecto_fkey FOREIGN KEY (cod_proyecto) REFERENCES proyecto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;



ALTER TABLE ONLY producto
    ADD CONSTRAINT producto_cod_tipo_derivado_fkey FOREIGN KEY (cod_tipo_derivado) REFERENCES tipo_derivado(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY producto
    ADD CONSTRAINT producto_cod_tipo_madera_fkey FOREIGN KEY (cod_tipo_madera) REFERENCES color_madera(id) ON UPDATE CASCADE ON DELETE CASCADE;



ALTER TABLE ONLY producto
    ADD CONSTRAINT producto_cod_tipo_producto_fkey FOREIGN KEY (cod_tipo_producto) REFERENCES tipo_producto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE ONLY producto_factura
    ADD CONSTRAINT producto_factura_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY producto_factura
    ADD CONSTRAINT producto_factura_cod_producto_fkey FOREIGN KEY (cod_producto) REFERENCES producto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY proveedor
    ADD CONSTRAINT proveedor_cod_genero_fkey FOREIGN KEY (cod_genero) REFERENCES genero(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY proveedor
    ADD CONSTRAINT proveedor_cod_municipio_fkey FOREIGN KEY (cod_municipio) REFERENCES municipio(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY proveedor_pedido
    ADD CONSTRAINT proveedor_pedido_cod_derivado_fkey FOREIGN KEY (cod_derivado) REFERENCES derivados(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY proveedor_pedido
    ADD CONSTRAINT proveedor_pedido_cod_proyecto_fkey FOREIGN KEY (cod_proyecto) REFERENCES proyecto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY proveedor_pedido
    ADD CONSTRAINT proveedor_pedido_nit_proveedor_fkey FOREIGN KEY (nit_proveedor) REFERENCES proveedor(nit) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY proyecto
    ADD CONSTRAINT proyecto_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY proyecto_tipo_especialidad
    ADD CONSTRAINT proyecto_tipo_especialidad_cod_proyecto_fkey FOREIGN KEY (cod_proyecto) REFERENCES proyecto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY proyecto_tipo_especialidad
    ADD CONSTRAINT proyecto_tipo_especialidad_cod_tipo_especialidad_fkey FOREIGN KEY (cod_tipo_especialidad) REFERENCES tipo_especialidad(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY servicios
    ADD CONSTRAINT servicios_cod_especialidad_fkey FOREIGN KEY (cod_especialidad) REFERENCES tipo_especialidad(codigo) ON UPDATE CASCADE ON DELETE CASCADE;



ALTER TABLE ONLY servicios
    ADD CONSTRAINT servicios_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY servicios
    ADD CONSTRAINT servicios_cod_tipo_servicio_fkey FOREIGN KEY (cod_tipo_servicio) REFERENCES tipo_servicio(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


ALTER TABLE ONLY servicios_factura
    ADD CONSTRAINT servicios_factura_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;



ALTER TABLE ONLY servicios_factura
    ADD CONSTRAINT servicios_factura_cod_servicio_fkey FOREIGN KEY (cod_servicio) REFERENCES servicios(codigo) ON UPDATE CASCADE ON DELETE CASCADE;



REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;
