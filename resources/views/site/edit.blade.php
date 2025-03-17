<x-app-layout>
  <div class="max-w-2xl m-5 bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-3xl font-semibold py-4">Edit Site</h1>
    <form action="{{ route('site.update', $site) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div class="flex flex-col">
            <label class="font-medium">Name</label>
            <input type="text" name="name" value="{{$site->name}}" readonly class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600">
        </div>

        <!-- Latitude -->
        <div class="flex flex-col">
            <label class="font-medium">Latitude</label>
            <input type="text" name="lat" value="{{$site->lat}}" readonly class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600">
        </div>

        <!-- Longitude -->
        <div class="flex flex-col">
            <label class="font-medium">Longitude</label>
            <input type="text" name="lng" value="{{$site->lng}}" readonly class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600">
        </div>

        <!-- Status Color -->
        <div class="flex flex-col">
            <label class="font-medium">Select Status Code</label>
            <select  name="color" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white">
              <option value="{{$site->color}}" selected disabled>
              @if ($site->color=="green")
              Available
                @elseif($site->color=="orange")
                Pending
                @else
                Booked
              @endif  
              </option>  
              <option value="green">Available</option>
                <option value="orange">Pending</option>
                <option value="red">Booked</option>
            </select>
        </div>

        <!-- Status Color -->
<div class="flex flex-col">
  <label class="font-medium">Select Client</label>
  <select name="client_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white">
    <option value="{{ $site->client ? $site->client->name : 'Null' }}" selected disabled>{{ $site->client ? $site->client->name : 'Null' }}</option>  
    @foreach ($clients as $client)
          <option value="{{ $client->id }}">{{ $client->name }}</option>
      @endforeach
      <option value="null">Null</option>
  </select>
</div>

        {{-- <!-- Client -->
        <div class="flex flex-col">
            <label class="font-medium">Client</label>
            <input type="text" name="client" value="{{$site->client->name}}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div> --}}

        {{-- <!-- Contact -->
        <div class="flex flex-col">
            <label class="font-medium">Contact</label>
            <input type="text" name="contact" value="{{$site->client->contact}}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div> --}}

        <!-- Buttons -->
        <div class="flex justify-between mt-4">
            <a href="{{ route('site.index') }}" class="px-6 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100">Cancel</a>
            <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Submit</button>
        </div>
    </form>
</div>
    </div>


{{-- @foreach ($sites as $site)
  <div>
    {{&site->name}}
  </div>
@endforeach --}}
   
 </x-app-layout>