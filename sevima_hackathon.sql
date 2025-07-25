PGDMP                      }            sevima_hackathon    17.5    17.5 5    Z           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                           false            [           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                           false            \           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                           false            ]           1262    16730    sevima_hackathon    DATABASE     �   CREATE DATABASE sevima_hackathon WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_Indonesia.1252';
     DROP DATABASE sevima_hackathon;
                     postgres    false            �            1259    16803 	   pemilihan    TABLE     g   CREATE TABLE public.pemilihan (
    id integer NOT NULL,
    polling character varying(20) NOT NULL
);
    DROP TABLE public.pemilihan;
       public         heap r       postgres    false            �            1259    16802    pemilihan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pemilihan_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.pemilihan_id_seq;
       public               postgres    false    230            ^           0    0    pemilihan_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.pemilihan_id_seq OWNED BY public.pemilihan.id;
          public               postgres    false    229            �            1259    16796 
   transaksii    TABLE     �   CREATE TABLE public.transaksii (
    id integer NOT NULL,
    nama_motor character varying(100) NOT NULL,
    kategori_merk character varying(100) NOT NULL,
    total_bayar bigint NOT NULL,
    tgl_beli date
);
    DROP TABLE public.transaksii;
       public         heap r       postgres    false            �            1259    16795    transaksii_id_seq    SEQUENCE     �   CREATE SEQUENCE public.transaksii_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.transaksii_id_seq;
       public               postgres    false    228            _           0    0    transaksii_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.transaksii_id_seq OWNED BY public.transaksii.id;
          public               postgres    false    227            �            1259    16743    user    TABLE     G  CREATE TABLE public."user" (
    id integer NOT NULL,
    nama character varying(128) NOT NULL,
    email character varying(128) NOT NULL,
    image character varying(128) NOT NULL,
    password character varying(256) NOT NULL,
    role_id integer NOT NULL,
    is_active integer NOT NULL,
    date_created integer NOT NULL
);
    DROP TABLE public."user";
       public         heap r       postgres    false            �            1259    16748    user_access_menu    TABLE     ~   CREATE TABLE public.user_access_menu (
    id integer NOT NULL,
    role_id integer NOT NULL,
    menu_id integer NOT NULL
);
 $   DROP TABLE public.user_access_menu;
       public         heap r       postgres    false            �            1259    16751    user_access_menu_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_access_menu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.user_access_menu_id_seq;
       public               postgres    false    218            `           0    0    user_access_menu_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.user_access_menu_id_seq OWNED BY public.user_access_menu.id;
          public               postgres    false    219            �            1259    16752    user_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.user_id_seq;
       public               postgres    false    217            a           0    0    user_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;
          public               postgres    false    220            �            1259    16753 	   user_menu    TABLE     �   CREATE TABLE public.user_menu (
    id integer NOT NULL,
    name character varying(50) NOT NULL,
    menu character varying(128) NOT NULL
);
    DROP TABLE public.user_menu;
       public         heap r       postgres    false            �            1259    16756    user_menu_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_menu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.user_menu_id_seq;
       public               postgres    false    221            b           0    0    user_menu_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.user_menu_id_seq OWNED BY public.user_menu.id;
          public               postgres    false    222            �            1259    16757 	   user_role    TABLE     e   CREATE TABLE public.user_role (
    id integer NOT NULL,
    role character varying(128) NOT NULL
);
    DROP TABLE public.user_role;
       public         heap r       postgres    false            �            1259    16760    user_role_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_role_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.user_role_id_seq;
       public               postgres    false    223            c           0    0    user_role_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.user_role_id_seq OWNED BY public.user_role.id;
          public               postgres    false    224            �            1259    16761    user_sub_menu    TABLE     �   CREATE TABLE public.user_sub_menu (
    id integer NOT NULL,
    menu_id integer NOT NULL,
    title character varying(128) NOT NULL,
    url character varying(128) NOT NULL,
    icon character varying(128) NOT NULL,
    is_active integer NOT NULL
);
 !   DROP TABLE public.user_sub_menu;
       public         heap r       postgres    false            �            1259    16764    user_sub_menu_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_sub_menu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.user_sub_menu_id_seq;
       public               postgres    false    225            d           0    0    user_sub_menu_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.user_sub_menu_id_seq OWNED BY public.user_sub_menu.id;
          public               postgres    false    226            �           2604    16806    pemilihan id    DEFAULT     l   ALTER TABLE ONLY public.pemilihan ALTER COLUMN id SET DEFAULT nextval('public.pemilihan_id_seq'::regclass);
 ;   ALTER TABLE public.pemilihan ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    229    230    230            �           2604    16799    transaksii id    DEFAULT     n   ALTER TABLE ONLY public.transaksii ALTER COLUMN id SET DEFAULT nextval('public.transaksii_id_seq'::regclass);
 <   ALTER TABLE public.transaksii ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    227    228    228            �           2604    16767    user id    DEFAULT     d   ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);
 8   ALTER TABLE public."user" ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    220    217            �           2604    16768    user_access_menu id    DEFAULT     z   ALTER TABLE ONLY public.user_access_menu ALTER COLUMN id SET DEFAULT nextval('public.user_access_menu_id_seq'::regclass);
 B   ALTER TABLE public.user_access_menu ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    219    218            �           2604    16769    user_menu id    DEFAULT     l   ALTER TABLE ONLY public.user_menu ALTER COLUMN id SET DEFAULT nextval('public.user_menu_id_seq'::regclass);
 ;   ALTER TABLE public.user_menu ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    222    221            �           2604    16770    user_role id    DEFAULT     l   ALTER TABLE ONLY public.user_role ALTER COLUMN id SET DEFAULT nextval('public.user_role_id_seq'::regclass);
 ;   ALTER TABLE public.user_role ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    224    223            �           2604    16771    user_sub_menu id    DEFAULT     t   ALTER TABLE ONLY public.user_sub_menu ALTER COLUMN id SET DEFAULT nextval('public.user_sub_menu_id_seq'::regclass);
 ?   ALTER TABLE public.user_sub_menu ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    226    225            W          0    16803 	   pemilihan 
   TABLE DATA           0   COPY public.pemilihan (id, polling) FROM stdin;
    public               postgres    false    230   :       U          0    16796 
   transaksii 
   TABLE DATA           Z   COPY public.transaksii (id, nama_motor, kategori_merk, total_bayar, tgl_beli) FROM stdin;
    public               postgres    false    228   @:       J          0    16743    user 
   TABLE DATA           d   COPY public."user" (id, nama, email, image, password, role_id, is_active, date_created) FROM stdin;
    public               postgres    false    217   �:       K          0    16748    user_access_menu 
   TABLE DATA           @   COPY public.user_access_menu (id, role_id, menu_id) FROM stdin;
    public               postgres    false    218   �;       N          0    16753 	   user_menu 
   TABLE DATA           3   COPY public.user_menu (id, name, menu) FROM stdin;
    public               postgres    false    221   2<       P          0    16757 	   user_role 
   TABLE DATA           -   COPY public.user_role (id, role) FROM stdin;
    public               postgres    false    223   �<       R          0    16761    user_sub_menu 
   TABLE DATA           Q   COPY public.user_sub_menu (id, menu_id, title, url, icon, is_active) FROM stdin;
    public               postgres    false    225   �<       e           0    0    pemilihan_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.pemilihan_id_seq', 6, true);
          public               postgres    false    229            f           0    0    transaksii_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.transaksii_id_seq', 12, true);
          public               postgres    false    227            g           0    0    user_access_menu_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.user_access_menu_id_seq', 5, true);
          public               postgres    false    219            h           0    0    user_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.user_id_seq', 3, true);
          public               postgres    false    220            i           0    0    user_menu_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.user_menu_id_seq', 6, true);
          public               postgres    false    222            j           0    0    user_role_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.user_role_id_seq', 2, true);
          public               postgres    false    224            k           0    0    user_sub_menu_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.user_sub_menu_id_seq', 16, true);
          public               postgres    false    226            �           2606    16808    pemilihan pemilihan_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.pemilihan
    ADD CONSTRAINT pemilihan_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.pemilihan DROP CONSTRAINT pemilihan_pkey;
       public                 postgres    false    230            �           2606    16801    transaksii transaksii_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.transaksii
    ADD CONSTRAINT transaksii_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.transaksii DROP CONSTRAINT transaksii_pkey;
       public                 postgres    false    228            �           2606    16777 &   user_access_menu user_access_menu_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.user_access_menu
    ADD CONSTRAINT user_access_menu_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.user_access_menu DROP CONSTRAINT user_access_menu_pkey;
       public                 postgres    false    218            �           2606    16779    user_menu user_menu_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.user_menu
    ADD CONSTRAINT user_menu_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.user_menu DROP CONSTRAINT user_menu_pkey;
       public                 postgres    false    221            �           2606    16781    user user_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public."user" DROP CONSTRAINT user_pkey;
       public                 postgres    false    217            �           2606    16783    user_role user_role_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.user_role
    ADD CONSTRAINT user_role_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.user_role DROP CONSTRAINT user_role_pkey;
       public                 postgres    false    223            �           2606    16785     user_sub_menu user_sub_menu_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.user_sub_menu
    ADD CONSTRAINT user_sub_menu_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.user_sub_menu DROP CONSTRAINT user_sub_menu_pkey;
       public                 postgres    false    225            W   *   x�3�J��M,�2�t*M��2�tJL/-�2��fP:F��� U�      U   �   x�34�N��/��.�*���46� N##S]s]CK.������ČDN#S�s]3].s����D�� N����*$��JLA�9�2���9����6"R�k`�ehs�NSLW��qqq ��-S      J     x����n�0  �sy�L�J�&nZ�PDǲ�T*Э���~Y�,ޖ�>U�В�Y.)F�$`��v�5>��p�͉~&�/�
|��#����:��w}��2�7F�Eب�h�2=x���4ml��f�u�|d.���M,�o��Y~E�k�eq�H��d��ߢ�� =	�~�;���M��ѣf�d��$/ﾍ�Չ(A��4�OO��������
m9,�s��v��MlU|:+�����%Ⓟu���cb�ڻ�i�7�ll�      K   8   x��� 1�bT̍�Ÿ�:'�D�TtY�v��������o�:<י����Bq�      N   e   x�3�tL����,.)J,�/��L9�SKJ2��|S�J9A�\�199�4��3�8��˘38?1G�/?7�H��3�(1�81�8��Y3 ?'��+F��� �%�      P   &   x�3�LL����,.)J,�/�2��M�MJ-����� �s	+      R   L  x�u��N�0E������JE,�RE+Vl&�$5u��vx�=�T���H���s�P�`��P8�%`�hYaV}�o���5�gh"(1����ƻJ�.�}�Ĕ�JG�9q�<�c%��,}Э�v�|"ӡLQRt$3�+gJ�
5�9��bMY�����"��#6�6�ۆ���vm�c�	~�Р���]�*1KV6ȓ�7^i9��mW4�`q��\K6mr�5_u�n��
#�*���+M��`�M����5�ɘi���m��3�����_���5[��G��>ʍ3F��~�k[�וz���{q��r���w�{N�={:Q;�n�?���     