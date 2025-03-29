<?php return array (
  'providers' => 
  array (
    0 => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    1 => 'Laravel\\Breeze\\BreezeServiceProvider',
    2 => 'Laravel\\Sail\\SailServiceProvider',
    3 => 'Laravel\\Sanctum\\SanctumServiceProvider',
    4 => 'Laravel\\Tinker\\TinkerServiceProvider',
    5 => 'Carbon\\Laravel\\ServiceProvider',
    6 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    7 => 'Termwind\\Laravel\\TermwindServiceProvider',
    8 => 'Spatie\\LaravelIgnition\\IgnitionServiceProvider',
    9 => 'App\\Providers\\RouteServiceProvider',
    10 => 'App\\Providers\\AppServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Laravel\\Sanctum\\SanctumServiceProvider',
    1 => 'Carbon\\Laravel\\ServiceProvider',
    2 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    3 => 'Termwind\\Laravel\\TermwindServiceProvider',
    4 => 'Spatie\\LaravelIgnition\\IgnitionServiceProvider',
    5 => 'App\\Providers\\RouteServiceProvider',
    6 => 'App\\Providers\\AppServiceProvider',
  ),
  'deferred' => 
  array (
    'Barryvdh\\LaravelIdeHelper\\Console\\GeneratorCommand' => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    'Barryvdh\\LaravelIdeHelper\\Console\\ModelsCommand' => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    'Barryvdh\\LaravelIdeHelper\\Console\\MetaCommand' => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    'Barryvdh\\LaravelIdeHelper\\Console\\EloquentCommand' => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    'Laravel\\Breeze\\Console\\InstallCommand' => 'Laravel\\Breeze\\BreezeServiceProvider',
    'Laravel\\Sail\\Console\\InstallCommand' => 'Laravel\\Sail\\SailServiceProvider',
    'Laravel\\Sail\\Console\\PublishCommand' => 'Laravel\\Sail\\SailServiceProvider',
    'command.tinker' => 'Laravel\\Tinker\\TinkerServiceProvider',
  ),
  'when' => 
  array (
    'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider' => 
    array (
    ),
    'Laravel\\Breeze\\BreezeServiceProvider' => 
    array (
    ),
    'Laravel\\Sail\\SailServiceProvider' => 
    array (
    ),
    'Laravel\\Tinker\\TinkerServiceProvider' => 
    array (
    ),
  ),
);