<?php

namespace KonstantinKuklin\Bundle\YandexMetrikaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('yandex_metrika', 'array');
        $rootNode
            ->children()
                ->scalarNode('id')->cannotBeEmpty()->end()
                ->booleanNode('webvisor')->defaultValue(false)->end()
                ->booleanNode('clickmap')->defaultValue(true)->end()
                ->booleanNode('trackLinks')->defaultValue(true)->end()
                ->booleanNode('accurateTrackBounce')->cannotBeEmpty()->defaultValue(true)->end()
                ->booleanNode('ut')->defaultValue(false)->end()
                ->booleanNode('trackHash')->defaultValue(false)->end()
            ->end();

        return $treeBuilder;
    }
}
