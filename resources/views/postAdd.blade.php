<x-app-layout>

<!-- component -->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-no-repeat bg-cover relative items-center"
	style="background-image: url(https://images.unsplash.com/photo-1621243804936-775306a8f2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
	<div class="absolute bg-purple-400"></div>
	<div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
		<div class="text-center">
			<h2 class="mt-5 text-3xl font-bold text-gray-900">
				Add a new post!
			</h2>
			<p class="mt-2 text-sm text-gray-400">Please enter your content below.</p>
		</div>
        <form class="mt-8 space-y-3" action="{{route('postStore')}}" method="post">
            @csrf
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide">Title</label>
                            <input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" name="title" type="" placeholder="Enter a text...">
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide">Content</label>
                        <textarea  class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" name="content" type="textarea" placeholder="Enter a description..."></textarea> 
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide">Image</label>
                            <input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" name="image" type="" placeholder="Enter url...">
                    </div>
                    
                            <p class="text-sm text-gray-300">
                                <span>File type: doc,pdf,types of images</span>
                            </p>
                    <div>
                        <button type="submit" class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        Upload
                    </button>
                    </div>
        </form>
	</div>
</div>

{{-- <style>
	.has-mask {
		position: absolute;
		clip: rect(10px, 150px, 130px, 10px);
	}
</style> --}}



</x-app-layout>