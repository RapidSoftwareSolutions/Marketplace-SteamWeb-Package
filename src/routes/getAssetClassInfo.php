<?php
$app->post('/api/SteamWeb/getAssetClassInfo', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['appId', 'classIds', 'classCount', 'apiKey']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    if (isset($post_data['args']['version']) && strlen($post_data['args']['version']) > 0) {
        $version = $post_data['args']['version'];
    } else {
        $version = 'v0001';
    }

    $query_str = $settings['api_url'] . "ISteamEconomy/GetAssetClassInfo/" . $version . '/?key=' . $post_data['args']['apiKey'] . '&appid=' . $post_data['args']['appId'];
    $query_str .= '&class_count=' . $post_data['args']['classCount'];
    $i = 0;
    foreach ($post_data['args']['classIds'] as $classId) {
        $query_str .= '&classid' . $i . '=' . $classId;
        $i++;
    }
    if (isset($post_data['args']['instanceIds']) && count($post_data['args']['instanceIds']) > 0) {
        $j = 0;
        foreach ($post_data['args']['instanceIds'] as $instanceId) {
            $query_str .= '&instanceid' . $j . '=' . $instanceId;
            $j++;
        }
    }

    //requesting remote API
    $client = new GuzzleHttp\Client();

    try {

        $resp = $client->request('GET', $query_str);

        $responseBody = $resp->getBody()->getContents();
        $rawBody = json_decode($resp->getBody());
        $errorSet = $rawBody->result->error;

        $all_data[] = $rawBody;
        if ($response->getStatusCode() == '200' && $errorSet == null) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($all_data) ? $all_data : json_decode($all_data);
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {
        $responseBody = $exception->getResponse()->getReasonPhrase();
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $responseBody;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    } catch (GuzzleHttp\Exception\BadResponseException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    }


    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});