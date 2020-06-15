<?php
/**
 * Created by PhpStorm.
 * User: childeYin<尹少爷>
 * Date: 19/07/2018
 * Time: 10:54 AM
 */

class ZalyAvatar
{
    private static $logger;
    public static $avatars = [];

    private static function writeAvatars()
    {
        $avatarFileName = dirname(__FILE__) . "/../../avatar.php";
        for ($i = 1; $i <= 74; $i++) {
            $defaultAva = dirname(__FILE__) . "/../../public/avatar/" . $i . "@3x.png";
            if (!file_exists($defaultAva)) {
                break;
            }

            $defaultAvatarData = file_get_contents($defaultAva);
            $fileManager = new File_Manager();
            $fileId = $fileManager->saveFile($defaultAvatarData, "20180101");
            self::$avatars[] = $fileId;
        }

        $allAvatars = [
            "emojiAvatar" => self::$avatars,
        ];

        $contents = var_export($allAvatars, true);
        file_put_contents($avatarFileName, "<?php\n return {$contents};\n ");
    }

    private static function getAvatars()
    {
        $fileName = dirname(__FILE__) . "/../../avatar.php";
        if (!file_exists($fileName)) {
            return;
        }
        $allAvatars = require($fileName);
        if (!empty($allAvatars)) {
            self::$avatars = $allAvatars['emojiAvatar'];
        }
    }

    private static function setLogger()
    {
        if (empty(self::$logger)) {
            self::$logger = new Wpf_Logger();
        }
    }

    public static function getRandomAvatar()
    {
        self::setLogger();

        $tag = __CLASS__ . "->" . __FUNCTION__;
        try {
            if (empty(self::$avatars)) {
                self::getAvatars();

                // 记载默认图片
                if (empty(self::$avatars)) {
                    //从文件中读取
                    self::writeAvatars();
                }
            }

            if (!empty(self::$avatars)) {
                $avatarNum = array_rand(self::$avatars, 1);
                return self::$avatars[$avatarNum];
            }
        } catch (Throwable $e) {
            self::$logger->error($tag, $e);
        }
        return '';
    }

}