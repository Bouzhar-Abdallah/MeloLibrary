<x-app-layout>
  <!-- This example requires Tailwind CSS v2.0+ -->
  <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
  <div class="min-h-full">


    <x-admin_dashboard_nav />
    <main>
      <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- stats -->


        <x-stats />
        <!-- lists -->
        <dl class="mt-5 border border-gray-300 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow divide-y divide-gray-200 lg:grid-cols-3 md:grid-cols-2 md:divide-y-0 md:divide-x">

          <livewire:search name="artist" />
          <livewire:search name="band" />
          <livewire:search name="genre" />



        </dl>
        <div>

        </div>
        <!-- /End replace -->
      </div>
    </main>
  </div>

</x-app-layout>