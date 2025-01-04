--
-- PostgreSQL database dump
--

-- Dumped from database version 17.2
-- Dumped by pg_dump version 17.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: marketplace; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA marketplace;


ALTER SCHEMA marketplace OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: userbase; Type: TABLE; Schema: marketplace; Owner: postgres
--

CREATE TABLE marketplace.userbase (
    uid integer NOT NULL,
    firstname character varying(50) NOT NULL,
    lastname character varying(50) NOT NULL,
    phone text NOT NULL,
    email character varying(40) NOT NULL
);


ALTER TABLE marketplace.userbase OWNER TO postgres;

--
-- Name: userbase_uid_seq; Type: SEQUENCE; Schema: marketplace; Owner: postgres
--

CREATE SEQUENCE marketplace.userbase_uid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE marketplace.userbase_uid_seq OWNER TO postgres;

--
-- Name: userbase_uid_seq; Type: SEQUENCE OWNED BY; Schema: marketplace; Owner: postgres
--

ALTER SEQUENCE marketplace.userbase_uid_seq OWNED BY marketplace.userbase.uid;


--
-- Name: userbase uid; Type: DEFAULT; Schema: marketplace; Owner: postgres
--

ALTER TABLE ONLY marketplace.userbase ALTER COLUMN uid SET DEFAULT nextval('marketplace.userbase_uid_seq'::regclass);


--
-- Data for Name: userbase; Type: TABLE DATA; Schema: marketplace; Owner: postgres
--

COPY marketplace.userbase (uid, firstname, lastname, phone, email) FROM stdin;
1	Sadsad	dsa	asdsd	asdsad
\.


--
-- Name: userbase_uid_seq; Type: SEQUENCE SET; Schema: marketplace; Owner: postgres
--

SELECT pg_catalog.setval('marketplace.userbase_uid_seq', 1, true);


--
-- Name: userbase userbase_pkey; Type: CONSTRAINT; Schema: marketplace; Owner: postgres
--

ALTER TABLE ONLY marketplace.userbase
    ADD CONSTRAINT userbase_pkey PRIMARY KEY (uid);


--
-- Name: SCHEMA marketplace; Type: ACL; Schema: -; Owner: postgres
--

GRANT USAGE ON SCHEMA marketplace TO reguser_503;


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: pg_database_owner
--

REVOKE USAGE ON SCHEMA public FROM PUBLIC;


--
-- Name: TABLE userbase; Type: ACL; Schema: marketplace; Owner: postgres
--

GRANT INSERT ON TABLE marketplace.userbase TO reguser_503;


--
-- Name: SEQUENCE userbase_uid_seq; Type: ACL; Schema: marketplace; Owner: postgres
--

GRANT USAGE ON SEQUENCE marketplace.userbase_uid_seq TO reguser_503;


--
-- Name: DEFAULT PRIVILEGES FOR SEQUENCES; Type: DEFAULT ACL; Schema: marketplace; Owner: postgres
--

ALTER DEFAULT PRIVILEGES FOR ROLE postgres IN SCHEMA marketplace GRANT USAGE ON SEQUENCES TO reguser_503;


--
-- Name: DEFAULT PRIVILEGES FOR TABLES; Type: DEFAULT ACL; Schema: marketplace; Owner: postgres
--

ALTER DEFAULT PRIVILEGES FOR ROLE postgres IN SCHEMA marketplace GRANT INSERT ON TABLES TO reguser_503;


--
-- PostgreSQL database dump complete
--

