<?php
/**
 * @noinspection PhpUndefinedFunctionInspection
 * @noinspection PhpUnused
 */

declare(strict_types=1);


namespace LMS_Service\AvCpUtils\Models;



/**
 * Class Users
 *
 * @package LMS_Service\AvCpUtils
 */
class Users
{
  /**
   * Get all active directors
   * @return mixed
   */
  public static function getAllActiveDirectors()
  {
    $sqlQuery = 'select * from av_user_fields uf
                 inner join users u on uf.name = u.name
                 where u.status<>0 and uf.positiondescription like \'Директор %\'
                 order by u.name desc;';

    return \db_query($sqlQuery)->fetchAll();
  }
}
