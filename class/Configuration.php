<?php
/**
 * Created by PhpStorm.
 * User: smarketly
 * Date: 19.01.18
 * Time: 12:57
 */

namespace Lib;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Yaml\Yaml;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {

        $configDirectories = array(__DIR__.'/../config');

        $locator = new FileLocator($configDirectories);
        $yamlDefault = $locator->locate('default.yaml', null, false);

        $config = Yaml::parse(file_get_contents($yamlDefault[0]));
       ;
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->
        var_dump($yamlDefault, $config);

//        return $treeBuilder;
    }
}