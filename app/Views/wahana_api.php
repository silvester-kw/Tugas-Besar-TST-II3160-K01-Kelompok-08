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
        <table class="w-full text-sm text-left rtl:text-right text-gray-300">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($daftar_reservasi as $reservasi) : ?>
                    <tr class="odd:bg-white even:bg-gray-50 font-medium text-gray-900 whitespace-nowrap border-b">
                        <td class="px-6 py-4"><?= $reservasi->nama; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    <div class="mt-8">

        <a href="/reserve" class="rounded-md px-4 py-2 bg-blue-400 font-medium text-white">Make Reservation</a>
    </div>
</body>
</html>

