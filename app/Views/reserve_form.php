<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?= base_url() ?>css/styles.css?v=1.0">
    </head>
    <body>
    <div class="px-8 md:px-16 lg:px-64">
        <div class="text-center text-3xl font-bold py-4 px-4 text-blue-600">
            Make Reservation
        </div>
        <div>
            <?php if (session('success')) : ?>
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                    <?= session('success'); ?>
                </div>
            <?php endif; ?>
            <?php if (session('failed')) : ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                    <?= session('failed'); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('create-reservation'); ?>" method ="post">
                <?= csrf_field(); ?>

                <div class="grid grid-cols-2 gap-2">
                    <div class="mb-3">
                        <label for="nama_wahana">Wahana</label>
                        <select required name="nama_wahana" id="nama_wahana" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
                            <option value="">-- pilih wahana --</option>
                            <option value="Rolerkoster">Rolerkoster</option>
                            <option value="Bianglala">Bianglala</option>
                            <option value="Rumah Hantu">Rumah Hantu</option>
                            <option value="Kora-kora">Kora-Kora</option>
                            <option value="Komedi Putar">Komedi Putar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_tiket">Tipe Tiket</label>
                        <select required name="jenis_tiket" id="jenis_tiket" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
                            <option value="">-- pilih tiket --</option>
                            <option value="Reguler">Reguler</option>
                            <option value="VIP">VIP</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama_pengunjung">Nama</label>
                        <input required type="text" name="nama_pengunjung" id="nama_pengunjung" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500"/>
                    </div>
                    <div class="mb-3">
                        <label for="asal_kota_pengunjung">Asal Kota</label>
                        <input required type="text" name="asal_kota_pengunjung" id="asal_kota_pengunjung" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500"/>
                    </div>
                </div>
                <button class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue">Reserve</button>
            </form>
        </div>
    </div>
    </body>
</html>