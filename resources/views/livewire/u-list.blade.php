<div>

<section class="py-1 bg-blueGray-50">
<div class="w-full xl:mb-0 mx-auto">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full shadow-lg rounded p-2">

    <div class="block w-full overflow-x-auto">
      <table class="items-center bg-transparent w-full border-collapse ">
        <thead>
          <tr>
            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Short Link
            </th>
            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Visits
            </th>
            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                #
            </th>
          </tr>
        </thead>

        <tbody>
            @foreach ($urls as $url)
            <tr>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                   <a href=" http://localhost:8000/go/{{$url->short_link}}"> http://localhost:8000/go/{{$url->short_link}}</a>
                   <a class="bg-indigo-500 text-white p-1 cursor-pointer" onclick="copyToClipBoard('http://localhost:8000/go/{{$url->short_link}}')">C</a>
                </td>
                <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                 {{$url->views}}
                </td>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                  <a href="/view/{{$url->short_link}}" class="bg-green-500 text-white p-1">View</a>
                  <a wire:click="delete({{$url->id}})" class="bg-red-500 text-white p-1" href="javascript:void(0)">Delete</a>
                  @if(!$url->active)
                    <a wire:click="update({{$url->id}})" class="bg-green-500 text-white p-1" href="javascript:void(0)">Private</a>
                  @else
                    <a wire:click="update({{$url->id}})" class="bg-green-500 text-white p-1" href="javascript:void(0)">Public</a>
                  @endif
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    {{ $urls->links() }}

  </div>
</div>
</section>


</div>

<script>
  function copyToClipBoard(txt){
    navigator.clipboard.writeText(txt);
  }
</script>