<?php

    namespace thebuggenie\modules\vcs_view;

    use thebuggenie\core\framework,
        thebuggenie\modules\vcs_integration\entities\File,
        thebuggenie\modules\vcs_integration\entities\tables\Files,
        thebuggenie\modules\vcs_integration\entities\IssueLink,
        thebuggenie\modules\vcs_integration\entities\tables\IssueLinks,
        thebuggenie\modules\vcs_integration\entities\Commit,
        thebuggenie\modules\vcs_integration\entities\tables\Commits;

/**
     * Module class, vcs_view
     *
     * @author Asaf Ohayon <asaf@hadasa-oss.net>
     * @version 1.0a
     * @license http://opensource.org/licenses/MPL-2.0 Mozilla Public License 2.0 (MPL 2.0)
     * @package thebuggenie
     * @subpackage vcs_view
     */

    /**
     * Module class, vcs_view
     *
     * @package thebuggenie
     * @subpackage vcs_view
     *
     * @Table(name="\thebuggenie\core\entities\tables\Modules")
     */
    class Vcs_view extends \thebuggenie\core\entities\Module
    {

        const VERSION = '1.0a';

        const MODE_DISABLED = 0;

        protected $_longname = 'VCS View';
        protected $_description = 'View vcs repositories (git only currently)';
        protected $_module_config_title = 'VCS View';
        protected $_module_config_description = 'Configure repository settings for source code view';
        protected $_has_config_settings = false;

        /**
         * Return an instance of this module
         *
         * @return Vcs_view_sample
         */
        public static function getModule()
        {
            return framework\Context::getModule('vcs_view');
        }
        
        protected function _initialize()
        {

        }

        protected function _install($scope)
        {

        }

        protected function _loadFixtures($scope)
        {
        }

        protected function _addListeners()
        {
            framework\Event::listen('core', 'project_sidebar_links', array($this, 'listen_project_links'));
            framework\Event::listen('core', 'breadcrumb_project_links', array($this, 'listen_breadcrumb_links'));
            framework\Event::listen('core', 'config_project_panes', array($this, 'listen_projectconfig_panel'));
            framework\Event::listen('core', 'project_header_buttons', array($this, 'listen_projectheader'));
            framework\Event::listen('core', '_notification_view', array($this, 'listen_notificationview'));
            framework\Event::listen('core', '\thebuggenie\core\entities\Notification::getTarget', array($this, 'listen_thebuggenie_core_entities_Notification_getTarget'));
        }

        protected function _uninstall()
        {
            if (framework\Context::getScope()->getID() == 1)
            {
                Commits::getTable()->drop();
                Files::getTable()->drop();
                IssueLinks::getTable()->drop();
            }
            parent::_uninstall();
        }

        public function hasProjectAwareRoute()
        {
            return false;
        }

        public function listen_sidebar_links(framework\Event $event)
        {
            if (framework\Context::isProjectContext())
            {
                include_component('vcs_view/menustriplinks', array('project' => framework\Context::getCurrentProject(), 'module' => $this, 'submenu' => $event->getParameter('submenu')));
            }
        }

        public function listen_breadcrumb_links(framework\Event $event)
        {
            /*            $event->addToReturnList(array('url' => framework\Context::getRouting()->generate('vcs_commitspage', array('project_key' => framework\Context::getCurrentProject()->getKey())), 'title' => framework\Context::getI18n()->__('Commits')));
             */
        } 

        public function listen_project_links(framework\Event $event)
        {

        }

        public function listen_projectheader(framework\Event $event)
        {

        }

        public function listen_projectconfig_tab(framework\Event $event)
        {
            include_component('vcs_view/projectconfig_tab', array('selected_tab' => $event->getParameter('selected_tab')));
        }

        public function listen_projectconfig_panel(framework\Event $event)
        {
            include_component('vcs_view/projectconfig_panel', array('selected_tab' => $event->getParameter('selected_tab'), 'access_level' => $event->getParameter('access_level'), 'project' => $event->getParameter('project')));
        }

        public function listen_notificationview(framework\Event $event)
        {
            /*            if ($event->getSubject()->getModuleName() != 'vcs_integration')
                return;

            include_component('vcs_view/notification_view', array('notification' => $event->getSubject()));
            $event->setProcessed();*/
        }

        public function listen_thebuggenie_core_entities_Notification_getTarget(framework\Event $event)
        {
            /*            if ($event->getSubject()->getModuleName() != 'vcs_view')
                return;

            $commit = Commits::getTable()->selectById($event->getSubject()->getTargetID());
            $event->setReturnValue($commit);
            $event->setProcessed();
            */
        }

    }
