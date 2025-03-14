<x-app-layout>
    <div class="max-w-lg m-6 bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Support Form</h1>
        <form action="#" method="POST" class="space-y-4">
            <!-- Name -->
            <div>
                <label class="block text-lg font-medium text-gray-700">Name</label>
                <input type="text" name="name" placeholder="Enter your name" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
    
            <!-- Email -->
            <div>
                <label class="block text-lg font-medium text-gray-700">Email</label>
                <input type="email" name="email" placeholder="Enter your email" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
    
            <!-- Notes -->
            <div>
                <label class="block text-lg font-medium text-gray-700">Notes</label>
                <textarea name="notes" placeholder="Describe your issue..." rows="4" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>
    
            <!-- Submit Button -->
            <div class="mt-4">
                <button type="submit" class="w-full py-3 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>