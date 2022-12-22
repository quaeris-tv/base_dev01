<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1671726797,
	'meta' => array (
  'cacheVersion' => 'v10-collectedData',
  'phpstanVersion' => '1.9.4',
  'phpVersion' => 80106,
  'projectConfig' => '{parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], excludePaths: {analyseAndScan: [*.blade.php, D:\\var\\www\\_bases\\base_dev01\\laravel\\build\\*, D:\\var\\www\\_bases\\base_dev01\\laravel\\*\\build\\*, D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\*, D:\\var\\www\\_bases\\base_dev01\\laravel\\*\\vendor\\*, D:\\var\\www\\_bases\\base_dev01\\laravel\\docs\\*, D:\\var\\www\\_bases\\base_dev01\\laravel\\*\\docs\\*, D:\\var\\www\\_bases\\base_dev01\\laravel\\Tests\\*, D:\\var\\www\\_bases\\base_dev01\\laravel\\*\\Tests\\*, D:\\var\\www\\_bases\\base_dev01\\laravel\\_ide_helper.php, D:\\var\\www\\_bases\\base_dev01\\laravel\\*\\_ide_helper.php], analyse: []}, mixinExcludeClasses: [Eloquent], bootstrapFiles: [D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\bootstrap.php, D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Xot\\Services\\vendor\\autoload.php], checkOctaneCompatibility: false, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], checkModelProperties: false, checkPhpDocMissingReturn: false, level: 1, paths: [D:\\var\\www\\_bases\\base_dev01\\laravel], scanFiles: [D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Xot\\Helpers\\Helper.php], tmpDir: D:\\var\\www\\_bases\\base_dev01\\laravel\\build\\phpstan, reportUnmatchedIgnoredErrors: false, checkMissingIterableValueType: false, checkGenericClassInNonGenericObjectType: false}, conditionalTags: {NunoMaduro\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule: {phpstan.rules.rule: %checkModelProperties%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule: {phpstan.rules.rule: %checkModelProperties%}}, services: [{class: NunoMaduro\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Types\\RelationDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelRelationsDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Support\\CollectionHelper}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ViewExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionFilterDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: NunoMaduro\\Larastan\\Rules\\NoModelMakeRule}, {class: NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Types\\RelationParserHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%}}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertiesRuleHelper}, {class: NunoMaduro\\Larastan\\Rules\\ModelRuleHelper}, {class: NunoMaduro\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, NunoMaduro\\Larastan\\Properties\\Schema\\PhpMyAdminDataTypeToPhpTypeConverter, {class: NunoMaduro\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}], rules: [NunoMaduro\\Larastan\\Rules\\RelationExistenceRule, NunoMaduro\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, NunoMaduro\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, NunoMaduro\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule]}',
  'analysedPaths' => 
  array (
    0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart',
  ),
  'scannedFiles' => 
  array (
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Xot\\Helpers\\Helper.php' => '4241d73756e7d494187eca8683f6b594d4543538',
  ),
  'composerLocks' => 
  array (
    'D:\\var\\www\\_bases\\base_dev01\\laravel/composer.lock' => '365330c6070abbff946da50e6739e22421569fdb',
  ),
  'composerInstalled' => 
  array (
    'D:\\var\\www\\_bases\\base_dev01\\laravel/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'amenadiel/jpgraph' => 
        array (
          'pretty_version' => 'v4.1.1',
          'version' => '4.1.1.0',
          'reference' => 'e196d51a520a4182cc26240b4a0744495706f11a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../amenadiel/jpgraph',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'barryvdh/laravel-debugbar' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => '3372ed65e6d2039d663ed19aa699956f9d346271',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../barryvdh/laravel-debugbar',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'barryvdh/laravel-ide-helper' => 
        array (
          'pretty_version' => 'v2.12.3',
          'version' => '2.12.3.0',
          'reference' => '3ba1e2573b38f72107b8aacc4ee177fcab30a550',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../barryvdh/laravel-ide-helper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'barryvdh/reflection-docblock' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'bf44b757feb8ba1734659029357646466ded673e',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../barryvdh/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.10.2',
          'version' => '0.10.2.0',
          'reference' => '459f2781e1a08d52ee56b0b1444086e038561e3f',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'calebporzio/sushi' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'cec0768285971add48f3ccebfefad856be6f5078',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../calebporzio/sushi',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cknow/laravel-money' => 
        array (
          'pretty_version' => 'v7.0.2',
          'version' => '7.0.2.0',
          'reference' => '8c3ed1c29c6f394d8741abe377eebe20acec2298',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../cknow/laravel-money',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.1.0',
          'version' => '3.1.0.0',
          'reference' => '4bff79ddd77851fe3cdd11616ed3f92841ba5bd2',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'defuse/php-encryption' => 
        array (
          'pretty_version' => 'v2.3.1',
          'version' => '2.3.1.0',
          'reference' => '77880488b9954b7884c25555c2a0ea9e7053f9d2',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../defuse/php-encryption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/cache' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1ca8f21980e770095a31456042471a57bc4c68fb',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../doctrine/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/dbal' => 
        array (
          'pretty_version' => '3.5.2',
          'version' => '3.5.2.0',
          'reference' => '63e513cebbbaf96a6795e5c5ee34d205831bfc85',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../doctrine/dbal',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => 'v1.0.0',
          'version' => '1.0.0.0',
          'reference' => '0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/event-manager' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '750671534e0241a7c50ea5b43f67e23eb5c96f32',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../doctrine/event-manager',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.0.6',
          'version' => '2.0.6.0',
          'reference' => 'd9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/instantiator' => 
        array (
          'pretty_version' => '1.4.1',
          'version' => '1.4.1.0',
          'reference' => '10dcfce151b967d20fde1b34ae6640712c3891bc',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../doctrine/instantiator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => 'c268e882d4dbdd85e36e4ad69e02dc284f89d229',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.3.2',
          'version' => '3.3.2.0',
          'reference' => '782ca5968ab8b954773518e9e49a6f892a34b2a8',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => 'f88dcf4b14af14a98ad96b14b2b317969eab6715',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'facade/ignition-contracts' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../facade/ignition-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.21.0',
          'version' => '1.21.0.0',
          'reference' => '92efad6a967f0b79c499705c69b662f738cc9e4d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.14.6',
          'version' => '2.14.6.0',
          'reference' => 'f7948baaa0330277c729714910336383286305da',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'firebase/php-jwt' => 
        array (
          'pretty_version' => 'v6.3.2',
          'version' => '6.3.2.0',
          'reference' => 'ea7dda77098b96e666c5ef382452f94841e439cd',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../firebase/php-jwt',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '58571acbaa5f9f462c9c77e911700ac66f446d4e',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'genealabs/laravel-model-caching' => 
        array (
          'pretty_version' => '0.12.5',
          'version' => '0.12.5.0',
          'reference' => '3530b50db0849c74d6ab6ac1cf1f96b8ad08ba1a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../genealabs/laravel-model-caching',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'genealabs/laravel-pivot-events' => 
        array (
          'pretty_version' => '9.0.4',
          'version' => '9.0.4.0',
          'reference' => '3e076a8d266baf0833e7496ca4e5eb65d5df4b76',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../genealabs/laravel-pivot-events',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'reference' => 'a878d45c1914464426dc94da61c9e1d36ae262a8',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.5.0',
          'version' => '7.5.0.0',
          'reference' => 'b50a2a1251152e43f6a37f0fa053e730a67d25ba',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '1.5.2',
          'version' => '1.5.2.0',
          'reference' => 'b94b2807d85443f9719887892882d0329d1e2598',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.4.3',
          'version' => '2.4.3.0',
          'reference' => '67c26b443f348a51926030c83481b85718457d3d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v9.45.1',
          ),
        ),
        'intervention/image' => 
        array (
          'pretty_version' => '2.7.2',
          'version' => '2.7.2.0',
          'reference' => '04be355f8d6734c826045d02a1079ad658322dad',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../intervention/image',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'intervention/imagecache' => 
        array (
          'pretty_version' => '2.5.2',
          'version' => '2.5.2.0',
          'reference' => '270d1e72ddff2fc0a6d3c7e6cbc9d23c9ec1e3e4',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../intervention/imagecache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'kalnoy/nestedset' => 
        array (
          'pretty_version' => 'v6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'bcfbccea5e3ddf31cb22e1bc3c6124da584505fc',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../kalnoy/nestedset',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v9.45.1',
          'version' => '9.45.1.0',
          'reference' => 'faeb20d3fc61b69790068161ab42bcf2d5faccbc',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/passport' => 
        array (
          'pretty_version' => 'v11.3.1',
          'version' => '11.3.1.0',
          'reference' => '835febbfe875ba97306c026fdaa94f58f167363e',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../laravel/passport',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '6a2c0927b4f6ad4eadb5a67fe3835fdad108949d',
          'type' => 'project',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.16.6',
          'version' => '1.16.6.0',
          'reference' => '2e8be54590bde421eb04e461a1421302a5b22cca',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'b71e80a3a8e8029e2ec8c1aa814b999609ce16dc',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v1.2.2',
          'version' => '1.2.2.0',
          'reference' => '47afb7fae28ed29057fdca37e16a84f90cc62fae',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/socialite' => 
        array (
          'pretty_version' => 'v5.5.6',
          'version' => '5.5.6.0',
          'reference' => '1cd1682b709b8808a5b5dbb68179a58d1342aa7b',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../laravel/socialite',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.7.3',
          'version' => '2.7.3.0',
          'reference' => '5062061b4924af3392225dd482ca7b4d85d8b8ef',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/ui' => 
        array (
          'pretty_version' => 'v4.1.1',
          'version' => '4.1.1.0',
          'reference' => 'ac94e596ffd39c63cfa41f5407b765b07df97483',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../laravel/ui',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravelcollective/html' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '78c3cb516ac9e6d3d76cad9191f81d217302dea6',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../laravelcollective/html',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'lcobucci/clock' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => 'c7aadcd6fd97ed9e199114269c0be3f335e38876',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../lcobucci/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'lcobucci/jwt' => 
        array (
          'pretty_version' => '4.2.1',
          'version' => '4.2.1.0',
          'reference' => '72ac6d807ee51a70ad376ee03a2387e8646e10f3',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../lcobucci/jwt',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.3.8',
          'version' => '2.3.8.0',
          'reference' => 'c493585c130544c4e91d2e0e131e6d35cb0cbc47',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/event' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => 'd2cc124cf9a3fab2bb4ff963307f60361ce4d119',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../league/event',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.12.0',
          'version' => '3.12.0.0',
          'reference' => '2aef65a47e44f2d6f9938f720f6dd697e7ba7b76',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/glide' => 
        array (
          'pretty_version' => '2.2.2',
          'version' => '2.2.2.0',
          'reference' => 'bff5b0fe2fd26b2fde2d6958715fde313887d79d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../league/glide',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => 'ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/oauth1-client' => 
        array (
          'pretty_version' => 'v1.10.1',
          'version' => '1.10.1.0',
          'reference' => 'd6365b901b5c287dd41f143033315e2f777e1167',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../league/oauth1-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/oauth2-server' => 
        array (
          'pretty_version' => '8.3.6',
          'version' => '8.3.6.0',
          'reference' => '28c5441716c10d0c936bd731860dc385d0f6d1a8',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../league/oauth2-server',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/oauth2server' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'league/uri' => 
        array (
          'pretty_version' => '6.8.0',
          'version' => '6.8.0.0',
          'reference' => 'a700b4656e4c54371b799ac61e300ab25a2d1d39',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/livewire' => 
        array (
          'pretty_version' => 'v2.10.7',
          'version' => '2.10.7.0',
          'reference' => 'fa0441bf82f1674beecb3a8ad8a4ae428736ed18',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../livewire/livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'lncd/oauth2' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'maennchen/zipstream-php' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '3fa72e4c71a43f9e9118752a5c90e476a8dc9eb3',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../maennchen/zipstream-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'masterminds/html5' => 
        array (
          'pretty_version' => '2.7.6',
          'version' => '2.7.6.0',
          'reference' => '897eb517a343a2281f11bc5556d6548db7d93947',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../masterminds/html5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'maximebf/debugbar' => 
        array (
          'pretty_version' => 'v1.18.1',
          'version' => '1.18.1.0',
          'reference' => 'ba0af68dd4316834701ecb30a00ce9604ced3ee9',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../maximebf/debugbar',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'mcamara/laravel-localization' => 
        array (
          'pretty_version' => 'v1.7.0',
          'version' => '1.7.0.0',
          'reference' => '27565315c585e90d8d93aa06afd49d6a5992fe5a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../mcamara/laravel-localization',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.5.1',
          'version' => '1.5.1.0',
          'reference' => 'e92dcc83d5a51851baf5f5591d32cb2b16e3684e',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'moneyphp/money' => 
        array (
          'pretty_version' => 'v4.1.0',
          'version' => '4.1.0.0',
          'reference' => 'c8eeeb1f7b7e6ca95490b94a301dc9cb8cb76c2d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../moneyphp/money',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '720488632c590286b88b80e62aa3d3d551ad4a50',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'mustache/mustache' => 
        array (
          'pretty_version' => 'v2.14.2',
          'version' => '2.14.2.0',
          'reference' => 'e62b7c3849d22ec55f3ec425507bf7968193a6cb',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../mustache/mustache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '14daed4296fae74d9e3201d2c4925d1acb7aa614',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'myclabs/php-enum' => 
        array (
          'pretty_version' => '1.8.4',
          'version' => '1.8.4.0',
          'reference' => 'a867478eae49c9f59ece437ae7f9506bfaa27483',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../myclabs/php-enum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '2.64.0',
          'version' => '2.64.0.0',
          'reference' => '889546413c97de2d05063b8cb7b193c2531ea211',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.2.3',
          'version' => '1.2.3.0',
          'reference' => 'abbdbb70e0245d5f3bf77874cea1dfb0c930d06f',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v3.2.8',
          'version' => '3.2.8.0',
          'reference' => '02a54c4c872b99e4ec05c4aec54b5a06eb0f6368',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nicmart/tree' => 
        array (
          'pretty_version' => '0.3.1',
          'version' => '0.3.1.0',
          'reference' => 'c55ba47c64a3cb7454c22e6d630729fc2aab23ff',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../nicmart/tree',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v4.15.2',
          'version' => '4.15.2.0',
          'reference' => 'f59bbe44bf7d96f24f3e2b4ddc21cd52c1d2adbc',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v6.3.1',
          'version' => '6.3.1.0',
          'reference' => '0f6349c3ed5dd28467087b08fb59384bb458a22b',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/larastan' => 
        array (
          'pretty_version' => '2.2.9',
          'version' => '2.2.9.0',
          'reference' => '333e7915b984ce6606175749430081a372ead37e',
          'type' => 'phpstan-extension',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../nunomaduro/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v1.15.0',
          'version' => '1.15.0.0',
          'reference' => '594ab862396c16ead000de0c3c38f4a5cbe1938d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nwidart/laravel-modules' => 
        array (
          'pretty_version' => 'v9.0.6',
          'version' => '9.0.6.0',
          'reference' => 'a31b003b9e1dd100d2bcf7da7e036a758d33986d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../nwidart/laravel-modules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nyholm/psr7' => 
        array (
          'pretty_version' => '1.5.1',
          'version' => '1.5.1.0',
          'reference' => 'f734364e38a876a23be4d906a2a089e1315be18a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../nyholm/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'opis/closure' => 
        array (
          'pretty_version' => '3.6.3',
          'version' => '3.6.3.0',
          'reference' => '3d81e4309d2a927abbe66df935f4bb60082805ad',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../opis/closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'orchestra/testbench' => 
        array (
          'pretty_version' => 'v7.17.0',
          'version' => '7.17.0.0',
          'reference' => 'ad16d4c73d7027aaf5635fd8315773de05cda06c',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../orchestra/testbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench-core' => 
        array (
          'pretty_version' => 'v7.17.0',
          'version' => '7.17.0.0',
          'reference' => 'fb2408561c92cf9ef54a8af36e6d8965a9e15e52',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../orchestra/testbench-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'paragonie/constant_time_encoding' => 
        array (
          'pretty_version' => 'v2.6.3',
          'version' => '2.6.3.0',
          'reference' => '58c3f47f650c94ec05a151692652a868995d2938',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../paragonie/constant_time_encoding',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'paragonie/random_compat' => 
        array (
          'pretty_version' => 'v9.99.100',
          'version' => '9.99.100.0',
          'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../paragonie/random_compat',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/message-factory' => 
        array (
          'pretty_version' => 'v1.0.2',
          'version' => '1.0.2.0',
          'reference' => 'a478cb11f66a6ac48d8954216cfed9aa06a501a1',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../php-http/message-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.6.2',
          'version' => '1.6.2.0',
          'reference' => '48f445a408c131e38cab1c235aa6d2bb7a0bb20d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpmyadmin/sql-parser' => 
        array (
          'pretty_version' => '5.5.0',
          'version' => '5.5.0.0',
          'reference' => '8ab99cd0007d880f49f5aa1807033dbfa21b1cb5',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpmyadmin/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.0',
          'version' => '1.9.0.0',
          'reference' => 'dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpseclib/phpseclib' => 
        array (
          'pretty_version' => '3.0.18',
          'version' => '3.0.18.0',
          'reference' => 'f28693d38ba21bb0d9f0c411ee5dae2b178201da',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpseclib/phpseclib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '1.9.4',
          'version' => '1.9.4.0',
          'reference' => 'd03bccee595e2146b7c9d174486b84f4dc61b0f2',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '9.2.22',
          'version' => '9.2.22.0',
          'reference' => 'e4bf60d2220b4baaa0572986b5d69870226b06df',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '3.0.6',
          'version' => '3.0.6.0',
          'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '3.1.1',
          'version' => '3.1.1.0',
          'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '9.5.27',
          'version' => '9.5.27.0',
          'reference' => 'a2bc7ffdca99f92d959b3f2270529334030bba38',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pimple/pimple' => 
        array (
          'pretty_version' => 'v3.5.0',
          'version' => '3.5.0.0',
          'reference' => 'a94b3a4db7fb774b3d78dad2315ddc07629e1bed',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../pimple/pimple',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../psr/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0.0 || 2.0.0 || 3.0.0',
            1 => '1.0|2.0|3.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.11.9',
          'version' => '0.11.9.0',
          'reference' => '1acec99d6684a54ff92f8b548a4e41b566963778',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '1.2.2',
          'version' => '1.2.2.0',
          'reference' => 'cccc74ee5e328031b15640b51056ee8d3bb66c0a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.7.0',
          'version' => '4.7.0.0',
          'reference' => '5ed9ad582647bbc3864ef78db34bdc1afdcf9b49',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.7.0',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '1.0.8',
          'version' => '1.0.8.0',
          'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '4.0.8',
          'version' => '4.0.8.0',
          'reference' => 'fa0f136dd2334583309d32b62544682ee972b51a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '5.1.4',
          'version' => '5.1.4.0',
          'reference' => '1b5dff7bb151a4db11d49d90e5408e4e938270f7',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '4.0.5',
          'version' => '4.0.5.0',
          'reference' => 'ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '5.0.5',
          'version' => '5.0.5.0',
          'reference' => '0ca8db5a5fc9c8646244e629625ac486fa286bf2',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'cd9d8cf3c5804de4341c283ed787f099f5506172',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/resource-operations' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/resource-operations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => 'fb3fe09c5f0bae6bc27ef3ce933a1e0ed9464b6e',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/backtrace' => 
        array (
          'pretty_version' => '1.2.1',
          'version' => '1.2.1.0',
          'reference' => '4ee7d41aa5268107906ea8a4d9ceccde136dbd5b',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/backtrace',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/browsershot' => 
        array (
          'pretty_version' => '3.57.5',
          'version' => '3.57.5.0',
          'reference' => 'a4ae0f3a289cfb9384f2ee01b7f37c271f6a4159',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/browsershot',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/crawler' => 
        array (
          'pretty_version' => '7.1.2',
          'version' => '7.1.2.0',
          'reference' => 'aafde8073204e237958ae24cc81c67a7fd4d849b',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/crawler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/eloquent-sortable' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '64a3365c0d5a7b4a1837b2f29d01ee4c578c416a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/eloquent-sortable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/flare-client-php' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'ebb9ae0509b75e02f128b39537eb9a3ef5ce18e8',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/flare-client-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/ignition' => 
        array (
          'pretty_version' => '1.4.1',
          'version' => '1.4.1.0',
          'reference' => 'dd3d456779108d7078baf4e43f8c2b937d9794a1',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/image' => 
        array (
          'pretty_version' => '2.2.4',
          'version' => '2.2.4.0',
          'reference' => 'c2dc137c52d17bf12aff94ad051370c0f106b322',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/image',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/image-optimizer' => 
        array (
          'pretty_version' => '1.6.2',
          'version' => '1.6.2.0',
          'reference' => '6db75529cbf8fa84117046a9d513f277aead90a0',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/image-optimizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-cookie-consent' => 
        array (
          'pretty_version' => '3.2.2',
          'version' => '3.2.2.0',
          'reference' => 'c7a9d87397bce8b1834d90fb5124bea036ff7358',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-cookie-consent',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-dashboard' => 
        array (
          'pretty_version' => '2.1.3',
          'version' => '2.1.3.0',
          'reference' => '36014e54b816f4295cc79a25afaef46419c12ac1',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-dashboard',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-dashboard-time-weather-tile' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'af80b2fc258095739f9ddb60ff09aa87eb1a7092',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-dashboard-time-weather-tile',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-data' => 
        array (
          'pretty_version' => '2.2.1',
          'version' => '2.2.1.0',
          'reference' => 'c02b411daf696a87f72d1f376c8caed918943912',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-database-mail-templates' => 
        array (
          'pretty_version' => '3.5.0',
          'version' => '3.5.0.0',
          'reference' => '18f8de4af3eeb7c259c7b03b98fb40db46ac5e91',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-database-mail-templates',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-ignition' => 
        array (
          'pretty_version' => '1.6.2',
          'version' => '1.6.2.0',
          'reference' => 'd6e1e1ad93abe280abf41c33f8ea7647dfc0c233',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/laravel-medialibrary' => 
        array (
          'pretty_version' => '10.7.4',
          'version' => '10.7.4.0',
          'reference' => '94803ea1b99deb11e723e15e069ce4c3a07425a3',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-medialibrary',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-model-states' => 
        array (
          'pretty_version' => '2.4.2',
          'version' => '2.4.2.0',
          'reference' => '240ca661acffd4ca144b6ef22e5ded858b8cfe9e',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-model-states',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-model-status' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '6380fa82ac98ab755b08a034d2c1608212e26478',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-model-status',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-package-tools' => 
        array (
          'pretty_version' => '1.13.8',
          'version' => '1.13.8.0',
          'reference' => '781a2f637237e69c277eb401063acf15e2b4156b',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-package-tools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-permission' => 
        array (
          'pretty_version' => '5.7.0',
          'version' => '5.7.0.0',
          'reference' => '3a9bc00e6d338a9c61f830af654aa5c326407632',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-permission',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-query-builder' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => '14a6802cd513cfd2abf68044cca5fd7391eb543d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-query-builder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-queueable-action' => 
        array (
          'pretty_version' => '2.14.8',
          'version' => '2.14.8.0',
          'reference' => '2d550ad10070ec20dfa4b7c55be83b18069a2534',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-queueable-action',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-ray' => 
        array (
          'pretty_version' => '1.31.0',
          'version' => '1.31.0.0',
          'reference' => '7394694afd89d05879e7a69c54abab73c1199acd',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-ray',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/laravel-sitemap' => 
        array (
          'pretty_version' => '6.2.3',
          'version' => '6.2.3.0',
          'reference' => 'fcda88100cfcd14766a2b31d4710b9acf4f7e95e',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-sitemap',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-sluggable' => 
        array (
          'pretty_version' => '3.4.1',
          'version' => '3.4.1.0',
          'reference' => '8d42bbfac13302e9bfbcc869ea5579c235aa4981',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-sluggable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-tags' => 
        array (
          'pretty_version' => '4.3.5',
          'version' => '4.3.5.0',
          'reference' => '0f6b46f8af83dd9dac4df55f57009fd51d884d1c',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-tags',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-translatable' => 
        array (
          'pretty_version' => '6.1.0',
          'version' => '6.1.0.0',
          'reference' => 'b0ee6e06c666dcfb97fb1b4ff141b34e59806f13',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/laravel-translatable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/macroable' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'ec2c320f932e730607aff8052c44183cf3ecb072',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/macroable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/ray' => 
        array (
          'pretty_version' => '1.36.0',
          'version' => '1.36.0.0',
          'reference' => '4a4def8cda4806218341b8204c98375aa8c34323',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/ray',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/robots-txt' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'f40a12b89f98dd18f3665673d04757298f5fbbf9',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/robots-txt',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/sun' => 
        array (
          'pretty_version' => '1.1.2',
          'version' => '1.1.2.0',
          'reference' => '12d195e38adab756c067f04f3a0b07a5d18f018a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/sun',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/temporary-directory' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'e2818d871783d520b319c2d38dc37c10ecdcde20',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../spatie/temporary-directory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'staudenmeir/eloquent-has-many-deep' => 
        array (
          'pretty_version' => 'v1.17',
          'version' => '1.17.0.0',
          'reference' => '435ce579703ac387ecd97caf98502bd511d735f6',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../staudenmeir/eloquent-has-many-deep',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'staudenmeir/eloquent-has-many-deep-contracts' => 
        array (
          'pretty_version' => 'v1.0',
          'version' => '1.0.0.0',
          'reference' => 'f9589acaaf25f55f38c6dd9d6c1caa6ff62addf6',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../staudenmeir/eloquent-has-many-deep-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'stella-maris/clock' => 
        array (
          'pretty_version' => '0.1.7',
          'version' => '0.1.7.0',
          'reference' => 'fa23ce16019289a18bb3446fdecd45befcdd94f8',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../stella-maris/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v6.2.2',
          'version' => '6.2.2.0',
          'reference' => '5a9bd5c543f00157c55face973c149957467db31',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v6.2.0',
          'version' => '6.2.0.0',
          'reference' => '91c342ffc99283c43653ed8eb47bc2a94db7f398',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '1ee04c65529dea5d8744774d474e7cbd2f1206d3',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/dom-crawler' => 
        array (
          'pretty_version' => 'v6.2.0',
          'version' => '6.2.0.0',
          'reference' => 'c079db42bed39928fc77a24307cbfff7ac7757f7',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/dom-crawler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v6.2.2',
          'version' => '6.2.2.0',
          'reference' => '12a25d01cc5273b2445e125d62b61d34db42297e',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v6.2.2',
          'version' => '6.2.2.0',
          'reference' => '3ffeb31139b49bf6ef0bc09d1db95eac053388d1',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '0782b0b52a737a05b4383d0df35a474303cabdae',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v6.2.0',
          'version' => '6.2.0.0',
          'reference' => 'eb2355f69519e4ef33f1835bca4c935f5d42e570',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v6.2.2',
          'version' => '6.2.2.0',
          'reference' => 'ddf4dd35de1623e7c02013523e6c2137b67b636f',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v6.2.2',
          'version' => '6.2.2.0',
          'reference' => '860a0189969b755cd571709bd32313aa8599867a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v6.2.2',
          'version' => '6.2.2.0',
          'reference' => 'b355ad81f1d2987c47dcd3b04d5dce669e1e62e6',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v6.2.2',
          'version' => '6.2.2.0',
          'reference' => '8c98bf40406e791043890a163f6f6599b9cfa1ed',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-iconv' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '927013f3aac555983a5059aada98e1907d842695',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/polyfill-iconv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '511a08c03c1960e08a883f4cffcacd219b758354',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php72' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/polyfill-php72',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '707403074c8ea6e2edaf8794b0157a0bfa52157a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => 'f3cf1a645c2734236ed1e2e671e273eeb3586166',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v6.2.0',
          'version' => '6.2.0.0',
          'reference' => 'ba6e55359f8f755fe996c58a81e00eaa67a35877',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/psr-http-message-bridge' => 
        array (
          'pretty_version' => 'v2.1.4',
          'version' => '2.1.4.0',
          'reference' => 'a125b93ef378c492e274f217874906fb9babdebb',
          'type' => 'symfony-bridge',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/psr-http-message-bridge',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v6.2.0',
          'version' => '6.2.0.0',
          'reference' => '857ac6f4df371470fbdefa2f5967a2618dbf1852',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => 'aac98028c69df04ee77eb69b96b86ee51fbf4b75',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/stopwatch' => 
        array (
          'pretty_version' => 'v6.2.0',
          'version' => '6.2.0.0',
          'reference' => '266636bb8f3fbdccc302491df7b3a1b9a8c238a7',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/stopwatch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v6.2.2',
          'version' => '6.2.2.0',
          'reference' => '863219fd713fa41cbcd285a79723f94672faff4d',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v6.2.2',
          'version' => '6.2.2.0',
          'reference' => '3294288c335b6267eab14964bf2c46015663d93f',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '68cce71402305a015f8c1589bfada1280dc64fe7',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v6.2.0',
          'version' => '6.2.0.0',
          'reference' => '4f9f537e57261519808a7ce1d941490736522bbc',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v6.2.2',
          'version' => '6.2.2.0',
          'reference' => '6168f544827e897f708a684f75072a8c33a5e309',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v6.2.2',
          'version' => '6.2.2.0',
          'reference' => '6ed8243aa5f2cb5a57009f826b5e7fb3c4200cf3',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.1',
          'version' => '1.2.1.0',
          'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => '2.2.5',
          'version' => '2.2.5.0',
          'reference' => '4348a3a06651827a27d989ad1d13efec6bb49b19',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'unisharp/laravel-filemanager' => 
        array (
          'pretty_version' => 'v2.5.1',
          'version' => '2.5.1.0',
          'reference' => '9e9022747832fb862a15bdafd4e6fdd564f10c82',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../unisharp/laravel-filemanager',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.5.0',
          'version' => '5.5.0.0',
          'reference' => '1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'wire-elements/pro' => 
        array (
          'pretty_version' => '2.0.21',
          'version' => '2.0.21.0',
          'reference' => '36b382860520f18d591141a93518b5f0beaca24e',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../wire-elements/pro',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'zbateson/mail-mime-parser' => 
        array (
          'pretty_version' => '2.2.3',
          'version' => '2.2.3.0',
          'reference' => '295c7f82a8c44af685680d9df6714beb812e90ff',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../zbateson/mail-mime-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'zbateson/mb-wrapper' => 
        array (
          'pretty_version' => '1.1.2',
          'version' => '1.1.2.0',
          'reference' => '5d9d190ef18ce6d424e3ac6f5ebe13901f92b74a',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../zbateson/mb-wrapper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'zbateson/stream-decorators' => 
        array (
          'pretty_version' => '1.0.7',
          'version' => '1.0.7.0',
          'reference' => '8f8ca208572963258b7e6d91106181706deacd10',
          'type' => 'library',
          'install_path' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\composer/../zbateson/stream-decorators',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Xot\\Services\\vendor\\autoload.php' => 'e9a6558aae7016fe19289b7550d90f4f0dc57482',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\bootstrap.php' => '8004bf4a0a0809c507190a9ed3f6544fd9adf804',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'bcmath',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'exif',
    14 => 'fileinfo',
    15 => 'filter',
    16 => 'gd',
    17 => 'gettext',
    18 => 'hash',
    19 => 'iconv',
    20 => 'intl',
    21 => 'json',
    22 => 'libxml',
    23 => 'mbstring',
    24 => 'mysqli',
    25 => 'mysqlnd',
    26 => 'openssl',
    27 => 'pcre',
    28 => 'pdo_mysql',
    29 => 'pdo_sqlite',
    30 => 'readline',
    31 => 'session',
    32 => 'sodium',
    33 => 'sqlite3',
    34 => 'standard',
    35 => 'tidy',
    36 => 'tokenizer',
    37 => 'xml',
    38 => 'xmlreader',
    39 => 'xmlwriter',
    40 => 'xsl',
    41 => 'zip',
    42 => 'zlib',
  ),
  'stubFiles' => 
  array (
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Attribute.stub' => 'b6cf9c2ade73713d488645e6336eac595369739c',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\BelongsTo.stub' => '1a843cfba603ff8abb4ba8daccad30e543d311a3',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\BelongsToMany.stub' => 'bc3f4cb19dee79e5bc028fb3955c00959b836b7d',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Collection.stub' => '1c015814923943641e4f59d81c6e8915c7efad7e',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Conditionable.stub' => '7048859990cd8c0c406de1857bf3e462ecece149',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Config\\Repository.stub' => '31fa7b9877710999a42a43fdc751b235a299008f',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Container.stub' => '07d375fd4372a40d348f21370450a5724df7bf47',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Pagination.stub' => '5d214ab6d2b6cc7c56b846b387292e6a1d0485c6',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Queue.stub' => 'cd30534d5869982bcf995a98521b3710fdab5eb7',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Support.stub' => '9c1293dfdc2c79dcdeeb562fc8673d4d3d280ce7',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\Translation.stub' => '00ef14ec92a1facfa8edd3822cac3f664435a0a6',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Contracts\\UrlGenerator.stub' => 'f29d5ad0d02ca54293a36c0c3a5b1f8201be4d3b',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Cookie\\CookieJar.stub' => '41fa714b3989048f3bb042473837c177034d2559',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Cookie\\SymfonyCookie.stub' => '54a800384b675f8852edf7a8c91553564e14b618',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Database\\ManagesTransactions.stub' => 'cbe45ab370f604b79c5c9f25bbf882080e8e4c1e',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\EloquentBuilder.stub' => 'b7d658c51555522582d4130c82cc23df68f10a2e',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\EloquentCollection.stub' => 'abe9f00ebbf0e4c362d0dd11d5745484ff756c33',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Enumerable.stub' => '5fbfaf6269cf27bf8f0fd7ecbceb6e1cb654eae7',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\EnumeratesValues.stub' => 'a182d39aae1efe6657019197477801c8fbb643a6',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Facades.stub' => 'd7cf5c8baf0d059b840dfe7f4700c424e38761b8',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Factory.stub' => '471bc41d7230b0da40573c1f476b4b707d2a6a86',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Foundation\\Http\\FormRequest.stub' => 'f56a137d60fd67aa30f703130219e65dde56fded',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Gate.stub' => '54fe6beb129f421af9f212972c7dc387e94ee714',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasMany.stub' => '8e659e8330c7a9b7bb4692cde85cd0b4662fe555',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasManyThrough.stub' => '86d03883b976831108b77379ef6f1c411b485be6',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasOne.stub' => '28f14c1b29b7110fd6837432e9d94ee3ad09b4c2',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasOneOrMany.stub' => '8c055867941b97c39cd8508ad713c0594de45491',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\HasOneThrough.stub' => 'a7c1344f0fcb94f44795c7547e7c1abc46f255d9',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Helpers.stub' => '02ea3483436ddbf2150341910328273aec98c84f',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\HigherOrderProxies.stub' => 'c9d7c18bd751e75ea2918cfff06baa3ca496f48f',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Http\\RedirectResponse.stub' => 'fd20aea92d8595e8bcd9c60fd8d07573d63bba83',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Http\\Request.stub' => '6377f12455743032cfd61426582a5b529e041f63',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Log\\Logger.stub' => '320023c7c0d4e976aae7345f51fb6c5c287e34b2',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Mailable.stub' => '46eaf57e6b7eacd28ece582bb25ecccf7c1faf54',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Model.stub' => '908143337865de371ccd84de0d937365c3bfbf32',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphMany.stub' => 'f963e9ca4853c4b6b6159310f4eacd76f5dec90b',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphOne.stub' => '695ed13bf23b334292bc9ead7cd8a18e31cfa03d',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphOneOrMany.stub' => '4350914cf747c61c8d0ea876397b1095c205dd52',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphTo.stub' => '539a5a05c4bc332fbb997260d17807cc0014282f',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\MorphToMany.stub' => '0f451a6df1ea4c2d70c70cd9fe99cb7ead901ec7',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Pagination.stub' => '6e0b86869940c3701bf440e54da811535cb22353',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\QueryBuilder.stub' => '957c066338f2cdd97a06058ef8eb2687abb1ee81',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Redis\\Connection.stub' => '594198d0412613f8e8ef487a77e3f63e270ba5a5',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Relation.stub' => '122ec732291a92e367fd2174caf438cf0141269b',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Route.stub' => '3c54b8aa6bd5822d8c803d8a6be76d1beb70a3a0',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Routing\\Redirector.stub' => '423332adae4e21b04a2ec6730b24a0eb1f74279e',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Session\\SessionManager.stub' => 'ac2f374ffd6cdb73a076770d4f29fc6140d564e3',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Support\\Manager.stub' => '86d0cbeedaf5005bdf91c33882642d802dc97e87',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Support\\Optional.stub' => 'c7a4a94afa98efcaa386e8ccb202286eb6b6d6f8',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Support\\ValidatedInput.stub' => '9b59e500ea8acabcfa1f735fe59102dedd4657f0',
    'D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\nunomaduro\\larastan\\src/../stubs\\Validation\\Validator.stub' => 'e3002a858e7d0e6df8cc68f39a2ad8c888887049',
    'phar://D:/var/www/_bases/base_dev01/laravel/vendor/phpstan/phpstan/phpstan.phar/src/PhpDoc/../../stubs/Countable.stub' => 'e3519ee3706ffbe1398770146aadfc6a62b2b66f',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ArrayObject.stub' => '34c9e85af3fe514ea3e18f7fc87e03f7890e3a46',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\Exception.stub' => '7539dffcb4b871de4319a3081c26e79d85ceaed0',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ImagickPixel.stub' => '112be875b5d995ddb4c7fbf5219c14877666aeb1',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\PDOStatement.stub' => '044a82cf796cf7016f4d0ac7fdad01d885aa0f06',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionAttribute.stub' => '614c3dcc562c65118608b1c4e1176684ce1a2cc5',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionClass.stub' => '78d777787f0085b0b72f207c241355d82d27e77a',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionClassConstant.stub' => '7c0f2ee95301fed439a48f7d55e5d4d1487c9bb8',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionFunctionAbstract.stub' => '2196325c2433ae733e0e7993400429493a1cd342',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionMethod.stub' => '4fcf212f681a5d09b4c68c617b09dca662576f92',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionParameter.stub' => '3e648b120364fd63447250d11819d6206c9b03e9',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ReflectionProperty.stub' => '78f68f13d18db0d71458216a47e9c8cec4b76024',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\SplObjectStorage.stub' => '1288ba1134aa555ef8e6b939208c62691dfd0ca5',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\WeakReference.stub' => '2fadf02e9175d02a0d39240d89ae38bc939aa605',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\arrayFunctions.stub' => 'd19ce8033c5f5680c244157d038030005694d43a',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\core.stub' => '715a5a9dbc9c96ef9a28d48809aaa479cade084e',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\date.stub' => '9712669ade6da1b623fbaa613ccdca78032b324e',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\dom.stub' => '321cf9a0fc1e803ff5356208de0f9230805aa25a',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\ext-ds.stub' => '668e84027774aab7c0b91933a178f13dead8ed9c',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\iterable.stub' => '54d934cbe5cf9f0c664d1c5cb0cfc53795badc82',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\mysqli.stub' => '393a65057ae1aeb5492f3dd45166eac0150ed8e9',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\spl.stub' => '6a8ce07b7dc82139ffd4ab1e84414e984801b065',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\typeCheckingFunctions.stub' => '584a4a49ed64d2b6df4b2d9ecd34d9e12464e3f0',
    'phar://D:\\var\\www\\_bases\\base_dev01\\laravel\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\zip.stub' => 'aff61beeb3e9dfaed0eede432921df5eee2d3b40',
  ),
  'level' => '1',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleBarChart.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class Modules\\Chart\\Charts\\ExampleBarChart extends unknown class Fidum\\ChartTile\\Charts\\Chart.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleBarChart.php',
       'line' => 12,
       'canBeIgnored' => false,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleBarChart.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Class_',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Chart\\Charts\\ExampleBarChart::handler() has invalid return type Chartisan\\PHP\\Chartisan.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleBarChart.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleBarChart.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to static method build() on an unknown class Chartisan\\PHP\\Chartisan.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleBarChart.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleBarChart.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleChart.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class Modules\\Chart\\Charts\\ExampleChart extends unknown class Fidum\\ChartTile\\Charts\\Chart.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleChart.php',
       'line' => 12,
       'canBeIgnored' => false,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleChart.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Class_',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Chart\\Charts\\ExampleChart::handler() has invalid return type Chartisan\\PHP\\Chartisan.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleChart.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleChart.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to static method build() on an unknown class Chartisan\\PHP\\Chartisan.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleChart.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleChart.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant FF_VERDANA not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 77,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 77,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant FS_ITALIC not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 77,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 77,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant FF_ARIAL not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 79,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 79,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    3 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant FS_BOLD not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 79,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 79,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    4 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_FILLEDCIRCLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 61,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    5 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_UTRIANGLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 63,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 63,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    6 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_SQUARE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 64,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    7 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_DTRIANGLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 65,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 65,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    8 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_DIAMOND not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 66,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 66,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    9 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_CIRCLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 67,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 67,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    10 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_CROSS not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 69,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 69,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    11 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_STAR not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 70,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 70,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    12 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_X not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 71,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 71,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    13 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_LEFTTRIANGLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 72,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 72,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    14 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_RIGHTTRIANGLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 73,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 73,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    15 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_FLASH not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 74,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 74,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    16 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_FILLEDCIRCLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 177,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 177,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    17 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_UTRIANGLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 179,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 179,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    18 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_SQUARE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 180,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 180,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    19 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_DTRIANGLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 181,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 181,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    20 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_DIAMOND not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 182,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 182,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    21 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_CIRCLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 183,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 183,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    22 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_CROSS not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 185,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 185,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    23 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_STAR not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 186,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 186,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    24 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_X not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 187,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 187,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    25 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_LEFTTRIANGLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 188,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 188,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    26 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_RIGHTTRIANGLE not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 189,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 189,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    27 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant MARK_FLASH not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 190,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 190,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    28 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant FF_ARIAL not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 76,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 76,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    29 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant FS_BOLD not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 76,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 76,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    30 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant FF_ARIAL not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 81,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    31 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant FS_NORMAL not found.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait.php (in context of class Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine)',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
       'traitFilePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 81,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to static method make() on an unknown class Modules\\Chart\\Services\\ChartEngines\\ChartJsEngine.',
       'file' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php',
       'line' => 152,
       'canBeIgnored' => true,
       'filePath' => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 152,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'collectedDataCallback' => static function (): array { return array (
); },
	'dependencies' => array (
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleBarChart.php' => 
  array (
    'fileHash' => 'dde5d8d23e5fb50b6f1991b55a2f3daeacf40db8',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleChart.php' => 
  array (
    'fileHash' => '2b21879a38f68fd629963abbdda6842f64a9c141',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Config\\config.php' => 
  array (
    'fileHash' => '454da0083945cb4ccf4f9b2c32d71aabfb3d0ff0',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Contracts\\ChartEngineContract.php' => 
  array (
    'fileHash' => 'bc6bf11bbe4309fdb563734d96b2c9667931f73b',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\BaseChartEngine.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
      2 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Factories\\ChartFactory.php' => 
  array (
    'fileHash' => '74a8412389976ae2ac55f3c11d8a537d3b2829b7',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Chart.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\MixedChart.php',
      2 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Factories\\MixedChartFactory.php' => 
  array (
    'fileHash' => '19e0d04e2f30556f850953042ef9def2d55b016e',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\MixedChart.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\ChartPanel.php',
      2 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\MixedChartPanel.php',
      3 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Migrations\\2021_01_01_000025_create_charts_table.php' => 
  array (
    'fileHash' => 'bbd2335532e426697ee0c31550ae1d73748e7618',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Migrations\\2021_01_17_000001_create_mixed_chart_table.php' => 
  array (
    'fileHash' => '42bbf35be4badc3990a4d2fd56c84b31b7222957',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Seeders\\ChartDatabaseSeeder.php' => 
  array (
    'fileHash' => 'd7a3ec24d4165df47f1dcf50c2e045b0e71a7c38',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Http\\Controllers\\ApiController.php' => 
  array (
    'fileHash' => 'f79acf429ae63c4b58b0888efdc07d345b6c9fe4',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\BaseModel.php' => 
  array (
    'fileHash' => 'ffea5734488656763e92966481a274b891426938',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Factories\\ChartFactory.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Factories\\MixedChartFactory.php',
      2 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Chart.php',
      3 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\MixedChart.php',
      4 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\ChartPanel.php',
      5 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\MixedChartPanel.php',
      6 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\BaseMorphPivot.php' => 
  array (
    'fileHash' => 'e3d61d027ba1393c515af969bd533f18a3f52a66',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\BasePivot.php' => 
  array (
    'fileHash' => '531713e14b342981846a8976ce08a151c856c086',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Chart.php' => 
  array (
    'fileHash' => '6359680819d0afce809b8855c97023a3c13ddc28',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Factories\\ChartFactory.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Factories\\MixedChartFactory.php',
      2 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\MixedChart.php',
      3 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\ChartPanel.php',
      4 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\MixedChartPanel.php',
      5 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\MixedChart.php' => 
  array (
    'fileHash' => '4fb5f2a105120d0d53363253bc3e2e4e52b8b63b',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Factories\\MixedChartFactory.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\ChartPanel.php',
      2 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\MixedChartPanel.php',
      3 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\Actions\\TestAction.php' => 
  array (
    'fileHash' => '505a22b427c4355ab9a113da747b512066d73a4d',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\_ModulePanel.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\ChartPanel.php' => 
  array (
    'fileHash' => 'ef8301864f86f8d1d948d8a8820be93951342ad5',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\MixedChartPanel.php' => 
  array (
    'fileHash' => 'fb3ce0c3e04d6aacc3aaea37193665b40def3fd8',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\Policies\\ChartPanelPolicy.php' => 
  array (
    'fileHash' => '2aeeb535a1722c4aa4253d2b8158de57390a3ee4',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\Policies\\MixedChartPanelPolicy.php' => 
  array (
    'fileHash' => 'ea9ceecb4b0064e35229421608c2aa93599f0a35',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\Policies\\_ModulePanelPolicy.php' => 
  array (
    'fileHash' => '710aad42ebab1bf785e46f4ba08ad938e4505df3',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait.php' => 
  array (
    'fileHash' => '54f4d3361c1df57e1af8fba8a58277d9d2c2831d',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\ChartPanel.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\_ModulePanel.php' => 
  array (
    'fileHash' => '3d25be9f03f3d33540a57b464c94049fc9af2d80',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Traits\\HasChartTrait.php' => 
  array (
    'fileHash' => '7fdbdf6230cd1f6442cbfc0c887f503ae93fc644',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Providers\\ChartServiceProvider.php' => 
  array (
    'fileHash' => 'a4b6ad4157f989ce34d2788d614c4f1175397bb5',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Providers\\RouteServiceProvider.php' => 
  array (
    'fileHash' => '3dc8207f61c9fe77e24843df2663b41d904ed919',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Resources\\lang\\it\\charts.php' => 
  array (
    'fileHash' => '404fdb569d80f8b83a9dc70b3947a9831703a649',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Resources\\lang\\it\\mixed_charts.php' => 
  array (
    'fileHash' => '5a0ccd82b014cc42636ee46f330d2a32569f8008',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Routes\\api.php' => 
  array (
    'fileHash' => '1a89c45dcc219500f82c62fbd02510f4210f5977',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Routes\\web.php' => 
  array (
    'fileHash' => '1d8259500af6d22dcf3047f45007f2232692d69a',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\BaseChartEngine.php' => 
  array (
    'fileHash' => '7d7777d4d7a09aa63a300a523e827550dd644f1a',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\BarTrait.php' => 
  array (
    'fileHash' => 'b12c01fc54e27b6e14f10ad42fc88d5b0250e02a',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\CommonTrait.php' => 
  array (
    'fileHash' => 'a80cf0c76b33f8f88d9fdca5822e240b09df7e7e',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\HorizbarTrait.php' => 
  array (
    'fileHash' => 'f5321b676a3777161ac4330064fb6a355fa6d706',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\LineTrait.php' => 
  array (
    'fileHash' => '088c993b0316080faaff840ecc3e9387f49c9e6f',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\MixedTrait.php' => 
  array (
    'fileHash' => '99d72d71a14b139ddfb2b1642419c45b0c5d3835',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\PieTrait.php' => 
  array (
    'fileHash' => 'f38bb79a419d4ab3a02f74c0e0ac696c47fe3a93',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\TableTrait.php' => 
  array (
    'fileHash' => '8901ff174564a3bd1e74f19f5d41685aecd77cf4',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php' => 
  array (
    'fileHash' => '9418e7d53b5a38db30a8892bb9d505eef044ae4f',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait.php' => 
  array (
    'fileHash' => '800e48270d83d357c1b7f1fe140ef0e1c5534cb1',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\CommonTrait.php' => 
  array (
    'fileHash' => '2a45b90da0dd120330f228aa9d249b0e0a5cdef3',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\HorizbarTrait.php' => 
  array (
    'fileHash' => '4f47f87aef6c435f6b72ad54a4f6766ca676f168',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php' => 
  array (
    'fileHash' => 'be0a5e56c3ca96c17ce1753448272575cbc9d871',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\MixedTrait.php' => 
  array (
    'fileHash' => 'bf3b1bdb139776eb78672097fb4e187a569c37d9',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\OdometerTrait.php' => 
  array (
    'fileHash' => 'ca9bea212c6372f2eb755e50c36aca1b6d195f76',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait.php' => 
  array (
    'fileHash' => '041b80d6eeea5904298f2c374bbb0e5ac18e2619',
    'dependentFiles' => 
    array (
      0 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php',
      1 => 'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php',
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\Traits\\ChartEngineTrait.php' => 
  array (
    'fileHash' => 'a2b8fad44808864416b2d51d9d63e4531cfc9500',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartJsBuilder.php' => 
  array (
    'fileHash' => '45a995910e779a2d9882b2753a7f571dd6480b97',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php' => 
  array (
    'fileHash' => '8f4b804746dfa048c2dbc3eeaf84c17cc83acdaf',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\View\\Components\\Chartjs\\Base.php' => 
  array (
    'fileHash' => 'ebefab27e27eb5dc6dfcbc410f0f2f6adf927f65',
    'dependentFiles' => 
    array (
    ),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\View\\Components\\Graph.php' => 
  array (
    'fileHash' => '1a2f24bbcf08be9f6ae4c770d737919fa26e0392',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleBarChart.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Charts\\ExampleBarChart',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Fidum\\ChartTile\\Charts\\Chart',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handler',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Chartisan\\PHP\\Chartisan',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'type',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'options',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'colors',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Charts\\ExampleChart.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Charts\\ExampleChart',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Fidum\\ChartTile\\Charts\\Chart',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handler',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Chartisan\\PHP\\Chartisan',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'type',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'options',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'colors',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Contracts\\ChartEngineContract.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'Modules\\Chart\\Contracts\\ChartEngineContract',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Undocumented interface.
 * @property array                     $vars
 */',
         'namespace' => 'Modules\\Chart\\Contracts',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Support\\Collection',
        ),
         'constUses' => 
        array (
        ),
      )),
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setData',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'Illuminate\\Support\\Collection',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setWidthHeight',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'width',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'height',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setColor',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'color',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setFont',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'style',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'size',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mergeVars',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'vars',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getVars',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setType',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'build',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'filename',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Factories\\ChartFactory.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Database\\Factories\\ChartFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name of the factory\'s corresponding model.
     *
     * @var class-string<\\Illuminate\\Database\\Eloquent\\Model>
     */',
             'namespace' => 'Modules\\Chart\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'chart' => 'Modules\\Chart\\Models\\Chart',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array
     */',
             'namespace' => 'Modules\\Chart\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'chart' => 'Modules\\Chart\\Models\\Chart',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Factories\\MixedChartFactory.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Database\\Factories\\MixedChartFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name of the factory\'s corresponding model.
     *
     * @var class-string<\\Illuminate\\Database\\Eloquent\\Model>
     */',
             'namespace' => 'Modules\\Chart\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'mixedchart' => 'Modules\\Chart\\Models\\MixedChart',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array
     */',
             'namespace' => 'Modules\\Chart\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'mixedchart' => 'Modules\\Chart\\Models\\MixedChart',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Migrations\\2021_01_01_000025_create_charts_table.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'CreateChartsTable',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class CreateChartsTable.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
          'xotbasemigration' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'up',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the migrations.
     *
     * @return void
     */',
             'namespace' => NULL,
             'uses' => 
            array (
              'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
              'xotbasemigration' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Migrations\\2021_01_17_000001_create_mixed_chart_table.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'CreateMixedChartTable',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class CreateMixedChartTable.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
          'xotbasemigration' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'up',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the migrations.
     *
     * @return void
     */',
             'namespace' => NULL,
             'uses' => 
            array (
              'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
              'xotbasemigration' => 'Modules\\Xot\\Database\\Migrations\\XotBaseMigration',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Database\\Seeders\\ChartDatabaseSeeder.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Database\\Seeders\\ChartDatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     *
     * @return void
     */',
             'namespace' => 'Modules\\Chart\\Database\\Seeders',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Http\\Controllers\\ApiController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Http\\Controllers\\ApiController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'imageStore',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\BaseModel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\BaseModel',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class BaseModel.
 */',
         'namespace' => 'Modules\\Chart\\Models',
         'uses' => 
        array (
          'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
          'updater' => 'Modules\\Xot\\Traits\\Updater',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Modules\\Xot\\Traits\\Updater',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'snakeAttributes',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'perPage',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'connection',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<string, string>
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dates',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string[]
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'primaryKey',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'incrementing',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var bool
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<int, string>
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timestamps',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var bool
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new factory instance for the model.
     *
     * @return \\Illuminate\\Database\\Eloquent\\Factories\\Factory
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'cachable' => 'GeneaLabs\\LaravelModelCaching\\Traits\\Cachable',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'factoryservice' => 'Modules\\Xot\\Services\\FactoryService',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\BaseMorphPivot.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\BaseMorphPivot',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class BaseMorphPivot.
 */',
         'namespace' => 'Modules\\Chart\\Models',
         'uses' => 
        array (
          'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
          'updater' => 'Modules\\Xot\\Traits\\Updater',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Modules\\Xot\\Traits\\Updater',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'snakeAttributes',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'perPage',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'connection',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'appends',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'primaryKey',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'incrementing',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var bool
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timestamps',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var bool
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dates',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string[]
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string[]
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'morphpivot' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphPivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\BasePivot.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\BasePivot',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class BasePivot.
 */',
         'namespace' => 'Modules\\Chart\\Models',
         'uses' => 
        array (
          'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
          'updater' => 'Modules\\Xot\\Traits\\Updater',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Modules\\Xot\\Traits\\Updater',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'snakeAttributes',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'perPage',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'connection',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'appends',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<string, string>
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dates',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string[]
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'primaryKey',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented variable.
     *
     * @var string
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'incrementing',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var bool
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'pivot' => 'Illuminate\\Database\\Eloquent\\Relations\\Pivot',
              'updater' => 'Modules\\Xot\\Traits\\Updater',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Chart.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\Chart',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Modules\\Chart\\Models\\Chart.
 *
 * @property int                             $id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $color
 * @property string|null                     $bg_color
 * @property int                             $font_family
 * @property int                             $font_style
 * @property int                             $font_size
 * @property \\Illuminate\\Support\\Carbon|null $created_at
 * @property \\Illuminate\\Support\\Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property int|null                        $y_grace
 * @property int|null                        $yaxis_hide
 * @property string|null                     $list_color
 * @property string|null                     $x_label_angle
 * @property int|null                        $show_box
 * @property int|null                        $x_label_margin
 * @property int|null                        $width
 * @property int|null                        $height
 * @property string|null                     $type
 * @property int|null                        $plot_perc_width
 * @property int|null                        $plot_value_show
 * @property string|null                     $plot_value_format
 * @property int|null                        $plot_value_pos
 * @property string|null                     $plot_value_color
 * @property string|null                     $group_by
 * @property string|null                     $sort_by
 * @property string|null                     $lang
 * @property string|null                     $grace
 * @property string                          $transparency
 *
 * @method static \\Modules\\Chart\\Database\\Factories\\ChartFactory factory(...$parameters)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    newModelQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    newQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    query()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereBgColor($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereColor($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereCreatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereCreatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereFontFamily($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereFontSize($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereFontStyle($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereGrace($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereGroupBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereHeight($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereLang($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereListColor($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    wherePlotPercWidth($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    wherePlotValueColor($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    wherePlotValueFormat($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    wherePlotValuePos($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    wherePlotValueShow($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    wherePostId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    wherePostType($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereShowBox($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereSortBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereTransparency($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereType($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereUpdatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereUpdatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereWidth($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereXLabelAngle($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereXLabelMargin($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereYGrace($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Chart    whereYaxisHide($value)
 *
 * @mixin \\Eloquent
 */',
         'namespace' => 'Modules\\Chart\\Models',
         'uses' => 
        array (
          'errorexception' => 'ErrorException',
          'panelservice' => 'Modules\\Cms\\Services\\PanelService',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Chart\\Models\\BaseModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented variable.
     *
     * @var array<string>
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'errorexception' => 'ErrorException',
              'panelservice' => 'Modules\\Cms\\Services\\PanelService',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'attributes',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented variable.
     *
     * @var array
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'errorexception' => 'ErrorException',
              'panelservice' => 'Modules\\Cms\\Services\\PanelService',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getParentStyle',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return int|string|null
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'errorexception' => 'ErrorException',
              'panelservice' => 'Modules\\Cms\\Services\\PanelService',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPanelRow',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return int|string|null
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'errorexception' => 'ErrorException',
              'panelservice' => 'Modules\\Cms\\Services\\PanelService',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parent_field',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'my_field',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getColorAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getListColorAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getXLabelAngleAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFontFamilyAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFontStyleAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFontSizeAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTypeAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getWidthAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?int',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHeightAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?int',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\MixedChart.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\MixedChart',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Modules\\Chart\\Models\\MixedChart.
 *
 * @property int                                                                    $id
 * @property string                                                                 $name
 * @property \\Illuminate\\Support\\Carbon|null                                        $created_at
 * @property \\Illuminate\\Support\\Carbon|null                                        $updated_at
 * @property string|null                                                            $created_by
 * @property string|null                                                            $updated_by
 * @property \\Illuminate\\Database\\Eloquent\\Collection|\\Modules\\Chart\\Models\\Chart[] $charts
 * @property int|null                                                               $charts_count
 *
 * @method static \\Modules\\Chart\\Database\\Factories\\MixedChartFactory factory(...$parameters)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|MixedChart    newModelQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|MixedChart    newQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|MixedChart    query()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|MixedChart    whereCreatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|MixedChart    whereCreatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|MixedChart    whereId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|MixedChart    whereName($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|MixedChart    whereUpdatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|MixedChart    whereUpdatedBy($value)
 *
 * @mixin \\Eloquent
 */',
         'namespace' => 'Modules\\Chart\\Models',
         'uses' => 
        array (
          'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Chart\\Models\\BaseModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<string>
     */',
             'namespace' => 'Modules\\Chart\\Models',
             'uses' => 
            array (
              'morphmany' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'charts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\Actions\\TestAction.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\Panels\\Actions\\TestAction',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class TestAction.
 */',
         'namespace' => 'Modules\\Chart\\Models\\Panels\\Actions',
         'uses' => 
        array (
          'xotbasepanelaction' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
          'themeservice' => 'Modules\\Theme\\Services\\ThemeService',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'onItem',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'icon',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return mixed
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels\\Actions',
             'uses' => 
            array (
              'xotbasepanelaction' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
              'themeservice' => 'Modules\\Theme\\Services\\ThemeService',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\ChartPanel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\Panels\\ChartPanel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The model the resource corresponds to.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'str' => 'Illuminate\\Support\\Str',
              'charttrait' => 'Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'title',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The single value that should be used to represent the resource when being displayed.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'str' => 'Illuminate\\Support\\Str',
              'charttrait' => 'Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fields',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the fields displayed by the resource.
        \'value\'=>\'..\',
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'str' => 'Illuminate\\Support\\Str',
              'charttrait' => 'Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tabs',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the tabs available.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'str' => 'Illuminate\\Support\\Str',
              'charttrait' => 'Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cards',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the cards available for the request.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'str' => 'Illuminate\\Support\\Str',
              'charttrait' => 'Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'filters',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the filters available for the resource.
     *
     * @param \\Illuminate\\Http\\Request $request
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'str' => 'Illuminate\\Support\\Str',
              'charttrait' => 'Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => '?Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lenses',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the lenses available for the resource.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'str' => 'Illuminate\\Support\\Str',
              'charttrait' => 'Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'actions',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the actions available for the resource.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'str' => 'Illuminate\\Support\\Str',
              'charttrait' => 'Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\MixedChartPanel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\Panels\\MixedChartPanel',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * MixedChartPanel.
 */',
         'namespace' => 'Modules\\Chart\\Models\\Panels',
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The model the resource corresponds to.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'title',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The single value that should be used to represent the resource when being displayed.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'optionLabel',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     *
     * @param \\Modules\\Chart\\Models\\MixedChart $row
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'row',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'title',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fields',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the fields displayed by the resource.
        \'value\'=>\'..\',
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tabs',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the tabs available.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cards',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the cards available for the request.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'filters',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the filters available for the resource.
     *
     * @param \\Illuminate\\Http\\Request $request
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => '?Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lenses',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the lenses available for the resource.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'actions',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the actions available for the resource.
     */',
             'namespace' => 'Modules\\Chart\\Models\\Panels',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\Policies\\ChartPanelPolicy.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\Panels\\Policies\\ChartPanelPolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Cms\\Models\\Panels\\Policies\\XotBasePanelPolicy',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\Policies\\MixedChartPanelPolicy.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\Panels\\Policies\\MixedChartPanelPolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Cms\\Models\\Panels\\Policies\\XotBasePanelPolicy',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\Policies\\_ModulePanelPolicy.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\Panels\\Policies\\_ModulePanelPolicy',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
 */',
         'namespace' => 'Modules\\Chart\\Models\\Panels\\Policies',
         'uses' => 
        array (
          'panelcontract' => 'Modules\\Cms\\Contracts\\PanelContract',
          'xotbasepanelpolicy' => 'Modules\\Cms\\Models\\Panels\\Policies\\XotBasePanelPolicy',
          'usercontract' => 'Modules\\Xot\\Contracts\\UserContract',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Cms\\Models\\Panels\\Policies\\XotBasePanelPolicy',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'choosePubTheme',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'activatePubTheme',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'chooseAdmTheme',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'activateAdmTheme',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'chooseIcons',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showAllIcons',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'manageLangModule',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testVideo',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testVideoEditor',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testContentSelectionAndHighlighting',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'TestSelectHighlight',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testSlider',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'populateVideo',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\Xot\\Contracts\\UserContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'panel',
               'type' => 'Modules\\Cms\\Contracts\\PanelContract',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Models\\Panels\\Traits\\ChartTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Panels\\_ModulePanel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Models\\Panels\\_ModulePanel',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class _ModulePanel.
 */',
         'namespace' => 'Modules\\Chart\\Models\\Panels',
         'uses' => 
        array (
          'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'actions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Models\\Traits\\HasChartTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Models\\Traits\\HasChartTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Providers\\ChartServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Providers\\ChartServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Xot\\Providers\\XotBaseServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'module_dir',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'module_ns',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'module_name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bootCallback',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerCallback',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Providers\\RouteServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Providers\\RouteServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Xot\\Providers\\XotBaseRouteServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleNamespace',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The module namespace to assume when generating URLs to actions.
     */',
             'namespace' => 'Modules\\Chart\\Providers',
             'uses' => 
            array (
              'xotbaserouteserviceprovider' => 'Modules\\Xot\\Providers\\XotBaseRouteServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'module_dir',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'module_ns',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\BaseChartEngine.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Services\\ChartEngines\\BaseChartEngine',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * ---.
 * */',
         'namespace' => 'Modules\\Chart\\Services\\ChartEngines',
         'uses' => 
        array (
          'chartenginecontract' => 'Modules\\Chart\\Contracts\\ChartEngineContract',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Modules\\Chart\\Contracts\\ChartEngineContract',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\BarTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\BarTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\CommonTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\CommonTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\HorizbarTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\HorizbarTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\LineTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\LineTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\MixedTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\MixedTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\PieTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\PieTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\TableTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\ChartJsEngineTraits\\TableTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Chart\\Services\\ChartEngines\\BaseChartEngine',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait',
        1 => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\CommonTrait',
        2 => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\HorizbarTrait',
        3 => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait',
        4 => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\MixedTrait',
        5 => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'width',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'height',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'title',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'filename',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'vars',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'imgs',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'data',
          ),
           'phpDoc' => NULL,
           'type' => 'Illuminate\\Support\\Collection',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'color',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'family',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'style',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        10 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'size',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        11 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return void
     */',
             'namespace' => 'Modules\\Chart\\Services\\ChartEngines',
             'uses' => 
            array (
              'graph' => 'Amenadiel\\JpGraph\\Graph\\Graph',
              'universaltheme' => 'Amenadiel\\JpGraph\\Themes\\UniversalTheme',
              'exception' => 'Exception',
              'collection' => 'Illuminate\\Support\\Collection',
              'file' => 'Illuminate\\Support\\Facades\\File',
              'str' => 'Illuminate\\Support\\Str',
              'image' => 'Intervention\\Image\\Facades\\Image',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getInstance',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'make',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setWidthHeight',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'width',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'height',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mergeVars',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'vars',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getVars',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setData',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'Illuminate\\Support\\Collection',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setType',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setColor',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'color',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setFont',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'style',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'size',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        21 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'build',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        22 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'filename',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        23 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getGraph',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Amenadiel\\JpGraph\\Graph\\Graph',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\BarTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\CommonTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\CommonTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\HorizbarTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\HorizbarTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\LineTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\MixedTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\MixedTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\OdometerTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\OdometerTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngineTraits\\PieTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartEngines\\Traits\\ChartEngineTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Chart\\Services\\ChartEngines\\Traits\\ChartEngineTrait',
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartJsBuilder.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Services\\ChartJsBuilder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getInstance',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     */',
             'namespace' => 'Modules\\Chart\\Services',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'arr' => 'Illuminate\\Support\\Arr',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'make',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     */',
             'namespace' => 'Modules\\Chart\\Services',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'arr' => 'Illuminate\\Support\\Arr',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'name',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'element',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $element
     */',
             'namespace' => 'Modules\\Chart\\Services',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'arr' => 'Illuminate\\Support\\Arr',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'element',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'labels',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'labels',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'datasets',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'datasets',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'type',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'size',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'size',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'options',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'optionsRaw',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'optionsRaw',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\Services\\ChartService.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\Services\\ChartService',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * ChartService.
 * */',
         'namespace' => 'Modules\\Chart\\Services',
         'uses' => 
        array (
          'exception' => 'Exception',
          'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
          'collection' => 'Illuminate\\Support\\Collection',
          'file' => 'Illuminate\\Support\\Facades\\File',
          'str' => 'Illuminate\\Support\\Str',
          'chartenginecontract' => 'Modules\\Chart\\Contracts\\ChartEngineContract',
          'chartjsengine' => 'Modules\\Chart\\Services\\ChartEngines\\ChartJsEngine',
          'jpgraphengine' => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine',
          'fileservice' => 'Modules\\Xot\\Services\\FileService',
          'htmlservice' => 'Modules\\Xot\\Services\\HtmlService',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getInstance',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'make',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setData',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'Illuminate\\Support\\Collection',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setWidthHeight',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'width',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hight',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setColor',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'color',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setFont',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'family',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'style',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'size',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mergeVars',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'vars',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getVars',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setType',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toHtml',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     */',
             'namespace' => 'Modules\\Chart\\Services',
             'uses' => 
            array (
              'exception' => 'Exception',
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'collection' => 'Illuminate\\Support\\Collection',
              'file' => 'Illuminate\\Support\\Facades\\File',
              'str' => 'Illuminate\\Support\\Str',
              'chartenginecontract' => 'Modules\\Chart\\Contracts\\ChartEngineContract',
              'chartjsengine' => 'Modules\\Chart\\Services\\ChartEngines\\ChartJsEngine',
              'jpgraphengine' => 'Modules\\Chart\\Services\\ChartEngines\\JpgraphEngine',
              'fileservice' => 'Modules\\Xot\\Services\\FileService',
              'htmlservice' => 'Modules\\Xot\\Services\\HtmlService',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setEngine',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getImg',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toPdf',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\View\\Components\\Chartjs\\Base.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\View\\Components\\Chartjs\\Base',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class Base.
 */',
         'namespace' => 'Modules\\Chart\\View\\Components\\Chartjs',
         'uses' => 
        array (
          'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
          'component' => 'Illuminate\\View\\Component',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'type',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'title',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'labels',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'data',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'chartid',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new component instance.
     *
     * @return void
     */',
             'namespace' => 'Modules\\Chart\\View\\Components\\Chartjs',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'component' => 'Illuminate\\View\\Component',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'chartid',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'labels',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'title',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represent the component.
     */',
             'namespace' => 'Modules\\Chart\\View\\Components\\Chartjs',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'component' => 'Illuminate\\View\\Component',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'D:\\var\\www\\_bases\\base_dev01\\laravel\\Modules\\Chart\\View\\Components\\Graph.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Chart\\View\\Components\\Graph',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class Chart.
 */',
         'namespace' => 'Modules\\Chart\\View\\Components',
         'uses' => 
        array (
          'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'component' => 'Illuminate\\View\\Component',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'type',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'url',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'graph_id',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'colors',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Contracts\\Support\\Renderable',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
