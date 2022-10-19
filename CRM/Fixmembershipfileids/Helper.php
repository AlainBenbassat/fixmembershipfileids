<?php

class CRM_Fixmembershipfileids_Helper {
  public static function fixAll() {
    $counter = 0;

    $daoCustomTables = self::getDaoCustomTablesLinkedToMemberships();
    while ($daoCustomTables->fetch()) {
      $daoEntityFile = self::getDaoEntityFileWithWrongIDs($daoCustomTables->table_name);
      while ($daoEntityFile->fetch()) {
        self::correctId($daoEntityFile);
        $counter++;
      }
    }

    return $counter;
  }

  private static function getDaoCustomTablesLinkedToMemberships() {
    $sql = "
      select
        table_name
      from
        civicrm_custom_group
      where
        extends = 'Membership'
    ";

    $dao = CRM_Core_DAO::executeQuery($sql);

    return $dao;
  }

  private static function getDaoEntityFileWithWrongIDs($entityTable) {
    $sql = "
      select
        ef.id,
        ef.entity_id wrong_entity_id,
        m.owner_membership_id correct_entity_id
      from
        civicrm_entity_file ef
      inner join
        civicrm_membership m on ef.entity_id = m.id and ef.entity_table = '$entityTable'
      where
        m.owner_membership_id is not null
    ";

    $dao = CRM_Core_DAO::executeQuery($sql);

    return $dao;
  }

  private static function correctId($daoEntityFile) {
    $sql = "
      update
        civicrm_entity_file
      set
        entity_id = %1
      where
        id = %2
    ";
    $sqlParams = [
      1 => [$daoEntityFile->correct_entity_id, 'Integer'],
      2 => [$daoEntityFile->id, 'Integer'],
    ];

    CRM_Core_DAO::executeQuery($sql, $sqlParams);
  }
}
