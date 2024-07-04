<x-app-layout>
<div class="py-16" style="background-image: url(https://images.unsplash.com/photo-1621243804936-775306a8f2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
    <div class="container m-auto px-6 text-gray-200 md:px-12 xl:px-6">
        <div class="mb-12 space-y-2 text-center">
          <span class="block w-max mx-auto px-3 py-1.5 border border-cyan-400 rounded-full bg-white bg-opacity-70 text-indigo-900">My Blog</span>
          <h2 class="text-2xl text-white font-bold md:text-4xl">Next movie release</h2>
          <p class="lg:w-6/12 text-cyan-900 lg:mx-auto">Find all the new releases on Myblog</p>
        </div>
        @session('sucess')
            <strong>{{session('sucess')}}</strong>
        @endsession
        
        <div class="grid gap-12 lg:grid-cols-2">
          @foreach($posts as $rowPost)
          <div class="p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
            <img src="{{$rowPost->image}}" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
            <div class="sm:w-7/12 pl-0 p-5">
              <div class="space-y-2">
                <div class="space-y-4">
                  <h4 class="text-2xl font-semibold text-cyan-900">{{$rowPost->title}}</h4>
                  <p class="text-gray-600">{{$rowPost->content}}</p>
                </div>
                <a href="{{route('show',$rowPost)}}" class="block w-max hover:text-cyan-900 text-cyan-600">Read more</a>
              </div>
            </div>
          </div>
          @endforeach
          {{$posts->links()}}
        </div>
    </div>
  </div>
</x-app-layout>

