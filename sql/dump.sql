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
-- Name: Paises; Type: TABLE; Schema: public; Owner: marcial; Tablespace: 
--

CREATE TABLE "Paises" (
    id integer NOT NULL,
    "Nombre" character varying(255) NOT NULL,
    "Capital" character varying(255) NOT NULL,
    "Habitantes" integer NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL
);


ALTER TABLE public."Paises" OWNER TO marcial;

--
-- Name: Paises_id_seq; Type: SEQUENCE; Schema: public; Owner: marcial
--

CREATE SEQUENCE "Paises_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Paises_id_seq" OWNER TO marcial;

--
-- Name: Paises_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: marcial
--

ALTER SEQUENCE "Paises_id_seq" OWNED BY "Paises".id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: marcial; Tablespace: 
--

CREATE TABLE migrations (
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO marcial;

--
-- Name: id; Type: DEFAULT; Schema: public; Owner: marcial
--

ALTER TABLE ONLY "Paises" ALTER COLUMN id SET DEFAULT nextval('"Paises_id_seq"'::regclass);


--
-- Name: Paises_pkey; Type: CONSTRAINT; Schema: public; Owner: marcial; Tablespace: 
--

ALTER TABLE ONLY "Paises"
    ADD CONSTRAINT "Paises_pkey" PRIMARY KEY (id);


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

