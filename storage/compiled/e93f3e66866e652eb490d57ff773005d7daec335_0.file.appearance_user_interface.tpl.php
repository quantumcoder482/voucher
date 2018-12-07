<?php
/* Smarty version 3.1.33, created on 2018-11-13 17:24:19
  from '/Users/razib/Documents/valet/suite/ui/theme/default/appearance_user_interface.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beb4f13467620_94870965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e93f3e66866e652eb490d57ff773005d7daec335' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/ui/theme/default/appearance_user_interface.tpl',
      1 => 1534770550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beb4f13467620_94870965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5754251025beb4f13455e20_07922139', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2345349295beb4f13465008_79185536', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_5754251025beb4f13455e20_07922139 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5754251025beb4f13455e20_07922139',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins" id="ui_settings">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['User Interface'];?>
</h5>


                </div>
                <div class="ibox-content">
                    <table class="table table-hover">
                        <tbody>

                        <tr>
                            <td width="80%"><label for="config_show_country_flag"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Show Country Flag'];?>
 </label></td>
                            <td><input type="checkbox" <?php if (get_option('show_country_flag') == '1') {?>checked<?php }?> data-toggle="toggle"
                                       data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_show_country_flag">
                            </td>
                        </tr>

                                                                                                                                                                           
                        <tr>
                            <td width="80%"><label for="config_rtl"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable RTL'];?>
 </label></td>
                            <td><input type="checkbox" <?php if (get_option('rtl') == '1') {?>checked<?php }?> data-toggle="toggle"
                                       data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_rtl"></td>
                        </tr>


                        <tr>
                            <td width="80%"><label for="config_mininav"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fold Sidebar Default'];?>
 </label></td>
                            <td><input type="checkbox" <?php if (get_option('mininav') == '1') {?>checked<?php }?> data-toggle="toggle"
                                       data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_mininav">
                            </td>
                        </tr>

                        <tr>
                            <td width="80%"><label for="config_hide_footer"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hide Footer Copyright'];?>
 </label></td>
                            <td><input type="checkbox" <?php if (get_option('hide_footer') == '1') {?>checked<?php }?>
                                       data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
"
                                       id="config_hide_footer"></td>
                        </tr>

                        <tr>
                            <td width="80%"><label for="config_show_sidebar_header">Show sidebar header </label></td>
                            <td><input type="checkbox" <?php if (get_option('show_sidebar_header') == '1') {?>checked<?php }?>
                                       data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
"
                                       id="config_show_sidebar_header"></td>
                        </tr>


                        </tbody>
                    </table>

                    <hr>

                    <div class="form-group">
                        <label for="contentAnimation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Content Animation'];?>
</label>
                        <select name="contentAnimation" id="contentAnimation" class="form-control">

                            <option value="" <?php if ($_smarty_tpl->tpl_vars['config']->value['contentAnimation'] == '') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>

                            <?php echo $_smarty_tpl->tpl_vars['ca_options']->value;?>


                        </select>
                    </div>


                    <div class="form-group">
                        <label for="contact_set_view_mode"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers View Mode'];?>
</label>
                        <select name="contact_set_view_mode" id="contact_set_view_mode" class="form-control">

                            <option value="tbl" <?php if ($_smarty_tpl->tpl_vars['config']->value['contact_set_view_mode'] == 'tbl') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Table'];?>
</option>
                            <option value="card" <?php if ($_smarty_tpl->tpl_vars['config']->value['contact_set_view_mode'] == 'card') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Card'];?>
</option>
                            <option value="search" <?php if ($_smarty_tpl->tpl_vars['config']->value['contact_set_view_mode'] == 'search') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</option>



                        </select>
                    </div>


                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_2345349295beb4f13465008_79185536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2345349295beb4f13465008_79185536',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {



            var _url = $("#_url").val();




            $('#config_show_country_flag').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "show_country_flag", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "show_country_flag", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });



            $('#config_rtl').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "rtl", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "rtl", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });

            $('#config_mininav').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "mininav", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "mininav", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });

            $('#config_hide_footer').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "hide_footer", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "hide_footer", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });

            $('#config_show_sidebar_header').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "show_sidebar_header", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "show_sidebar_header", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });



            var $contentAnimation = $("#contentAnimation");


            $contentAnimation.change(function() {

                $('#ui_settings').block({ message: null });

                $.post( _url+'settings/update_option/', { opt: "contentAnimation", val: $contentAnimation.val() })
                    .done(function( data ) {
                        $('#ui_settings').unblock();
                        location.reload();
                    });


            });

            var $contact_set_view_mode = $("#contact_set_view_mode");

            $contact_set_view_mode.change(function() {

                window.location = base_url + 'contacts/set_view_mode/' + $contact_set_view_mode.val() + '/';


            });



        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
