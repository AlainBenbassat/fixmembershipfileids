<?php

require_once 'fixmembershipfileids.civix.php';
// phpcs:disable
use CRM_Fixmembershipfileids_ExtensionUtil as E;
// phpcs:enable

function fixmembershipfileids_civicrm_postCommit($op, $objectName, $objectId, &$objectRef) {
  if ($objectName == 'Membership') {
    CRM_Fixmembershipfileids_Helper::fixAll();
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function fixmembershipfileids_civicrm_config(&$config) {
  _fixmembershipfileids_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function fixmembershipfileids_civicrm_install(): void {
  _fixmembershipfileids_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function fixmembershipfileids_civicrm_postInstall(): void {
  _fixmembershipfileids_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function fixmembershipfileids_civicrm_uninstall(): void {
  _fixmembershipfileids_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function fixmembershipfileids_civicrm_enable(): void {
  _fixmembershipfileids_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function fixmembershipfileids_civicrm_disable(): void {
  _fixmembershipfileids_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function fixmembershipfileids_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _fixmembershipfileids_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function fixmembershipfileids_civicrm_entityTypes(&$entityTypes): void {
  _fixmembershipfileids_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function fixmembershipfileids_civicrm_preProcess($formName, &$form): void {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function fixmembershipfileids_civicrm_navigationMenu(&$menu): void {
//  _fixmembershipfileids_civix_insert_navigation_menu($menu, 'Mailings', [
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ]);
//  _fixmembershipfileids_civix_navigationMenu($menu);
//}
