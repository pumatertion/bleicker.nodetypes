<?php

use Bleicker\ObjectManager\ObjectManager;
use Bleicker\Persistence\EntityManager;
use Bleicker\Persistence\EntityManagerInterface;
use Bleicker\Registry\Registry;
use Doctrine\ORM\Tools\Setup;

Registry::set('doctrine.schema.paths.nodes', __DIR__ . "/../../../vendor/bleicker/nodes/src/Schema/Persistence");
Registry::set('doctrine.schema.paths.nodetypes', __DIR__ . "/../../../src/Schema/Persistence");

ObjectManager::add(EntityManagerInterface::class, function () {
	return EntityManager::create(
		Registry::get('DbConnection'),
		Setup::createYAMLMetadataConfiguration(Registry::get('doctrine.schema.paths'), TRUE)
	);
});
