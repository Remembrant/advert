<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3 flex flex-wrap gap-4">
                <!-- Main Content -->
                <div class="p-3 text-gray-900 flex-1 min-w-[200px]">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                            <div>
                               
                                <!-- Dropdown menu -->
                                <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow-sm" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                                    <ul class="p-3 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownRadioButton">
                                        <li>
                                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                                                <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Last day</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                                                <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Last 7 days</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                                                <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Last 30 days</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                                                <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Last month</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                                                <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                                <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Last year</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        lat
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        lng
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Client
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Contact
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sites as $site)
                                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $site->id}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $site->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        @if ($site->color == "red")
                                            <p class="text-red-600">Booked</p>
                                        @elseif ($site->color == "orange")
                                            <p class="text-orange-300">Pending</p>
                                        @else
                                            <p class="text-green-600">Available</p>
                                        @endif
                                        
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $site->lat}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $site->lng}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $site->client}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $site->contact}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{route('site.edit', $site)}}" class="font-medium text-blue-600 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<div>
 

</x-app-layout>