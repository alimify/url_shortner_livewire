<x-guest-layout>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="mt-16">
                    <div class="">
                        <div>
                            <b>Views: </b> {{$url->views}}
                        </div>
                        <div>
                            <b>Original Link: </b> <a class="bg-indigo-500 text-white p-1 cursor-pointer" onclick="copyToClipBoard('{{$url->original_url}}')">C</a> <a href="{{$url->original_url}}">{{$url->original_url}}</a> 
                        </div>
                        <div class="mt-2">
                            <b>Short Link: </b> <a class="bg-indigo-500 text-white p-1 cursor-pointer" onclick="copyToClipBoard('http://localhost:8000/go/{{$url->short_link}}')">C</a>  <a href="http://localhost:8000/go/{{$url->short_link}}" target="_blank">http://localhost:8000/go/{{$url->short_link}}</a> 
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-guest-layout>
<script>
  function copyToClipBoard(txt){
    navigator.clipboard.writeText(txt);
  }
</script>