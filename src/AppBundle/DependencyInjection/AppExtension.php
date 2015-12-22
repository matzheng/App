<?php

namespace AppBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class AppExtension extends Extension 
{
	 /**
     * {@inheritDoc}
     */
	public function load(array $configs, ContainerBuilder $container)
	{
		$configuration = new AppConfiguration();
		$processedconfig = $this->processConfiguration($configuration, $configs);
		
		//$container->setParameter('wechat.appid', $processedconfig['appid']);
		//$container->setParameter('wechat.appsecret', $processedconfig['appsecret']);
		//$container->setParameter('wechat.token', $processedconfig['token']);
		//$container->setParameter('wechat.mchid', $processedconfig['mchid']);
		//$container->setParameter('wechat.key', $processedconfig['key']);
		$loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
		$loader->load('config.yml');
	}	
	/*
	public function getAlias()
	{
		return 'wechat';		
	}
	*/
}