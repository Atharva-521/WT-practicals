--
-- PostgreSQL database dump
--

-- Dumped from database version 14.2
-- Dumped by pg_dump version 16.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
--

-- *not* creating schema, since initdb creates it


ALTER SCHEMA public OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: committee; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.committee (
    cno integer NOT NULL,
    name character varying(255) NOT NULL,
    head character varying(255),
    from_time time without time zone,
    to_time time without time zone,
    status character varying(255)
);


ALTER TABLE public.committee OWNER TO postgres;

--
-- Name: committee_cno_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.committee_cno_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.committee_cno_seq OWNER TO postgres;

--
-- Name: committee_cno_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.committee_cno_seq OWNED BY public.committee.cno;


--
-- Name: event; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.event (
    eno integer NOT NULL,
    title character varying(255) NOT NULL,
    date date
);


ALTER TABLE public.event OWNER TO postgres;

--
-- Name: event_committee_relation; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.event_committee_relation (
    eno integer NOT NULL,
    cno integer NOT NULL
);


ALTER TABLE public.event_committee_relation OWNER TO postgres;

--
-- Name: event_eno_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.event_eno_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.event_eno_seq OWNER TO postgres;

--
-- Name: event_eno_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.event_eno_seq OWNED BY public.event.eno;


--
-- Name: committee cno; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.committee ALTER COLUMN cno SET DEFAULT nextval('public.committee_cno_seq'::regclass);


--
-- Name: event eno; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.event ALTER COLUMN eno SET DEFAULT nextval('public.event_eno_seq'::regclass);


--
-- Data for Name: committee; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.committee (cno, name, head, from_time, to_time, status) FROM stdin;
1	Committee 1	Head 1	08:00:00	17:00:00	pending
2	Committee 2	Head 2	09:00:00	16:00:00	working
\.


--
-- Data for Name: event; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.event (eno, title, date) FROM stdin;
1	Event 1	2023-11-10
2	Event 2	2023-11-15
\.


--
-- Data for Name: event_committee_relation; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.event_committee_relation (eno, cno) FROM stdin;
1	1
1	2
2	2
\.


--
-- Name: committee_cno_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.committee_cno_seq', 2, true);


--
-- Name: event_eno_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.event_eno_seq', 2, true);


--
-- Name: committee committee_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.committee
    ADD CONSTRAINT committee_pkey PRIMARY KEY (cno);


--
-- Name: event_committee_relation event_committee_relation_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.event_committee_relation
    ADD CONSTRAINT event_committee_relation_pkey PRIMARY KEY (eno, cno);


--
-- Name: event event_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.event
    ADD CONSTRAINT event_pkey PRIMARY KEY (eno);


--
-- Name: event_committee_relation event_committee_relation_cno_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.event_committee_relation
    ADD CONSTRAINT event_committee_relation_cno_fkey FOREIGN KEY (cno) REFERENCES public.committee(cno);


--
-- Name: event_committee_relation event_committee_relation_eno_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.event_committee_relation
    ADD CONSTRAINT event_committee_relation_eno_fkey FOREIGN KEY (eno) REFERENCES public.event(eno);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE USAGE ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

