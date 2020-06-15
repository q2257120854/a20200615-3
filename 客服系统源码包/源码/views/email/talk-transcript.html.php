<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $app->trans('talk.transcript.mail.title') ?></title>

        <style type="text/css">
            /* Reset Styles */
			body{margin:0; padding:0; font-family: Arial, sans-serif;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table td{border-collapse:collapse;}
        </style>
    </head>

    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<center>
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                <tr>
                    <td align="left" valign="top" style="line-height: 2em;"><b><?php echo $app->trans('talk.transcript.info') ?></b></td>
                </tr>
            	<tr>
                	<td align="left" valign="top" style="line-height: 2em;">
                        <b><?php echo $app->trans('talk.transcript.time') ?>:</b> <?php echo $vars['dateStart'] ?> — <?php echo $vars['dateEnd'] ?>
                    </td>
                </tr>
            	<tr>
                	<td align="left" valign="top" style="line-height: 2em;">
                        <b><?php echo $app->trans('participants') ?>:</b><br>
                        <?php foreach($vars['users'] as &$u) { ?>
                            - <?php echo $u->getReadableName() ?> (<?php echo $u->mail ?>)
                            <br>
                        <?php } ?>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
