<?php

use PHPUnit\Framework\TestCase;

class Autologon_Plugin extends TestCase
{
    /**
     * Plugin object construction test
     */
    public function test_constructor()
    {
        $rcube = rcube::get_instance();
        $plugin = new autologon($rcube->plugins);

        $this->assertInstanceOf('autologon', $plugin);
        $this->assertInstanceOf('rcube_plugin', $plugin);

        // TODO
        $plugin->startup([]);
        $plugin->authenticate([]);
    }
}