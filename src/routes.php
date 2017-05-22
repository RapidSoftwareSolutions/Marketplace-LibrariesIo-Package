<?php
$routes = [
    'metadata',
    'getPackageManagers',
    'getProjectInfo',
    'getProjectDependencies',
    'getProjectDependents',
    'getProjectDependentRepositories',
    'searchProjects',
    'getRepositoryInfo',
    'getRepositoryDependencies',
    'getRepositoryProjects',
    'getUserInfo',
    'getUserRepositories',
    'getUserProjects',
    'getUserSubscriptions',
    'subscribeToProject',
    'checkUserSubscription',
    'updateSubscription',
    'unsubscribeFromProject'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

