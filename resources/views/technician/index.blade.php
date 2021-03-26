<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <div class="text-right"><button class="inline-flex items-center py-2 px-4 bg-red-400 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none place-items-end">Add Service Request</button></div>
                
                <h1>ALL TÊCHNICIANS</h1>
                <table class="table-fixed">
                    <thead>
                      <tr>
                        <th class="w-1/4 ...">Title</th>
                        <th class="w-1/4 ...">Author</th>
                        <th class="w-1/2 ...">Views</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Intro to CSS</td>
                        <td>Adam</td>
                        <td>858</td>
                      </tr>
                      <tr class="bg-blue-200">
                        <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                        <td>Adam</td>
                        <td>112</td>
                      </tr>
                      <tr>
                        <td>Intro to JavaScript</td>
                        <td>Chris</td>
                        <td>1,280</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
