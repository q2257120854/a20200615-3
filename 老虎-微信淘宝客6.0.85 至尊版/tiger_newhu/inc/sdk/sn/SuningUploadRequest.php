<?php
/**
 * 苏宁开放平台接口 - 上传业务类
 *
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class SuningUploadRequest
{
    /**
     * 获取图片的二进制流并base64
     *
     * $param  string $filaName 表单名称(input type=file的name值)
     * $return string
     */
    public static function getPicStreamByBase64($fileName)
    {
        // 检查图片扩展名
        $ext = strtolower(str_replace('image/', '', $_FILES[$fileName]['type']));
        RequestCheckUtil::checkPicExt($ext);

        $ctx = stream_context_create(
            array(
                'http' => array(
                    'timeout' => 2, // 设置超时
                )
            )
        );
        $file = file_get_contents($_FILES[$fileName]['tmp_name'], false, $ctx);
        return base64_encode($file);
    }
}
?>