

CREATE TABLE IF NOT EXISTS siteConfig(
                  id INTEGER PRIMARY KEY AUTOINCREMENT,
                  configKey VARCHAR(100) NOT NULL,
                  configValue TEXT ,
                  UNIQUE (configKey));

CREATE TABLE  IF NOT EXISTS siteUser (
                   id INTEGER PRIMARY KEY AUTOINCREMENT,
                   userId VARCHAR(100) UNIQUE NOT NULL,
                   loginName VARCHAR(100) UNIQUE NOT NULL,
                   loginNameLowercase VARCHAR(100) UNIQUE NOT NULL,
                   nickname VARCHAR(100) NOT NULL,
                   nicknameInLatin VARCHAR(100),
                   avatar VARCHAR(256),
                   availableType INTEGER,
                   countryCode VARCHAR(10),
                   phoneId VARCHAR(11),
                   friendVersion INTEGER,
                   timeReg BIGINT);

CREATE TABLE if not EXISTS siteFriendApply(
              id INTEGER PRIMARY KEY AUTOINCREMENT,
              userId VARCHAR(100) NOT NULL,
              friendId VARCHAR(100) NOT NULL,
              greetings VARCHAR(100),
              applyTime BIGINT,
              UNIQUE(userId, friendId));

CREATE TABLE IF NOT EXISTS siteUserFriend(
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    userId VARCHAR(100) NOT NULL,
                    friendId VARCHAR(100) NOT NULL,
                    aliasName VARCHAR(100),
                    aliasNameInLatin VARCHAR(100),
                    relation INTEGER,
                    mute BOOLEAN,/*1互为好友 2我删除了对方 3临时会话 */
                    version INTEGER,
                    addTime BIGINT,/*是否静音 1表示静音，0表示没有静音*/
                    UNIQUE(userId, friendId));


create table IF NOT EXISTS siteSession(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                sessionId VARCHAR(100) UNIQUE NOT NULL,
                userId VARCHAR(100) NOT NULL,
                deviceId VARCHAR(100) NOT NULL,
                devicePubkPem TEXT, -- DEVICE PUBK PEM
                clientSideType INTEGER,     -- 0:无效，1:手机客户端  2:web客户端
                timeWhenCreated BIGINT,/*创建时间*/
                ipWhenCreated VARCHAR(100),/*创建时候的ip*/
                timeActive BIGINT,/*最后活跃时间*/
                ipActive VARCHAR(100),/*活跃时间的IP*/
                userAgent VARCHAR(100),
                userAgentType INTEGER,
                gatewayURL VARCHAR(100),
                gatewaySocketId VARCHAR(100),
                UNIQUE(sessionId,userId),
                UNIQUE(userId,deviceId));

CREATE TABLE  IF NOT EXISTS siteGroup (
               id INTEGER PRIMARY KEY AUTOINCREMENT,
               groupId VARCHAR(100) NOT NULL,/*6到16位*/
               `name` VARCHAR(100) NOT NULL,/*群名*/
               nameInLatin VARCHAR(100) NOT NULL,
               owner VARCHAR(100) NOT NULL,
               avatar VARCHAR(256),/*群头像*/
               description TEXT,/*群描述*/
               descriptionType INTEGER default 0,/*descrption type， 0 text, 1 md*/
               permissionJoin INTEGER,/*加入方式*/
               canGuestReadMessage BOOLEAN,/*游客是否允许读群消息*/
               maxMembers INTEGER,/*群最大成员数*/
               speakers TEXT, /*发言人*/
                status INTEGER default 1,/*表示群的状态， 1表示正常*/
                isWidget INTEGER default 0, /*表示1是挂件，0不是挂件*/
               timeCreate BIGINT,
               UNIQUE(groupId)
        );

CREATE TABLE IF NOT EXISTS siteGroupUser(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
               groupId VARCHAR(100) NOT NULL,
               userId VARCHAR(100) NOT NULL,
               memberType INTEGER,
               isMute BOOLEAN default 0 ,/*是否静音 1表示静音，0表示没有静音*/
               timeJoin BIGINT,
               UNIQUE(groupId, userId)
        );

CREATE TABLE IF NOT EXISTS siteU2Message(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            msgId VARCHAR(100) UNIQUE NOT NULL,
            userId VARCHAR(100) NOT NULL,
            fromUserId VARCHAR(100),
            toUserId VARCHAR(100) NOT NULL,
            roomType INTEGER,
            msgType INTEGER,
            content TEXT,   -- 可能是一个json，可能是一个proto toString
            msgTime BIGINT
            );

