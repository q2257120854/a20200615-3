-- ----------------------------------------------------------------
--
--                          Database
--
-- ----------------------------------------------------------------

Create Database If Not Exists `%db_name%` Character Set utf8;

-- ----------------------------------------------------------------
--
--                           Tables
--
-- ----------------------------------------------------------------

-- ----------------------------------------------------------------
-- Users
-- ----------------------------------------------------------------

Create Table If Not Exists `%db_name%`.mirrormx_customer_chat_user (

    -- Fields

    `id` Int Auto_Increment Primary Key,

    `name`          Varchar( 32) Not Null,
    `mail`          Varchar( 64) Not Null,
    `password`      Varchar(255) Not Null,
    `image`         Varchar(255),
    `info`          Text,
    `roles`         Varchar(128),
    `last_activity` Timestamp,

    -- Indexes

    Index user_mail_ix          (`mail`),
    Index user_last_activity_ix (`last_activity` Desc)

) Character Set utf8, Engine = InnoDB;

-- ----------------------------------------------------------------
-- Departments
-- ----------------------------------------------------------------

Create Table If Not Exists `%db_name%`.mirrormx_customer_chat_department (

    -- Fields

    `id` SmallInt Unsigned Auto_Increment Primary Key,

    `name`        Varchar( 64) Not Null,
    `description` Varchar(255)

) Character Set utf8, Engine = InnoDB;

-- ----------------------------------------------------------------
-- Users-Departments linking table
-- ----------------------------------------------------------------

Create Table If Not Exists `%db_name%`.mirrormx_customer_chat_user_department (

    -- Fields

    `user_id`       Int               Not Null,
    `department_id` SmallInt Unsigned Not Null,

    -- Constraints

    Constraint user_department_uq Unique Key (`user_id`, `department_id`),

    -- Relations

    Constraint user_department_fk_user Foreign Key (`user_id`)

        References `%db_name%`.mirrormx_customer_chat_user (`id`)

        On Update Cascade
        On Delete Cascade,

    Constraint user_department_fk_department Foreign Key (`department_id`)

        References `%db_name%`.mirrormx_customer_chat_department (`id`)

        On Update Cascade
        On Delete Cascade

) Character Set utf8, Engine = InnoDB;

-- ----------------------------------------------------------------
-- Talks
-- ----------------------------------------------------------------

Create Table If Not Exists `%db_name%`.mirrormx_customer_chat_talk (

    -- Fields

    `id` Int Unsigned Auto_Increment Primary Key,

    `state`         Varchar(32),
    `department_id` SmallInt Unsigned,
    `owner`         Int,
    `last_activity` Timestamp Not Null,
    `extra`         Text,

    -- Relations

    Constraint talk_fk_department Foreign Key (`department_id`)

        References `%db_name%`.mirrormx_customer_chat_department (`id`)

        On Update Cascade
        On Delete Set Null,

    -- Indexes

    Index talk_owner_ix         (`owner`),
    Index talk_last_activity_ix (`last_activity` Desc)

) Character Set utf8, Engine = InnoDB;

-- ----------------------------------------------------------------
-- Messages
-- ----------------------------------------------------------------

Create Table If Not Exists `%db_name%`.mirrormx_customer_chat_message (

    -- Fields

    `id` Int Unsigned Auto_Increment Primary Key,

    `from_id`  Int          Not Null,
    `to_id`    Int          Not Null,
    `body`     Text         Not Null,
    `datetime` Timestamp    Not Null,
    `talk_id`  Int Unsigned Not Null,
    `extra`    Text,

    -- Relations

    Constraint message_fk_talk Foreign Key (`talk_id`)

        References `%db_name%`.mirrormx_customer_chat_talk (`id`)

        On Update Cascade
        On Delete Cascade,

    -- Indexes

    Index message_from_id_ix  (`from_id`),
    Index message_to_id_ix    (`to_id`),
    Index message_datetime_ix (`datetime` Desc)

) Character Set utf8, Engine = InnoDB;

-- ----------------------------------------------------------------
-- Generic data
-- ----------------------------------------------------------------

Create Table If Not Exists `%db_name%`.mirrormx_customer_chat_data (

    -- Fields

    `id` Int Unsigned Auto_Increment Primary Key,

    `type`  Varchar(255) Not Null,
    `key`   Varchar(255) Not Null,
    `value` Text,

    -- Indexes

    Index data_type_ix (`type`)

) Character Set utf8, Engine = InnoDB;

-- ----------------------------------------------------------------
-- Uploads
-- ----------------------------------------------------------------

Create Table If Not Exists `%db_name%`.mirrormx_customer_chat_upload (

    -- Fields

    `id` Int Unsigned Auto_Increment Primary Key,

    `message_id` Int Unsigned Not Null,
    `state`      Varchar(16)  Not Null,
    `files_info` Text,
    `size`       Int Unsigned,
    `progress`   Int Unsigned,

    -- Relations

    Constraint upload_fk_message Foreign Key (`message_id`)

        References `%db_name%`.mirrormx_customer_chat_message (`id`)

        On Update Cascade
        On Delete Cascade

) Character Set utf8, Engine = InnoDB;

-- ----------------------------------------------------------------
-- Shared files
-- ----------------------------------------------------------------

Create Table If Not Exists `%db_name%`.mirrormx_customer_chat_shared_file (

    -- Fields

    `id` Int Unsigned Auto_Increment Primary Key,

    `original_name` Varchar(255) Not Null,
    `name`          Varchar(32)  Not Null,
    `type`          Varchar(255),
    `size`          Int Unsigned,
    `upload_id`     Int Unsigned Not Null,
    `password`      Varchar(32)  Not Null,

    -- Relations

    Constraint shared_file_fk_upload Foreign Key (`upload_id`)

        References `%db_name%`.mirrormx_customer_chat_upload (`id`)

        On Update Cascade
        On Delete Cascade

) Character Set utf8, Engine = InnoDB;
