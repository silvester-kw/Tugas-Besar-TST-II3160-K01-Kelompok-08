<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?= base_url() ?>css/styles.css?v=1.0">
    </head>
    <body>
        <div class="text-3xl font-bold py-4 px-4 text-blue-400">
            Your Reservation History
        </div>
        <div class="container relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-300">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id</th>
                        <th scope="col" class="px-6 py-3">Jenis Tiket</th>
                        <th scope="col" class="px-6 py-3">Wahana</th>
                        <th scope="col" class="px-6 py-3">Nama</th>
                        <th scope="col" class="px-6 py-3">Kota Asal</th>
                        <th scope="col" class="px-6 py-3">Tanggal Reservasi</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php if (count($daftar_reservasi) > 0) : ?>
                    <?php foreach ($daftar_reservasi as $reservasi) : ?>
                        <tr class="odd:bg-white even:bg-gray-50 font-medium text-gray-900 whitespace-nowrap border-b">
                            <td class="px-6 py-4"><?= $reservasi->id_reservasi; ?></td>
                            <td class="px-6 py-4"><?= $reservasi->jenis_tiket; ?></td>
                            <td class="px-6 py-4"><?= $reservasi->nama_wahana; ?></td>
                            <td class="px-6 py-4"><?= $reservasi->nama_pengunjung; ?></td>
                            <td class="px-6 py-4"><?= $reservasi->asal_kota_pengunjung; ?></td>
                            <td class="px-6 py-4"><?= $reservasi->tanggal_reservasi; ?></td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium bg-red-600 px-3 py-2 rounded-md text-white hover:bg--red-800 ">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-">Kamu belum melakukan reservasi</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

