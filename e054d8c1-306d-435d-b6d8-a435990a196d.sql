PGDMP     3    7                v            dasrvhpllfi776     10.4 (Ubuntu 10.4-2.pgdg14.04+1)    10.3 H    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            �           1262    11261243    dasrvhpllfi776    DATABASE     �   CREATE DATABASE "dasrvhpllfi776" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'en_US.UTF-8' LC_CTYPE = 'en_US.UTF-8';
     DROP DATABASE "dasrvhpllfi776";
             dvsmfzvogchyad    false                        2615    11584582    public    SCHEMA        CREATE SCHEMA "public";
    DROP SCHEMA "public";
             dvsmfzvogchyad    false                        3079    13809    plpgsql 	   EXTENSION     C   CREATE EXTENSION IF NOT EXISTS "plpgsql" WITH SCHEMA "pg_catalog";
    DROP EXTENSION "plpgsql";
                  false            �           0    0    EXTENSION "plpgsql"    COMMENT     B   COMMENT ON EXTENSION "plpgsql" IS 'PL/pgSQL procedural language';
                       false    1            �            1259    11584676 
   categories    TABLE     �   CREATE TABLE "public"."categories" (
    "id" integer NOT NULL,
    "created_at" timestamp(0) without time zone,
    "updated_at" timestamp(0) without time zone,
    "name" character varying(191) NOT NULL,
    "image_path" character varying(191)
);
 "   DROP TABLE "public"."categories";
       public         dvsmfzvogchyad    false    7            �            1259    11584674    categories_id_seq    SEQUENCE     �   CREATE SEQUENCE "public"."categories_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE "public"."categories_id_seq";
       public       dvsmfzvogchyad    false    210    7            �           0    0    categories_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE "public"."categories_id_seq" OWNED BY "public"."categories"."id";
            public       dvsmfzvogchyad    false    209            �            1259    11584585 
   migrations    TABLE     �   CREATE TABLE "public"."migrations" (
    "id" integer NOT NULL,
    "migration" character varying(191) NOT NULL,
    "batch" integer NOT NULL
);
 "   DROP TABLE "public"."migrations";
       public         dvsmfzvogchyad    false    7            �            1259    11584583    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE "public"."migrations_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE "public"."migrations_id_seq";
       public       dvsmfzvogchyad    false    7    197            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE "public"."migrations_id_seq" OWNED BY "public"."migrations"."id";
            public       dvsmfzvogchyad    false    196            �            1259    11584604    password_resets    TABLE     �   CREATE TABLE "public"."password_resets" (
    "hiima_id" character varying(191) NOT NULL,
    "token" character varying(191) NOT NULL,
    "created_at" timestamp(0) without time zone
);
 '   DROP TABLE "public"."password_resets";
       public         dvsmfzvogchyad    false    7            �            1259    11584654    post_tag    TABLE     �   CREATE TABLE "public"."post_tag" (
    "id" integer NOT NULL,
    "post_id" integer NOT NULL,
    "tag_id" integer NOT NULL,
    "created_at" timestamp(0) without time zone,
    "updated_at" timestamp(0) without time zone
);
     DROP TABLE "public"."post_tag";
       public         dvsmfzvogchyad    false    7            �            1259    11584652    post_tag_id_seq    SEQUENCE     �   CREATE SEQUENCE "public"."post_tag_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE "public"."post_tag_id_seq";
       public       dvsmfzvogchyad    false    7    208            �           0    0    post_tag_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE "public"."post_tag_id_seq" OWNED BY "public"."post_tag"."id";
            public       dvsmfzvogchyad    false    207            �            1259    11584632    posts    TABLE       CREATE TABLE "public"."posts" (
    "id" integer NOT NULL,
    "user_id" integer NOT NULL,
    "body" character varying(191) NOT NULL,
    "created_at" timestamp(0) without time zone,
    "updated_at" timestamp(0) without time zone,
    "category_id" integer NOT NULL
);
    DROP TABLE "public"."posts";
       public         dvsmfzvogchyad    false    7            �            1259    11584630    posts_id_seq    SEQUENCE     �   CREATE SEQUENCE "public"."posts_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE "public"."posts_id_seq";
       public       dvsmfzvogchyad    false    204    7            �           0    0    posts_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE "public"."posts_id_seq" OWNED BY "public"."posts"."id";
            public       dvsmfzvogchyad    false    203            �            1259    11584646    tags    TABLE     �   CREATE TABLE "public"."tags" (
    "id" integer NOT NULL,
    "name" character varying(191) NOT NULL,
    "created_at" timestamp(0) without time zone,
    "updated_at" timestamp(0) without time zone
);
    DROP TABLE "public"."tags";
       public         dvsmfzvogchyad    false    7            �            1259    11584644    tags_id_seq    SEQUENCE     �   CREATE SEQUENCE "public"."tags_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE "public"."tags_id_seq";
       public       dvsmfzvogchyad    false    7    206            �           0    0    tags_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE "public"."tags_id_seq" OWNED BY "public"."tags"."id";
            public       dvsmfzvogchyad    false    205            �            1259    11584610    user_follow    TABLE     �   CREATE TABLE "public"."user_follow" (
    "id" integer NOT NULL,
    "user_id" integer NOT NULL,
    "follow_id" integer NOT NULL,
    "created_at" timestamp(0) without time zone,
    "updated_at" timestamp(0) without time zone
);
 #   DROP TABLE "public"."user_follow";
       public         dvsmfzvogchyad    false    7            �            1259    11584608    user_follow_id_seq    SEQUENCE     �   CREATE SEQUENCE "public"."user_follow_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE "public"."user_follow_id_seq";
       public       dvsmfzvogchyad    false    7    202            �           0    0    user_follow_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE "public"."user_follow_id_seq" OWNED BY "public"."user_follow"."id";
            public       dvsmfzvogchyad    false    201            �            1259    11584593    users    TABLE     �  CREATE TABLE "public"."users" (
    "id" integer NOT NULL,
    "nickname" character varying(191) NOT NULL,
    "hiima_id" character varying(191) NOT NULL,
    "password" character varying(191) NOT NULL,
    "remember_token" character varying(100),
    "created_at" timestamp(0) without time zone,
    "updated_at" timestamp(0) without time zone,
    "profile" character varying(256)
);
    DROP TABLE "public"."users";
       public         dvsmfzvogchyad    false    7            �            1259    11584591    users_id_seq    SEQUENCE     �   CREATE SEQUENCE "public"."users_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE "public"."users_id_seq";
       public       dvsmfzvogchyad    false    7    199            �           0    0    users_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE "public"."users_id_seq" OWNED BY "public"."users"."id";
            public       dvsmfzvogchyad    false    198                       2604    11584679    categories id    DEFAULT     |   ALTER TABLE ONLY "public"."categories" ALTER COLUMN "id" SET DEFAULT "nextval"('"public"."categories_id_seq"'::"regclass");
 B   ALTER TABLE "public"."categories" ALTER COLUMN "id" DROP DEFAULT;
       public       dvsmfzvogchyad    false    210    209    210                       2604    11584588    migrations id    DEFAULT     |   ALTER TABLE ONLY "public"."migrations" ALTER COLUMN "id" SET DEFAULT "nextval"('"public"."migrations_id_seq"'::"regclass");
 B   ALTER TABLE "public"."migrations" ALTER COLUMN "id" DROP DEFAULT;
       public       dvsmfzvogchyad    false    196    197    197                       2604    11584657    post_tag id    DEFAULT     x   ALTER TABLE ONLY "public"."post_tag" ALTER COLUMN "id" SET DEFAULT "nextval"('"public"."post_tag_id_seq"'::"regclass");
 @   ALTER TABLE "public"."post_tag" ALTER COLUMN "id" DROP DEFAULT;
       public       dvsmfzvogchyad    false    208    207    208                       2604    11584635    posts id    DEFAULT     r   ALTER TABLE ONLY "public"."posts" ALTER COLUMN "id" SET DEFAULT "nextval"('"public"."posts_id_seq"'::"regclass");
 =   ALTER TABLE "public"."posts" ALTER COLUMN "id" DROP DEFAULT;
       public       dvsmfzvogchyad    false    204    203    204                       2604    11584649    tags id    DEFAULT     p   ALTER TABLE ONLY "public"."tags" ALTER COLUMN "id" SET DEFAULT "nextval"('"public"."tags_id_seq"'::"regclass");
 <   ALTER TABLE "public"."tags" ALTER COLUMN "id" DROP DEFAULT;
       public       dvsmfzvogchyad    false    205    206    206                       2604    11584613    user_follow id    DEFAULT     ~   ALTER TABLE ONLY "public"."user_follow" ALTER COLUMN "id" SET DEFAULT "nextval"('"public"."user_follow_id_seq"'::"regclass");
 C   ALTER TABLE "public"."user_follow" ALTER COLUMN "id" DROP DEFAULT;
       public       dvsmfzvogchyad    false    201    202    202                       2604    11584596    users id    DEFAULT     r   ALTER TABLE ONLY "public"."users" ALTER COLUMN "id" SET DEFAULT "nextval"('"public"."users_id_seq"'::"regclass");
 =   ALTER TABLE "public"."users" ALTER COLUMN "id" DROP DEFAULT;
       public       dvsmfzvogchyad    false    199    198    199            �          0    11584676 
   categories 
   TABLE DATA               `   COPY "public"."categories" ("id", "created_at", "updated_at", "name", "image_path") FROM stdin;
    public       dvsmfzvogchyad    false    210            �          0    11584585 
   migrations 
   TABLE DATA               D   COPY "public"."migrations" ("id", "migration", "batch") FROM stdin;
    public       dvsmfzvogchyad    false    197            �          0    11584604    password_resets 
   TABLE DATA               P   COPY "public"."password_resets" ("hiima_id", "token", "created_at") FROM stdin;
    public       dvsmfzvogchyad    false    200            �          0    11584654    post_tag 
   TABLE DATA               ]   COPY "public"."post_tag" ("id", "post_id", "tag_id", "created_at", "updated_at") FROM stdin;
    public       dvsmfzvogchyad    false    208            �          0    11584632    posts 
   TABLE DATA               g   COPY "public"."posts" ("id", "user_id", "body", "created_at", "updated_at", "category_id") FROM stdin;
    public       dvsmfzvogchyad    false    204            �          0    11584646    tags 
   TABLE DATA               L   COPY "public"."tags" ("id", "name", "created_at", "updated_at") FROM stdin;
    public       dvsmfzvogchyad    false    206            �          0    11584610    user_follow 
   TABLE DATA               c   COPY "public"."user_follow" ("id", "user_id", "follow_id", "created_at", "updated_at") FROM stdin;
    public       dvsmfzvogchyad    false    202            �          0    11584593    users 
   TABLE DATA               �   COPY "public"."users" ("id", "nickname", "hiima_id", "password", "remember_token", "created_at", "updated_at", "profile") FROM stdin;
    public       dvsmfzvogchyad    false    199            �           0    0    categories_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('"public"."categories_id_seq"', 59, true);
            public       dvsmfzvogchyad    false    209            �           0    0    migrations_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('"public"."migrations_id_seq"', 11, true);
            public       dvsmfzvogchyad    false    196            �           0    0    post_tag_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('"public"."post_tag_id_seq"', 32, true);
            public       dvsmfzvogchyad    false    207            �           0    0    posts_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('"public"."posts_id_seq"', 24, true);
            public       dvsmfzvogchyad    false    203            �           0    0    tags_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('"public"."tags_id_seq"', 16, true);
            public       dvsmfzvogchyad    false    205            �           0    0    user_follow_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('"public"."user_follow_id_seq"', 10, true);
            public       dvsmfzvogchyad    false    201            �           0    0    users_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('"public"."users_id_seq"', 25, true);
            public       dvsmfzvogchyad    false    198            +           2606    11584681    categories categories_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY "public"."categories"
    ADD CONSTRAINT "categories_pkey" PRIMARY KEY ("id");
 J   ALTER TABLE ONLY "public"."categories" DROP CONSTRAINT "categories_pkey";
       public         dvsmfzvogchyad    false    210                       2606    11584590    migrations migrations_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY "public"."migrations"
    ADD CONSTRAINT "migrations_pkey" PRIMARY KEY ("id");
 J   ALTER TABLE ONLY "public"."migrations" DROP CONSTRAINT "migrations_pkey";
       public         dvsmfzvogchyad    false    197            %           2606    11584659    post_tag post_tag_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY "public"."post_tag"
    ADD CONSTRAINT "post_tag_pkey" PRIMARY KEY ("id");
 F   ALTER TABLE ONLY "public"."post_tag" DROP CONSTRAINT "post_tag_pkey";
       public         dvsmfzvogchyad    false    208            (           2606    11584671 '   post_tag post_tag_post_id_tag_id_unique 
   CONSTRAINT     w   ALTER TABLE ONLY "public"."post_tag"
    ADD CONSTRAINT "post_tag_post_id_tag_id_unique" UNIQUE ("post_id", "tag_id");
 W   ALTER TABLE ONLY "public"."post_tag" DROP CONSTRAINT "post_tag_post_id_tag_id_unique";
       public         dvsmfzvogchyad    false    208    208                        2606    11584637    posts posts_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY "public"."posts"
    ADD CONSTRAINT "posts_pkey" PRIMARY KEY ("id");
 @   ALTER TABLE ONLY "public"."posts" DROP CONSTRAINT "posts_pkey";
       public         dvsmfzvogchyad    false    204            #           2606    11584651    tags tags_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY "public"."tags"
    ADD CONSTRAINT "tags_pkey" PRIMARY KEY ("id");
 >   ALTER TABLE ONLY "public"."tags" DROP CONSTRAINT "tags_pkey";
       public         dvsmfzvogchyad    false    206                       2606    11584615    user_follow user_follow_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY "public"."user_follow"
    ADD CONSTRAINT "user_follow_pkey" PRIMARY KEY ("id");
 L   ALTER TABLE ONLY "public"."user_follow" DROP CONSTRAINT "user_follow_pkey";
       public         dvsmfzvogchyad    false    202                       2606    11584627 0   user_follow user_follow_user_id_follow_id_unique 
   CONSTRAINT     �   ALTER TABLE ONLY "public"."user_follow"
    ADD CONSTRAINT "user_follow_user_id_follow_id_unique" UNIQUE ("user_id", "follow_id");
 `   ALTER TABLE ONLY "public"."user_follow" DROP CONSTRAINT "user_follow_user_id_follow_id_unique";
       public         dvsmfzvogchyad    false    202    202                       2606    11584603    users users_hiima_id_unique 
   CONSTRAINT     b   ALTER TABLE ONLY "public"."users"
    ADD CONSTRAINT "users_hiima_id_unique" UNIQUE ("hiima_id");
 K   ALTER TABLE ONLY "public"."users" DROP CONSTRAINT "users_hiima_id_unique";
       public         dvsmfzvogchyad    false    199                       2606    11584601    users users_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY "public"."users"
    ADD CONSTRAINT "users_pkey" PRIMARY KEY ("id");
 @   ALTER TABLE ONLY "public"."users" DROP CONSTRAINT "users_pkey";
       public         dvsmfzvogchyad    false    199                       1259    11584607    password_resets_hiima_id_index    INDEX     h   CREATE INDEX "password_resets_hiima_id_index" ON "public"."password_resets" USING "btree" ("hiima_id");
 6   DROP INDEX "public"."password_resets_hiima_id_index";
       public         dvsmfzvogchyad    false    200            &           1259    11584672    post_tag_post_id_index    INDEX     X   CREATE INDEX "post_tag_post_id_index" ON "public"."post_tag" USING "btree" ("post_id");
 .   DROP INDEX "public"."post_tag_post_id_index";
       public         dvsmfzvogchyad    false    208            )           1259    11584673    post_tag_tag_id_index    INDEX     V   CREATE INDEX "post_tag_tag_id_index" ON "public"."post_tag" USING "btree" ("tag_id");
 -   DROP INDEX "public"."post_tag_tag_id_index";
       public         dvsmfzvogchyad    false    208            !           1259    11584643    posts_user_id_index    INDEX     R   CREATE INDEX "posts_user_id_index" ON "public"."posts" USING "btree" ("user_id");
 +   DROP INDEX "public"."posts_user_id_index";
       public         dvsmfzvogchyad    false    204                       1259    11584629    user_follow_follow_id_index    INDEX     b   CREATE INDEX "user_follow_follow_id_index" ON "public"."user_follow" USING "btree" ("follow_id");
 3   DROP INDEX "public"."user_follow_follow_id_index";
       public         dvsmfzvogchyad    false    202                       1259    11584628    user_follow_user_id_index    INDEX     ^   CREATE INDEX "user_follow_user_id_index" ON "public"."user_follow" USING "btree" ("user_id");
 1   DROP INDEX "public"."user_follow_user_id_index";
       public         dvsmfzvogchyad    false    202            /           2606    11584660 !   post_tag post_tag_post_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY "public"."post_tag"
    ADD CONSTRAINT "post_tag_post_id_foreign" FOREIGN KEY ("post_id") REFERENCES "public"."posts"("id") ON DELETE CASCADE;
 Q   ALTER TABLE ONLY "public"."post_tag" DROP CONSTRAINT "post_tag_post_id_foreign";
       public       dvsmfzvogchyad    false    208    3616    204            0           2606    11584665     post_tag post_tag_tag_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY "public"."post_tag"
    ADD CONSTRAINT "post_tag_tag_id_foreign" FOREIGN KEY ("tag_id") REFERENCES "public"."tags"("id") ON DELETE CASCADE;
 P   ALTER TABLE ONLY "public"."post_tag" DROP CONSTRAINT "post_tag_tag_id_foreign";
       public       dvsmfzvogchyad    false    208    206    3619            .           2606    11584638    posts posts_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY "public"."posts"
    ADD CONSTRAINT "posts_user_id_foreign" FOREIGN KEY ("user_id") REFERENCES "public"."users"("id");
 K   ALTER TABLE ONLY "public"."posts" DROP CONSTRAINT "posts_user_id_foreign";
       public       dvsmfzvogchyad    false    204    3607    199            -           2606    11584621 )   user_follow user_follow_follow_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY "public"."user_follow"
    ADD CONSTRAINT "user_follow_follow_id_foreign" FOREIGN KEY ("follow_id") REFERENCES "public"."users"("id") ON DELETE CASCADE;
 Y   ALTER TABLE ONLY "public"."user_follow" DROP CONSTRAINT "user_follow_follow_id_foreign";
       public       dvsmfzvogchyad    false    199    202    3607            ,           2606    11584616 '   user_follow user_follow_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY "public"."user_follow"
    ADD CONSTRAINT "user_follow_user_id_foreign" FOREIGN KEY ("user_id") REFERENCES "public"."users"("id") ON DELETE CASCADE;
 W   ALTER TABLE ONLY "public"."user_follow" DROP CONSTRAINT "user_follow_user_id_foreign";
       public       dvsmfzvogchyad    false    199    3607    202            �   q  x�mT[nZ1�.������o��'���]Am� А�P��H�G*3��.jw�K@B��s�;�����|��1+�4����EM��t�z��B���`�$���|�����UȁF� � F n����",N���x����>Չ3�M�3y� ��� �	�x�́U���_a�����h��(���{,AH=�+r��j���}�H��4� D�O>}:��Iw�K�8E�Tݚ��ꕲ�����q<$���۟7�iv�&A�����t�g����$��1�Yf�O�JB�Uѩҝmf�F�^�)9�R8��Z��>����YX�%�i����-l��Ih��S�r�f��f�'�ais������r�6ԁ���"�g���I���Dz%��q�*I���'~�k��(��a�l=��ȩ�h����Uh_���X��
�;`�O�����z�v����L�.��c �� �ڽド��G��
J�;�8//ڞ���L&�����n����w_A�c'�X��"mRҖ�&go�,W3����.
]��t����di�ą�\d"�D�[!���$S��My�;��Y9������b���褸      �   �   x�]�[� �ﺘ�^>���*Z�0Mw_mZ�}f/P!#�~�;����k�)����X��O��˺���:�?"-ACP)�n�1���q_����^y���à�����O����7�P��0PoͶ���ɺ7�C��eD2��?>�4Нt-x>��EG�P`R�9�5�)�)"��e(�����l�n{z�۵���̜�      �      x������ � �      �   )   x�3�4�44��".cNc �6�4ᄉ�r���1z\\\ ��	C      �   �   x�m�A
�0��)�@%I�*9������ؕ��D\�-��<{Cu!%��x�a��zk��yo��T����a�'j��l��K��*ʴ�i��k�9|������e�cE*@K���+�\�o�'P�>R�
�^�Eyh�2-�νO�w��ʩ~ݗ�r2�R~ �m      �   �   x���O�P����.@���r�!�z��H��	��	�4�at��-Tbi1��|6��	�#O�Dv0������E�*�f85��uӌ/����g�2�J�&�"�1.m�FlcA:����&�� ���l`�z���4���U�݁���,�u�/ķn֖|�i�᠟x��"/�O�����&�n�ˎ/*@�-�#����4M{��#      �   �   x�m��� E������l��x��?G�T��Z��\d������ϓ���Wf,�{�R\B<3V���!%�2�㚻��F�f����~�����~�s�v�Ĭ22����������%�(�Q��{�(53�_$?�TL      �   �
  x�uWK���u�����"��Ш)�I�)�I�oR|�G��Ѥ�7(��HP���v�uq��?��E;�_(�{t�s�#����{�!�9��9}Ѿ�،M�ށ��@�;0����SH��m��^+x$��0�KPE�Gp�Aw�IV�M&s��(B$��0*ZB�����Vsl3��P�#؎02�p�*(�I-�\Z�� D�$~c?��L�`�C���rs���g�����hN6�hN�hN�Ҝ��y����������~�Y���4���������!��U`�y띁�]�u�ᕊ��i���c�U����(0W�"����`�)��-��_}����~�?�~Ҝ�mN���0
�-�"I
�w���rف��8�Rڑͧ�G�D�:n�嗾��,BQvFv�p��>�8%��2#���}}ȱU Ϧ�/�s4�b��� --SȩQ����Ȗ��?��� �Y���4s������������ׯ�5�o�m6�\/K"�5�����µ��͹;��q��|��ĉ|�� ��Q�	�1K$�Ы�tp،����}��$ӊ\ȷ{�X)��0��sIP~DOׂ�L7J�{S�т�Z���U������'�"z q�Us�es~h�\$v>7��\����/^��������e�.�|���[��%���r��f�Y���dWptp��^:�&&j	��l:�r��9n. �D"Q�4C'�N��:�]���Y�V͛~��T�`�YVL1�TXY.����Ez(�,֦.��^��r�{�:�_��o�M/֎��R�$J�ؤ �%�}WՄ�1=�J �D�8��]F8�>.s����Jq5&i0g��z��Cxf6(�P�����[
��gH� �Y�e})�6�f�!7���v4���`O'�֊=J�3E��$ɏ:��z�,G�]��e+����H��Y�5|Q�ϛ��.ri�7�d���`(*ʁM��R�r\w�tH#��:�I��z�/��'�j�6���4��$�M����������#�i�-�ѨL7~�a̼4$�ؑw�H-�Q�-��^�{bu�g�[��kp�V�b�qͺl�S���)��}y�G���,s��2�tY61c�Q�{T���<BN�|W�t'��=�:hP�ِ�/���+'�G����`<7đ����/N�\x��l݇��=_~-���
�V�m������oo�������������is�����t�q
��"�4�7�1);p��7����}ە��V��h<������Jۀt̓'���> ���
N��2!�r�Qa������|����0f��҉��d�l��=�t��6YP;$~�<|}��?kN�������`���}s��yx�y��20�_7m�����\�p,7���,��Lی<�J��{��Ʈe��jYU�4��R,�1I1}<4��,S�	��*t�ޣ��{�w�lK�Y��D�El��ۯ7�@F{CN�+�
�
��X;�Nw�� �)M�b7G�j���x��;���AT��d۷�����Kpk�f������ƺ9�8�HA��;|����ox��{~���7�omrm0珚����_�-�ʌ������w:�����)�o�]=O�P� !{d���|GR�>m1v-��`Hɪr�������.h'�CK���᫫p>�*�]�������W�tu�`�I�N��!Y�=�O#��H��ȴ\I�X�
�Y8`$]���lE�;�!�
�m�,I�ǈKgb~<h��v]=��Ʒe����������ŵW�~݈�s���Rbi�]Wt	�׺1�3��.G�bW�0�S���Ů�0��|�9���$�����8D��T�漊"A8ҽ����f�ڑ��ѽB�t߲^c��c�}����u���rs��M3�������;V�Y�Et�(�cf��'D��RC��&!g�����T�d'E��z15�"�Z�~�]X�m!Z�s��MA��#�On��A�D�.�(�`��Z�B 殖�F����9Xř=|j�z�,v�M B��׀��7�ǎ�"ua��!H�x��W����"���՚qP��!��9��\��2���Y�b��M����m�猘���J	$�н��#�^geRug��v!`q��J�-�斆e1��q�+(��Х�+j��e}؉쀷j���9��|�'*�3p(2�[��L8~�,�uR���%���>�����z��^����h�xok�}A���<ef9��Vu���f�3r�x�Xn|{�k��-���]M�42+�N#n�9��a'j�dW�3����K��vm���W� �o]�V���,/Q]�h�v����	=��l�;N�"��G}�~ǹZ�;na�������p}���9�7?o����[�_��yj�t�Ն2��31���d�}9�������9���m�.7t���8Wd�T΄�TY�B� A���<����4*�FU�*��Q����n觴�����.�_/ȏ﷿<zv�0d=@o}Ա)+Z���t+E$F�1��8�W���?Tg[y�c�Da�Yy������"�vE,΀p4�}0�;1��yUD�#YnC[�h��g��e�,v� �2���v<���t�X��j����Nxy2�Kd ��B�BR=�������l��%���@䭩�������ŋ�ը�     