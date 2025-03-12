protected $middlewareGroups = [
    'web' => [
        // Other middleware
        \App\Http\Middleware\ShareCartCount::class,
    ],
];