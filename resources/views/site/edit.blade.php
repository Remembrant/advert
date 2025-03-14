<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edit your note</h1>
        <form action="{{route('site.update', $site)}}" method="POST" class="note">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" name="name" placeholder="{{$site->name}}"  readonly>
            </div>
            <div class="form-group">
                <input type="text" name="lat" placeholder="{{$site->lat}}" readonly>
            </div>
            <div class="form-group">
                <input type="text" name="lng" placeholder="{{$site->lng}}" readonly>
            </div>
            <div class="form-group">
                
                <select name="color" id="">Select Status Code
                <option value="green">Green</option>
                <option value="orange">Orange</option>
                <option value="red">Red</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="client" placeholder="{{$site->client}}" >
            </div>
            <div class="form-group">
                <input type="text" name="contact" placeholder="{{$site->contact}}" >
            </div>
            
            <div class="note-buttons">
                <a href="{{ route('site.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>

   
 </x-app-layout>