<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css?v=1.0">
</head>
<body>
    <div class="text-3xl font-bold py-4 px-4 text-blue-400">
        Wahana's Core
    </div>
    <div class="container overflow-x-auto shadow-md sm:rounded-lg">
        <?php
        // Decode the JSON response
        $wahana = json_decode($wahana, true);

        // Check if there is an error in the API response
        if (isset($wahana['status']) && $wahana['status'] === 'success') {
            // Check if the 'data' key exists
            if (isset($wahana['data']) && is_array($wahana['data'])) {
                // Check if 'Analytics' key exists within 'data'
                if (isset($wahana['data']['Analytics']) && is_array($wahana['data']['Analytics'])) {
                    $analyticsData = $wahana['data']['Analytics'];

                    // Check if there is data
                    if (!empty($analyticsData)) {
                        // Iterate through each Analytics entry using foreach
                        ?>
                        <table class="table">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th>ID Wahana</th>
                                    <th>Nama</th>
                                    <th>Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($analyticsData as $analytics): ?>
                                    <tr>
                                        <td><?= esc($analytics['wahanaId']) ?></td>
                                        <td><?= esc($analytics['nama']) ?></td>
                                        <td><?= esc($analytics['rating']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php
                    } else {
                        echo "No Analytics data available.";
                    }
                } else {
                    echo "Error: 'Analytics' key not found in the 'data' array.";
                }
            } else {
                echo "Error: 'data' key not found or not an array in the API response.";
            }
        } else {
            // Display an error message
            echo "Error: Unable to fetch Analytics data. " . (isset($wahana['message']) ? $wahana['message'] : '');
        }
        ?>
    </div>
    <div class="mt-8">
        <a href="/reserve" class="rounded-md px-4 py-2 bg-blue-400 font-medium text-white">Make Reservation</a>
    </div>
</body>
</html>
