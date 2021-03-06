<?php
/**
 * This file is part of Skel system
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */
namespace Skel\Event\User\View;

use Skel\Bootstrap;

/**
 * User view after event
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
final class After
{
    /**
     * @var string
     */
    const NAME = 'user.view.after';

    /**
     * @var Bootstrap
     */
    private $app;

    /**
     * Constructor
     *
     * @param Bootstrap $app
     */
    public function __construct(Bootstrap $app)
    {
        $this->app = $app;
    }

    /**
     * Execute listener
     *
     * @return void
     */
    public function dispatch()
    {
        // :)
    }
}
