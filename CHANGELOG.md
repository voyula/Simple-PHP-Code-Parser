# Changelog

### 0.13.1 (2020-07-21)

- "PhpCodeParser" -> fix for inheritdoc comments

### 0.13.0 (2020-07-16)

- "PHPTrait" -> add support for "Trait"-files

### 0.12.0 (2020-07-05)

- "PhpCodeParser" -> fix cache key
- "PhpCodeChecker" -> fix the autoloader parameter

### 0.11.0 (2020-06-18)

- "PHPInterface" -> fix recursion
- "PhpCodeParser" -> analyse only ".php" files in the given path

### 0.10.0 (2020-06-18)

- "PhpCodeParser" -> ignore errors outside the current file-path-scope
- "PhpCodeParser" -> use more generic autoloader logic
- "PhpCodeChecker" -> fix more inheritdoc errors

### 0.9.0 (2020-06-16) 

- "PhpCodeChecker" -> check wrong phpdocs from class properties
- "PhpCodeParser" -> allow to exclude some files

### 0.8.0 (2020-06-16)

- replace PhpReflection with BetterReflection v2
- fix bugs reported by PhpStan & PhpCodeCheck

### 0.7.0 (2020-06-02)

- replace PhpReflection with BetterReflection

### 0.6.0 (2020-05-25)

- "PhpCodeParser" -> fetch phpdoc-data for @inheritdoc

### 0.5.0 (2020-05-25)

- "ParserErrorHandler" -> show more parsing errors in the results
- "PHPInterface" -> fix PhpReflection usage
- "PHPDefineConstant" -> fix php warning

### 0.4.2 (2020-05-23)

- "PhpCodeChecker" -> fix "$skipMixedTypesAsError" usage 

### 0.4.1 (2020-05-23)

- "PHPFunction" -> fix phpdoc parsing error

### 0.4.0 (2020-05-23)

- add default values for parameter and properties
- add types from default values
- normalize types (e.g. double => float)

### 0.3.0 (2020-05-20)

- "PHPClass" fix phpdoc
- add "PhpCodeChecker"-class

### 0.2.1 (2020-05-20)

- fix code issues reported by psalm + phpstan

### 0.2.0 (2020-05-19)

- use "amphp/parallel" for async code analyse per file

### 0.1.0 (2020-05-14)

- init (forked from "JetBrains/phpstorm-stubs")
- add "PHPProperties"
- add "PHP Reflection" AND / OR "nikic/PHP-Parser"
- get phpdocs types via phpDocumentor (+ psalm)
