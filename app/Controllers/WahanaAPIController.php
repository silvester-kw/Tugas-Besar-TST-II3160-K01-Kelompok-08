<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class WahanaAPIController extends BaseController
{
    public function index()
    {
        //
    }

    public function wahana_api()
    {
        // API endpoint URL
        $apiUrl = 'http://localhost:8080/api/analytics/?username=Lala&password=lala';

        // Initialize cURL session
        $curl = curl_init($apiUrl);

        // Set cURL options
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Execute cURL session and get the response
        $response = curl_exec($curl);

        // Check for cURL errors
        if (curl_errno($curl)) {
            // Handle cURL error (e.g., log, display an error message)
            $error_message = curl_error($curl);
            die("Curl error: $error_message");
        }

        // Close cURL session
        curl_close($curl);

        // Decode the JSON response
        $responseData = json_decode($response, true);

        // Check if the response is valid JSON
        if ($responseData === null) {
            // Handle JSON decoding error (e.g., log, display an error message)
            die("Error decoding JSON response");
        }

        // Check if the status is success
        if ($responseData['status'] === 'success') {
            $data = [
                'title' => 'API Wahana',
                'wahana' => $response,
            ];
            return view('wahana_api', $data);
        } else {
            // Handle API error (e.g., log, display an error message)
            die("API error: " . $responseData['message']);
        }
    }
}
