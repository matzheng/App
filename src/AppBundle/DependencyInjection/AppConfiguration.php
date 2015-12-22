<?php

namespace AppBundle\DependencyInjection;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class AppConfiguration implements ConfigurationInterface
{

	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder();
		$rootNode = $treeBuilder->root('wechat');
		
		$rootNode
				->children()
					->scalarNode('appid')->end()
					->scalarNode('appsecret')->end()
					->scalarNode('token')->end()
					->scalarNode('mchid')->end()
					->scalarNode('key')->end()
				->end()
		;
		return $treeBuilder;
	}
}