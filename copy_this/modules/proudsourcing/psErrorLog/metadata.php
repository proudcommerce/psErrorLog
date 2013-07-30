<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'psErrorLog',
    'title'        => 'psErrorLog',
    'description'  => array(
        'de' => 'PHP Fehlermeldungen speichern und ansehen',
        'en' => 'Save and show php error messages.',
    ),
    'thumbnail'    => '',
    'version'      => '1.0.0',
    'author'       => 'Proud Sourcing GmbH',
    'url'          => 'http://www.proudcommerce.com',
    'email'        => 'support@proudcommerce.com',
    'extend'       => array(
    ),
    'files' => array(
        'pserrorlog_show'       => 'proudsourcing/psErrorLog/application/controllers/admin/pserrorlog_show.php',
    ),
   'templates' => array(
       'pserrorlog_show.tpl'    => 'proudsourcing/psErrorLog/application/views/admin/tpl/pserrorlog_show.tpl',
    ),
   'blocks' => array(
    ),
   'settings' => array(
    )
);