<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');
class SteamWebTest extends BaseTestCase {

    public function testListMetrics() {

        $routes = [
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
            'getNewsForApp'

        ];

        foreach($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/SteamWeb/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file.' method');
        }
    }

}
