<? php

/**
 * __PocketMine Plugin__
 * version=0.0.1
 * author=tkabeee
 * apiversion=10
*/

class ExamplePlugin implements Plugin
{
  private $api;

  public function __construct(ServerAPI $api, $server = false)
  {
    $this->api = $api;
  }

  public function init()
  {
  }

  public function __destruct()
  {
  }
}