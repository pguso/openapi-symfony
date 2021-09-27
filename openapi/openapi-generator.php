<?php

$urlToOpenApiYaml = "https://raw.githubusercontent.com/OAI/OpenAPI-Specification/main/examples/v3.0/petstore.yaml";
$outputPath = "src/OpenApiBundle";

$output = shell_exec("openapi-generator-cli generate -g php-symfony -i $urlToOpenApiYaml -o $outputPath -c openapi/config.json");
echo "$output";

shell_exec("rm -rf $outputPath/Tests");
shell_exec("rm -rf $outputPath/src");

shell_exec("rm $outputPath/.coveralls.yml");
shell_exec("rm $outputPath/.gitignore");
shell_exec("rm $outputPath/.openapi-generator-ignore");
shell_exec("rm $outputPath/.php_cs.dist");
shell_exec("rm $outputPath/.travis.yml");
shell_exec("rm $outputPath/autoload.php");
shell_exec("rm $outputPath/composer.json");
shell_exec("rm $outputPath/git_push.sh");
shell_exec("rm $outputPath/phpunit.xml.dist");
shell_exec("rm $outputPath/pom.xml");

