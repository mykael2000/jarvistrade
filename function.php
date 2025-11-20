<?php

function get_btc_current_price_usd() {
    /**
     * Fetches the current price of 1 Bitcoin in USD from the CoinGecko API.
     *
     * @return float|null The current price of 1 BTC in USD, or null if the fetch fails.
     */

    $currency_code_lower = "usd"; // Fixed to USD
    $api_url = "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=" . $currency_code_lower;

    // Suppress warnings with @ for file_get_contents and handle errors explicitly.
    $response = @file_get_contents($api_url);

    if ($response === false) {
        // Log the error for debugging purposes (e.g., to your server's error log)
        error_log("Error in get_btc_current_price_usd: Could not fetch Bitcoin price from API. Check internet connection or API endpoint.");
        return null;
    }

    $data = json_decode($response, true); // Decode JSON into an associative array

    // Check if the expected data exists in the API response
    if (isset($data['bitcoin']) && isset($data['bitcoin'][$currency_code_lower])) {
        $btc_price_in_usd = $data['bitcoin'][$currency_code_lower];
        return (float)$btc_price_in_usd; // Cast to float to ensure numeric type
    } else {
        // Log if the expected keys are not found in the JSON response
        error_log("Error in get_btc_current_price_usd: Unexpected API response format. Response: " . $response);
        return null;
    }
}

function get_eth_current_price_usd() {
    /**
     * Fetches the current price of 1 Bitcoin in USD from the CoinGecko API.
     *
     * @return float|null The current price of 1 BTC in USD, or null if the fetch fails.
     */

    $currency_code_lower = "usd"; // Fixed to USD
    $api_url = "https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=" . $currency_code_lower;

    // Suppress warnings with @ for file_get_contents and handle errors explicitly.
    $response = @file_get_contents($api_url);

    if ($response === false) {
        // Log the error for debugging purposes (e.g., to your server's error log)
        error_log("Error in get_eth_current_price_usd: Could not fetch Ethereum price from API. Check internet connection or API endpoint.");
        return null;
    }

    $data = json_decode($response, true); // Decode JSON into an associative array

    // Check if the expected data exists in the API response
    if (isset($data['ethereum']) && isset($data['ethereum'][$currency_code_lower])) {
        $eth_price_in_usd = $data['ethereum'][$currency_code_lower];
        return (float)$eth_price_in_usd; // Cast to float to ensure numeric type
    } else {
        // Log if the expected keys are not found in the JSON response
        error_log("Error in get_eth_current_price_usd: Unexpected API response format. Response: " . $response);
        return null;
    }
}

function get_trending_coins() {
    $url = "https://api.coingecko.com/api/v3/search/trending";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        $data = json_decode($response, true);
        return $data['coins'] ?? [];
    }
    return [];
}

function get_top_gainers_losers($period = '24h') {
    $url = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false&price_change_percentage=1h%2C24h%2C7d";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);
    if (!$data) {
        return ['gainers' => [], 'losers' => []];
    }

    usort($data, function($a, $b) use ($period) {
        return $b["price_change_percentage_{$period}"] <=> $a["price_change_percentage_{$period}"];
    });

    $gainers = array_slice($data, 0, 10);
    $losers = array_slice($data, -10);

    return ['gainers' => $gainers, 'losers' => $losers];
}

?>