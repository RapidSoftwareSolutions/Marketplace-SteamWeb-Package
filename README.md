[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/SteamWeb/functions?utm_source=RapidAPIGitHub_SteamWebFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# SteamWeb Package
SteamWeb
* Domain: [Steam Web API](http://steampowered.com)
* Credentials: apiKey

## How to get credentials: 
0. Go to [Steam Website](http://steampowered.com)
1. Register or log in
2. Go to [Dev page](http://steamcommunity.com/dev/registerkey) to get your apiKey
 

## SteamWeb.getNewsForApp
Returns the latest news of a game specified by its appId.

| Field    | Type  | Description
|----------|-------|----------
| appId    | Number| Id of the game you want the news of
| version  | String| Version of the API, default v0002 in this method
| count    | Number| How many news entries you want to get returned.
| maxLength| Number| Maximum length of each news entry.

## SteamWeb.getGlobalAchievementPercentagesForApp
Returns on global achievements overview of a specific game in percentages.

| Field  | Type  | Description
|--------|-------|----------
| appId  | Number| Id of the game you want the percentage of
| version| String| Version of the API, default v0002 in this method

## SteamWeb.getGlobalStatsForGame
Returns the global stats of a game specified by its appId.

| Field           | Type  | Description
|-----------------|-------|----------
| appId           | Number| Id of the game you want the news of
| version         | String| Version of the API, default v0001 in this method
| count           | Number| Length of the array of global stat names you will be passing.
| achievementNames| Array | Name of the achievement as defined in Steamworks.

## SteamWeb.getPlayerSummaries
Returns basic profile information for a list of 64-bit Steam IDs.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Steam
| steamIds| String     | Comma-delimited list of 64 bit Steam IDs to return profile information for. Up to 100 Steam IDs can be requested.
| version | String     | Version of the API, default v0002 in this method

## SteamWeb.getFriendList
Returns the friend list of any Steam user, provided his Steam Community profile visibility is set to "Public".

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your api key from Steam
| steamId     | Number     | 64 bit Steam ID to return friend list for.
| version     | String     | Version of the API, default v0001 in this method
| relationship| String     | Relationship filter. Possibles values: all, friend.

## SteamWeb.getPlayerAchievements
Returns a list of achievements for this user by app id

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Steam
| steamId | Number     | 64 bit Steam ID to return friend list for.
| appId   | Number     | The ID for the game you're requesting
| version | String     | Version of the API, default v0001 in this method
| language| String     | Language. If specified, it will return language data for the requested language.

## SteamWeb.getUserStatsForGame
Returns a list of achievements for this user by app id

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Steam
| steamId | Number     | 64 bit Steam ID to return friend list for.
| appId   | Number     | The ID for the game you're requesting
| version | String     | Version of the API, default v0001 in this method
| language| String     | Language. If specified, it will return language data for the requested language.

## SteamWeb.getOwnedGames
GetOwnedGames returns a list of games a player owns along with some playtime information, if the profile is publicly visible. 

| Field                 | Type       | Description
|-----------------------|------------|----------
| apiKey                | credentials| Your api key from Steam
| steamId               | Number     | 64 bit Steam ID to return game list for.
| version               | String     | Version of the API, default v0001 in this method
| includeAppinfo        | Boolean    | Include game name and logo information in the output. The default is to return appids only.
| includePlayedFreeGames| Boolean    | By default, free games like Team Fortress 2 are excluded (as technically everyone owns them).

## SteamWeb.getRecentlyPlayedGames
GetOwnedGames returns a list of games a player owns along with some playtime information, if the profile is publicly visible. 

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your api key from Steam
| steamId| Number     | 64 bit Steam ID to return played games list for.
| version| String     | Version of the API, default v0001 in this method
| count  | Number     | Optionally limit to a certain number of games (the number of games a person has played in the last 2 weeks is typically very small) format

## SteamWeb.isPlayingSharedGame
IsPlayingSharedGame returns the original owner's SteamID if a borrowing account is currently playing this game. If the game is not borrowed or the borrower currently doesn't play this game, the result is always 0.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your api key from Steam
| steamId| Number     | The SteamID of the account playing.
| version| String     | Version of the API, default v0001 in this method
| appId  | Number     | The AppID of the game currently playing

## SteamWeb.getSchemaForGame
GetSchemaForGame returns game name, gamev ersion and available game stats(achievements and stats).

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Steam
| appId   | Number     | The ID for the game you're requesting
| version | String     | Version of the API, default v2 in this method
| language| String     | Language. If specified, it will return language data for the requested language.

## SteamWeb.getPlayerBans
GetPlayerBans returns Community, VAC, and Economy ban statuses for given players.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your api key from Steam
| steamId| Number     | The SteamID of the account playing.
| version| String     | Version of the API, default v1 in this method

## SteamWeb.getAppList
Get full list of apps

| Field  | Type  | Description
|--------|-------|----------
| version| String| Version of the API, default v2 in this method

## SteamWeb.serverAddress
Get full list of apps

| Field        | Type  | Description
|--------------|-------|----------
| serverAddress| String| Server address
| version      | String| Version of the API, default v1 in this method

## SteamWeb.upToDateCheck
Check your server app version

| Field     | Type  | Description
|-----------|-------|----------
| appId     | Number| Id of the app
| appVersion| Number| Version of the app
| version   | String| Version of the API, default v1 in this method

## SteamWeb.getNumberOfCurrentPlayers
Count number of current players for the app

| Field  | Type  | Description
|--------|-------|----------
| appId  | Number| Id of the app
| version| String| Version of the API, default v1 in this method

