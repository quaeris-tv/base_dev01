<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1671793005,
	'meta' => array (
  'cacheVersion' => 'v10-collectedData',
  'phpstanVersion' => '1.9.4',
  'phpVersion' => 80107,
  'projectConfig' => '{parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], excludePaths: {analyseAndScan: [*.blade.php, /var/www/html/_bases/base_dev01/laravel/build/*, /var/www/html/_bases/base_dev01/laravel/*/build/*, /var/www/html/_bases/base_dev01/laravel/vendor/*, /var/www/html/_bases/base_dev01/laravel/*/vendor/*, /var/www/html/_bases/base_dev01/laravel/docs/*, /var/www/html/_bases/base_dev01/laravel/*/docs/*, /var/www/html/_bases/base_dev01/laravel/Tests/*, /var/www/html/_bases/base_dev01/laravel/*/Tests/*, /var/www/html/_bases/base_dev01/laravel/*/lang/*, /var/www/html/_bases/base_dev01/laravel/_ide_helper.php, /var/www/html/_bases/base_dev01/laravel/*/_ide_helper.php], analyse: []}, mixinExcludeClasses: [Eloquent], bootstrapFiles: [/var/www/html/_bases/base_dev01/laravel/vendor/nunomaduro/larastan/bootstrap.php, /var/www/html/_bases/base_dev01/laravel/Modules/Xot/Services/vendor/autoload.php], checkOctaneCompatibility: false, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], checkModelProperties: false, checkPhpDocMissingReturn: false, level: 5, paths: [/var/www/html/_bases/base_dev01/laravel/Modules], scanFiles: [/var/www/html/_bases/base_dev01/laravel/Modules/Xot/Helpers/Helper.php, /var/www/html/_bases/base_dev01/laravel/vendor/amenadiel/jpgraph/src/config.inc.php], tmpDir: /var/www/html/_bases/base_dev01/laravel/build/phpstan, reportUnmatchedIgnoredErrors: false, checkMissingIterableValueType: false, checkGenericClassInNonGenericObjectType: false}, conditionalTags: {NunoMaduro\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule: {phpstan.rules.rule: %checkModelProperties%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule: {phpstan.rules.rule: %checkModelProperties%}}, services: [{class: NunoMaduro\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Types\\RelationDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelRelationsDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Support\\CollectionHelper}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ViewExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionFilterDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: NunoMaduro\\Larastan\\Rules\\NoModelMakeRule}, {class: NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Types\\RelationParserHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%}}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertiesRuleHelper}, {class: NunoMaduro\\Larastan\\Rules\\ModelRuleHelper}, {class: NunoMaduro\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, NunoMaduro\\Larastan\\Properties\\Schema\\PhpMyAdminDataTypeToPhpTypeConverter, {class: NunoMaduro\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}], rules: [NunoMaduro\\Larastan\\Rules\\RelationExistenceRule, NunoMaduro\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, NunoMaduro\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, NunoMaduro\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule]}',
  'analysedPaths' => 
  array (
    0 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo',
  ),
  'scannedFiles' => 
  array (
    '/var/www/html/_bases/base_dev01/laravel/Modules/Xot/Helpers/Helper.php' => '4241d73756e7d494187eca8683f6b594d4543538',
    '/var/www/html/_bases/base_dev01/laravel/vendor/amenadiel/jpgraph/src/config.inc.php' => '22cdfa9e79303335c5af30ec80c8e531f3187f76',
  ),
  'composerLocks' => 
  array (
    '/var/www/html/_bases/base_dev01/laravel/composer.lock' => '35d9d22f1df00eb2399157ebbc1936256ffbcc36',
  ),
  'composerInstalled' => 
  array (
    '/var/www/html/_bases/base_dev01/laravel/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'amenadiel/jpgraph' => 
        array (
          'pretty_version' => 'v4.1.1',
          'version' => '4.1.1.0',
          'reference' => 'e196d51a520a4182cc26240b4a0744495706f11a',
          'type' => 'library',
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../amenadiel/jpgraph',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../barryvdh/laravel-debugbar',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../barryvdh/laravel-ide-helper',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../barryvdh/reflection-docblock',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../brick/math',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../calebporzio/sushi',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../cknow/laravel-money',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/./pcre',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../defuse/php-encryption',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../dflydev/dot-access-data',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../doctrine/cache',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../doctrine/dbal',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../doctrine/deprecations',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../doctrine/event-manager',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../doctrine/inflector',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../doctrine/instantiator',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../doctrine/lexer',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../dragonmantank/cron-expression',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../egulias/email-validator',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../fakerphp/faker',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../filp/whoops',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../firebase/php-jwt',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../fruitcake/php-cors',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../genealabs/laravel-model-caching',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../genealabs/laravel-pivot-events',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../graham-campbell/result-type',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../guzzlehttp/guzzle',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../guzzlehttp/promises',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../guzzlehttp/psr7',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../hamcrest/hamcrest-php',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../intervention/image',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../intervention/imagecache',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../kalnoy/nestedset',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../laravel/framework',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../laravel/passport',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../laravel/pint',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../laravel/sail',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../laravel/sanctum',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../laravel/serializable-closure',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../laravel/socialite',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../laravel/tinker',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../laravel/ui',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../laravelcollective/html',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../lcobucci/clock',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../lcobucci/jwt',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../league/commonmark',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../league/config',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../league/event',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../league/flysystem',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../league/glide',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../league/mime-type-detection',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../league/oauth1-client',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../league/oauth2-server',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../league/uri',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/livewire' => 
        array (
          'pretty_version' => 'v2.10.8',
          'version' => '2.10.8.0',
          'reference' => '4cc5dedaab1e9512efb4d528fde67df98e9b465a',
          'type' => 'library',
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../livewire/livewire',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../maennchen/zipstream-php',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../masterminds/html5',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../maximebf/debugbar',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../mcamara/laravel-localization',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../mockery/mockery',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../moneyphp/money',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../monolog/monolog',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../mustache/mustache',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../myclabs/deep-copy',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../myclabs/php-enum',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../nesbot/carbon',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../nette/schema',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../nette/utils',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../nicmart/tree',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../nikic/php-parser',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../nunomaduro/collision',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../nunomaduro/larastan',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../nunomaduro/termwind',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../nwidart/laravel-modules',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../nyholm/psr7',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../opis/closure',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../orchestra/testbench',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../orchestra/testbench-core',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../paragonie/constant_time_encoding',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../paragonie/random_compat',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phar-io/manifest',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phar-io/version',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../php-http/message-factory',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpdocumentor/reflection-common',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpdocumentor/type-resolver',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpmyadmin/sql-parser',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpoption/phpoption',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpseclib/phpseclib',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpstan/phpstan',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpunit/php-code-coverage',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpunit/php-file-iterator',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpunit/php-invoker',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpunit/php-text-template',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpunit/php-timer',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../phpunit/phpunit',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../pimple/pimple',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../psr/cache',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../psr/clock',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../psr/container',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../psr/event-dispatcher',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../psr/http-client',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../psr/http-factory',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../psr/http-message',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../psr/log',
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
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../psr/simple-cache',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../psy/psysh',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../ralouphie/getallheaders',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../ramsey/collection',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../ramsey/uuid',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/cli-parser',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/code-unit',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/code-unit-reverse-lookup',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/comparator',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/complexity',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/diff',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/environment',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/exporter',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/global-state',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/lines-of-code',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/object-enumerator',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/object-reflector',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/recursion-context',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/resource-operations',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/type',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../sebastian/version',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/backtrace',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/browsershot',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/crawler',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/eloquent-sortable',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/flare-client-php',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/ignition',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/image',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/image-optimizer',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-cookie-consent',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-dashboard',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-dashboard-time-weather-tile',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-data',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-database-mail-templates',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-ignition',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-medialibrary',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-model-info' => 
        array (
          'pretty_version' => '1.4.2',
          'version' => '1.4.2.0',
          'reference' => '27b1e7bcda87a87276665d3835b5b08fcffe034f',
          'type' => 'library',
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-model-info',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-model-status',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-package-tools',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-permission',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-query-builder',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-queueable-action',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-ray',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-sitemap',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-sluggable',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-tags',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-translatable' => 
        array (
          'pretty_version' => '6.2.0',
          'version' => '6.2.0.0',
          'reference' => 'e001426def09342dd2723bf28c7a9313621f1d69',
          'type' => 'library',
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/laravel-translatable',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/macroable',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/ray',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/robots-txt',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/sun',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../spatie/temporary-directory',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../staudenmeir/eloquent-has-many-deep',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../staudenmeir/eloquent-has-many-deep-contracts',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../stella-maris/clock',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/console',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/css-selector',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/deprecation-contracts',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/dom-crawler',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/error-handler',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/event-dispatcher',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/event-dispatcher-contracts',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/finder',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/http-foundation',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/http-kernel',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/mailer',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/mime',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/polyfill-ctype',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/polyfill-iconv',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/polyfill-intl-grapheme',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/polyfill-intl-idn',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/polyfill-intl-normalizer',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/polyfill-mbstring',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/polyfill-php72',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/polyfill-php80',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/polyfill-php81',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/polyfill-uuid',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/process',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/psr-http-message-bridge',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/routing',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/service-contracts',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/stopwatch',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/string',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/translation',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/translation-contracts',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/uid',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/var-dumper',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../symfony/yaml',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../theseer/tokenizer',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../tijsverkoyen/css-to-inline-styles',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../unisharp/laravel-filemanager',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../vlucas/phpdotenv',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../voku/portable-ascii',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'wire-elements/pro' => 
        array (
          'pretty_version' => '3.0.6',
          'version' => '3.0.6.0',
          'reference' => '398e4e441078be27eee5bf30329f9e13578f03bd',
          'type' => 'library',
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../wire-elements/pro',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../zbateson/mail-mime-parser',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../zbateson/mb-wrapper',
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
          'install_path' => '/var/www/html/_bases/base_dev01/laravel/vendor/composer/../zbateson/stream-decorators',
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
    '/var/www/html/_bases/base_dev01/laravel/Modules/Xot/Services/vendor/autoload.php' => '3cec33c35f30bab49fdafbc6e37221699aac5569',
    '/var/www/html/_bases/base_dev01/laravel/vendor/nunomaduro/larastan/bootstrap.php' => '8004bf4a0a0809c507190a9ed3f6544fd9adf804',
    'phar:///var/www/html/_bases/base_dev01/laravel/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///var/www/html/_bases/base_dev01/laravel/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///var/www/html/_bases/base_dev01/laravel/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///var/www/html/_bases/base_dev01/laravel/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'bz2',
    10 => 'calendar',
    11 => 'ctype',
    12 => 'curl',
    13 => 'date',
    14 => 'dom',
    15 => 'exif',
    16 => 'fileinfo',
    17 => 'filter',
    18 => 'ftp',
    19 => 'gd',
    20 => 'gettext',
    21 => 'hash',
    22 => 'iconv',
    23 => 'imap',
    24 => 'intl',
    25 => 'json',
    26 => 'libxml',
    27 => 'mbstring',
    28 => 'mysqli',
    29 => 'mysqlnd',
    30 => 'openssl',
    31 => 'pcntl',
    32 => 'pcre',
    33 => 'pdo_mysql',
    34 => 'pdo_sqlite',
    35 => 'posix',
    36 => 'readline',
    37 => 'session',
    38 => 'shmop',
    39 => 'sockets',
    40 => 'sodium',
    41 => 'sqlite3',
    42 => 'standard',
    43 => 'sysvmsg',
    44 => 'sysvsem',
    45 => 'sysvshm',
    46 => 'tokenizer',
    47 => 'xml',
    48 => 'xmlreader',
    49 => 'xmlwriter',
    50 => 'xsl',
    51 => 'zip',
    52 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/GetLatitudeLongitudeAction.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method object::getAttributeValue().',
       'file' => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/GetLatitudeLongitudeAction.php',
       'line' => 55,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/GetLatitudeLongitudeAction.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 55,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method object::fill().',
       'file' => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/GetLatitudeLongitudeAction.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/GetLatitudeLongitudeAction.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method object::save().',
       'file' => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/GetLatitudeLongitudeAction.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/GetLatitudeLongitudeAction.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Config/config.php' => 
  array (
    'fileHash' => 'ce4c4ba2ee553395f8aa57c54dcd71232e6ae76c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Database/Factories/PlaceFactory.php' => 
  array (
    'fileHash' => '071b67c5191f740ab51bda3a722fe97fc30d60b0',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Database/Migrations/2021_01_01_000011_create_places_table.php',
      1 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/FillplacesAction.php',
      2 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Place.php',
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Database/Migrations/2021_01_01_000011_create_places_table.php' => 
  array (
    'fileHash' => '032eb4e58fe40feaf4bfe45f354798d77d326bf4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Database/Seeders/GeoDatabaseSeeder.php' => 
  array (
    'fileHash' => '2f7ea30d6557473a67d35b0ce638ef5d867aee7f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Http/Livewire/FormSearchAddressCategories.php' => 
  array (
    'fileHash' => '25e64ccb4806c42ce8c580cd60341ea2f1943b4d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Http/Livewire/Test.php' => 
  array (
    'fileHash' => 'b0ef999a2f42feca9b74152b96cbb119cdd69e7c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/BaseModel.php' => 
  array (
    'fileHash' => '5c9241e29fbcaa96f7307382d47d7e9bd9f7819c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/BaseModelLang.php' => 
  array (
    'fileHash' => '60a39e666db87046d01931ab5d47348e8d4aacf9',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Database/Factories/PlaceFactory.php',
      1 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Database/Migrations/2021_01_01_000011_create_places_table.php',
      2 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/FillplacesAction.php',
      3 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Place.php',
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/BaseMorphPivot.php' => 
  array (
    'fileHash' => '6c0dfd44917bd13881920e88ba040bcc83928978',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/BasePivot.php' => 
  array (
    'fileHash' => '5da0b4de04fc24ed79061e1f2ef7a6fadc841ec5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/GeoNamesCap.php' => 
  array (
    'fileHash' => '0e9428b5613276a3c89ed5441b46caffa41775a1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/FillplacesAction.php' => 
  array (
    'fileHash' => '01dee3bbd037ee6b8ffaa7aa727947e1d5a1f508',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/FindNeighborsActions.php' => 
  array (
    'fileHash' => 'b8293c1cf24929626e1ab5458c80d3bdc945b286',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/GetLatitudeLongitudeAction.php' => 
  array (
    'fileHash' => 'e56ed7ec797e0a7e72f8d070e7722a686070be5d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/MakeGeoJsonFileAction.php' => 
  array (
    'fileHash' => 'bfa11238dba1980279a719f3abfb336b7d76c0a1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/TestAction.php' => 
  array (
    'fileHash' => '7680dcf393819c949cbcf524bedf10a1fe3230a7',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/_ModulePanel.php',
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/GeoNamesCapPanel.php' => 
  array (
    'fileHash' => '78aad84633f9f9d790acb7c09871473d5200c33c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/PlacePanel.php' => 
  array (
    'fileHash' => '5169e8189d91c02472a936410f9d1ae7f5338409',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Policies/GeoNamesCapPanelPolicy.php' => 
  array (
    'fileHash' => '71dbb2987ee7cc76f0880920328550c07ea9d9de',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Policies/PlacePanelPolicy.php' => 
  array (
    'fileHash' => 'ea32ffce2fcb5df59bfc41862325e05f4e78b0f5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Policies/_ModulePanelPolicy.php' => 
  array (
    'fileHash' => '917e52736eb64416d71dcdfb2cf26211d07308c1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/_ModulePanel.php' => 
  array (
    'fileHash' => '4cf32539299c6d312f1f320a864068e75bdfca9b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Place.php' => 
  array (
    'fileHash' => '775f12d97a069486dd122cae3d66e03ab659de97',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Database/Factories/PlaceFactory.php',
      1 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Database/Migrations/2021_01_01_000011_create_places_table.php',
      2 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/FillplacesAction.php',
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Traits/GeoTrait.php' => 
  array (
    'fileHash' => 'cc9cd674d39e13aa04cf338f4a8fa4954c742bc6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Traits/HasPlaceTrait.php' => 
  array (
    'fileHash' => '8e3002bd0b0949c8bdf463042fbe4bf59335f27a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Providers/GeoServiceProvider.php' => 
  array (
    'fileHash' => '8bb8b40d0b73fc38be66016bd8f4682a414fcc6a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Providers/RouteServiceProvider.php' => 
  array (
    'fileHash' => 'f72b6637c90942bb54c487e38561b354d32d5432',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Routes/api.php' => 
  array (
    'fileHash' => 'e15baf5f08125661026ed3230b03a9ea43fadef9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Routes/web.php' => 
  array (
    'fileHash' => '11e36b2dd373814430ae292307583f584b21e582',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Services/GeoService.php' => 
  array (
    'fileHash' => '0caeea33500f39ad633bf73b2d4ea0048c92d42f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Services/HereService.php' => 
  array (
    'fileHash' => 'd138ab3dacf16ab3b507cc6221f96e3163581f6e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Transformers/GeoJsonCollection.php' => 
  array (
    'fileHash' => 'b4c826696ab4889d22de87e4b095f69702cb5385',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/MakeGeoJsonFileAction.php',
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Transformers/GeoJsonResource.php' => 
  array (
    'fileHash' => '8fc663ddbb23bb36806ede946d99e4509244dee3',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Transformers/GeoJsonCollection.php',
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/View/Components/Card/Place.php' => 
  array (
    'fileHash' => 'decf6be7af4914e35c2469b377b8f02a7e880bb1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/View/Components/Dashboard/Item.php' => 
  array (
    'fileHash' => '68121afa781a4a6a7e9dacf4a7353fff62bb72a6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/View/Components/FormSearchAddressCategories.php' => 
  array (
    'fileHash' => 'a64d035a313949c0da6cc498cc8f328590a81067',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/configure.php' => 
  array (
    'fileHash' => '343dc1601f9eaef74ba9aef7441c54949ab61118',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Database/Factories/PlaceFactory.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Database\\Factories\\PlaceFactory',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class ArticleFactory.
 */',
         'namespace' => 'Modules\\Geo\\Database\\Factories',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'model' => 'Modules\\Geo\\Models\\Place',
        ),
         'constUses' => 
        array (
        ),
      )),
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
             'namespace' => 'Modules\\Geo\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'model' => 'Modules\\Geo\\Models\\Place',
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
             'namespace' => 'Modules\\Geo\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'model' => 'Modules\\Geo\\Models\\Place',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Database/Migrations/2021_01_01_000011_create_places_table.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'CreatePlacesTable',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class CreatePlacesTable.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
          'mymodel' => 'Modules\\Geo\\Models\\Place',
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
     * db up.
     *
     * @return void
     */',
             'namespace' => NULL,
             'uses' => 
            array (
              'blueprint' => 'Illuminate\\Database\\Schema\\Blueprint',
              'mymodel' => 'Modules\\Geo\\Models\\Place',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Database/Seeders/GeoDatabaseSeeder.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Database\\Seeders\\GeoDatabaseSeeder',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class GeoDatabaseSeeder.
 */',
         'namespace' => 'Modules\\Geo\\Database\\Seeders',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'seeder' => 'Illuminate\\Database\\Seeder',
        ),
         'constUses' => 
        array (
        ),
      )),
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
             'namespace' => 'Modules\\Geo\\Database\\Seeders',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Http/Livewire/FormSearchAddressCategories.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Http\\Livewire\\FormSearchAddressCategories',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Undocumented class.
 */',
         'namespace' => 'Modules\\Geo\\Http\\Livewire',
         'uses' => 
        array (
          'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
          'sessionmanager' => 'Illuminate\\Session\\SessionManager',
          'component' => 'Livewire\\Component',
          'actionservice' => 'Modules\\Xot\\Services\\ActionService',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
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
            0 => 'name',
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
            0 => 'form_data',
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
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'showActivityTypes',
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
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'enabledTypes',
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
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'warningSuggestedAddresses',
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
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'warningCivicNumber',
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
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'email',
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
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'cap',
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
            0 => 'messageError',
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
        9 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'session',
          ),
           'phpDoc' => NULL,
           'type' => 'Illuminate\\Session\\SessionManager',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        10 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mount',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mount function.
     *
     * param \\Illuminate\\View\\ComponentAttributeBag $attributes
     * param \\Illuminate\\Support\\HtmlString         $slot
     *
     * @return void
     */',
             'namespace' => 'Modules\\Geo\\Http\\Livewire',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'sessionmanager' => 'Illuminate\\Session\\SessionManager',
              'component' => 'Livewire\\Component',
              'actionservice' => 'Modules\\Xot\\Services\\ActionService',
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
               'name' => 'session',
               'type' => 'Illuminate\\Session\\SessionManager',
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
           'name' => 'render',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     */',
             'namespace' => 'Modules\\Geo\\Http\\Livewire',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'sessionmanager' => 'Illuminate\\Session\\SessionManager',
              'component' => 'Livewire\\Component',
              'actionservice' => 'Modules\\Xot\\Services\\ActionService',
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
        12 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'search',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     *
     * @return void
     */',
             'namespace' => 'Modules\\Geo\\Http\\Livewire',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'sessionmanager' => 'Illuminate\\Session\\SessionManager',
              'component' => 'Livewire\\Component',
              'actionservice' => 'Modules\\Xot\\Services\\ActionService',
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
        13 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'formatAddress',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     */',
             'namespace' => 'Modules\\Geo\\Http\\Livewire',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'sessionmanager' => 'Illuminate\\Session\\SessionManager',
              'component' => 'Livewire\\Component',
              'actionservice' => 'Modules\\Xot\\Services\\ActionService',
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
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'placeChanged',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     *
     * @return void
     */',
             'namespace' => 'Modules\\Geo\\Http\\Livewire',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'sessionmanager' => 'Illuminate\\Session\\SessionManager',
              'component' => 'Livewire\\Component',
              'actionservice' => 'Modules\\Xot\\Services\\ActionService',
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
               'name' => 'val0',
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
               'name' => 'val1',
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
        15 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'saveNotServed',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     *
     * @return void
     */',
             'namespace' => 'Modules\\Geo\\Http\\Livewire',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'sessionmanager' => 'Illuminate\\Session\\SessionManager',
              'component' => 'Livewire\\Component',
              'actionservice' => 'Modules\\Xot\\Services\\ActionService',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Http/Livewire/Test.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Http\\Livewire\\Test',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Livewire\\Component',
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
            0 => 'lookup',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Lookup intermediary.
     */',
             'namespace' => 'Modules\\Geo\\Http\\Livewire',
             'uses' => 
            array (
              'component' => 'Livewire\\Component',
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
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/BaseModel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\BaseModel',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class BaseModel.
 */',
         'namespace' => 'Modules\\Geo\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
            0 => 'fillable',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string[]
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
            0 => 'casts',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<string, string>
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/BaseModelLang.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\BaseModelLang',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class BaseModelLang.
 *
 * @property string|null $post_type
 */',
         'namespace' => 'Modules\\Geo\\Models',
         'uses' => 
        array (
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
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
        1 => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
        2 => 'Modules\\Xot\\Traits\\Updater',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
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
            0 => 'fillable',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string[]
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
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
            0 => 'casts',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<string, string>
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
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
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'linkedtrait' => 'Modules\\Lang\\Models\\Traits\\LinkedTrait',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/BaseMorphPivot.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\BaseMorphPivot',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class BaseMorphPivot.
 */',
         'namespace' => 'Modules\\Geo\\Models',
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
             'namespace' => 'Modules\\Geo\\Models',
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
            0 => 'appends',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array
     */',
             'namespace' => 'Modules\\Geo\\Models',
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
        3 => 
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
             'namespace' => 'Modules\\Geo\\Models',
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
            0 => 'incrementing',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var bool
     */',
             'namespace' => 'Modules\\Geo\\Models',
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
        5 => 
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
             'namespace' => 'Modules\\Geo\\Models',
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
            0 => 'dates',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string[]
     */',
             'namespace' => 'Modules\\Geo\\Models',
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
        7 => 
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
             'namespace' => 'Modules\\Geo\\Models',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/BasePivot.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\BasePivot',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class BasePivot.
 */',
         'namespace' => 'Modules\\Geo\\Models',
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
             'namespace' => 'Modules\\Geo\\Models',
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
             'namespace' => 'Modules\\Geo\\Models',
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
             'namespace' => 'Modules\\Geo\\Models',
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
             'namespace' => 'Modules\\Geo\\Models',
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
             'namespace' => 'Modules\\Geo\\Models',
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
             'namespace' => 'Modules\\Geo\\Models',
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
             'namespace' => 'Modules\\Geo\\Models',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/GeoNamesCap.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\GeoNamesCap',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Modules\\Geo\\Models\\GeoNamesCap.
 *
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|GeoNamesCap newModelQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|GeoNamesCap newQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|GeoNamesCap query()
 *
 * @mixin \\Eloquent
 */',
         'namespace' => 'Modules\\Geo\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'updater' => 'Modules\\Xot\\Traits\\Updater',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
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
            0 => 'table',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/FillplacesAction.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Panels\\Actions\\FillplacesAction',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class SyncInputs.
 */',
         'namespace' => 'Modules\\Geo\\Models\\Panels\\Actions',
         'uses' => 
        array (
          'xotbasepanelaction' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
          'place' => 'Modules\\Geo\\Models\\Place',
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
            0 => 'onContainer',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/FindNeighborsActions.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Panels\\Actions\\FindNeighborsActions',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class FindNeighborsActions.
 */',
         'namespace' => 'Modules\\Geo\\Models\\Panels\\Actions',
         'uses' => 
        array (
          'xotbasepanelaction' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
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
             'namespace' => 'Modules\\Geo\\Models\\Panels\\Actions',
             'uses' => 
            array (
              'xotbasepanelaction' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/GetLatitudeLongitudeAction.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Panels\\Actions\\GetLatitudeLongitudeAction',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class GetLatitudeLongitudeAction.
 */',
         'namespace' => 'Modules\\Geo\\Models\\Panels\\Actions',
         'uses' => 
        array (
          'xotbasepanelaction' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
          'importservice' => 'Modules\\Xot\\Services\\ImportService',
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
            0 => 'onContainer',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/MakeGeoJsonFileAction.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Panels\\Actions\\MakeGeoJsonFileAction',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class MakeGeoJsonFileAction.
 */',
         'namespace' => 'Modules\\Geo\\Models\\Panels\\Actions',
         'uses' => 
        array (
          'storage' => 'Illuminate\\Support\\Facades\\Storage',
          'xotbasepanelaction' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
          'geojsoncollection' => 'Modules\\Geo\\Transformers\\GeoJsonCollection',
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
            0 => 'onContainer',
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
     * @return GeoJsonCollection
     */',
             'namespace' => 'Modules\\Geo\\Models\\Panels\\Actions',
             'uses' => 
            array (
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'xotbasepanelaction' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
              'geojsoncollection' => 'Modules\\Geo\\Transformers\\GeoJsonCollection',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Actions/TestAction.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Panels\\Actions\\TestAction',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class TestAction.
 */',
         'namespace' => 'Modules\\Geo\\Models\\Panels\\Actions',
         'uses' => 
        array (
          'xotbasepanelaction' => 'Modules\\Cms\\Models\\Panels\\Actions\\XotBasePanelAction',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/GeoNamesCapPanel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Panels\\GeoNamesCapPanel',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class GeoNamesCapPanel.
 */',
         'namespace' => 'Modules\\Geo\\Models\\Panels',
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
             'namespace' => 'Modules\\Geo\\Models\\Panels',
             'uses' => 
            array (
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
             'namespace' => 'Modules\\Geo\\Models\\Panels',
             'uses' => 
            array (
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/PlacePanel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Panels\\PlacePanel',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class PlacePanel.
 */',
         'namespace' => 'Modules\\Geo\\Models\\Panels',
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
             'namespace' => 'Modules\\Geo\\Models\\Panels',
             'uses' => 
            array (
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
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
             'namespace' => 'Modules\\Geo\\Models\\Panels',
             'uses' => 
            array (
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'search',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The columns that should be searched.
     */',
             'namespace' => 'Modules\\Geo\\Models\\Panels',
             'uses' => 
            array (
              'xotbasepanel' => 'Modules\\Cms\\Models\\Panels\\XotBasePanel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'with',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The relationships that should be eager loaded on index queries.
     */',
             'namespace' => 'Modules\\Geo\\Models\\Panels',
             'uses' => 
            array (
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
           'name' => 'fieldsOld',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the fields displayed by the resource.
     */',
             'namespace' => 'Modules\\Geo\\Models\\Panels',
             'uses' => 
            array (
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
           'name' => 'fields',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the fields displayed by the resource.
     */',
             'namespace' => 'Modules\\Geo\\Models\\Panels',
             'uses' => 
            array (
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
           'name' => 'actions',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the actions available for the resource.
     */',
             'namespace' => 'Modules\\Geo\\Models\\Panels',
             'uses' => 
            array (
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Policies/GeoNamesCapPanelPolicy.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Panels\\Policies\\GeoNamesCapPanelPolicy',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Policies/PlacePanelPolicy.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Panels\\Policies\\PlacePanelPolicy',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/Policies/_ModulePanelPolicy.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Panels\\Policies\\_ModulePanelPolicy',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Panels/_ModulePanel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Panels\\_ModulePanel',
       'phpDoc' => NULL,
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Place.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Models\\Place',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Modules\\Geo\\Models\\Place.
 *
 * @property int                                                                  $id
 * @property string|null                                                          $post_type
 * @property int|null                                                             $post_id
 * @property string|null                                                          $formatted_address
 * @property string|null                                                          $latitude
 * @property string|null                                                          $longitude
 * @property string|null                                                          $premise
 * @property string|null                                                          $premise_short
 * @property string|null                                                          $locality
 * @property string|null                                                          $locality_short
 * @property string|null                                                          $postal_town
 * @property string|null                                                          $postal_town_short
 * @property string|null                                                          $administrative_area_level_3
 * @property string|null                                                          $administrative_area_level_3_short
 * @property string|null                                                          $administrative_area_level_2
 * @property string|null                                                          $administrative_area_level_2_short
 * @property string|null                                                          $administrative_area_level_1
 * @property string|null                                                          $administrative_area_level_1_short
 * @property string|null                                                          $country
 * @property string|null                                                          $country_short
 * @property string|null                                                          $street_number
 * @property string|null                                                          $street_number_short
 * @property string|null                                                          $route
 * @property string|null                                                          $route_short
 * @property string|null                                                          $postal_code
 * @property string|null                                                          $postal_code_short
 * @property string|null                                                          $googleplace_url
 * @property string|null                                                          $googleplace_url_short
 * @property string|null                                                          $point_of_interest
 * @property string|null                                                          $point_of_interest_short
 * @property string|null                                                          $political
 * @property string|null                                                          $political_short
 * @property string|null                                                          $campground
 * @property string|null                                                          $campground_short
 * @property string|null                                                          $nearest_street
 * @property string|null                                                          $created_by
 * @property string|null                                                          $updated_by
 * @property string|null                                                          $deleted_by
 * @property \\Illuminate\\Support\\Carbon|null                                      $created_at
 * @property \\Illuminate\\Support\\Carbon|null                                      $updated_at
 * @property string|null                                                          $model_type
 * @property int|null                                                             $model_id
 * @property string|null                                                          $guid
 * @property string|null                                                          $image_src
 * @property string|null                                                          $lang
 * @property string|null                                                          $subtitle
 * @property string|null                                                          $title
 * @property string|null                                                          $txt
 * @property string|null                                                          $user_handle
 * @property string                                                               $value
 * @property \\Illuminate\\Database\\Eloquent\\Collection|\\Modules\\Xot\\Models\\Image[] $images
 * @property int|null                                                             $images_count
 * @property \\Illuminate\\Database\\Eloquent\\Model|\\Eloquent                        $linked
 * @property \\Modules\\Lang\\Models\\Post|null                                       $post
 * @property \\Illuminate\\Database\\Eloquent\\Collection|\\Modules\\Lang\\Models\\Post[] $posts
 * @property int|null                                                             $posts_count
 * @property mixed                                                                $address
 * @property mixed                                                                $latlng
 * @property mixed                                                                $url
 *
 * @method static \\Modules\\Geo\\Database\\Factories\\PlaceFactory        factory(...$parameters)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         newModelQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         newQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|BaseModelLang ofItem(string $guid)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         query()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereAdministrativeAreaLevel1($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereAdministrativeAreaLevel1Short($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereAdministrativeAreaLevel2($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereAdministrativeAreaLevel2Short($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereAdministrativeAreaLevel3($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereAdministrativeAreaLevel3Short($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereCampground($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereCampgroundShort($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereCountry($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereCountryShort($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereCreatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereCreatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereDeletedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereFormattedAddress($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereGoogleplaceUrl($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereGoogleplaceUrlShort($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereLatitude($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereLocality($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereLocalityShort($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereLongitude($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereModelId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereModelType($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereNearestStreet($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePointOfInterest($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePointOfInterestShort($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePolitical($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePoliticalShort($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePostId($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePostType($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePostalCode($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePostalCodeShort($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePostalTown($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePostalTownShort($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePremise($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         wherePremiseShort($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereRoute($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereRouteShort($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereStreetNumber($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereStreetNumberShort($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereUpdatedAt($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place         whereUpdatedBy($value)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|BaseModelLang withPost(string $guid)
 *
 * @mixin \\Eloquent
 *
 * @method static \\Illuminate\\Database\\Eloquent\\Builder|Place whereAddress($value)
 */',
         'namespace' => 'Modules\\Geo\\Models',
         'uses' => 
        array (
          'exception' => 'Exception',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Geo\\Models\\BaseModelLang',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
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
     * @var string[]
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'exception' => 'Exception',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
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
            0 => 'address_components',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string[]
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'exception' => 'Exception',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'appends',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string[]
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'exception' => 'Exception',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new factory instance for the model.
     *
     * @return \\Illuminate\\Database\\Eloquent\\Factories\\Factory
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'exception' => 'Exception',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
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
        4 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getValueAttribute',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $value
     *
     * @return string
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'exception' => 'Exception',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
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
               'name' => 'value',
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
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'linked',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'exception' => 'Exception',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
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
        6 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setLatlngAttribute',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
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
        7 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setAddressAttribute',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     *
     * @param string|array $value
     */',
             'namespace' => 'Modules\\Geo\\Models',
             'uses' => 
            array (
              'exception' => 'Exception',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
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
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Traits/GeoTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Geo\\Models\\Traits\\GeoTrait',
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Models/Traits/HasPlaceTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'Modules\\Geo\\Models\\Traits\\HasPlaceTrait',
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Providers/GeoServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Providers\\GeoServiceProvider',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class GeoServiceProvider.
 */',
         'namespace' => 'Modules\\Geo\\Providers',
         'uses' => 
        array (
          'xotbaseserviceprovider' => 'Modules\\Xot\\Providers\\XotBaseServiceProvider',
        ),
         'constUses' => 
        array (
        ),
      )),
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Providers/RouteServiceProvider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Providers\\RouteServiceProvider',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class RouteServiceProvider.
 */',
         'namespace' => 'Modules\\Geo\\Providers',
         'uses' => 
        array (
          'xotbaserouteserviceprovider' => 'Modules\\Xot\\Providers\\XotBaseRouteServiceProvider',
        ),
         'constUses' => 
        array (
        ),
      )),
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
             'namespace' => 'Modules\\Geo\\Providers',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Services/GeoService.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Services\\GeoService',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class GeoService.
 */',
         'namespace' => 'Modules\\Geo\\Services',
         'uses' => 
        array (
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'latitude_field',
          ),
           'phpDoc' => NULL,
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
            0 => 'longitude_field',
          ),
           'phpDoc' => NULL,
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
           'name' => 'getInstance',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * getInstance.
     *
     * this method will return instance of the class
     */',
             'namespace' => 'Modules\\Geo\\Services',
             'uses' => 
            array (
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
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setLatitudeField',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'latitude_field',
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
           'name' => 'setLongitudeField',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'longitude_field',
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
        5 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setLatitudeLongitudeField',
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
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'latitude_field',
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
               'name' => 'longitude_field',
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
           'name' => 'distance',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?float',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lat1',
               'type' => '?float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lon1',
               'type' => '?float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lat2',
               'type' => '?float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lon2',
               'type' => '?float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'unit',
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
           'name' => 'haversine',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param float $latitude
     * @param float $longitude
     *
     * @return string
     */',
             'namespace' => 'Modules\\Geo\\Services',
             'uses' => 
            array (
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
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'latitude',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'longitude',
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
        8 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'is_in_polygon',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     */',
             'namespace' => 'Modules\\Geo\\Services',
             'uses' => 
            array (
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
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'latitude',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'longitude',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'polygon',
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
           'name' => 'pointInPolygon',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lat',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lng',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'polygon',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Services/HereService.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Services\\HereService',
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
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'base_url',
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDurationAndLength',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?array',
           'parameters' => 
          array (
            0 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lat1',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lon1',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lat2',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lon2',
               'type' => 'float',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Transformers/GeoJsonCollection.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Transformers\\GeoJsonCollection',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class GeoJsonCollection.
 */',
         'namespace' => 'Modules\\Geo\\Transformers',
         'uses' => 
        array (
          'resourcecollection' => 'Illuminate\\Http\\Resources\\Json\\ResourceCollection',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\ResourceCollection',
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
            0 => 'collects',
          ),
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var string
     */',
             'namespace' => 'Modules\\Geo\\Transformers',
             'uses' => 
            array (
              'resourcecollection' => 'Illuminate\\Http\\Resources\\Json\\ResourceCollection',
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
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param \\Illuminate\\Http\\Request $request
     *
     * @return array
     */',
             'namespace' => 'Modules\\Geo\\Transformers',
             'uses' => 
            array (
              'resourcecollection' => 'Illuminate\\Http\\Resources\\Json\\ResourceCollection',
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
               'name' => 'request',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/Transformers/GeoJsonResource.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\Transformers\\GeoJsonResource',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class GeoJsonResource.
 *
 * @property int         $id
 * @property string|null $post_type
 * @property int|null    $post_id
 * @property int|null    $url
 * @property int|null    $title
 * @property int|null    $subtitle
 * @property float|null  $ratings_avg
 * @property string|null $phone
 * @property string|null $full_address
 * @property string|null $email
 * @property float       $latitude
 * @property float       $longitude
 */',
         'namespace' => 'Modules\\Geo\\Transformers',
         'uses' => 
        array (
          'rescollection' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
          'panel' => 'Modules\\Cms\\Services\\PanelService',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
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
           'name' => 'toArray',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param \\Illuminate\\Http\\Request $request
     *
     * @return array
     */',
             'namespace' => 'Modules\\Geo\\Transformers',
             'uses' => 
            array (
              'rescollection' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
              'panel' => 'Modules\\Cms\\Services\\PanelService',
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
               'name' => 'request',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/View/Components/Card/Place.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\View\\Components\\Card\\Place',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class Place.
 */',
         'namespace' => 'Modules\\Geo\\View\\Components\\Card',
         'uses' => 
        array (
          'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'component' => 'Illuminate\\View\\Component',
          'panelservice' => 'Modules\\Cms\\Services\\PanelService',
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
            0 => 'attrs',
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
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'row',
          ),
           'phpDoc' => NULL,
           'type' => 'Illuminate\\Database\\Eloquent\\Model',
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
           'name' => '__construct',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new component instance.
     *
     * @return void
     */',
             'namespace' => 'Modules\\Geo\\View\\Components\\Card',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'component' => 'Illuminate\\View\\Component',
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
               'name' => 'row',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'class',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'style',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
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
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represent the component.
     */',
             'namespace' => 'Modules\\Geo\\View\\Components\\Card',
             'uses' => 
            array (
              'renderable' => 'Illuminate\\Contracts\\Support\\Renderable',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'component' => 'Illuminate\\View\\Component',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/View/Components/Dashboard/Item.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\View\\Components\\Dashboard\\Item',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class Field.
 */',
         'namespace' => 'Modules\\Geo\\View\\Components\\Dashboard',
         'uses' => 
        array (
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/View/Components/FormSearchAddressCategories.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Geo\\View\\Components\\FormSearchAddressCategories',
       'phpDoc' => NULL,
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
        PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     */',
             'namespace' => 'Modules\\Geo\\View\\Components',
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
  '/var/www/html/_bases/base_dev01/laravel/Modules/Geo/configure.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'ask',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'question',
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
           'name' => 'default',
           'type' => 'string',
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
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'confirm',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'bool',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'question',
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
           'name' => 'default',
           'type' => 'bool',
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
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'writeln',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'void',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'line',
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
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'run',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'command',
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
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'str_after',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'subject',
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
           'name' => 'search',
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
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'slugify',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'subject',
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
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'title_case',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'subject',
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
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'title_snake',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'subject',
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
           'name' => 'replace',
           'type' => 'string',
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
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'replace_in_file',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'void',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'file',
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
           'name' => 'replacements',
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
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'remove_prefix',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'prefix',
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
           'name' => 'content',
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
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'remove_composer_deps',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'names',
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
    11 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'remove_composer_script',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'scriptName',
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
    12 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'remove_readme_paragraphs',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'void',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'file',
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
    13 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'safeUnlink',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
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
    14 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'determineSeparator',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'path',
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
    15 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'replaceForWindows',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'array',
       'parameters' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
    16 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'replaceForAllOtherOSes',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => 'array',
       'parameters' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
