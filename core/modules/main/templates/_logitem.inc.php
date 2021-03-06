<?php

    use thebuggenie\core\entities\LogItem,
        thebuggenie\core\entities\Commit,
        thebuggenie\core\entities\Issue;

    /** @var LogItem $item */

?>
<?php if ($item->getTargetType() == LogItem::TYPE_COMMIT && $item->getCommit() instanceof Commit): ?>
    <tr>
        <td class="imgtd"<?php if (!isset($include_issue_title) || $include_issue_title): ?> style="padding-top: <?php echo (isset($extra_padding) && $extra_padding) ? 10 : 3; ?>px;"<?php endif; ?>>
            <?php if (!isset($include_issue_title) || $include_issue_title): ?>
                <?php echo fa_image_tag('code-branch'); ?>
            <?php endif; ?>
        </td>
        <td style="clear: both;<?php if (!isset($include_issue_title) || $include_issue_title): ?> padding-bottom: <?php echo (isset($extra_padding) && $extra_padding) ? 15 : 10; ?>px;<?php endif; ?>">
            <?php if ((!isset($include_issue_title) || $include_issue_title) && (isset($include_time) && $include_time == true)): ?><span class="time"><?php echo tbg_formatTime($item->getTime(), 19); ?></span>&nbsp;<?php endif; ?>
            <?php if (!isset($include_issue_title) || $include_issue_title): ?>
                <?php echo link_tag(make_url('livelink_project_commit', ['commit_hash' => $item->getCommit()->getRevision(), 'project_key' => $item->getProject()->getKey()]), $title, ['style' => 'margin-top: 7px;'], $item->getCommit()->getTitle()); ?>
            <?php endif; ?>
            <?php if ((!isset($include_issue_title) || $include_issue_title) && (isset($include_user) && $include_user == true)): ?>
                <br>
                <?php include_component('main/logitemuser', ['item' => $item]); ?>
            <?php elseif (!isset($include_issue_title) || $include_issue_title): ?>
                <br>
            <?php endif; ?>
        </td>
    </tr>
<?php elseif ($item->getTargetType() == LogItem::TYPE_ISSUE && $item->getIssue() instanceof Issue): ?>
    <?php if ($item->getIssue()->hasAccess() && !($item->getIssue()->isDeleted())): ?>
    <tr>
        <td class="imgtd"<?php if (!isset($include_issue_title) || $include_issue_title): ?> style="padding-top: <?php echo (isset($extra_padding) && $extra_padding) ? 10 : 3; ?>px;"<?php endif; ?>>
            <?php if (!isset($include_issue_title) || $include_issue_title): ?>
                <?php echo fa_image_tag($item->getIssue()->getIssueType()->getFontAwesomeIcon(), ['class' => 'issuetype-icon issuetype-' . $item->getIssue()->getIssueType()->getIcon(), 'title' => $item->getIssue()->getIssueType()->getName()]); ?>
            <?php endif; ?>
        </td>
        <td style="clear: both;<?php if (!isset($include_issue_title) || $include_issue_title): ?> padding-bottom: <?php echo (isset($extra_padding) && $extra_padding) ? 15 : 10; ?>px;<?php endif; ?>">
            <?php if ((!isset($include_issue_title) || $include_issue_title) && (isset($include_time) && $include_time == true)): ?><span class="time"><?php echo tbg_formatTime($item->getTime(), 19); ?></span>&nbsp;<?php endif; ?>
            <?php if (!isset($include_issue_title) || $include_issue_title): ?>
                <?php if (isset($include_project) && $include_project == true): ?><span class="faded_out smaller"><?php echo image_tag($item->getIssue()->getProject()->getSmallIconName(), array('class' => 'issuelog-project-logo'), $item->getIssue()->getProject()->hasSmallIcon()); ?></span><?php endif; ?>
            <?php endif; ?>
            <?php 

                $title = tbg_decodeUTF8($item->getIssue()->getFormattedTitle(true));
                if (isset($pad_length))
                {
                    $title = tbg_truncateText($title, $pad_length);
                }
                
            ?>
            <?php if (!isset($include_issue_title) || $include_issue_title): ?>
                <?php echo link_tag(make_url('viewissue', array('project_key' => $item->getIssue()->getProject()->getKey(), 'issue_no' => $item->getIssue()->getFormattedIssueNo())), $title, array('class' => (($item->getChangeType() == LogItem::ACTION_ISSUE_CLOSE) ? 'issue_closed' : 'issue_open'), 'style' => 'margin-top: 7px;')); ?>
            <?php endif; ?>
            <?php if ((!isset($include_issue_title) || $include_issue_title) && (isset($include_user) && $include_user == true)): ?>
                <br>
                <?php include_component('main/logitemuser', ['item' => $item]); ?>
            <?php elseif (!isset($include_issue_title) || $include_issue_title): ?>
                <br>
            <?php endif; ?>
            <div class="log-item <?php if (!isset($include_issue_title) || $include_issue_title == false) echo 'without-title'; ?>">
                <?php include_component('main/logitemtext', ['item' => $item]); ?>
            </div>
        </td>
    </tr>
    <?php endif; ?>
<?php else: ?>
    <tr>
        <td class="imgtd"<?php if (!isset($include_issue_title) || $include_issue_title): ?> style="padding-top: <?php echo (isset($extra_padding) && $extra_padding) ? 10 : 3; ?>px;"<?php endif; ?>>
            <?php if (!isset($include_issue_title) || $include_issue_title): ?>
                <?php echo fa_image_tag('question', ['class' => 'issuetype-icon issuetype-unknown', 'title' => __('Unknown log item type')]); ?>
            <?php endif; ?>
        </td>
        <td style="clear: both;<?php if (!isset($include_issue_title) || $include_issue_title): ?> padding-bottom: <?php echo (isset($extra_padding) && $extra_padding) ? 15 : 10; ?>px;<?php endif; ?>">
            <?php if ((!isset($include_issue_title) || $include_issue_title) && (isset($include_time) && $include_time == true)): ?><span class="time"><?php echo tbg_formatTime($item->getTime(), 19); ?></span>&nbsp;<?php endif; ?>
            <?php if (!isset($include_issue_title) || $include_issue_title): ?>
                <?php if (isset($include_project) && $include_project == true): ?><span class="faded_out smaller"><?php echo image_tag($item->getProject()->getSmallIconName(), array('class' => 'issuelog-project-logo'), $item->getProject()->hasSmallIcon()); ?></span><?php endif; ?>
            <?php endif; ?>
            <?php
                $title = "[".__('Unknown log item type')."]";
            ?>
            <?php if (!isset($include_issue_title) || $include_issue_title): ?>
                <span style="margin-top: 7px;">
                    <?php echo $title; ?>
                </span>
            <?php endif; ?>
            <?php if ((!isset($include_issue_title) || $include_issue_title) && (isset($include_user) && $include_user == true)): ?>
                <br>
                <?php include_component('main/logitemuser', ['item' => $item]); ?>
            <?php elseif (!isset($include_issue_title) || $include_issue_title): ?>
                <br>
            <?php endif; ?>
            <div class="log-item <?php if (!isset($include_issue_title) || $include_issue_title == false) echo 'without-title'; ?>">
                <?php include_component('main/logitemtext', ['item' => $item]); ?>
            </div>
        </td>
    </tr>
<?php endif; ?>
