<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea37f1bdc06fb913a297b4cc5ea88349
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Muda\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Muda\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Bridges\\CacheDI\\CacheExtension' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheDI/CacheExtension.php',
        'Nette\\Bridges\\CacheLatte\\CacheExtension' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheLatte/CacheExtension.php',
        'Nette\\Bridges\\CacheLatte\\CacheMacro' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheLatte/CacheMacro.php',
        'Nette\\Bridges\\CacheLatte\\Nodes\\CacheNode' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheLatte/Nodes/CacheNode.php',
        'Nette\\Bridges\\CacheLatte\\Runtime' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheLatte/Runtime.php',
        'Nette\\Bridges\\DatabaseDI\\DatabaseExtension' => __DIR__ . '/..' . '/nette/database/src/Bridges/DatabaseDI/DatabaseExtension.php',
        'Nette\\Bridges\\DatabaseTracy\\ConnectionPanel' => __DIR__ . '/..' . '/nette/database/src/Bridges/DatabaseTracy/ConnectionPanel.php',
        'Nette\\Caching\\BulkReader' => __DIR__ . '/..' . '/nette/caching/src/Caching/BulkReader.php',
        'Nette\\Caching\\BulkWriter' => __DIR__ . '/..' . '/nette/caching/src/Caching/BulkWriter.php',
        'Nette\\Caching\\Cache' => __DIR__ . '/..' . '/nette/caching/src/Caching/Cache.php',
        'Nette\\Caching\\IBulkReader' => __DIR__ . '/..' . '/nette/caching/src/compatibility.php',
        'Nette\\Caching\\IStorage' => __DIR__ . '/..' . '/nette/caching/src/compatibility.php',
        'Nette\\Caching\\OutputHelper' => __DIR__ . '/..' . '/nette/caching/src/Caching/OutputHelper.php',
        'Nette\\Caching\\Storage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storage.php',
        'Nette\\Caching\\Storages\\DevNullStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/DevNullStorage.php',
        'Nette\\Caching\\Storages\\FileStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/FileStorage.php',
        'Nette\\Caching\\Storages\\IJournal' => __DIR__ . '/..' . '/nette/caching/src/compatibility.php',
        'Nette\\Caching\\Storages\\Journal' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/Journal.php',
        'Nette\\Caching\\Storages\\MemcachedStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/MemcachedStorage.php',
        'Nette\\Caching\\Storages\\MemoryStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/MemoryStorage.php',
        'Nette\\Caching\\Storages\\SQLiteJournal' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/SQLiteJournal.php',
        'Nette\\Caching\\Storages\\SQLiteStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/SQLiteStorage.php',
        'Nette\\Database\\Connection' => __DIR__ . '/..' . '/nette/database/src/Database/Connection.php',
        'Nette\\Database\\ConnectionException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\ConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\Context' => __DIR__ . '/..' . '/nette/database/src/compatibility.php',
        'Nette\\Database\\Conventions' => __DIR__ . '/..' . '/nette/database/src/Database/Conventions.php',
        'Nette\\Database\\Conventions\\AmbiguousReferenceKeyException' => __DIR__ . '/..' . '/nette/database/src/Database/Conventions/AmbiguousReferenceKeyException.php',
        'Nette\\Database\\Conventions\\DiscoveredConventions' => __DIR__ . '/..' . '/nette/database/src/Database/Conventions/DiscoveredConventions.php',
        'Nette\\Database\\Conventions\\StaticConventions' => __DIR__ . '/..' . '/nette/database/src/Database/Conventions/StaticConventions.php',
        'Nette\\Database\\DateTime' => __DIR__ . '/..' . '/nette/database/src/Database/DateTime.php',
        'Nette\\Database\\Driver' => __DIR__ . '/..' . '/nette/database/src/Database/Driver.php',
        'Nette\\Database\\DriverException' => __DIR__ . '/..' . '/nette/database/src/Database/DriverException.php',
        'Nette\\Database\\Drivers\\MsSqlDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/MsSqlDriver.php',
        'Nette\\Database\\Drivers\\MySqlDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/MySqlDriver.php',
        'Nette\\Database\\Drivers\\OciDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/OciDriver.php',
        'Nette\\Database\\Drivers\\OdbcDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/OdbcDriver.php',
        'Nette\\Database\\Drivers\\PgSqlDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/PgSqlDriver.php',
        'Nette\\Database\\Drivers\\SqliteDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/SqliteDriver.php',
        'Nette\\Database\\Drivers\\SqlsrvDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/SqlsrvDriver.php',
        'Nette\\Database\\Explorer' => __DIR__ . '/..' . '/nette/database/src/Database/Explorer.php',
        'Nette\\Database\\ForeignKeyConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\Helpers' => __DIR__ . '/..' . '/nette/database/src/Database/Helpers.php',
        'Nette\\Database\\IConventions' => __DIR__ . '/..' . '/nette/database/src/compatibility-intf.php',
        'Nette\\Database\\IRow' => __DIR__ . '/..' . '/nette/database/src/Database/IRow.php',
        'Nette\\Database\\IRowContainer' => __DIR__ . '/..' . '/nette/database/src/Database/IRowContainer.php',
        'Nette\\Database\\IStructure' => __DIR__ . '/..' . '/nette/database/src/Database/IStructure.php',
        'Nette\\Database\\ISupplementalDriver' => __DIR__ . '/..' . '/nette/database/src/compatibility-intf.php',
        'Nette\\Database\\NotNullConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\Reflection' => __DIR__ . '/..' . '/nette/database/src/Database/Reflection.php',
        'Nette\\Database\\Reflection\\Column' => __DIR__ . '/..' . '/nette/database/src/Database/Reflection/Column.php',
        'Nette\\Database\\Reflection\\ForeignKey' => __DIR__ . '/..' . '/nette/database/src/Database/Reflection/ForeignKey.php',
        'Nette\\Database\\Reflection\\Index' => __DIR__ . '/..' . '/nette/database/src/Database/Reflection/Index.php',
        'Nette\\Database\\Reflection\\Table' => __DIR__ . '/..' . '/nette/database/src/Database/Reflection/Table.php',
        'Nette\\Database\\ResultSet' => __DIR__ . '/..' . '/nette/database/src/Database/ResultSet.php',
        'Nette\\Database\\Row' => __DIR__ . '/..' . '/nette/database/src/Database/Row.php',
        'Nette\\Database\\SqlLiteral' => __DIR__ . '/..' . '/nette/database/src/Database/SqlLiteral.php',
        'Nette\\Database\\SqlPreprocessor' => __DIR__ . '/..' . '/nette/database/src/Database/SqlPreprocessor.php',
        'Nette\\Database\\Structure' => __DIR__ . '/..' . '/nette/database/src/Database/Structure.php',
        'Nette\\Database\\Table\\ActiveRow' => __DIR__ . '/..' . '/nette/database/src/Database/Table/ActiveRow.php',
        'Nette\\Database\\Table\\GroupedSelection' => __DIR__ . '/..' . '/nette/database/src/Database/Table/GroupedSelection.php',
        'Nette\\Database\\Table\\IRow' => __DIR__ . '/..' . '/nette/database/src/Database/Table/IRow.php',
        'Nette\\Database\\Table\\IRowContainer' => __DIR__ . '/..' . '/nette/database/src/Database/Table/IRowContainer.php',
        'Nette\\Database\\Table\\Selection' => __DIR__ . '/..' . '/nette/database/src/Database/Table/Selection.php',
        'Nette\\Database\\Table\\SqlBuilder' => __DIR__ . '/..' . '/nette/database/src/Database/Table/SqlBuilder.php',
        'Nette\\Database\\UniqueConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\HtmlStringable' => __DIR__ . '/..' . '/nette/utils/src/HtmlStringable.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Localization\\Translator' => __DIR__ . '/..' . '/nette/utils/src/Translator.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/StaticClass.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileInfo' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileInfo.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Finder' => __DIR__ . '/..' . '/nette/utils/src/Utils/Finder.php',
        'Nette\\Utils\\Floats' => __DIR__ . '/..' . '/nette/utils/src/Utils/Floats.php',
        'Nette\\Utils\\Helpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/Helpers.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageColor' => __DIR__ . '/..' . '/nette/utils/src/Utils/ImageColor.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ImageType' => __DIR__ . '/..' . '/nette/utils/src/Utils/ImageType.php',
        'Nette\\Utils\\Iterables' => __DIR__ . '/..' . '/nette/utils/src/Utils/Iterables.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectHelpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectHelpers.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\ReflectionMethod' => __DIR__ . '/..' . '/nette/utils/src/Utils/ReflectionMethod.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\Type' => __DIR__ . '/..' . '/nette/utils/src/Utils/Type.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea37f1bdc06fb913a297b4cc5ea88349::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea37f1bdc06fb913a297b4cc5ea88349::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea37f1bdc06fb913a297b4cc5ea88349::$classMap;

        }, null, ClassLoader::class);
    }
}
