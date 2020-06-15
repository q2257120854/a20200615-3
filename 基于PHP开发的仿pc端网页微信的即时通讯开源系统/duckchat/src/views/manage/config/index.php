<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php if ($lang == "1") { ?>站点设置<?php } else { ?>Site Config<?php } ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../../public/jquery/weui.min.css"/>
    <link rel="stylesheet" href="../../public/jquery/jquery-weui.min.css"/>

    <link rel="stylesheet" href="../../public/manage/config.css"/>

</head>

<body>

<div class="wrapper" id="wrapper">

    <!--  site basic config  -->
    <div class="layout-all-row">

        <div class="list-item-center">

            <div class="item-row" id="site-name" onclick="showSiteName()">
                <div class="item-body">
                    <div class="item-body-display">

                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">站点名称</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Site Name</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <div class="item-body-value"><?php echo $name; ?></div>
                            <div class="item-body-value"><img class="more-img"
                                                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-row">
                <div class="item-body">
                    <div class="item-body-display">

                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">站点 Logo</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Site Logo</div>
                        <?php } ?>


                        <div class="item-body-tail">
                            <div class="item-body-value" id="site-logo-fileid" fileId="<?php echo $logo ?>">
                                <img class="site-logo-image" onclick="uploadFile('upload-site-logo')"
                                     src="../../public/img/manage/site_default.png">

                                <input id="upload-site-logo" type="file" onchange="uploadImageFile(this)"
                                       accept="image/gif,image/jpeg,image/jpg,image/png,image/svg"
                                       style="display: none;">
                            </div>
                            <div class="item-body-value"><img class="more-img"
                                                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

        </div>

    </div>


    <!-- part 2  register && login plugin-->
    <div class="layout-all-row">

        <div class="list-item-center">

            <div class="item-row">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">是否开启手机号</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Enable Phone Number</div>
                        <?php } ?>


                        <div class="item-body-tail">
                            <div class="item-body-value">
                                <?php if ($enableRealName == 1) { ?>
                                    <input id="enableRealNameSwitch" class="weui_switch" type="checkbox" checked>
                                <?php } else { ?>
                                    <input id="enableRealNameSwitch" class="weui_switch" type="checkbox">
                                <?php } ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-row">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">是否开启邀请码</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Enable Invite Code</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <?php if ($enableInvitationCode == 1) { ?>
                                <input id="enableUicSwitch" class="weui_switch" type="checkbox" checked>
                            <?php } else { ?>
                                <input id="enableUicSwitch" class="weui_switch" type="checkbox">
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-row">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">登陆小程序ID</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Login Mini Program ID</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <div class="item-body-value"> <?php echo $loginPluginId; ?></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>
        </div>

    </div>

    <!-- part 3   -->
    <div class="layout-all-row">

        <div class="list-item-center">

            <div class="item-row">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">允许互相添加好友</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Enable Add Friend</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <?php if ($enableAddFriend == 1) { ?>
                                <input id="enableAddFriendSwitch" class="weui_switch" type="checkbox" checked>
                            <?php } else { ?>
                                <input id="enableAddFriendSwitch" class="weui_switch" type="checkbox">
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-row">
                <div class="item-body">
                    <div class="item-body-display">

                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">允许临时会话</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Enable Tmp Chat</div>
                        <?php } ?>


                        <div class="item-body-tail">
                            <?php if ($enableTmpChat == 1) { ?>
                                <input id="enableTmpChatSwitch" class="weui_switch" type="checkbox" checked>
                            <?php } else { ?>
                                <input id="enableTmpChatSwitch" class="weui_switch" type="checkbox">
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>


            <div class="item-row">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">允许创建群组</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Enable Create Group</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <?php if ($enableCreateGroup == 1) { ?>
                                <input id="enableCreateGroupSwitch" class="weui_switch" type="checkbox" checked>
                            <?php } else { ?>
                                <input id="enableCreateGroupSwitch" class="weui_switch" type="checkbox">
                            <?php } ?>
                        </div>

                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-row" id="file-max-size">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">文件大小</div>
                        <?php } else { ?>
                            <div class="item-body-desc">File Size</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <div class="item-body-value"><?php echo $maxFileSize ?></div>
                            &nbsp;(M)
                            <div class="item-body-value"><img class="more-img"
                                                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-row" id="group-max-members">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">群组最大成员数</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Group Max Members</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <div class="item-body-value"><?php echo $maxGroupMembers ?></div>
                            <div class="item-body-value"><img class="more-img"
                                                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-row">
                <div class="item-body" id="push-notice-type" data="<?php echo $pushType ?>">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">Push推送通知类型</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Push Notice Type</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <div class="item-body-value" id="push-notice-type-text">
                                <?php if ($pushType == "0") { ?>
                                    <?php if ($lang == "1") { ?> 禁止推送通知<?php } else { ?> Push Disable <?php } ?>
                                <?php } else if ($pushType == "1") { ?>
                                    <?php if ($lang == "1") { ?> 不显示文本内容<?php } else { ?> Hide Content <?php } ?>
                                <?php } else if ($pushType == "2") { ?>
                                    <?php if ($lang == "1") { ?> 显示文本内容<?php } else { ?> Show Content <?php } ?>
                                <?php } ?>
                            </div>
                            <div class="item-body-value"><img class="more-img"
                                                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>
        </div>

    </div>


    <!--   part 4 -->
    <div class="layout-all-row">

        <div class="list-item-center">

            <!--      part1: site name      -->
            <div class="item-row">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">允许分享群聊</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Enable Share Group</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <?php if ($enableShareGroup == 1) { ?>
                                <input id="enableShareGroupSwitch" class="weui_switch" type="checkbox" checked>
                            <?php } else { ?>
                                <input id="enableShareGroupSwitch" class="weui_switch" type="checkbox">
                            <?php } ?>

                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-row">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">允许分享个人</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Enable Share User</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <?php if ($enableShareUser == 1) { ?>
                                <input id="enableShareUserSwitch" class="weui_switch" type="checkbox" checked>
                            <?php } else { ?>
                                <input id="enableShareUserSwitch" class="weui_switch" type="checkbox">
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>
        </div>
    </div>


    <!--   part 5 -->
    <div class="layout-all-row">

        <div class="list-item-center">

            <div class="item-row">
                <div class="item-body">
                    <div class="item-body-display" id="max-mobile-num" onclick="updateMaxMobileNum();">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">手机端登陆设备数</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Max Mobile Num</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <div class="item-body-value"><?php echo $maxMobileNum ?></div>
                            <div class="item-body-value"><img class="more-img"
                                                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

<!--            <div class="item-row">-->
<!--                <div class="item-body">-->
<!--                    <div class="item-body-display">-->
<!--                        --><?php //if ($lang == "1") { ?>
<!--                            <div class="item-body-desc">开启Web版本</div>-->
<!--                        --><?php //} else { ?>
<!--                            <div class="item-body-desc">Open Web Edition</div>-->
<!--                        --><?php //} ?>
<!---->
<!--                        <div class="item-body-tail">-->
<!--                            --><?php //if ($openWebEdition == 1) { ?>
<!--                                <input id="openWebEditionSwitch" class="weui_switch" type="checkbox" checked>-->
<!--                            --><?php //} else { ?>
<!--                                <input id="openWebEditionSwitch" class="weui_switch" type="checkbox">-->
<!--                            --><?php //} ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="division-line"></div>-->

<!--            <div class="web-condition" style='--><?php //echo $openWebEdition == 1 ? '' : 'display: none;'; ?><!--'>-->
            <div class="web-condition">
                <div class="item-row" id="web-ws-port">
                    <div class="item-body">
                        <div class="item-body-display">
                            <?php if ($lang == "1") { ?>
                                <div class="item-body-desc">WebSocket端口</div>
                            <?php } else { ?>
                                <div class="item-body-desc">WebSocket Port</div>
                            <?php } ?>

                            <div class="item-body-tail">
                                <?php if (isset($wsPort) && $wsPort > 0) { ?>
                                    <div class="item-body-value"><?php echo $wsPort; ?></div>
                                <?php } else { ?>
                                    <div class="item-body-desc"><?php
                                        if ($lang == 1) {
                                            echo "未设置端口表示未开启";
                                        } else {
                                            echo "disable with empty port";
                                        }
                                        ?></div>
                                <?php } ?>

                                <div class="item-body-value-more"><img class="more-img"
                                                                       src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="division-line"></div>

                <div class="item-row" id="max-web-num">
                    <div class="item-body">
                        <div class="item-body-display">
                            <?php if ($lang == "1") { ?>
                                <div class="item-body-desc">Web端登陆设备数</div>
                            <?php } else { ?>
                                <div class="item-body-desc">Max Web Num</div>
                            <?php } ?>

                            <div class="item-body-tail">
                                <div class="item-body-value" style="color: #999999"><?php echo $maxWebNum; ?></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="division-line"></div>

            </div>

            <!--            <div class="item-row">-->
            <!--                <div class="item-body">-->
            <!--                    <div class="item-body-display">-->
            <!--                        --><?php //if ($lang == "1") { ?>
            <!--                            <div class="item-body-desc">是否开启Web挂件功能</div>-->
            <!--                        --><?php //} else { ?>
            <!--                            <div class="item-body-desc">Enable Web-Widget</div>-->
            <!--                        --><?php //} ?>
            <!---->
            <!--                        <div class="item-body-tail">-->
            <!--                            --><?php //if ($enableWebWidget == 1) { ?>
            <!--                                <input id="enableWebWidgetSwitch" class="weui_switch" type="checkbox" checked>-->
            <!--                            --><?php //} else { ?>
            <!--                                <input id="enableWebWidgetSwitch" class="weui_switch" type="checkbox">-->
            <!--                            --><?php //} ?>
            <!---->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="division-line"></div>-->
        </div>
    </div>


    <!--  part 6  -->
    <div class="layout-all-row">

        <div class="list-item-center">

            <div class="item-row" id="site-managers">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">站点管理员</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Site Managers</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <div class="item-body-value"><img class="more-img"
                                                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-row" id="site-default-friends">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">站点默认好友</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Site Default Friends</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <div class="item-body-value"><img class="more-img"
                                                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-row" id="site-default-groups">
                <div class="item-body">
                    <div class="item-body-display">

                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">站点默认群组</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Site Default Groups</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <div class="item-body-value"><img class="more-img"
                                                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>
        </div>
    </div>

    <!--   part 7  -->
    <div class="layout-all-row">

        <div class="list-item-center">

            <div class="item-row" id="site-rsa-pubk-pem">
                <div class="item-body">
                    <div class="item-body-display">

                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">站点公钥</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Site Public Key</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <div class="item-body-value"><img class="more-img"
                                                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

            <div class="item-row" id="site-owner" siteOwner="<?php echo $owner ?>">
                <div class="item-body">
                    <div class="item-body-display">
                        <?php if ($lang == "1") { ?>
                            <div class="item-body-desc">站长</div>
                        <?php } else { ?>
                            <div class="item-body-desc">Site Administrator</div>
                        <?php } ?>

                        <div class="item-body-tail">
                            <div class="item-body-value">
                                <img class="more-img"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAnCAYAAAAVW4iAAAABfElEQVRIS8WXvU6EQBCAZ5YHsdTmEk3kJ1j4HDbGxMbG5N7EwkIaCy18DxtygMFopZ3vAdkxkMMsB8v+XqQi2ex8ux/D7CyC8NR1fdC27RoRszAMv8Ux23ccJhZFcQoA9wCQAMAbEd0mSbKxDTzM6wF5nq+CIHgGgONhgIi+GGPXURTlLhDstDRN8wQA5zOB3hljFy66sCzLOyJaL6zSSRdWVXVIRI9EdCaDuOgavsEJY+wFEY8WdmKlS5ZFMo6xrj9AF3EfukaAbcp61TUBdJCdn85J1yzApy4pwJeuRYAPXUqAqy4tgIsubYCtLiOAjS5jgKkuK8BW1w0APCgOo8wKMHcCzoA+AeDSGKA4AXsOEf1wzq/SNH01AtjUKG2AiZY4jj9GXYWqazDVIsZT7sBGizbAVosWwEWLEuCqZRHgQ4sU4EvLLMCnlgnAt5YRYB9aRoD/7q77kivWFlVZ2R2XdtdiyTUNqpNFxl20bBGT7ppz3t12MhctIuwXEK5/O55iCBQAAAAASUVORK5CYII="/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="division-line"></div>

        </div>

    </div>
</div>


<div class="wrapper-mask" id="wrapper-mask" style="visibility: hidden;"></div>

<div class="popup-template" style="display:none;">

    <div class="config-hidden" id="popup-group">

        <div class="flex-container">
            <div class="header_tip_font popup-group-title"></div>
        </div>

        <div class="" style="text-align: center">
            <input type="text" class="popup-group-input"
                   data-local-placeholder="enterGroupNamePlaceholder" placeholder="please input">
        </div>

        <div class="line"></div>

        <div class="" style="text-align:center;">
            <?php if ($lang == "1") { ?>
                <button id="updatePopupButton" type="button" class="create_button" key-value=""
                        onclick="updateDataValue();">确认
                </button>
            <?php } else { ?>
                <button id="updatePopupButton" type="button" class="create_button" key-value=""
                        onclick="updateDataValue();">Confirm
                </button>
            <?php } ?>
        </div>

    </div>

</div>

<script type="text/javascript" src="../../public/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../../public/jquery/jquery-weui.min.js"></script>
<script type="text/javascript" src="../../public/js/jquery-confirm.js"></script>

<script type="text/javascript" src="../../public/manage/native.js"></script>

<script type="text/javascript">

    function uploadFile(obj) {
        $("#" + obj).val("");
        $("#" + obj).click();
    }


    function uploadImageFile(obj) {

        if (obj) {
            if (obj.files) {
                var formData = new FormData();

                formData.append("file", obj.files.item(0));
                formData.append("fileType", "FileImage");
                formData.append("isMessageAttachment", false);

                var src = window.URL.createObjectURL(obj.files.item(0));

                uploadFileToServer(formData, src);

                //上传以后本地展示的
                $(".site-logo-image").attr("src", src);
            }
            return obj.value;
        }

    }

    function uploadFileToServer(formData, src) {

        var url = "./index.php?action=http.file.uploadWeb";

        if (isMobile()) {
            url = "/_api_file_upload_/?fileType=1";  //fileType=1,表示文件
        }

        $.ajax({
            url: url,
            type: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (imageFileIdResult) {

                if (imageFileIdResult) {
                    var fileId = imageFileIdResult;
                    if (isMobile()) {
                        var res = JSON.parse(imageFileIdResult);
                        fileId = res.fileId;
                    }
                    updateSiteLogo(fileId);
                } else {
                    alert(getLanguage() == 1 ? "上传返回结果空 " : "empty response");
                }

            },
            error: function (err) {
                alert("update image error");
                return false;
            }
        });
    }

    function updateSiteLogo(imageFileId) {
        var url = "index.php?action=manage.config.update";
        var data = {
            'key': 'logo',
            'value': imageFileId,
        };
        zalyjsCommonAjaxPostJson(url, data, updateLogoResponse);
    }

    function updateLogoResponse(url, data, result) {
        var res = JSON.parse(result);

        if (res.errCode) {

            var fileId = data.value;
            console.log("updateLogoResponse imageId fileId==" + fileId);

            showSiteLogo(fileId);
        } else {
            alert("errorInfo:" + res.errInfo);
        }
    }

    downloadFileUrl = "./index.php?action=http.file.downloadFile";


    function showSiteLogo(fileId) {

        var requestUrl = "./_api_file_download_/test?fileId=" + fileId;


        if (!isMobile()) {
            requestUrl = downloadFileUrl + "&fileId=" + fileId + "&returnBase64=0";
        }

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && (this.status == 200 || this.status == 304)) {
                var blob = this.response;
                var src = window.URL.createObjectURL(blob);
                console.log("showSiteLogo imageId response src=" + src);
                $(".site-logo-image").attr("src", src);
            }
        };
        xhttp.open("GET", requestUrl, true);
        xhttp.responseType = "blob";
        // xhttp.setRequestHeader('Cache-Control', "max-age=2592000, public");
        xhttp.send();
    }

    function showWindow(jqElement) {
        jqElement.css("visibility", "visible");
        $(".wrapper-mask").css("visibility", "visible").append(jqElement);
    }


    function removeWindow(jqElement) {
        jqElement.remove();
        $(".popup-template").append(jqElement);
        $(".wrapper-mask").css("visibility", "hidden");
    }


    $(".wrapper-mask").mouseup(function (e) {
        var targetId = e.target.id;
        var targetClassName = e.target.className;

        if (targetId == "wrapper-mask") {
            var wrapperMask = document.getElementById("wrapper-mask");
            var length = wrapperMask.children.length;
            var i;
            for (i = 0; i < length; i++) {
                var node = wrapperMask.children[i];
                node.remove();
                // addTemplate(node);
                $(".popup-template").append(node);
                $(".popup-template").hide();
            }
            $(".popup-group-input").val("");
            $("#updatePopupButton").attr("data", "");
            wrapperMask.style.visibility = "hidden";
        }
    });


    $(function () {
        var fileId = $("#site-logo-fileid").attr("fileId");
        showSiteLogo(fileId)
    });

    function updateDataValue() {

        var key = $("#updatePopupButton").attr("key-value");

        var url = "index.php?action=manage.config.update&key=" + key;

        var value = $.trim($(".popup-group-input").val());

        var data = {
            'key': key,
            'value': value,
        };

        zalyjsCommonAjaxPostJson(url, data, updateConfigResponse);

        // close
        removeWindow($(".config-hidden"));
    }

    function updateConfigResponse(url, data, result) {
        var res = JSON.parse(result);
        if ("success" == res.errCode) {
            window.location.reload();
        } else {
            alert("error:" + result.errInfo);
        }
    }

    function showSiteName() {
        var title = $("#site-name").find(".item-body-desc").html();
        var inputBody = $("#site-name").find(".item-body-value").html();

        showWindow($(".config-hidden"));

        $(".popup-group-title").html(title);
        $(".popup-group-input").val(inputBody);
        $("#updatePopupButton").attr("key-value", "name");
    }

    $("#file-max-size").click(function () {
        var title = $(this).find(".item-body-desc").html();
        var inputBody = $(this).find(".item-body-value").html();

        showWindow($(".config-hidden"));

        $(".popup-group-title").html(title);
        $(".popup-group-input").val(inputBody);
        $("#updatePopupButton").attr("key-value", "maxFileSize");
    });

    $("#group-max-members").click(function () {
        var title = $(this).find(".item-body-desc").html();
        var inputBody = $(this).find(".item-body-value").html();

        showWindow($(".config-hidden"));

        $(".popup-group-title").html(title);
        $(".popup-group-input").val(inputBody);
        $("#updatePopupButton").attr("key-value", "maxGroupMembers");
    });

    function updateMaxMobileNum() {
        var title = $("#max-mobile-num").find(".item-body-desc").html();
        var inputBody = $("#max-mobile-num").find(".item-body-value").html();

        showWindow($(".config-hidden"));

        $(".popup-group-title").html(title);
        $(".popup-group-input").val(inputBody);
        $("#updatePopupButton").attr("key-value", "maxMobileNum");
    }


    $("#web-ws-port").click(function () {
        var title = $(this).find(".item-body-desc").html();
        var inputBody = $(this).find(".item-body-value").html();

        showWindow($(".config-hidden"));

        $(".popup-group-title").html(title);
        $(".popup-group-input").val(inputBody);
        $("#updatePopupButton").attr("key-value", "wsPort");
    });

    //enable realName
    $("#enableRealNameSwitch").change(function () {
        var isChecked = $(this).is(':checked');
        var url = "index.php?action=manage.config.update&key=enableRealName";

        var data = {
            'key': 'enableRealName',
            'value': isChecked ? 1 : 0,
        };

        zalyjsCommonAjaxPostJson(url, data, enableRealNameResponse);

    });

    function enableRealNameResponse(url, data, result) {
        if (result) {

            var res = JSON.parse(result);

            if (!"success" == res.errCode) {
                alert(getLanguage() == 1 ? "操作失败" : "update error");
            }

        } else {
            alert(getLanguage() == 1 ? "操作失败" : "update error");
        }
    }


    //update uic
    $("#enableUicSwitch").change(function () {
        var isChecked = $(this).is(':checked');
        var url = "index.php?action=manage.config.update&key=enableInvitationCode";

        var data = {
            'key': 'enableInvitationCode',
            'value': isChecked ? 1 : 0,
        };

        zalyjsCommonAjaxPostJson(url, data, enableUicResponse);

    });

    function enableUicResponse(url, data, result) {
        if (result) {

            var res = JSON.parse(result);

            if (!"success" == res.errCode) {
                alert(getLanguage() == 1 ? "操作失败" : "update error");
            }

        } else {
            alert(getLanguage() == 1 ? "操作失败" : "update error");
        }
    }


    //enable add friend
    $("#enableAddFriendSwitch").change(function () {
        var isChecked = $(this).is(':checked');
        var url = "index.php?action=manage.config.update&key=enableAddFriend";

        var data = {
            'key': 'enableAddFriend',
            'value': isChecked ? 1 : 0,
        };

        zalyjsCommonAjaxPostJson(url, data, enableAddFriendResponse);
    });

    function enableAddFriendResponse(url, data, result) {
        if (result) {

            var res = JSON.parse(result);

            if (!"success" == res.errCode) {
                alert(getLanguage() == 1 ? "操作失败" : "update error");
            }

        } else {
            alert(getLanguage() == 1 ? "操作失败" : "update error");
        }
    }

    //enable tmp chat
    $("#enableTmpChatSwitch").change(function () {
        var isChecked = $(this).is(':checked');
        var url = "index.php?action=manage.config.update&key=enableTmpChat";

        var data = {
            'key': 'enableTmpChat',
            'value': isChecked ? 1 : 0,
        };

        zalyjsCommonAjaxPostJson(url, data, enableTmpChatResponse);
    });

    function enableTmpChatResponse(url, data, result) {
        if (result) {

            var res = JSON.parse(result);

            if (!"success" == res.errCode) {
                alert(getLanguage() == 1 ? "操作失败" : "update error");
            }

        } else {
            alert(getLanguage() == 1 ? "操作失败" : "update error");
        }
    }

    //enable create group
    $("#enableCreateGroupSwitch").change(function () {
        var isChecked = $(this).is(':checked');
        var url = "index.php?action=manage.config.update&key=enableCreateGroup";

        var data = {
            'key': 'enableCreateGroup',
            'value': isChecked ? 1 : 0,
        };

        zalyjsCommonAjaxPostJson(url, data, enableCreateGroupResponse);
    });

    function enableCreateGroupResponse(url, data, result) {
        if (result) {

            var res = JSON.parse(result);

            if (!"success" == res.errCode) {
                alert(getLanguage() == 1 ? "操作失败" : "update error");
            }

        } else {
            alert(getLanguage() == 1 ? "操作失败" : "update error");
        }
    }

    //enable share group chat
    $("#enableShareGroupSwitch").change(function () {
        var isChecked = $(this).is(':checked');
        var url = "index.php?action=manage.config.update&key=enableShareGroup";

        var data = {
            'key': 'enableShareGroup',
            'value': isChecked ? 1 : 0,
        };

        zalyjsCommonAjaxPostJson(url, data, enableShareGroupResponse);
    });

    function enableShareGroupResponse(url, data, result) {
        if (result) {

            var res = JSON.parse(result);

            if (!"success" == res.errCode) {
                alert(getLanguage() == 1 ? "操作失败" : "update error");
            }

        } else {
            alert(getLanguage() == 1 ? "操作失败" : "update error");
        }
    }

    //enable share user
    $("#enableShareUserSwitch").change(function () {
        var isChecked = $(this).is(':checked');
        var url = "index.php?action=manage.config.update&key=enableShareUser";

        var data = {
            'key': 'enableShareUser',
            'value': isChecked ? 1 : 0,
        };

        zalyjsCommonAjaxPostJson(url, data, enableShareUserResponse);
    });

    function enableShareUserResponse(url, data, result) {
        if (result) {

            var res = JSON.parse(result);

            if (!"success" == res.errCode) {
                alert(getLanguage() == 1 ? "操作失败" : "update error");
            }

        } else {
            alert(getLanguage() == 1 ? "操作失败" : "update error");
        }
    }

    $("#enableAddFriendSwitch").change(function () {
        var isChecked = $(this).is(':checked')
        var url = "index.php?action=manage.config.update&key=enableAddFriend";

        var data = {
            'key': 'enableAddFriend',
            'value': isChecked ? 1 : 0,
        };

        zalyjsCommonAjaxPostJson(url, data, enableAddFriendResponse);
    });

    function enableAddFriendResponse(url, data, result) {
        if (result) {

            var res = JSON.parse(result);

            if (!"success" == res.errCode) {
                alert(getLanguage() == 1 ? "操作失败" : "update error");
            }

        } else {
            alert(getLanguage() == 1 ? "操作失败" : "update error");
        }
    }


    //open web edition
    $("#openWebEditionSwitch").change(function () {
        var isChecked = $(this).is(':checked');
        var url = "index.php?action=manage.config.update&key=openWebEdition";

        var data = {
            'key': 'openWebEdition',
            'value': isChecked ? 1 : 0,
        };

        zalyjsCommonAjaxPostJson(url, data, updateOpenWebResponse);

    });

    function updateOpenWebResponse(url, data, result) {

        var res = JSON.parse(result);
        if (res.errCode) {

            var openWebIsChecked = $("#openWebEditionSwitch").is(':checked');

            if (openWebIsChecked) {
                $(".web-condition").show();
            } else {
                $(".web-condition").hide();
            }

        } else {
            alert("update error");
            // window.location.reload();
        }

    }

    //open web widgit
    $("#enableWebWidgetSwitch").change(function () {
        var isChecked = $(this).is(':checked')
        var url = "index.php?action=manage.config.update&key=enableWebWidget";

        var data = {
            'key': 'enableWebWidget',
            'value': isChecked ? 1 : 0,
        };

        zalyjsCommonAjaxPostJson(url, data, enableWebWidgetResponse);
    });

    function enableWebWidgetResponse(url, data, result) {
        if (result) {
            var res = JSON.parse(result);

            if (!"success" == res.errCode) {
                alert(getLanguage() == 1 ? "操作失败" : "update error");
            }

        } else {
            alert(getLanguage() == 1 ? "操作失败" : "update error");
        }
    }

    //site managers
    $("#site-managers").click(function () {
        var url = "index.php?action=manage.config.siteManagers&lang=" + getLanguage();
        zalyjsCommonOpenPage(url);
    });

    //site default friend
    $("#site-default-friends").click(function () {
        var url = "index.php?action=manage.config.defaultFriends&lang=" + getLanguage();
        zalyjsCommonOpenPage(url);
    });

    //site default groups
    $("#site-default-groups").click(function () {
        var url = "index.php?action=manage.config.defaultGroups&lang=" + getLanguage();
        zalyjsCommonOpenPage(url);
    });

    //site RSAPublicKeyPem
    $("#site-rsa-pubk-pem").click(function () {
        var url = "index.php?action=manage.config.pubk&lang=" + getLanguage();
        zalyjsCommonOpenPage(url);
    });

    //site owner
    $("#site-owner").click(function () {
        var userId = $(this).attr("siteOwner");
        var url = "index.php?action=manage.user.profile&lang=" + getLanguage() + "&userId=" + userId;
        zalyjsCommonOpenPage(url);
    });


    $("#push-notice-type").click(function () {
        var language = getLanguage();

        /**
         * 0:禁止推送
         * 1:只推送通知
         * 2:推送文本
         */
        $.actions({
            title: "",
            onClose: function () {
                console.log("close");
            },
            actions: [{
                text: language == 0 ? "Show Content" : "显示文本内容",
                className: "select-color-primary",
                onClick: function () {
                    $("#push-notice-type-text").html(language == 0 ? "Show Content" : "显示文本内容");
                    $("#push-notice-type").attr("data", "2");
                    updatePushNoticeType(2);
                }
            }, {
                text: language == 0 ? "Hide Content" : "不显示文本内容",
                className: "select-color-primary",
                onClick: function () {
                    $("#push-notice-type-text").html(language == 0 ? "Hide Content" : "不显示文本内容");
                    $("#push-notice-type").attr("data", "1");
                    updatePushNoticeType(1);
                }
            }, {
                text: language == 0 ? "Push Disable" : "禁止推送通知",
                className: "select-color-primary",
                onClick: function () {
                    $("#push-notice-type-text").html(language == 0 ? "Push Disable" : "禁止推送通知");
                    $("#push-notice-type").attr("data", "0");

                    updatePushNoticeType(0);
                }
            }]
        });
    });

    //update push notice type
    function updatePushNoticeType(pushTypeValue) {
        var url = "index.php?action=manage.config.update";

        var data = {
            'key': 'pushType',
            'value': pushTypeValue,
        };

        zalyjsCommonAjaxPostJson(url, data, updatePushTypeResponse);
    }


    function updatePushTypeResponse(url, data, result) {
        if (result) {

            var res = JSON.parse(result);

            if (!"success" == res.errCode) {
                alert(getLanguage() == 1 ? "操作失败" : "update error");
            }

        } else {
            alert(getLanguage() == 1 ? "操作失败" : "update error");
        }
    }

</script>


</body>
</html>




