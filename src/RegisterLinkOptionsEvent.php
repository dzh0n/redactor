<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\redactor;

use yii\base\Event;

/**
 * RegisterLinkOptionsEvent class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class RegisterLinkOptionsEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var array The registered link options
     */
    public $linkOptions = [];
}
