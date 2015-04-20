<div id="tab_vcsv_pane"<?php if ($selected_tab != 'vcsv'): ?> style="display: none;"<?php endif; ?>>
<h3><?php echo __('Editing VCS View connectivity settings');?></h3>
    <?php if ($access_level != \thebuggenie\core\framework\Settings::ACCESS_FULL): ?>
        <div class="rounded_box red" style="margin-top: 10px;">
            <?php echo __('You do not have the relevant permissions to access VCS View settings'); ?>
        </div>
    <?php else: ?>
        <form accept-charset="<?php echo \thebuggenie\core\framework\Context::getI18n()->getCharset(); ?>" action="<?php echo make_url('configure_vcsv_settings', array('project_id' => $project->getID())); ?>" method="post" onsubmit="TBG.Main.Helpers.formSubmit('<?php echo make_url('configure_vcsv_settings', array('project_id' => $project->getID())); ?>', 'vcs'); return false;" id="vcs">
            <input type="hidden" name="project_id" value="<?php echo $project->getID(); ?>">
            <table style="clear: both; width: 780px;" class="padded_table" cellpadding=0 cellspacing=0>
                <tr>
                    <td style="width: 200px;"><label for="vcs_mode"><?php echo __('Enable VCS View?'); ?></label></td>
                    <td style="width: 580px;">
                        <select name="vcsv_mode" id="vcsv_mode" style="width: 100%">
                            <option value="0"<?php if (\thebuggenie\core\framework\Settings::get('vcsv_mode_'.$project->getID(), 'vcs_view') == 0): ?> selected="selected"<?php endif;?>><?php echo __('Disable for this project');?></option>
                            <option value="1"<?php if (\thebuggenie\core\framework\Settings::get('vcsv_mode_'.$project->getID(), 'vcs_view') == 1): ?> selected="selected"<?php endif;?>><?php echo __('Enable for this project');?></option>
                        </select>
                    </td>
                </tr>
            </table>
            <table style="clear: both; width: 780px;" class="padded_table" cellpadding=0 cellspacing=0>
                <tr>
                    <td colspan="2" style="padding: 10px 0 10px 10px; text-align: right;">
                        <div style="float: left; font-size: 13px; padding-top: 2px; font-style: italic;" class="config_explanation"><?php echo __('When you are done, click "%save" to save your changes on all tabs', array('%save' => __('Save'))); ?></div>
                        <div id="vcs_button" style="float: right; font-size: 14px; font-weight: bold;">
                            <input type="submit" class="button button-green" value="<?php echo __('Save'); ?>">
                        </div>
                        <span id="vcs_indicator" style="display: none; float: right;"><?php echo image_tag('spinning_20.gif'); ?></span>
                    </td>
                </tr>
            </table>
        </form>
    <?php endif; ?>
</div>
