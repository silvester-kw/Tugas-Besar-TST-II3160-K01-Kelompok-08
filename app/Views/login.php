<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?= base_url() ?>css/styles.css?v=1.0">
    </head>

    <body class="bg-blue-600">
        <div class="w-screen h-screen">
            <div class="flex justify-center">
                <div class="container w-max h-max mt-36 mx-8 px-10 py-16 md:p-16 rounded-3xl bg-yellow-400">
                    <div class="col-5">
                        <h1 class="px-64 font-title font-bold text-xl md:text-3xl text-center mb-16 text-black"><span class="w-md"></span>Takut.com<span class="text-gray-50"></span></h1>
                        <?php if (session()->getFlashdata('msg')) : ?>
                            <div id="alert-border-2" class="flex bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                                <div class="ms-3 text-sm font-medium">
                                    <?= session()->getFlashdata('msg') ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url(); ?>/AuthAPIController/login_action" method="post">
                            <div class="flex flex-col space-y-4">
                                <input type="text" name="email" placeholder="email" class="form-control py-2 px-4 bg-white rounded-lg text-black">
                                <input type="password" name="password" placeholder="password" class="form-control py-2 px-4 bg-white rounded-lg text-black">
                                <button type="submit" class="font-text font-bold bg-blue-400 hover:bg-blue-600 w-40 mt-4 rounded-md text-[#FFFFFF] py-2 mx-auto">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>