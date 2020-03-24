<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HTTP
{
  private $userAgent;

  /**
   * [__construct description]
   * @date  2020-03-24
   * @param [type]     $params [description]
   */
  public function __construct(?array $params=null)
  {
    if ($params) {
      $this->userAgent = $params['user_agent'] ?? 'CI-HTTP';
    }
  }
}
