@extends('layout.main')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <h1 class="text-2xl font-bold mb-8">Products</h1>
  <div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
      <div class="bg-white rounded-lg shadow-lg">
        <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c9d6d008-1ad2-400d-b5a3-c7ba1d8b14d9/air-force-1-wild-shoes-FCjQ2C.png" alt="Skincare Product 1" class="w-full h-auto rounded-t-lg">
        <div class="px-6 py-4">
          <h2 class="font-bold text-xl mb-2">SEPATU 01</h2>
          <p class="text-gray-700 text-base">NewProduk</p>
          <p class="text-gray-700 text-base">Rp 2.888.000 - Rp 3.192.000</p>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
      <div class="bg-white rounded-lg shadow-lg">
        <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/715972b8-68da-4400-ab92-77af9e21b3e7/air-force-1-07-lx-shoes-SGsVWx.png" alt="Skincare Product 2" class="w-full h-auto rounded-t-lg">
        <div class="px-6 py-4">
          <h2 class="font-bold text-xl mb-2">SEPATU 2</h2>
          <p class="text-gray-700 text-base">NewProduct</p>
          <p class="text-gray-700 text-base">Rp 2.578.650 - Rp 3.227.200</p>
        </div>
      </div>
    </div>
  </div>
  <footer class="pt-4">
    <div class="w-full px-6 mx-auto">
      <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
          <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
            © <script>document.write(new Date().getFullYear() + ",");</script> made with <i class="fa fa-heart"></i> by <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
          <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>
@endsection