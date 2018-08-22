<?php

    if ($tbg_user->hasPageAccess('project_timeline', $project->getID()) || $tbg_user->hasPageAccess('project_allpages', $project->getID()))
    {
        $tbg_response->addFeed(make_url('project_timeline', array('project_key' => $project->getKey(), 'format' => 'rss')), __('"%project_name" project timeline', array('%project_name' => $project->getName())));
    }

?>
<div class="project_strip">
    <?php echo image_tag($project->getLargeIconName(), array('class' => 'icon-large', 'alt' => '[i]'), $project->hasLargeIcon()); ?><!--
    --><div class="project_information_block">
        <div class="project_information_container">
            <span class="project_name">
                <?php echo link_tag(make_url('project_dashboard', array('project_key' => $project->getKey())), '<span class="project_name_span">'.$project->getName()."</span>"); ?><?php if ($project->usePrefix()) echo '<span class="project_prefix_span">'.mb_strtoupper($project->getPrefix()).'</span>'; ?>
            </span>
            <div class="project_description">
                <?= tbg_parse_text($project->getDescription()); ?>
            </div>
            <div class="project_meta_information">
                <?php if ($project->hasHomepage()): ?>
                    <a href="<?php echo $project->getHomepage(); ?>" target="_blank"><?php echo __('Go to project website'); ?></a>
                <?php endif; ?>
                <?php if ($project->hasHomepage() && $project->hasDocumentationURL()): ?>
                    <span class="divider">&nbsp;</span>
                <?php endif; ?>
                <?php if ($project->hasDocumentationURL()): ?>
                    <a href="<?php echo $project->getDocumentationURL(); ?>" target="_blank"><?php echo __('Open documentation'); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div><!--
    --><nav class="button-group"><!--
        --><?php \thebuggenie\core\framework\Event::createNew('core', 'project_overview_item_links', $project)->trigger(); ?><!--
        --><?php if ($tbg_user->canSearchForIssues() && $tbg_user->hasPageAccess('project_issues', $project->getID())): ?><!--
            --><?php echo link_tag(make_url('project_open_issues', array('project_key' => $project->getKey())), fa_image_tag('file-text') . '<span>'.__('Issues').'</span>', array('class' => 'nav-button button-issues')); ?><!--
        --><?php endif; ?><?php if (!$project->isLocked() && $tbg_user->canReportIssues($project)): ?><!--
            --><?php echo javascript_link_tag(fa_image_tag('plus-square') . '<span>'.__('New issue').'</span>', array('onclick' => "TBG.Issues.Add('" . make_url('get_partial_for_backdrop', array('key' => 'reportissue', 'project_id' => $project->getId())) . "', this);", 'class' => 'nav-button button-report-issue')); ?><!--
        --><?php endif; ?>
    </nav>
    <?php if ($project->hasChildren()): ?>
    <div class="subprojects_list">
        <?php echo __('Subprojects'); ?>
        <?php foreach ($project->getChildren() as $child): ?>
            <span class="subproject_link"><?php echo link_tag(make_url('project_dashboard', array('project_key' => $child->getKey())), $child->getName()); ?></span>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($project->isIssuetypesVisibleInFrontpageSummary() && count($project->getVisibleIssuetypes())): ?>
        <table style="width: 100%; margin-top: 5px;" cellpadding=0 cellspacing=0>
        <?php foreach ($project->getVisibleIssuetypes() as $issuetype): ?>
            <tr>
                <td style="padding-bottom: 2px; width: 200px; padding-right: 10px;"><b><?php echo $issuetype->getName(); ?>:</b></td>
                <td style="padding-bottom: 2px; width: auto; position: relative;">
                    <div style="color: #222; position: absolute; right: 20px; text-align: right;"><?php echo __('%closed closed of %issues reported', array('%closed' => '<b>'.$project->countClosedIssuesByType($issuetype->getID()).'</b>', '%issues' => '<b>'.$project->countIssuesByType($issuetype->getID()).'</b>')); ?></div>
                    <?php include_component('main/percentbar', array('percent' => $project->getClosedPercentageByType($issuetype->getID()), 'height' => 20)); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
    <?php elseif ($project->isIssuelistVisibleInFrontpageSummary() && count($project->getVisibleIssuetypes())): ?>
        <div class="search_results" style="clear: both;">
            <?php $current_spent_time = -1; ?>
            <?php include_component(
                    'search/results_normal', 
                    array(
                        'search_object' => $project->getOpenIssuesSearchForFrontpageSummary(), 
                        'actionable'    => false,
                        'show_summary'  => false
                    )); ?>
        </div>
    <?php elseif ($project->isMilestonesVisibleInFrontpageSummary() && count($project->getVisibleMilestones())): ?>
        <table style="width: 100%; margin-top: 5px;" cellpadding=0 cellspacing=0>
        <?php foreach ($project->getVisibleMilestones() as $milestone): ?>
            <tr>
                <td style="padding-bottom: 2px; width: 200px; padding-right: 10px;"><b><?php echo $milestone->getName(); ?>:</b></td>
                <td style="padding-bottom: 2px; width: auto; position: relative;">
                    <div style="color: #222; position: absolute; right: 20px; text-align: right;"><?php echo __('%closed closed of %issues assigned', array('%closed' => '<b>'.$project->countClosedIssuesByMilestone($milestone->getID()).'</b>', '%issues' => '<b>'.$project->countIssuesByMilestone($milestone->getID()).'</b>')); ?></div>
                    <?php include_component('main/percentbar', array('percent' => $project->getClosedPercentageByMilestone($milestone->getID()), 'height' => 20)); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
