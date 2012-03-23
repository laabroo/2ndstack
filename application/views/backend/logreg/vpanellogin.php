<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap-responsive.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/cssAdmin/panellogin/style.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>resource/js/jquery.js"></script>

    </head>

    <body>
        <div class="wrap">

            <div class="panel-login">
                <?php echo form_open(base_url().'index.php/backend/cpanellogin/validasi'); ?>
                    <table>
                        <h1>2ndstack<i class="icon-fire icon-white"></i></h1>
                        <tr>
                            <td><?php echo form_label('Username','username'); ?></td>
                            <td>
                                &nbsp;&nbsp;
                                <?php
                                $data=array(
                                    'name'=>'username',
                                    'data-original-title'=> form_error('username'),
                                    'class'=>'tooltp',
                                    'rel'=>'tooltip'
                                );
                                echo form_input($data); ?>
                            </td>

                        </tr>
                        <tr>
                            <td><?php echo form_label('Password','password'); ?></td>
                            <td>
                                &nbsp;&nbsp;
                                <?php
                                $data=array(
                                    'name'=>'password',
                                    'data-original-title'=> form_error('password'),
                                    'class'=>'tooltp',
                                    'rel'=>'tooltip'
                                );
                                echo form_password($data);
                                ?>
                            </td>

                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <?php
                                $data = array(
                                    'value'=>'enter',
                                    'class'=>'btn-primary btn'
                                );
                                echo form_submit($data);
                                ?>
                            </td>
                        </tr>
                    </table>
                <?php echo form_close(); ?>
            </div>
        </div>

        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resource/jsAdmin/jstyle.js"></script>

    </body>
</html>