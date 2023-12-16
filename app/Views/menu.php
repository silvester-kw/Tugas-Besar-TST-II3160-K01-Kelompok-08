<!DOCTYPE html>
<html?>
    <head>
        <link rel="stylesheet" href="<?= base_url() ?>css/styles.css?v=1.0">
    </head>
    <body class="w-full items-center">
        <div class="px-8 md:px-16 lg:px-64 bg-blue-600 py-1">
            <div class="flex justify-between items-center px-4 py-2 bg-blue-600 text-white"> 
                <div class="text-xl font-bold text-yellow-400">
                <a href="/">Takut.com</a>    
                </div>
                <div class=" flex space-x-2 pr-4 font-medium">
                    <a href="/" class="hover:underline hover:bg-yellow-600 px-2 py-1 rounded-md">Home</a>
                    <p>|</p> 
                    <a href="/reserve" class="hover:underline hover:bg-yellow-600 px-2 py-1 rounded-md">Reserve</a>
                    <p>|</p> 
                    <a href="/reserved" class="hover:underline hover:bg-yellow-600 px-2 py-1 rounded-md">Reservation History</a> 
                    <p>|</p> 
                    <a href="/admin" class="hover:underline hover:bg-yellow-600 px-2 py-1 rounded-md">Admin</a> 
                    <p>|</p> 
                    <a href="/logout" class="hover:underline hover:bg-yellow-600 px-2 py-1 rounded-md">Logout</a> 
                </div>
            </div>
        </div>    
    </body>
</html>