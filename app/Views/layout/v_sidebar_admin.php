<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mitra | Dashboard</title>
  <link rel="stylesheet"  href="<?php echo base_url("css/app.css") ?>" />
</head>
<body>

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-greenMain-surface">

   <ul class="space-y-2 font-medium">
         <li>
            <a href="<?php echo base_url("admin") ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="<?php echo base_url("admin/daftarkanMitra") ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <span class="flex-1 ml-3 whitespace-nowrap">Daftarkan Mitra</span>
            </a>
         </li>
         <li>
            <a href="<?php echo base_url("admin/mitra") ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <span class="flex-1 ml-3 whitespace-nowrap">Data Mitra</span>
            </a>
         </li>
         <li>
            <a href="<?php echo base_url("admin/customer") ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <span class="flex-1 ml-3 whitespace-nowrap">Data Customer</span>
            </a>
         </li>
         <li>
            <a href="<?php echo base_url("OrderSampahMitra/orderJemput") ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <span class="flex-1 ml-3 whitespace-nowrap">Transaksi</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<script>
   // Initialization for ES Users
import {
  Ripple,
  Input,
  initTE,
} from "tw-elements";

initTE({ Ripple, Input });
</script>
</body>
</html>
