<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "slub_events".
 *
 * Auto generated 21-06-2013 13:54
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'SLUB: Event Registration',
	'description' => 'Tool for event registration and experts booking.

This extension is developped and used in production at the Saxony State and University Library (SLUB) Dresden, Germany.',
	'category' => 'plugin',
	'author' => 'Alexander Bigga',
	'author_email' => 'alexander.bigga@slub-dresden.de',
	'author_company' => 'SLUB Dresden',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.9',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.5',
			'fluid' => '1.5',
			'typo3' => '4.7-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:206:{s:12:"ext_icon.gif";s:4:"97e3";s:17:"ext_localconf.php";s:4:"901d";s:14:"ext_tables.php";s:4:"25c4";s:14:"ext_tables.sql";s:4:"b479";s:21:"ExtensionBuilder.json";s:4:"0d8e";s:10:"Readme.rst";s:4:"f13b";s:48:"Classes/Command/CheckeventsCommandController.php";s:4:"8f45";s:41:"Classes/Controller/AbstractController.php";s:4:"1b63";s:41:"Classes/Controller/CategoryController.php";s:4:"1d76";s:40:"Classes/Controller/ContactController.php";s:4:"6228";s:38:"Classes/Controller/EventController.php";s:4:"9d10";s:41:"Classes/Controller/LocationController.php";s:4:"21cb";s:43:"Classes/Controller/SubscriberController.php";s:4:"a1c1";s:33:"Classes/Domain/Model/Category.php";s:4:"7cb7";s:32:"Classes/Domain/Model/Contact.php";s:4:"550a";s:35:"Classes/Domain/Model/Discipline.php";s:4:"77a8";s:30:"Classes/Domain/Model/Event.php";s:4:"b0b2";s:33:"Classes/Domain/Model/Location.php";s:4:"d682";s:35:"Classes/Domain/Model/Subscriber.php";s:4:"85e1";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"4c36";s:47:"Classes/Domain/Repository/ContactRepository.php";s:4:"9a66";s:45:"Classes/Domain/Repository/EventRepository.php";s:4:"c36a";s:48:"Classes/Domain/Repository/LocationRepository.php";s:4:"e9ff";s:50:"Classes/Domain/Repository/SubscriberRepository.php";s:4:"8cd2";s:62:"Classes/Domain/Validator/EventSubscriptionAllowedValidator.php";s:4:"51bc";s:48:"Classes/Domain/Validator/SubscriberValidator.php";s:4:"f10b";s:36:"Classes/Slots/HookPostProcessing.php";s:4:"bcb4";s:35:"Classes/Slots/HookPreProcessing.php";s:4:"c339";s:32:"Classes/Slots/PowermailSlots.php";s:4:"8a7f";s:26:"Classes/Slots/Tceforms.php";s:4:"19fc";s:30:"Classes/Slots/TceformsEval.php";s:4:"433d";s:38:"Classes/Slots/ValidationController.php";s:4:"17a5";s:35:"Classes/Utility/Ajax/Dispatcher.php";s:4:"00b4";s:45:"Classes/ViewHelpers/IncludeFileViewHelper.php";s:4:"8813";s:45:"Classes/ViewHelpers/Be/CheckboxViewHelper.php";s:4:"8231";s:46:"Classes/ViewHelpers/Be/ContainerViewHelper.php";s:4:"baf4";s:48:"Classes/ViewHelpers/Be/FunctionBarViewHelper.php";s:4:"b57d";s:46:"Classes/ViewHelpers/Be/TableListViewHelper.php";s:4:"043e";s:60:"Classes/ViewHelpers/Condition/HasSubcategoriesViewHelper.php";s:4:"74d5";s:65:"Classes/ViewHelpers/Condition/IsSubscriptionAllowedViewHelper.php";s:4:"1164";s:53:"Classes/ViewHelpers/Condition/IsWeekendViewHelper.php";s:4:"7fec";s:45:"Classes/ViewHelpers/Format/DateViewHelper.php";s:4:"292a";s:49:"Classes/ViewHelpers/Format/EditCodeViewHelper.php";s:4:"6c64";s:57:"Classes/ViewHelpers/Format/EventsOfCategoryViewHelper.php";s:4:"c89d";s:55:"Classes/ViewHelpers/Format/FreePlacesLeftViewHelper.php";s:4:"d3ea";s:54:"Classes/ViewHelpers/Format/NewMonthTitleViewHelper.php";s:4:"9589";s:48:"Classes/ViewHelpers/Format/OneLineViewHelper.php";s:4:"e3ef";s:50:"Classes/ViewHelpers/Format/StripTagsViewHelper.php";s:4:"0249";s:48:"Classes/ViewHelpers/Link/Is3dModelViewHelper.php";s:4:"eb7d";s:46:"Classes/ViewHelpers/Link/IslocalViewHelper.php";s:4:"3196";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"011c";s:51:"Configuration/FlexForms/flexform_eventgeniusbar.xml";s:4:"263d";s:46:"Configuration/FlexForms/flexform_eventlist.xml";s:4:"aa96";s:51:"Configuration/FlexForms/flexform_eventsubscribe.xml";s:4:"4e19";s:51:"Configuration/FlexForms/flexform_eventuserpanel.xml";s:4:"8093";s:30:"Configuration/TCA/Category.php";s:4:"ee18";s:29:"Configuration/TCA/Contact.php";s:4:"5c1d";s:32:"Configuration/TCA/Discipline.php";s:4:"bab1";s:27:"Configuration/TCA/Event.php";s:4:"5d3b";s:30:"Configuration/TCA/Location.php";s:4:"9a3e";s:32:"Configuration/TCA/Subscriber.php";s:4:"c5ec";s:38:"Configuration/TypoScript/constants.txt";s:4:"4020";s:34:"Configuration/TypoScript/setup.txt";s:4:"6cd2";s:37:"Documentation/_IncludedDirectives.rst";s:4:"53e5";s:37:"Documentation/AdministratorManual.rst";s:4:"2562";s:33:"Documentation/DeveloperCorner.rst";s:4:"e805";s:23:"Documentation/Index.rst";s:4:"c57a";s:36:"Documentation/ProjectInformation.rst";s:4:"152a";s:38:"Documentation/RestructuredtextHelp.rst";s:4:"c86e";s:37:"Documentation/TyposcriptReference.rst";s:4:"5829";s:28:"Documentation/UserManual.rst";s:4:"3308";s:44:"Documentation/Images/IntroductionPackage.png";s:4:"cdeb";s:30:"Documentation/Images/Typo3.png";s:4:"4fac";s:61:"Documentation/Images/AdministratorManual/ExtensionManager.png";s:4:"14fc";s:47:"Documentation/Images/UserManual/BackendView.png";s:4:"ba6c";s:32:"Documentation/_De/UserManual.rst";s:4:"82b7";s:51:"Documentation/_De/Images/UserManual/BackendView.png";s:4:"ba6c";s:32:"Documentation/_Fr/UserManual.rst";s:4:"56b8";s:51:"Documentation/_Fr/Images/UserManual/BackendView.png";s:4:"ba6c";s:46:"Resources/Private/Backend/Layouts/Default.html";s:4:"7815";s:50:"Resources/Private/Backend/Partials/FormErrors.html";s:4:"f5bc";s:59:"Resources/Private/Backend/Partials/Category/Properties.html";s:4:"0d3b";s:58:"Resources/Private/Backend/Partials/Contact/Properties.html";s:4:"f704";s:56:"Resources/Private/Backend/Partials/Event/DateFromTo.html";s:4:"bda2";s:55:"Resources/Private/Backend/Partials/Event/DateFromTo.txt";s:4:"c6a9";s:56:"Resources/Private/Backend/Partials/Event/FormFields.html";s:4:"dff4";s:56:"Resources/Private/Backend/Partials/Event/Properties.html";s:4:"71e8";s:61:"Resources/Private/Backend/Partials/Subscriber/FormFields.html";s:4:"5db2";s:61:"Resources/Private/Backend/Partials/Subscriber/Properties.html";s:4:"dad3";s:54:"Resources/Private/Backend/Templates/Category/List.html";s:4:"e047";s:54:"Resources/Private/Backend/Templates/Category/Show.html";s:4:"a865";s:53:"Resources/Private/Backend/Templates/Contact/List.html";s:4:"a6b0";s:53:"Resources/Private/Backend/Templates/Contact/Show.html";s:4:"a9a5";s:59:"Resources/Private/Backend/Templates/Email/CancellEvent.html";s:4:"cb74";s:58:"Resources/Private/Backend/Templates/Email/CancellEvent.ics";s:4:"f989";s:62:"Resources/Private/Backend/Templates/Email/DeadlineReached.html";s:4:"6f60";s:61:"Resources/Private/Backend/Templates/Email/DeadlineReached.ics";s:4:"16d8";s:57:"Resources/Private/Backend/Templates/Email/Invitation.html";s:4:"8c20";s:56:"Resources/Private/Backend/Templates/Email/Invitation.ics";s:4:"16d8";s:53:"Resources/Private/Backend/Templates/Event/BeList.html";s:4:"c57c";s:51:"Resources/Private/Backend/Templates/Event/Edit.html";s:4:"14e0";s:51:"Resources/Private/Backend/Templates/Event/List.html";s:4:"a91e";s:50:"Resources/Private/Backend/Templates/Event/New.html";s:4:"c0f9";s:51:"Resources/Private/Backend/Templates/Event/Show.html";s:4:"7e5c";s:67:"Resources/Private/Backend/Templates/Subscriber/BeIcsInvitation.html";s:4:"ef3d";s:58:"Resources/Private/Backend/Templates/Subscriber/BeList.html";s:4:"1cf5";s:56:"Resources/Private/Backend/Templates/Subscriber/List.html";s:4:"43cc";s:55:"Resources/Private/Backend/Templates/Subscriber/New.html";s:4:"c608";s:56:"Resources/Private/Backend/Templates/Subscriber/Show.html";s:4:"b8ab";s:43:"Resources/Private/Language/de.locallang.xlf";s:4:"2893";s:85:"Resources/Private/Language/de.locallang_csh_tx_slubevents_domain_model_discipline.xlf";s:4:"0641";s:80:"Resources/Private/Language/de.locallang_csh_tx_slubevents_domain_model_event.xlf";s:4:"288d";s:83:"Resources/Private/Language/de.locallang_csh_tx_slubevents_domain_model_location.xlf";s:4:"13e2";s:85:"Resources/Private/Language/de.locallang_csh_tx_slubevents_domain_model_subscriber.xlf";s:4:"6ef8";s:46:"Resources/Private/Language/de.locallang_db.xlf";s:4:"69ba";s:54:"Resources/Private/Language/de.locallang_slubevents.xlf";s:4:"4dd9";s:40:"Resources/Private/Language/locallang.xlf";s:4:"9b41";s:40:"Resources/Private/Language/locallang.xml";s:4:"25af";s:80:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_category.xlf";s:4:"d762";s:80:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_category.xml";s:4:"611e";s:79:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_contact.xlf";s:4:"410d";s:82:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_discipline.xlf";s:4:"4468";s:77:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_event.xlf";s:4:"88f5";s:77:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_event.xml";s:4:"4668";s:80:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_location.xlf";s:4:"f61f";s:82:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_subscriber.xlf";s:4:"6204";s:82:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_subscriber.xml";s:4:"ad65";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"f6cf";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"b882";s:51:"Resources/Private/Language/locallang_slubevents.xlf";s:4:"d7a6";s:51:"Resources/Private/Language/locallang_slubevents.xml";s:4:"7c06";s:38:"Resources/Private/Layouts/Default.html";s:4:"e856";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"caa7";s:45:"Resources/Private/Partials/Category/Item.html";s:4:"186f";s:51:"Resources/Private/Partials/Category/Properties.html";s:4:"0d3b";s:50:"Resources/Private/Partials/Contact/Properties.html";s:4:"f704";s:48:"Resources/Private/Partials/Event/DateFromTo.html";s:4:"bda2";s:47:"Resources/Private/Partials/Event/DateFromTo.txt";s:4:"c6a9";s:48:"Resources/Private/Partials/Event/FormFields.html";s:4:"dff4";s:44:"Resources/Private/Partials/Event/GbItem.html";s:4:"4560";s:42:"Resources/Private/Partials/Event/Item.html";s:4:"af6c";s:48:"Resources/Private/Partials/Event/Properties.html";s:4:"71e8";s:53:"Resources/Private/Partials/Subscriber/FormFields.html";s:4:"644e";s:55:"Resources/Private/Partials/Subscriber/FormFieldsGb.html";s:4:"0ab8";s:53:"Resources/Private/Partials/Subscriber/Properties.html";s:4:"dad3";s:48:"Resources/Private/Templates/Category/GbList.html";s:4:"bfd1";s:46:"Resources/Private/Templates/Category/List.html";s:4:"679b";s:46:"Resources/Private/Templates/Category/Show.html";s:4:"2655";s:45:"Resources/Private/Templates/Contact/List.html";s:4:"9ed5";s:45:"Resources/Private/Templates/Contact/Show.html";s:4:"6dc6";s:53:"Resources/Private/Templates/Email/Maximumreached.html";s:4:"ee3c";s:52:"Resources/Private/Templates/Email/Maximumreached.ics";s:4:"2365";s:52:"Resources/Private/Templates/Email/Maximumreached.txt";s:4:"410a";s:48:"Resources/Private/Templates/Email/Subscribe.html";s:4:"cde5";s:47:"Resources/Private/Templates/Email/Subscribe.ics";s:4:"8379";s:47:"Resources/Private/Templates/Email/Subscribe.txt";s:4:"298b";s:50:"Resources/Private/Templates/Email/Unsubscribe.html";s:4:"959d";s:49:"Resources/Private/Templates/Email/Unsubscribe.ics";s:4:"f989";s:49:"Resources/Private/Templates/Email/Unsubscribe.txt";s:4:"bce9";s:43:"Resources/Private/Templates/Event/Edit.html";s:4:"b49a";s:43:"Resources/Private/Templates/Event/List.html";s:4:"8336";s:52:"Resources/Private/Templates/Event/ListMiniMonth.html";s:4:"d8ea";s:46:"Resources/Private/Templates/Event/ListOwn.html";s:4:"f93b";s:42:"Resources/Private/Templates/Event/New.html";s:4:"b6eb";s:43:"Resources/Private/Templates/Event/Show.html";s:4:"cffa";s:50:"Resources/Private/Templates/Subscriber/Create.html";s:4:"51cd";s:50:"Resources/Private/Templates/Subscriber/Delete.html";s:4:"ff77";s:48:"Resources/Private/Templates/Subscriber/List.html";s:4:"462a";s:47:"Resources/Private/Templates/Subscriber/New.html";s:4:"5b82";s:48:"Resources/Private/Templates/Subscriber/Show.html";s:4:"aae3";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"7ec4";s:43:"Resources/Public/Css/slub-event-backend.css";s:4:"5084";s:41:"Resources/Public/Css/slub-event-basic.css";s:4:"d866";s:38:"Resources/Public/Css/slub-event-gb.css";s:4:"72a5";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:62:"Resources/Public/Icons/tx_slubevents_domain_model_category.gif";s:4:"905a";s:61:"Resources/Public/Icons/tx_slubevents_domain_model_contact.gif";s:4:"905a";s:64:"Resources/Public/Icons/tx_slubevents_domain_model_discipline.gif";s:4:"4e5b";s:59:"Resources/Public/Icons/tx_slubevents_domain_model_event.gif";s:4:"905a";s:62:"Resources/Public/Icons/tx_slubevents_domain_model_location.gif";s:4:"905a";s:64:"Resources/Public/Icons/tx_slubevents_domain_model_subscriber.gif";s:4:"905a";s:43:"Resources/Public/Images/knowledgeBaseBG.png";s:4:"3de6";s:48:"Resources/Public/Images/knowledgeBaseBubbles.png";s:4:"97c4";s:30:"Resources/Public/Js/Neue Datei";s:4:"6ee5";s:41:"Resources/Public/Js/slub-event-backend.js";s:4:"f7a7";s:48:"Tests/Unit/Controller/CategoryControllerTest.php";s:4:"4895";s:47:"Tests/Unit/Controller/ContactControllerTest.php";s:4:"4739";s:45:"Tests/Unit/Controller/EventControllerTest.php";s:4:"8c98";s:48:"Tests/Unit/Controller/LocationControllerTest.php";s:4:"d829";s:50:"Tests/Unit/Controller/SubscriberControllerTest.php";s:4:"7516";s:40:"Tests/Unit/Domain/Model/CategoryTest.php";s:4:"6b46";s:39:"Tests/Unit/Domain/Model/ContactTest.php";s:4:"a80b";s:42:"Tests/Unit/Domain/Model/DisciplineTest.php";s:4:"2076";s:37:"Tests/Unit/Domain/Model/EventTest.php";s:4:"54fa";s:40:"Tests/Unit/Domain/Model/LocationTest.php";s:4:"fb97";s:42:"Tests/Unit/Domain/Model/SubscriberTest.php";s:4:"257f";s:14:"doc/manual.pdf";s:4:"f6a6";s:14:"doc/manual.sxw";s:4:"f5ab";s:62:"doc/images/slub-events-category-wissensbar-event-list-view.jpg";s:4:"0a44";s:51:"doc/images/slub-events-category-wissensbar-view.jpg";s:4:"7ec3";s:36:"doc/images/slub-events-list-view.jpg";s:4:"7699";s:44:"doc/images/slub-events-subscription-view.jpg";s:4:"ea8f";s:28:"nbproject/project.properties";s:4:"fd2d";s:21:"nbproject/project.xml";s:4:"32c3";s:36:"nbproject/private/private.properties";s:4:"634f";s:29:"nbproject/private/private.xml";s:4:"0b1a";}',
);

?>
