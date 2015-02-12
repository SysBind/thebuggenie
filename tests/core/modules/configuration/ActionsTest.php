<?php

    namespace thebuggenie\core\modules\configuration;

    if (!class_exists('\\b2db\\Core')) require THEBUGGENIE_CORE_PATH . 'tests/b2dbmock.php';
    if (!class_exists('\\thebuggenie\\core\\framework\\Parameterholder')) require THEBUGGENIE_CORE_PATH . 'framework/Parameterholder.php';
    if (!class_exists('\\thebuggenie\\core\\framework\\Action')) require THEBUGGENIE_CORE_PATH . 'framework/Action.php';
    if (!class_exists('\\thebuggenie\\core\\framework\\Context')) require THEBUGGENIE_CORE_PATH . 'framework/Context.php';
    if (!class_exists('\\thebuggenie\\core\\framework\\Event')) require THEBUGGENIE_CORE_PATH . 'framework/Event.php';
    if (!class_exists('\\thebuggenie\\core\\framework\\Settings')) require THEBUGGENIE_CORE_PATH . 'framework/Settings.php';
    if (!class_exists('\\thebuggenie\\core\\framework\\Logging')) require THEBUGGENIE_CORE_PATH . 'framework/Logging.php';
    if (!class_exists('\\thebuggenie\\core\\framework\\Request')) require THEBUGGENIE_CORE_PATH . 'framework/Request.php';
    if (!class_exists('\\thebuggenie\\core\\entities\\common\\Identifiable')) require THEBUGGENIE_CORE_PATH . 'entities/common/Identifiable.php';
    if (!class_exists('\\thebuggenie\\core\\entities\\common\\IdentifiableEventContainer')) require THEBUGGENIE_CORE_PATH . 'entities/common/IdentifiableEventContainer.php';
    if (!class_exists('\\thebuggenie\\core\\entities\\User')) require THEBUGGENIE_CORE_PATH . 'entities/User.php';
    if (!class_exists('\\thebuggenie\\core\\entities\\tables\\ScopedTable')) require THEBUGGENIE_CORE_PATH . 'entities/tables/ScopedTable.php';
    if (!class_exists('\\thebuggenie\\core\\entities\\tables\\UserScopes')) require THEBUGGENIE_CORE_PATH . 'entities/tables/UserScopes.php';
    if (!class_exists('\\thebuggenie\\core\\modules\\configuration\\Actions')) require THEBUGGENIE_INTERNAL_MODULES_PATH . '/configuration/Actions.php';

    /**
     * Generated by PHPUnit_SkeletonGenerator on 2015-01-30 at 07:34:14.
     */
    class ActionsTest extends \PHPUnit_Framework_TestCase
    {

        /**
         * @var Actions
         */
        protected $object;

        protected $response;

        protected $i18n;

        /**
         * Sets up the fixture, for example, opens a network connection.
         * This method is called before a test is executed.
         */
        protected function setUp()
        {
            $this->response = $this->getMockBuilder('\\thebuggenie\\core\\framework\\Response')
                             ->setMethods(array('setHttpStatus', 'setContentType', 'setDecoration', 'renderText', 'renderComponent', 'setTemplate'))
                             ->getMock();

            $this->i18n = $this->getMockBuilder('\\thebuggenie\\core\\framework\\I18n')
                             ->disableOriginalConstructor()
                             ->setMethods(array('__', 'getCharset'))
                             ->getMock();

            $this->i18n->method('__')->will($this->returnArgument(0));
            $this->i18n->method('getCharset')->will($this->returnValue('utf-8'));

            $this->object = $this->getMockBuilder('\\thebuggenie\\core\\modules\\configuration\\Actions')
                                 ->setMethods(array('getResponse', 'getI18n', 'renderJSON'))
                                 ->getMock();

            $this->object->method('getResponse')->willReturn($this->response);
            $this->object->method('renderJSON')->willReturn($this->returnArgument(0));
            $this->object->method('getI18n')->willReturn($this->i18n);
        }

        /**
         * Tears down the fixture, for example, closes a network connection.
         * This method is called after a test is executed.
         */
        protected function tearDown()
        {
            \b2db\Core::resetMocks();
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::getAuthenticationMethodForAction
         * @todo   Implement testGetAuthenticationMethodForAction().
         */
        public function testGetAuthenticationMethodForAction()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::preExecute
         * @todo   Implement testPreExecute().
         */
        public function testPreExecute()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runIndex
         * @todo   Implement testRunIndex().
         */
        public function testRunIndex()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runCheckUpdates
         * @todo   Implement testRunCheckUpdates().
         */
        public function testRunCheckUpdates()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runImport
         * @todo   Implement testRunImport().
         */
        public function testRunImport()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runSettings
         * @todo   Implement testRunSettings().
         */
        public function testRunSettings()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureProjects
         * @todo   Implement testRunConfigureProjects().
         */
        public function testRunConfigureProjects()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureIssuefields
         * @todo   Implement testRunConfigureIssuefields().
         */
        public function testRunConfigureIssuefields()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureIssuetypes
         * @todo   Implement testRunConfigureIssuetypes().
         */
        public function testRunConfigureIssuetypes()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureIssuetypesGetOptionsForScheme
         * @todo   Implement testRunConfigureIssuetypesGetOptionsForScheme().
         */
        public function testRunConfigureIssuetypesGetOptionsForScheme()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureIssuetypesAction
         * @todo   Implement testRunConfigureIssuetypesAction().
         */
        public function testRunConfigureIssuetypesAction()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureIssuefieldsGetOptions
         * @todo   Implement testRunConfigureIssuefieldsGetOptions().
         */
        public function testRunConfigureIssuefieldsGetOptions()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureIssuefieldsAction
         * @todo   Implement testRunConfigureIssuefieldsAction().
         */
        public function testRunConfigureIssuefieldsAction()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureIssuefieldsCustomTypeAction
         * @todo   Implement testRunConfigureIssuefieldsCustomTypeAction().
         */
        public function testRunConfigureIssuefieldsCustomTypeAction()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureModules
         * @todo   Implement testRunConfigureModules().
         */
        public function testRunConfigureModules()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runAddProject
         * @todo   Implement testRunAddProject().
         */
        public function testRunAddProject()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runGetUserEditForm
         * @todo   Implement testRunGetUserEditForm().
         */
        public function testRunGetUserEditForm()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runDeleteProject
         * @todo   Implement testRunDeleteProject().
         */
        public function testRunDeleteProject()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runArchiveProject
         * @todo   Implement testRunArchiveProject().
         */
        public function testRunArchiveProject()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runUnarchiveProject
         * @todo   Implement testRunUnarchiveProject().
         */
        public function testRunUnarchiveProject()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runModuleAction
         * @todo   Implement testRunModuleAction().
         */
        public function testRunModuleAction()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runGetPermissionsInfo
         * @todo   Implement testRunGetPermissionsInfo().
         */
        public function testRunGetPermissionsInfo()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runSetPermission
         * @todo   Implement testRunSetPermission().
         */
        public function testRunSetPermission()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureModule
         * @todo   Implement testRunConfigureModule().
         */
        public function testRunConfigureModule()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigurePermissions
         * @todo   Implement testRunConfigurePermissions().
         */
        public function testRunConfigurePermissions()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureUploads
         * @todo   Implement testRunConfigureUploads().
         */
        public function testRunConfigureUploads()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureAuthentication
         * @todo   Implement testRunConfigureAuthentication().
         */
        public function testRunConfigureAuthentication()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runSaveAuthentication
         * @todo   Implement testRunSaveAuthentication().
         */
        public function testRunSaveAuthentication()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureUsers
         * @todo   Implement testRunConfigureUsers().
         */
        public function testRunConfigureUsers()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runDeleteGroup
         * @todo   Implement testRunDeleteGroup().
         */
        public function testRunDeleteGroup()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runAddGroup
         * @todo   Implement testRunAddGroup().
         */
        public function testRunAddGroup()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runGetGroupMembers
         * @todo   Implement testRunGetGroupMembers().
         */
        public function testRunGetGroupMembers()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runDeleteUser
         * @todo   Implement testRunDeleteUser().
         */
        public function testRunDeleteUser()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runDeleteTeam
         * @todo   Implement testRunDeleteTeam().
         */
        public function testRunDeleteTeam()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runAddTeam
         * @todo   Implement testRunAddTeam().
         */
        public function testRunAddTeam()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runGetTeamMembers
         * @todo   Implement testRunGetTeamMembers().
         */
        public function testRunGetTeamMembers()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runRemoveTeamMember
         * @todo   Implement testRunRemoveTeamMember().
         */
        public function testRunRemoveTeamMember()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runAddTeamMember
         * @todo   Implement testRunAddTeamMember().
         */
        public function testRunAddTeamMember()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runFindUsers
         * @todo   Implement testRunFindUsers().
         */
        public function testRunFindUsers()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runAddUser
         */
        public function testRunAddUserWithNoMoreUsersInScopeThrowsException()
        {
            $scope = $this->getMockBuilder('\\thebuggenie\\core\\entities\\Scope')
                          ->setMethods(array('hasUsersAvailable'))
                          ->getMock();
            $scope->method('hasUsersAvailable')->willReturn(false);

            \thebuggenie\core\framework\Context::setScope($scope);

            $request = new \thebuggenie\core\framework\Request();
            $this->object->expects($this->once())
                           ->method('renderJSON')
                           ->with($this->equalTo(array('error' => 'This instance of The Bug Genie cannot add more users')));

            $this->object->runAddUser($request);
        }

        public function addUserRequestProvider()
        {
            return array(
                array('john', 'the john', 'john@example.com', '1234', 1),
                array('jane', 'the jane', 'jane@example.com', '', 1),
                array('Sean Connery', 'thshe shean', 'sean.connery@example.com', 's-words-400', 2),
            );
        }

        /**
         * Makes sure adding a user happens without errors
         * 
         * @link http://issues.thebuggenie.com/thebuggenie/issues/2494
         *
         * @covers thebuggenie\core\modules\configuration\Actions::runAddUser
         * @dataProvider addUserRequestProvider
         */
        public function testRunAddUser($username, $buddyname, $email, $password, $group_id)
        {
            \b2db\Core::resetMocks();
            $scope = $this->getMockBuilder('thebuggenie\core\entities\Scope')
                          ->setMethods(array('hasUsersAvailable'))
                          ->getMock();
            $scope->method('hasUsersAvailable')->willReturn(true);

            \thebuggenie\core\framework\Context::setScope($scope);

            $request = new \thebuggenie\core\framework\Request();
            $request->setParameter('username', $username);
            $request->setParameter('buddyname', $buddyname);
            $request->setParameter('email', $email);
            $request->setParameter('password', $password);
            $request->setParameter('password_repeat', $password);
            $request->setParameter('group_id', $group_id);

            $usertablestub = $this->getMockBuilder('b2db\Table')
                         ->setMethods(array('isUsernameAvailable'))
                         ->getMock();
            $userscopestablestub = $this->getMockBuilder('b2db\Table')
                         ->getMock();

            \b2db\Core::setTableMock('thebuggenie\core\entities\tables\UserScopes', $userscopestablestub);
            \b2db\Core::setTableMock('thebuggenie\core\entities\User', $usertablestub);
            \b2db\Core::setTableMock('thebuggenie\core\entities\tables\Users', $usertablestub);

            $usertablestub->method('isUsernameAvailable')->will($this->returnValue(true));

            // Expect action to verify that username is available
            $usertablestub->expects($this->once())->method('isUsernameAvailable')->with($username);
            $userscopestablestub->expects($this->once())->method('countUsers');

            $this->object->runAddUser($request);
            $userobject = \b2db\Core::getTable('thebuggenie\core\entities\tables\Users')->getLastMockObject();

            // Expect action to set correct user properties
            $this->assertEquals($userobject->getUsername(), $username);
            $this->assertEquals($userobject->getBuddyname(), $buddyname);
            $this->assertEquals($userobject->getRealname(), $username);
            $this->assertEquals($userobject->getEmail(), $email);
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runUpdateUser
         * @todo   Implement testRunUpdateUser().
         */
        public function testRunUpdateUser()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runUpdateUserScopes
         * @todo   Implement testRunUpdateUserScopes().
         */
        public function testRunUpdateUserScopes()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runGetPermissionsConfigurator
         * @todo   Implement testRunGetPermissionsConfigurator().
         */
        public function testRunGetPermissionsConfigurator()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureWorkflowSchemes
         * @todo   Implement testRunConfigureWorkflowSchemes().
         */
        public function testRunConfigureWorkflowSchemes()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureWorkflows
         * @todo   Implement testRunConfigureWorkflows().
         */
        public function testRunConfigureWorkflows()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureWorkflowScheme
         * @todo   Implement testRunConfigureWorkflowScheme().
         */
        public function testRunConfigureWorkflowScheme()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureWorkflowSteps
         * @todo   Implement testRunConfigureWorkflowSteps().
         */
        public function testRunConfigureWorkflowSteps()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureWorkflowStep
         * @todo   Implement testRunConfigureWorkflowStep().
         */
        public function testRunConfigureWorkflowStep()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureWorkflowTransition
         * @todo   Implement testRunConfigureWorkflowTransition().
         */
        public function testRunConfigureWorkflowTransition()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::getAccessLevel
         * @todo   Implement testGetAccessLevel().
         */
        public function testGetAccessLevel()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runAddClient
         * @todo   Implement testRunAddClient().
         */
        public function testRunAddClient()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runDeleteClient
         * @todo   Implement testRunDeleteClient().
         */
        public function testRunDeleteClient()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runGetClientMembers
         * @todo   Implement testRunGetClientMembers().
         */
        public function testRunGetClientMembers()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runRemoveClientMember
         * @todo   Implement testRunRemoveClientMember().
         */
        public function testRunRemoveClientMember()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runAddClientMember
         * @todo   Implement testRunAddClientMember().
         */
        public function testRunAddClientMember()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runEditClient
         * @todo   Implement testRunEditClient().
         */
        public function testRunEditClient()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runImportCSV
         * @todo   Implement testRunImportCSV().
         */
        public function testRunImportCSV()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runGetIDsForImportCSV
         * @todo   Implement testRunGetIDsForImportCSV().
         */
        public function testRunGetIDsForImportCSV()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runDoImportCSV
         * @todo   Implement testRunDoImportCSV().
         */
        public function testRunDoImportCSV()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runScopes
         * @todo   Implement testRunScopes().
         */
        public function testRunScopes()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runScope
         * @todo   Implement testRunScope().
         */
        public function testRunScope()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureRole
         * @todo   Implement testRunConfigureRole().
         */
        public function testRunConfigureRole()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runConfigureRoles
         * @todo   Implement testRunConfigureRoles().
         */
        public function testRunConfigureRoles()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

        /**
         * @covers thebuggenie\core\modules\configuration\Actions::runSiteIcons
         * @todo   Implement testRunSiteIcons().
         */
        public function testRunSiteIcons()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                    'This test has not been implemented yet.'
            );
        }

    }