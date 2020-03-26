<?php

namespace Acquia\BltPhpcs\Composer;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Installer\PackageEvents;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Initializes phpcs.xml.dist on install.
 *
 * @package Acquia\BltPhpcs\Composer
 */
class BltPhpcsPlugin implements PluginInterface, EventSubscriberInterface {

  /**
   * {@inheritDoc}
   */
  public function activate(Composer $composer, IOInterface $io) {
    // TODO: Implement activate() method.
  }

  /**
   * {@inheritDoc}
   */
  public static function getSubscribedEvents() {
    return [
      PackageEvents::POST_PACKAGE_INSTALL => 'initPhpcsXml',
    ];
  }

  /**
   * Initialize phpcs.xml.dist in project root.
   */
  public function initPhpcsXml() {
    $phpcsXmlFilename = 'phpcs.xml.dist';
    if (!file_exists($phpcsXmlFilename)) {
      copy('vendor/acquia/blt-phpcs/template/' . $phpcsXmlFilename, $phpcsXmlFilename);
    }
  }

}
