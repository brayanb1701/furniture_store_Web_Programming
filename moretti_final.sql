--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: cliente; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

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


ALTER TABLE public.cliente OWNER TO postgres;

--
-- Name: cliente_factura; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cliente_factura (
    id_cliente character varying(10) NOT NULL,
    cod_factura character varying(10) NOT NULL
);


ALTER TABLE public.cliente_factura OWNER TO postgres;

--
-- Name: color_madera; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE color_madera (
    id character varying(10) NOT NULL,
    nombre_color character varying(20) NOT NULL
);


ALTER TABLE public.color_madera OWNER TO postgres;

--
-- Name: decorativo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE decorativo (
    codigo character varying(10) NOT NULL,
    nombre character varying(15) NOT NULL,
    detalles character varying(50) NOT NULL
);


ALTER TABLE public.decorativo OWNER TO postgres;

--
-- Name: decorativo_factura; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE decorativo_factura (
    cod_decorativo character varying(10) NOT NULL,
    cod_factura character varying(10) NOT NULL
);


ALTER TABLE public.decorativo_factura OWNER TO postgres;

--
-- Name: derivados; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE derivados (
    codigo character varying(10) NOT NULL,
    nombre character varying(15),
    valor integer,
    cantidad_existente character varying(10),
    tipo_derivado character varying(10)
);


ALTER TABLE public.derivados OWNER TO postgres;

--
-- Name: empleado; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

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


ALTER TABLE public.empleado OWNER TO postgres;

--
-- Name: empleado_proyecto; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE empleado_proyecto (
    id_empleado character varying(10) NOT NULL,
    cod_proyecto character varying(10) NOT NULL
);


ALTER TABLE public.empleado_proyecto OWNER TO postgres;

--
-- Name: empleado_tipo_especialidad; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE empleado_tipo_especialidad (
    id_empleado character varying(10) NOT NULL,
    cod_tipo_especialidad character varying(10) NOT NULL
);


ALTER TABLE public.empleado_tipo_especialidad OWNER TO postgres;

--
-- Name: factura; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE factura (
    codigo character varying(10) NOT NULL,
    fecha date NOT NULL,
    impuestos integer NOT NULL,
    total integer NOT NULL
);


ALTER TABLE public.factura OWNER TO postgres;

--
-- Name: factura_proyecto; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE factura_proyecto (
    cod_factura character varying(10) NOT NULL,
    cod_proyecto character varying(10) NOT NULL
);


ALTER TABLE public.factura_proyecto OWNER TO postgres;

--
-- Name: genero; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE genero (
    codigo "char" NOT NULL,
    tipo character varying(15) NOT NULL
);


ALTER TABLE public.genero OWNER TO postgres;

--
-- Name: municipio; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE municipio (
    codigo character varying(10) NOT NULL,
    nombre character varying(20) NOT NULL
);


ALTER TABLE public.municipio OWNER TO postgres;

--
-- Name: pedido; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pedido (
    codigo character varying(10) NOT NULL,
    fecha date NOT NULL,
    detalle character varying(80) NOT NULL,
    cantidad numeric NOT NULL,
    total integer NOT NULL
);


ALTER TABLE public.pedido OWNER TO postgres;

--
-- Name: producto; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE producto (
    codigo character varying(10) NOT NULL,
    nombre character varying(15) NOT NULL,
    valor integer NOT NULL,
    detalles character varying(30) NOT NULL,
    cod_tipo_producto character varying(10),
    cod_tipo_derivado character varying(10),
    cod_tipo_madera character varying(10) NOT NULL
);


ALTER TABLE public.producto OWNER TO postgres;

--
-- Name: producto_cod_tipo_manera_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE producto_cod_tipo_manera_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.producto_cod_tipo_manera_seq OWNER TO postgres;

--
-- Name: producto_cod_tipo_manera_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE producto_cod_tipo_manera_seq OWNED BY producto.cod_tipo_madera;


