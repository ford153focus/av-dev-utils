<?php
/**
 * @noinspection PhpUndefinedFunctionInspection
 * @noinspection PhpUnused
 */

declare(strict_types=1);


namespace LMS_Service\AvCpUtils\Models;


/**
 * Class User
 *
 * @package LMS_Service\AvCpUtils\Models
 */
class User
{
  /**
   * Is current user is territorial manager of restaurant service?
   *
   * @param  null|int  $userId
   *
   * @return bool
   */
  public static function isTMRS(?int $userId = null): bool
  {
    if ($userId === null) {
      global $user;
      $userId = $user->id;
    }
      $positionName = trim(_works_get_dep_and_position_by_userid($userId)->position_name);
    return $positionName === 'Территориальный менеджер ресторанной службы';
  }
}
