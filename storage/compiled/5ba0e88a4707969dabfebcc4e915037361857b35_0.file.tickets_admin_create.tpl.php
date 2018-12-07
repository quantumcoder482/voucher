<?php
/* Smarty version 3.1.33, created on 2018-11-12 04:38:41
  from '/Users/razib/Documents/valet/suite/apps/bpr/views/tickets_admin_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be94a218f1c66_06024015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ba0e88a4707969dabfebcc4e915037361857b35' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/apps/bpr/views/tickets_admin_create.tpl',
      1 => 1542015519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be94a218f1c66_06024015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6976321165be94a218e3811_28362580', "content");
?>




<?php }
/* {block "content"} */
class Block_6976321165be94a218e3811_28362580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6976321165be94a218e3811_28362580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">

        <div class="col-md-12">
            <div class="ibox float-e-margins" id="ib_box">
                <div class="ibox-title">


                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Open Ticket'];?>
</h5>


                </div>
                <div class="ibox-content">


                    <form id="create_ticket" method="post">

                        <div class="form-group">
                            <label for="cid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>

                            <select id="cid" name="cid" class="form-control">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 'cs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['p_cid']->value == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 <?php if ($_smarty_tpl->tpl_vars['cs']->value['email'] != '') {?>- <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];
}?></option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </select>
                        </div>



                        <div class="form-group">
                            <label for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                            <input class="form-control" type="text" id="subject" name="subject" autofocus>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="department"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Department'];?>
</label>
                                    <select class="form-control" id="department" name="department" size="1">

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deps']->value, 'dep');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dep']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dep']->value['dname'];?>
</option>
                                            <?php
}
} else {
?>
                                            <option value="0">None</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Model</label>
                                    <input class="form-control" type="text" id="custom1" name="c1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select class="form-control" id="urgency" name="urgency" size="1">
                                        <option value="High">High</option>
                                        <option value="Medium" selected>Medium</option>
                                        <option value="Low">Low</option>

                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="content"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Message'];?>
</label>
                            <textarea id="content"  class="form-control sysedit" name="content"></textarea>
                            <div class="help-block"><a data-toggle="modal" href="#modal_add_item"><i class="fa fa-paperclip"></i> Attach File</a> </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="attachments" id="attachments" value="">

                            <button class="btn btn-primary" id="ib_form_submit" type="submit"><i class="fa fa-send push-5-r"></i> Submit</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>

    </div>

    <div id="modal_add_item" class="modal fade" tabindex="-1" data-width="600" style="display: none;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Add File</h4>
        </div>
        <div class="modal-body">
            <div class="row">



                <div class="col-md-12">
                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fa fa-cloud-upload"></i>  Drop File Here</h3>
                            <br />
                            <span class="note">Or Click to Upload</span>
                        </div>

                    </form>


                </div>




            </div>
        </div>
        <div class="modal-footer">

            <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
