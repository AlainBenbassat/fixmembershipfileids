<?php
use CRM_Fixmembershipfileids_ExtensionUtil as E;

function _civicrm_api3_membership_Fixfileids_spec(&$spec) {
}

function civicrm_api3_membership_Fixfileids($params) {
  try {
    $numUpdated = CRM_Fixmembershipfileids_Helper::fixAll();

    return civicrm_api3_create_success("No. of corrections in table civicrm_entity_file: $numUpdated", $params, 'Membership', 'Fixfileids');
  }
  catch (Exception $e) {
    throw new API_Exception('Error while executing API3 Fixfileids: ' . $e->getMessage(), 999);
  }
}