--
-- Name: producto_factura; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE producto_factura (
    cod_producto character varying(10) NOT NULL,
    cod_factura character varying(10) NOT NULL
);


ALTER TABLE public.producto_factura OWNER TO postgres;

--
-- Name: proveedor; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

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


ALTER TABLE public.proveedor OWNER TO postgres;

--
-- Name: proveedor_pedido; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE proveedor_pedido (
    nit_proveedor character varying(12) NOT NULL,
    cod_proyecto character varying(10) NOT NULL,
    cod_derivado character varying(10) NOT NULL
);


ALTER TABLE public.proveedor_pedido OWNER TO postgres;

--
-- Name: proyecto; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE proyecto (
    codigo character varying(10) NOT NULL,
    fecha_inicio date NOT NULL,
    fecha_entrega date NOT NULL,
    descripcion character varying(50) NOT NULL,
    valor integer NOT NULL,
    cod_factura character varying(10) NOT NULL
);


ALTER TABLE public.proyecto OWNER TO postgres;

--
-- Name: proyecto_tipo_especialidad; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE proyecto_tipo_especialidad (
    cod_proyecto character varying(10) NOT NULL,
    cod_tipo_especialidad character varying(10) NOT NULL
);


ALTER TABLE public.proyecto_tipo_especialidad OWNER TO postgres;

--
-- Name: servicios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE servicios (
    codigo character varying(10) NOT NULL,
    cod_tipo_servicio character varying(10) NOT NULL,
    cod_factura character varying(10) NOT NULL,
    cod_especialidad character varying(10) NOT NULL
);


ALTER TABLE public.servicios OWNER TO postgres;

--
-- Name: servicios_factura; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE servicios_factura (
    cod_servicio character varying(10) NOT NULL,
    cod_factura character varying(10) NOT NULL
);


ALTER TABLE public.servicios_factura OWNER TO postgres;

--
-- Name: tipo_derivado; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_derivado (
    codigo character varying(10) NOT NULL,
    nombre_tipo_derivado character varying(20) NOT NULL
);


ALTER TABLE public.tipo_derivado OWNER TO postgres;

--
-- Name: tipo_especialidad; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_especialidad (
    codigo character varying(10) NOT NULL,
    nombre character varying(15) NOT NULL
);


ALTER TABLE public.tipo_especialidad OWNER TO postgres;

--
-- Name: tipo_producto; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_producto (
    codigo character varying(10) NOT NULL,
    nombre character varying(30) NOT NULL
);


ALTER TABLE public.tipo_producto OWNER TO postgres;

--
-- Name: tipo_servicio; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_servicio (
    codigo character varying(10) NOT NULL,
    nombre character varying(20)
);


ALTER TABLE public.tipo_servicio OWNER TO postgres;

