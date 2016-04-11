<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "expressions".
 *
 * Auto generated 11-04-2016 18:02
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Generic expression parser',
  'description' => 'A library for bringing into extensions something like the TypoScript getText function.',
  'category' => 'misc',
  'author' => 'Francois Suter (Cobweb)',
  'author_email' => 'typo3@cobweb.ch',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'author_company' => '',
  'version' => '2.0.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.0.0-7.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:29:{s:9:"ChangeLog";s:4:"10bf";s:10:"README.txt";s:4:"9be0";s:13:"composer.json";s:4:"4213";s:12:"ext_icon.png";s:4:"cdfa";s:28:"Classes/ExpressionParser.php";s:4:"b901";s:33:"Classes/KeyProcessorInterface.php";s:4:"7970";s:39:"Classes/ValuePostProcessorInterface.php";s:4:"c049";s:31:"Classes/Exception/Exception.php";s:4:"9d9b";s:36:"Classes/Sample/FunctionProcessor.php";s:4:"8401";s:42:"Classes/ViewHelpers/EvaluateViewHelper.php";s:4:"be8b";s:26:"Documentation/Includes.txt";s:4:"c83c";s:23:"Documentation/Index.rst";s:4:"dbf1";s:26:"Documentation/Settings.yml";s:4:"4bf7";s:33:"Documentation/Developer/Index.rst";s:4:"dbdc";s:37:"Documentation/Developer/Api/Index.rst";s:4:"2b57";s:44:"Documentation/Developer/Exceptions/Index.rst";s:4:"c6b4";s:39:"Documentation/Developer/Hooks/Index.rst";s:4:"61f7";s:46:"Documentation/Developer/NewFunctions/Index.rst";s:4:"4929";s:41:"Documentation/Developer/NewKeys/Index.rst";s:4:"7f4e";s:42:"Documentation/Developer/Security/Index.rst";s:4:"f277";s:43:"Documentation/Developer/Variables/Index.rst";s:4:"30f5";s:44:"Documentation/Developer/ViewHelper/Index.rst";s:4:"5965";s:36:"Documentation/Installation/Index.rst";s:4:"dd3c";s:36:"Documentation/Introduction/Index.rst";s:4:"67bc";s:37:"Documentation/KnownProblems/Index.rst";s:4:"056c";s:28:"Documentation/User/Index.rst";s:4:"73fc";s:43:"Documentation/User/ExpressionKeys/Index.rst";s:4:"74eb";s:45:"Documentation/User/ExpressionSyntax/Index.rst";s:4:"4ff9";s:41:"Documentation/User/FunctionKeys/Index.rst";s:4:"15d8";}',
  'comment' => 'Updated for TYPO3 CMS 7 LTS, moved to namespaces',
  'user' => 'francois',
);

