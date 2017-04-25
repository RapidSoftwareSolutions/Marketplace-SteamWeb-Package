       <?php
       $routes = [
       'getAssetPrices',
       'getAssetClassInfo',
       'getNumberOfCurrentPlayers',
       'upToDateCheck',
       'getServersAtAddress',
       'getAppList',
       'getPlayerBans',
       'getSchemaForGame',
       'isPlayingSharedGame',
       'getRecentlyPlayedGames',
       'getOwnedGames',
       'getUserStatsForGame',
       'getPlayerAchievements',
       'getFriendList',
       'getPlayerSummaries',
       'getGlobalStatsForGame',
       'getGlobalAchievementPercentagesForApp',
        'getNewsForApp',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }

