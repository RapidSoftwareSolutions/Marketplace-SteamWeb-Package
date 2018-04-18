[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/SteamWeb/functions?utm_source=RapidAPIGitHub_SteamWebFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# SteamWeb Package
SteamWeb
* Domain: [SteamWeb](http://steampowered.com)
* Credentials: apiKey

## How to get credentials: 
0. Go to [Steam Website](https://steamcommunity.com/dev/apikey)
1. Register or log in
2. Write your domain and get your apiKey


## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

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
| achievementNames| List  | Name of the achievement as defined in Steamworks.

## SteamWeb.getPlayerSummaries
Returns basic profile information for a list of 64-bit Steam IDs.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Steam
| steamIds| List       | Array of 64 bit Steam IDs to return profile information for. Up to 100 Steam IDs can be requested.
| version | String     | Version of the API, default v0002 in this method

## SteamWeb.getFriendList
Returns the friend list of any Steam user, provided his Steam Community profile visibility is set to "Public".

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your api key from Steam
| steamId     | String     | 64 bit Steam ID to return friend list for.
| version     | String     | Version of the API, default v0001 in this method
| relationship| Select     | Relationship filter. Possibles values: all, friend.

## SteamWeb.getPlayerAchievements
Returns a list of achievements for this user by app id

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Steam
| steamId | String     | 64 bit Steam ID to return friend list for.
| appId   | Number     | The ID for the game you're requesting
| version | String     | Version of the API, default v0001 in this method
| language| String     | Language. If specified, it will return language data for the requested language.

## SteamWeb.getUserStatsForGame
Returns a list of achievements for this user by app id

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Steam
| steamId | String     | 64 bit Steam ID to return friend list for.
| appId   | Number     | The ID for the game you're requesting
| version | String     | Version of the API, default v0001 in this method
| language| String     | Language. If specified, it will return language data for the requested language.

## SteamWeb.getOwnedGames
GetOwnedGames returns a list of games a player owns along with some playtime information, if the profile is publicly visible. 

| Field                 | Type       | Description
|-----------------------|------------|----------
| apiKey                | credentials| Your api key from Steam
| steamId               | String     | 64 bit Steam ID to return game list for.
| version               | String     | Version of the API, default v0001 in this method
| includeAppinfo        | Boolean    | Include game name and logo information in the output. The default is to return appids only.
| includePlayedFreeGames| Boolean    | By default, free games like Team Fortress 2 are excluded (as technically everyone owns them).

## SteamWeb.getRecentlyPlayedGames
GetOwnedGames returns a list of games a player owns along with some playtime information, if the profile is publicly visible. 

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your api key from Steam
| steamId| String     | 64 bit Steam ID to return played games list for.
| version| String     | Version of the API, default v0001 in this method
| count  | Number     | Optionally limit to a certain number of games (the number of games a person has played in the last 2 weeks is typically very small) format

## SteamWeb.isPlayingSharedGame
IsPlayingSharedGame returns the original owner's SteamID if a borrowing account is currently playing this game. If the game is not borrowed or the borrower currently doesn't play this game, the result is always 0.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your api key from Steam
| steamId| String     | The SteamID of the account playing.
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

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Steam
| steamIds| List       | The SteamIDs of the account playing.
| version | String     | Version of the API, default v1 in this method

## SteamWeb.getAppList
Get full list of apps

| Field  | Type  | Description
|--------|-------|----------
| version| String| Version of the API, default v2 in this method

## SteamWeb.getServersAtAddress
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

## SteamWeb.getAssetClassInfo
Get asset metadata for the assets in game

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Your api key from Steam
| appId      | Number     | Id of the app
| classCount | Number     | The number of classids passed to the request
| classIds   | List       | Series of sequential numbers to form a list of class IDs
| instanceIds| List       | Instance ID of the nth class.

## SteamWeb.getAssetPrices
Get prices of items in the economy in game

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your api key from Steam
| appId   | Number     | Id of the app
| language| String     | The ISO639-1 language code for the language all localized strings should be returned in. Not all strings have been translated to every language. If a language does not have a string, the English string will be returned instead. If this parameter is omitted the string token will be returned for the strings.
| currency| String     | The ISO 4217 code for currency specific filtering.