--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuario (
    usuario character varying(20) NOT NULL,
    password character varying(20) NOT NULL,
    codigo character varying(5),
    nombres character varying(25),
    apellidos character varying(25),
    rol character varying(15),
    imagen character varying(15)
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- Data for Name: cliente; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cliente (codigo, nombre, apellido_uno, apellido_dos, direccion, email, telefono, celular, genero, municipio) FROM stdin;
8656343545	Angela	Ferreira	Villamizar	Calle 52 34-54	gfhxf@fdg.com	2343543	3546465454	2	4
1234567890	RERT	RETER	RETER	REYTH	sdkljfsd@lkfdj.com	2343543	1234567990	2	3
9864576	RERT	RETER	RETER	REYTH	lkdjfsldkjf@dksf.com	1111111	2222222222	3	3
1111	RERT	RETER	RETER	REYTH	gfhxf@fdg.com	5555555	4444444444	2	4
678687	RERTIR	RETERDGF	RETERV	REY	dskflsd@hotmail.com	5234534	2345654323	2	3
15325	DANIEL	ACEVEDO	JHONG	CRA 13 W	daniel148@gmail.com	6412674	3178920605	1	2
3879	MIGUEL	RONDOY	HERNANDEZ	CRA 17 #50	miguel897@hotmail.com	6543789	3155674879	1	1
5674	ISELA	BAYLON	ROJAS	CLL 54 #35-36	isela.b@gmail.com	6436786	3165492830	2	3
45672	NELSON	BOZA	SOLIS	CRA 15 #40	solis.n.b@gmail.com	6415768	3155467896	3	4
53670	ISABELLA	CARAZA	VILLEGAS	CLL 53 #15	isabel675@hotmail.com	6415675	3173928769	2	3
6478	JORGE	CORE	MORENO	CRA 27-24	jorge.s78@gmail.com	6423564	3156472839	1	1
74837	ANGEL	DIAZ	SALINA	CRA 27 #34-44	angel.a@hotmail.com	6432675	3152346785	3	2
8769	ANA	CASAPIA	VALDIVIA	CRA 13W #40	ana_maria@hotmail.com	6415436	3154673897	2	4
9875	CARLOS	FERNANDEZ 	GUZMAN	CRA 14 #15 BIS14	enrique.c3537@hotmail.com	6452736	3156743638	1	1
1067	ELENA	ROSAVELT	CHINAG	CLL 24 #15-17	elena.r.c@gmail.com	6415627	3173920809	2	2
\.


--
-- Data for Name: cliente_factura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cliente_factura (id_cliente, cod_factura) FROM stdin;
\.


--
-- Data for Name: color_madera; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY color_madera (id, nombre_color) FROM stdin;
1	Negro
2	Casta??o
3	Ocre
\.


--
-- Data for Name: decorativo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY decorativo (codigo, nombre, detalles) FROM stdin;
32432	hfghf	Este es un ejemplo de prueba 1
12343	MUEBLE	sencillo fact n??3894
22454	SILLA	factura n?? 9483
3653	LAMPARA	factura n??7684
47837	CAMA	cama king factura n??7483
5682	MESA	mesa doble factura n??9302
6972	SILLA	madera factura n??8302
73862	CAMA	sencilla factura n??2937
83682	MESA	grande factura n??4985
93782	LAMPARA	grande factura n??5839
10378	ESCRITORIO	escritorio sencillo factura n??8392
\.


--
-- Data for Name: decorativo_factura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY decorativo_factura (cod_decorativo, cod_factura) FROM stdin;
\.


--
-- Data for Name: derivados; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY derivados (codigo, nombre, valor, cantidad_existente, tipo_derivado) FROM stdin;
7654	Material P	20000	20	1
123455	PRIMERO	10000	55	1
12353	SILLA	45000	25	1
2353	MESA	50000	46	2
3643	LAMPARA	60000	33	3
4634	CAMA	95000	32	3
5247	CAMA	60000	55	1
6246	MESA 	43000	21	2
73454	SILLA	48000	60	3
82343	CAMA	100000	10	2
94564	MESA	65000	14	3
10273	LAMPARA	35000	30	1
\.


--
-- Data for Name: empleado; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY empleado (id, nombre, apellido_uno, apellido_dos, direccion, email, telefono, celular, genero, municipio) FROM stdin;
6454645645	ELPERSONAJEA	PEREZX	GILC	Calle 11 32-63	elpersonaje1@mail.com	6512938	3129475839	3	3
10897	ESTHER	FERNANDEZ	MATTA	CRA 47-78	esther.e67@outlook.com	6412673	3155498079	2	1
28936	ARTURO	GONZALES	MAGUI??O	CRA 67#45	arturo273@gmail.com	6415674	3155627867	1	3
3467	JAVIER	GUTIERREZ	VELEZ	CLL 45 #57-48	javier.g2q@gmail.com	6543786	3155365759	2	2
46378	LOURDES	HUAMANI	FLORES	CRA 78-65	louvre.h@outlook.com	6412563	3189763547	3	4
5473	MARLENE	GONZALES	HUILCA	CLL 15 #34-36	marl243@gmail.com	6415627	3156374829	2	2
6895	GUILLERMO	HORRUITINER	MARTINEZ	CRA 13-54	guiller.h@hotmail.com	6423564	3135627389	1	1
70934	LUIS	ARMANDO	RAIGADA	CRA 13 W #98	lucho.s@gmail.com	6412563	3156784536	1	4
8675	MARCOS	HYARCAYA	QUISPE	CLL 54-35	marck.h.q@gmail.com	6543786	3178692564	1	4
97864	GISELLE	SAN	YEN MAN	CLL 86-89	san_yenman@gmail.com	6413672	3165789253	2	1
10843	JONATHAN	RIOS	LIMA	CRA 67W #15	r.lfreddy@hotmail.com	7567354	3155476879	1	2
\.


--
-- Data for Name: empleado_proyecto; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY empleado_proyecto (id_empleado, cod_proyecto) FROM stdin;
\.


--
-- Data for Name: empleado_tipo_especialidad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY empleado_tipo_especialidad (id_empleado, cod_tipo_especialidad) FROM stdin;
\.


--
-- Data for Name: factura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY factura (codigo, fecha, impuestos, total) FROM stdin;
678687	2018-10-09	25000	50000
5678	2018-09-15	66000	850000
9101	2018-09-16	45000	530000
1234	2018-09-06	55000	600000
6848	2019-01-01	25000	90000
29374	2019-01-02	30000	55000
38027	2019-01-03	40200	78000
48957	2019-01-04	51000	78000
57839	2019-01-05	46000	98000
6829	2019-01-06	36400	56400
73582	2019-01-07	40000	100000
83649	2019-01-08	25000	55000
9373	2019-01-09	55000	88000
10293	2019-01-10	65000	120000
\.


--
-- Data for Name: factura_proyecto; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY factura_proyecto (cod_factura, cod_proyecto) FROM stdin;
\.


--
-- Data for Name: genero; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY genero (codigo, tipo) FROM stdin;
1	Masculino
2	Femenino
3	Otros
\.


--
-- Data for Name: municipio; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY municipio (codigo, nombre) FROM stdin;
1	Bucaramanga
2	Bogota
3	Barranca
4	Lebrija
\.


--
-- Data for Name: pedido; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY pedido (codigo, fecha, detalle, cantidad, total) FROM stdin;
32432	2018-09-13	Esta es otra prueba	2	60000
1938	2019-01-01	mesa fact n??4839\r\n\r\n\r\n	2	150000
28108	2019-01-02	camas fact n??830	3	567000
38947	2019-01-03	muebles fact n??7493	2	300800
4927	2019-01-04	sillas factura n??7937	5	675900
58937	2019-01-05	mesa factura n??489	4	489000
6904	2019-01-06	sillas fact ??893	6	870000
7826	2019-01-07	sillas fact n??7493	2	150000
83729	2019-01-08	cama king fact n??7489	1	95000
9378	2019-01-09	muebles factura n??8409	5	780000
10378	2019-01-10	sillas fact n??894	3	389000
\.


--
-- Data for Name: producto; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY producto (codigo, nombre, valor, detalles, cod_tipo_producto, cod_tipo_derivado, cod_tipo_madera) FROM stdin;
43545435	DSGSDGSDGS	34543543	aegsdrhdhsd dgatgar srggr	2	3	1
456	Somier	800000	Somier a medida 195x140 cms	3	1	1
15233	JOSEPH	25000	mesa n??15 seg??n factura 473	1	2	1
28736	CARLA	68000	cama factura n??4758	3	1	3
37826	JESSIE	78000	sill??n factura n??9038	2	2	2
46826	CHRIS	50000	Mesa doble n??2472	1	3	2
57280	GISELLE	87900	cama king factura n??7837	3	1	1
62433	JUAN	100000	cama king factura n??83498	3	1	3
73947	JEFREY	59000	mueble seg??n factura n??4893	2	1	3
94739	LAURA	80000	Cama sencilla fact n??3784	3	1	1
10283	DANIEL	69700	Sill??n factura n??3894	2	3	3
\.


--
-- Name: producto_cod_tipo_manera_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('producto_cod_tipo_manera_seq', 1, false);


--
-- Data for Name: producto_factura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY producto_factura (cod_producto, cod_factura) FROM stdin;
\.


--
-- Data for Name: proveedor; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY proveedor (nit, empresa, nombre, apellido_uno, apellido_dos, direccion_empresa, email, telefono, celular, cod_genero, cod_municipio) FROM stdin;
123	elproveedor	juan	QUINTEROS	sanchez	Cra 13 60-56	elproveedor@mail.com	1234567	1234567990	1	2
14783	MADECENTRO	ELIZABETH	MIGUEL	HOLGADO	CRA 57-89	eli.holg@hotmail.com	6417895	3155367489	2	1
26739	CHALLENGER SAS	CARLOS	MELGAREJO	VIBES	CLL 25-78	vibes2408@gmail.com	6453452	3155768964	1	3
36578	PLASTICO RIMAX	JOSUE	ORE 	REYES	CRA 37 #65	ore_wa78@outlook.com	6345278	3167823546	3	2
46758	DISTPLEX	JOSUE	ORRILLO 	ORTIZ	CRA 56#67	josue948@gmail.com	6415672	3156478695	1	1
5768	ESPUMAS EL VALLE	SONIA	PRADA 	VILCHEZ	CLL 24 #78-34	sonia.p.v@hotmail.com	6457892	3155476894	2	3
68790	SOCODA S.A	TERESA	RIOS	LIMA	CRA 67-98	ters.r.l@hotmail.com	6453627	3146785463	2	4
74893	TRIMICO S.A	GERARDO 	RIEGA	CALLE	CLL 33 #56	gerardo7487@gmail.com	6415628	3178954627	1	2
89067	DOMINA S.A	GEORGINA	ROA	YANAC	CLL 67-45	george.roa@hotmail.com	6415628	3156278956	3	3
97865	SERVEX COLOMBI	CARINA	ROSALES	FLORES	CRA 13 W45	carin.rose@gmail.com	6417628	3156479273	2	4
10839	SOLINOFF CORP	JOSE	TEJEDO	LUNA	CLL 24 #34-23	joseph389@outlook.com	7489203	3134528796	1	4
\.


--
-- Data for Name: proveedor_pedido; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY proveedor_pedido (nit_proveedor, cod_proyecto, cod_derivado) FROM stdin;
\.


--
-- Data for Name: proyecto; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY proyecto (codigo, fecha_inicio, fecha_entrega, descripcion, valor, cod_factura) FROM stdin;
2442	2019-09-01	2019-02-02	Proyecto de prueba	350000	1234
14643	2019-01-01	2019-02-02	Entrega n??1	100000	38027
25434	2019-03-01	2019-02-03	entrega n??2	690000	5678
37827	2019-01-03	2019-02-03	entrega n??3	90000	10293
4895	2019-01-05	2019-02-05	entrega n??4	56000	1234
5326	2019-01-07	2019-02-07	entrega n??5	789000	83649
6748	2019-01-08	2019-02-08	entrega n??6	370000	29374
74973	2019-01-09	2019-02-09	entrega n??7	450000	73582
8467	2019-01-11	2019-02-11	entrega n??8	250000	38027
9325	2019-01-13	2019-02-13	entrega n??9	89000	29374
10839	2019-09-20	2019-02-20	entrega n??10	798000	9101
\.


--
-- Data for Name: proyecto_tipo_especialidad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY proyecto_tipo_especialidad (cod_proyecto, cod_tipo_especialidad) FROM stdin;
\.


--
-- Data for Name: servicios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY servicios (codigo, cod_tipo_servicio, cod_factura, cod_especialidad) FROM stdin;
3564	2	1234	2
1346	1	1234	1
2464	2	10293	2
34575	3	6829	3
4754	2	6848	3
52346	1	6848	3
62453	3	29374	1
73454	2	38027	3
7456	2	1234	2
8345	1	57839	1
8395	2	6829	3
9245	3	9101	1
10456	1	678687	3
\.


--
-- Data for Name: servicios_factura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY servicios_factura (cod_servicio, cod_factura) FROM stdin;
\.


--
-- Data for Name: tipo_derivado; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipo_derivado (codigo, nombre_tipo_derivado) FROM stdin;
1	Derivado 1
2	Derivado 2
3	Derivado 3
\.


--
-- Data for Name: tipo_especialidad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipo_especialidad (codigo, nombre) FROM stdin;
1	Especialidad 1
2	Especialidad 2
3	Especialidad 3
\.


--
-- Data for Name: tipo_producto; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipo_producto (codigo, nombre) FROM stdin;
1	Mesa
2	Mueble
3	Cama
\.


--
-- Data for Name: tipo_servicio; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipo_servicio (codigo, nombre) FROM stdin;
1	Servicio 1
2	Servicio 2
3	Servicio 3
\.


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuario (usuario, password, codigo, nombres, apellidos, rol, imagen) FROM stdin;
admin	admin1234	1	Brayan	Barajas	administrador	img_admin.jpg
cliente1	cliente1234	2	Daniel	Pinto	cliente	img_cli.jpg
empleado1	empleado1234	3	Angela	Ochoa	empleado	img_emp.jpg
\.


--
-- Name: cliente_factura_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cliente_factura
    ADD CONSTRAINT cliente_factura_pkey PRIMARY KEY (id_cliente, cod_factura);


--
-- Name: cliente_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (codigo);


--
-- Name: color_madera_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY color_madera
    ADD CONSTRAINT color_madera_pkey PRIMARY KEY (id);


--
-- Name: decorativo_factura_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY decorativo_factura
    ADD CONSTRAINT decorativo_factura_pkey PRIMARY KEY (cod_decorativo, cod_factura);


--
-- Name: decorativo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY decorativo
    ADD CONSTRAINT decorativo_pkey PRIMARY KEY (codigo);


--
-- Name: derivados_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY derivados
    ADD CONSTRAINT derivados_pkey PRIMARY KEY (codigo);


--
-- Name: empleado_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleado
    ADD CONSTRAINT empleado_pkey PRIMARY KEY (id);


--
-- Name: empleado_proyecto_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleado_proyecto
    ADD CONSTRAINT empleado_proyecto_pkey PRIMARY KEY (id_empleado, cod_proyecto);


--
-- Name: empleado_tipo_especialidad_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleado_tipo_especialidad
    ADD CONSTRAINT empleado_tipo_especialidad_pkey PRIMARY KEY (id_empleado, cod_tipo_especialidad);


--
-- Name: factara_proyecto_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY factura_proyecto
    ADD CONSTRAINT factara_proyecto_pkey PRIMARY KEY (cod_factura, cod_proyecto);


--
-- Name: factura_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY factura
    ADD CONSTRAINT factura_pkey PRIMARY KEY (codigo);


--
-- Name: genero_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY genero
    ADD CONSTRAINT genero_pkey PRIMARY KEY (codigo);


--
-- Name: municipio_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY municipio
    ADD CONSTRAINT municipio_pkey PRIMARY KEY (codigo);


--
-- Name: pedido_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pedido
    ADD CONSTRAINT pedido_pkey PRIMARY KEY (codigo);


--
-- Name: producto_factura_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY producto_factura
    ADD CONSTRAINT producto_factura_pkey PRIMARY KEY (cod_producto, cod_factura);


--
-- Name: producto_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY producto
    ADD CONSTRAINT producto_pkey PRIMARY KEY (codigo);


--
-- Name: proveedor_pedido_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY proveedor_pedido
    ADD CONSTRAINT proveedor_pedido_pkey PRIMARY KEY (nit_proveedor, cod_proyecto, cod_derivado);


--
-- Name: proveedor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY proveedor
    ADD CONSTRAINT proveedor_pkey PRIMARY KEY (nit);


--
-- Name: proyecto_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY proyecto
    ADD CONSTRAINT proyecto_pkey PRIMARY KEY (codigo);


--
-- Name: proyecto_tipo_especialidad_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY proyecto_tipo_especialidad
    ADD CONSTRAINT proyecto_tipo_especialidad_pkey PRIMARY KEY (cod_proyecto, cod_tipo_especialidad);


--
-- Name: servicios_factura_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY servicios_factura
    ADD CONSTRAINT servicios_factura_pkey PRIMARY KEY (cod_servicio, cod_factura);


--
-- Name: servicios_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY servicios
    ADD CONSTRAINT servicios_pkey PRIMARY KEY (codigo);


--
-- Name: tipo_derivado_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_derivado
    ADD CONSTRAINT tipo_derivado_pkey PRIMARY KEY (codigo);


--
-- Name: tipo_especialidad_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_especialidad
    ADD CONSTRAINT tipo_especialidad_pkey PRIMARY KEY (codigo);


--
-- Name: tipo_producto_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_producto
    ADD CONSTRAINT tipo_producto_pkey PRIMARY KEY (codigo);


--
-- Name: tipo_servicio_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_servicio
    ADD CONSTRAINT tipo_servicio_pkey PRIMARY KEY (codigo);


--
-- Name: usuario_codigo_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_codigo_key UNIQUE (codigo);


--
-- Name: usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (usuario);


--
-- Name: cliente_factura_cod_factura_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente_factura
    ADD CONSTRAINT cliente_factura_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: cliente_factura_id_cliente_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente_factura
    ADD CONSTRAINT cliente_factura_id_cliente_fkey FOREIGN KEY (id_cliente) REFERENCES cliente(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: cliente_genero_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_genero_fkey FOREIGN KEY (genero) REFERENCES genero(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: cliente_municipio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_municipio_fkey FOREIGN KEY (municipio) REFERENCES municipio(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: decorativo_factura_cod_decorativo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY decorativo_factura
    ADD CONSTRAINT decorativo_factura_cod_decorativo_fkey FOREIGN KEY (cod_decorativo) REFERENCES decorativo(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: decorativo_factura_cod_factura_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY decorativo_factura
    ADD CONSTRAINT decorativo_factura_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: derivados_tipo_derivado_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY derivados
    ADD CONSTRAINT derivados_tipo_derivado_fkey FOREIGN KEY (tipo_derivado) REFERENCES tipo_derivado(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleado_genero_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleado
    ADD CONSTRAINT empleado_genero_fkey FOREIGN KEY (genero) REFERENCES genero(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleado_municipio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleado
    ADD CONSTRAINT empleado_municipio_fkey FOREIGN KEY (municipio) REFERENCES municipio(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleado_proyecto_cod_proyecto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleado_proyecto
    ADD CONSTRAINT empleado_proyecto_cod_proyecto_fkey FOREIGN KEY (cod_proyecto) REFERENCES proyecto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleado_proyecto_id_empleado_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleado_proyecto
    ADD CONSTRAINT empleado_proyecto_id_empleado_fkey FOREIGN KEY (id_empleado) REFERENCES empleado(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleado_tipo_especialidad_cod_tipo_especialidad_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleado_tipo_especialidad
    ADD CONSTRAINT empleado_tipo_especialidad_cod_tipo_especialidad_fkey FOREIGN KEY (cod_tipo_especialidad) REFERENCES tipo_especialidad(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleado_tipo_especialidad_id_empleado_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleado_tipo_especialidad
    ADD CONSTRAINT empleado_tipo_especialidad_id_empleado_fkey FOREIGN KEY (id_empleado) REFERENCES empleado(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: factura_proyecto_cod_factura_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY factura_proyecto
    ADD CONSTRAINT factura_proyecto_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: factura_proyecto_cod_proyecto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY factura_proyecto
    ADD CONSTRAINT factura_proyecto_cod_proyecto_fkey FOREIGN KEY (cod_proyecto) REFERENCES proyecto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: producto_cod_tipo_derivado_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY producto
    ADD CONSTRAINT producto_cod_tipo_derivado_fkey FOREIGN KEY (cod_tipo_derivado) REFERENCES tipo_derivado(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: producto_cod_tipo_madera_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY producto
    ADD CONSTRAINT producto_cod_tipo_madera_fkey FOREIGN KEY (cod_tipo_madera) REFERENCES color_madera(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: producto_cod_tipo_producto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY producto
    ADD CONSTRAINT producto_cod_tipo_producto_fkey FOREIGN KEY (cod_tipo_producto) REFERENCES tipo_producto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: producto_factura_cod_factura_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY producto_factura
    ADD CONSTRAINT producto_factura_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: producto_factura_cod_producto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY producto_factura
    ADD CONSTRAINT producto_factura_cod_producto_fkey FOREIGN KEY (cod_producto) REFERENCES producto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: proveedor_cod_genero_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY proveedor
    ADD CONSTRAINT proveedor_cod_genero_fkey FOREIGN KEY (cod_genero) REFERENCES genero(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: proveedor_cod_municipio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY proveedor
    ADD CONSTRAINT proveedor_cod_municipio_fkey FOREIGN KEY (cod_municipio) REFERENCES municipio(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: proveedor_pedido_cod_derivado_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY proveedor_pedido
    ADD CONSTRAINT proveedor_pedido_cod_derivado_fkey FOREIGN KEY (cod_derivado) REFERENCES derivados(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: proveedor_pedido_cod_proyecto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY proveedor_pedido
    ADD CONSTRAINT proveedor_pedido_cod_proyecto_fkey FOREIGN KEY (cod_proyecto) REFERENCES proyecto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: proveedor_pedido_nit_proveedor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY proveedor_pedido
    ADD CONSTRAINT proveedor_pedido_nit_proveedor_fkey FOREIGN KEY (nit_proveedor) REFERENCES proveedor(nit) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: proyecto_cod_factura_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY proyecto
    ADD CONSTRAINT proyecto_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: proyecto_tipo_especialidad_cod_proyecto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY proyecto_tipo_especialidad
    ADD CONSTRAINT proyecto_tipo_especialidad_cod_proyecto_fkey FOREIGN KEY (cod_proyecto) REFERENCES proyecto(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: proyecto_tipo_especialidad_cod_tipo_especialidad_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY proyecto_tipo_especialidad
    ADD CONSTRAINT proyecto_tipo_especialidad_cod_tipo_especialidad_fkey FOREIGN KEY (cod_tipo_especialidad) REFERENCES tipo_especialidad(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: servicios_cod_especialidad_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY servicios
    ADD CONSTRAINT servicios_cod_especialidad_fkey FOREIGN KEY (cod_especialidad) REFERENCES tipo_especialidad(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: servicios_cod_factura_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY servicios
    ADD CONSTRAINT servicios_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: servicios_cod_tipo_servicio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY servicios
    ADD CONSTRAINT servicios_cod_tipo_servicio_fkey FOREIGN KEY (cod_tipo_servicio) REFERENCES tipo_servicio(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: servicios_factura_cod_factura_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY servicios_factura
    ADD CONSTRAINT servicios_factura_cod_factura_fkey FOREIGN KEY (cod_factura) REFERENCES factura(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: servicios_factura_cod_servicio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY servicios_factura
    ADD CONSTRAINT servicios_factura_cod_servicio_fkey FOREIGN KEY (cod_servicio) REFERENCES servicios(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

