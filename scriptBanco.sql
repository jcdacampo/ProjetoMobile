--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.10
-- Dumped by pg_dump version 9.5.10

-- Started on 2017-12-05 19:40:19 -02

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 2140 (class 1262 OID 16384)
-- Name: ProjetoMobile; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE "ProjetoMobile" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'pt_BR.UTF-8' LC_CTYPE = 'pt_BR.UTF-8';


ALTER DATABASE "ProjetoMobile" OWNER TO postgres;

\connect "ProjetoMobile"

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 12397)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2143 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 181 (class 1259 OID 16385)
-- Name: produtos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE produtos (
    id integer NOT NULL,
    descricao character varying(200),
    quantidade integer,
    valorunit double precision,
    valortotal double precision
);


ALTER TABLE produtos OWNER TO postgres;

--
-- TOC entry 2135 (class 0 OID 16385)
-- Dependencies: 181
-- Data for Name: produtos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY produtos (id, descricao, quantidade, valorunit, valortotal) FROM stdin;
2	Feijao	10	4.20999999999999996	42.1000000000000014
3	Maminha	10	15.6300000000000008	156.300000000000011
4	Leite	10	1.97999999999999998	19.8000000000000007
5	Farofa	10	3.74000000000000021	37.3999999999999986
1	Arroz	10	5.59999999999999964	56.2999999999999972
\.


--
-- TOC entry 2020 (class 2606 OID 16389)
-- Name: produtos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY produtos
    ADD CONSTRAINT produtos_pkey PRIMARY KEY (id);


--
-- TOC entry 2142 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2017-12-05 19:40:20 -02

--
-- PostgreSQL database dump complete
--

