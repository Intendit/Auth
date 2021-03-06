<?php

namespace Bolt\Extension\Bolt\Members\Form\Builder;

use Bolt\Extension\Bolt\Members\Form\Entity;
use Bolt\Extension\Bolt\Members\Form\Type;

/**
 * Login form.
 *
 * Copyright (C) 2014-2016 Gawain Lynch
 * Copyright (C) 2017 Svante Richter
 *
 * @author    Gawain Lynch <gawain.lynch@gmail.com>
 * @copyright Copyright (c) 2014-2016, Gawain Lynch
 *            Copyright (C) 2017 Svante Richter
 * @license   https://opensource.org/licenses/MIT MIT
 */
class LoginPassword extends AbstractFormBuilder
{
    /** @var Type\LoginPasswordType */
    protected $type;
    /** @var Entity\Profile */
    protected $entity;
}