CREATE INDEX IF NOT EXISTS indexSiteU2MessageUserId ON siteU2Message(userId);

CREATE TABLE IF NOT EXISTS siteU2MessagePointer(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            userId VARCHAR(100) NOT NULL,
            deviceId VARCHAR(100),
            clientSideType INTEGER,     -- 0:无效，1:手机客户端  2:web客户端
            pointer INTEGER
            );

CREATE UNIQUE INDEX IF NOT EXISTS indexSiteU2MessagePointerUd ON siteU2MessagePointer(userId,deviceId);

CREATE TABLE IF NOT EXISTS siteGroupMessage(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            msgId VARCHAR(100) UNIQUE NOT NULL,
            groupId VARCHAR(100) NOT NULL,
            fromUserId VARCHAR(100),
            msgType INTEGER,
            content TEXT,
            msgTime BIGINT
            );

CREATE INDEX IF NOT EXISTS indexSiteGroupMessageGroupId ON siteGroupMessage(groupId);


CREATE TABLE IF NOT EXISTS passportPassword(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                userId VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                password VARCHAR(100) NOT NULL,
                nickname VARCHAR(100) NOT NULL,
                loginName VARCHAR(100) NOT NULL,
                invitationCode VARCHAR(100),
                timeReg BIGINT,
                unique(userId),
                unique(email),
                unique(loginName)
            );

CREATE TABLE IF NOT EXISTS passportPasswordPreSession(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                userId VARCHAR(100) NOT NULL,
                preSessionId VARCHAR(100) NOT NULL,
                sitePubkPem TEXT,
                unique(userId)
            );

CREATE TABLE IF NOT EXISTS passportPasswordToken(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                loginName VARCHAR(100) NOT NULL,
                token VARCHAR(100) NOT NULL,
                timeReg BIGINT,
                UNIQUE(loginName)
            );

CREATE TABLE IF NOT EXISTS siteGroupMessagePointer(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            groupId VARCHAR(100) NOT NULL,
            userId VARCHAR(100) NOT NULL,
            deviceId VARCHAR(100),
            clientSideType INTEGER, -- 0:无效，1:手机客户端  2:web客户端
            pointer INTEGER);

CREATE INDEX IF NOT EXISTS indexSiteGroupMessagePointerGud ON siteGroupMessagePointer(groupId,userId,deviceId);


CREATE TABLE sitePlugin(
              id INTEGER PRIMARY KEY AUTOINCREMENT,
              pluginId INTEGER NOT NULL,
              name VARCHAR(100) NOT NULL, /*名字*/
              logo TEXT NOT NULL,/*logo*/
              sort INTEGER,/*排序 数值越小，排位靠前*/
              landingPageUrl TEXT,/*落地页*/
              landingPageWithProxy LONG, /*是否使用resp加载落地页*/
              usageType INTEGER,          /*功能类型*/
              loadingType INTEGER,/*展现方式*/
              permissionType INTEGER ,    /*使用权限*/
              authKey VARCHAR(32) NOT NULL,
              addTime BIGINT,
              UNIQUE(pluginId,usageType));

CREATE INDEX IF NOT EXISTS indexSitePluginSort ON sitePlugin(sort);


CREATE TABLE IF NOT EXISTS siteUic(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            code VARCHAR(50) unique NOT NULL,
            userId VARCHAR(100),
            status INTEGER, -- 0：无效，1：所有人可用 2：会员可用等
            createTime BIGINT,
            useTime BIGINT);

CREATE INDEX IF NOT EXISTS indexSiteUicUserId ON siteUic(userId);


CREATE TABLE IF NOT EXISTS siteGif(
                      id INTEGER PRIMARY KEY AUTOINCREMENT,
                      gifId VARCHAR(100) NOT NULL,
                      gifUrl  VARCHAR(100) NOT NULL,
                      width INTEGER not null default 0,
                      height INTEGER not null default 0,
                      addTime BIGINT,
                      UNIQUE (gifUrl));

CREATE TABLE IF NOT EXISTS siteUserGif(
                      id INTEGER PRIMARY KEY AUTOINCREMENT,
                      gifId VARCHAR(100) NOT NULL,
                      userId VARCHAR(100) NOT NULL,
                      addTime BIGINT);
