<?php

namespace Aidotech\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AidotechUserBundle extends Bundle {

  public function getParent() {
    return 'FOSUserBundle';
  }

}
