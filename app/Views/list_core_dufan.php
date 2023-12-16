<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?= base_url() ?>css/styles.css?v=1.0">
    </head>
    <body>
    <div class="px-8 md:px-16 lg:px-64">
        <div class="text-3xl font-bold py-4 px-4 text-blue-400">
            Dufan's Core
        </div>
        <div class="container overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-300">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Id</th>
                    <th scope="col" class="px-6 py-3">Jenis Tiket</th>
                    <th scope="col" class="px-6 py-3">Wahana</th>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Kota Asal</th>
                    <th scope="col" class="px-6 py-3">Tanggal Reservasi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($daftar_reservasi as $reservasi) : ?>
                    <tr class="odd:bg-white even:bg-gray-50 font-medium text-gray-900 whitespace-nowrap border-b">
                        <td class="px-6 py-4"><?= $reservasi->id_reservasi; ?></td>
                        <td class="px-6 py-4"><?= $reservasi->jenis_tiket; ?></td>
                        <td class="px-6 py-4"><?= $reservasi->nama_wahana; ?></td>
                        <td class="px-6 py-4"><?= $reservasi->nama_pengunjung; ?></td>
                        <td class="px-6 py-4"><?= $reservasi->asal_kota_pengunjung; ?></td>
                        <td class="px-6 py-4"><?= $reservasi->tanggal_reservasi; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    <div class="mt-8">

        <a href="/reserve" class="rounded-md px-4 py-2 bg-blue-400 font-medium text-white">Make Reservation</a>
    </div>
</div>
</body>
</html>

