<?php

namespace API\Handler;

use API\Abstraction\AbstractAPI;

/**
 * Class Account
 *
 * @package   API\Handler
 * @author    EPIGNOSIS
 *
 */
class Account extends AbstractAPI
{
  /**
   * Returns whether a user exists or not by providing the login name and the password.
   *
   * @param   string $loginName (Required) | The login name of the user.
   * @param   string $password (Required) | The password of the user.
   *
   * @throws  \Exception
   *
   * @return  array (Associative)
   *
   */
  public function Exists($loginName, $password)
  {
    return $this->_requestHandler->Post (
      $this->_GetAPICallURL('/Account/Status'),
      $this->_apiKey,
      ['login' => $loginName, 'password' => $password]
    );
  }
}