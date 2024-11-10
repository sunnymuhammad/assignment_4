

            @if (session('message'))
                <h1> {{session('message')}} </h1>
            @endif


        <div class="flex justify-between px-[100px] py-5 h-[70px] shadow-md">
            <h1>Product Management</h1>
            <div>
                <a href=" {{route('create')}} " class="bg-[#6b6be4] text-white p-1 rounded-[5px] font-[600] border-none whitespace-nowrap">+Create new product</a>
            </div>

        </div>

        <div class="mt-[30px] max-w-[1300px] mx-auto p-5">

            <div class="">
                <div >
                    <form  class="flex justify-between" action=" {{route('show','id')}} " method="GET">
                       <div>

                        <input type="text"  class="border-gray-400 border h-8 w-[300px] rounded-md" name="name" id="name" placeholder="search by product id or description">
                        <button class="bg-[#4a61c9] text-white font-[600] px-2 py-1 border-none rounded-sm">Search</button>
                       </div>

                       <div>
                        <select name="menu" class="p-2  bg-white border-black/25 border rounded-sm">
                            <option value="name">Short By Name</option>
                            <option value="price"> Short By Price</option>
                            <option value="" selected> </option>
                          </select>
                          <button class="bg-[#4a61c9] text-white font-[600] px-2 py-1 border-none rounded-sm">Sort</button>
                       </div>

                       <div>
                        <select name="sort" class="p-1 bg-white border-black/25 border rounded-sm">
                            <option value="asc">Short By Asc</option>
                            <option value="desc"> Short By Desc</option>
                            <option value="" selected></option>
                        </select>
                       </div>

                    </form>
                   </div>
               </div>
                <div class="mt-[30px]">

                        <table class="w-[100%]">
                            <thead>
                               <tr class="border-b  border-gray-300">
                                   <th class="max-[850px]:px-0 px-4  py-2">Sl</th>
                                   <th class="max-[850px]:px-0 px-4  py-2">Product_id</th>
                                   <th class="max-[850px]:px-0 px-4  py-2">Name</th>
                                   <th class="max-[850px]:px-0 px-4  py-2">Description</th>
                                   <th class="max-[850px]:px-0 px-4  py-2">Price</th>
                                   <th class="max-[850px]:px-0 px-4  py-2">Stock</th>
                                   <th class="max-[850px]:px-0 px-4  py-2">Image</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($data as $item)
                                   <tr class=" border-b border-gray-300">
                                   <th class="max-[850px]:px-0 px-4 py-2 text-center"> {{$loop->iteration}} </th>
                                   <td class="max-[850px]:px-0 px-4 py-2 text-center"> {{$item->product_id}}</td>
                                   <td class="max-[850px]:px-0 px-4 py-2 text-center"> {{$item->name}}</td>
                                   <td class="max-[850px]:px-0 px-4 py-2 text-center"> {{$item->description}}</td>
                                   <td class="max-[850px]:px-0 px-4 py-2 text-center"> ${{$item->price}}</td>
                                   <td class="max-[850px]:px-0 px-4 py-2 text-center"> {{$item->stock}}</td>
                                   <td class="max-[850px]:px-0 px-4 py-2 text-center">   <img src="{{ asset('images/' . $item->image) }}" class="h-[100px]" alt="{{ $item->name }}">  </td>
                                   <td class="max-[850px]:px-0 px-4 py-2 whitespace-nowrap max-[850px]:flex flex-col text-center">
                                       <a href="{{route('edit',$item->id)}}" class="inline bg-green-600 px-1 py-1 m-1 rounded-sm">
                                           <button>Edit</button>
                                       </a>

                                       <form action="{{ route('delete', $item->id) }}" method="post" onsubmit="return confirm('Are you Sure to Delete?')" class="inline bg-red-400 px-1 py-1 rounded-sm">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-white">Delete</button>
                                    </form>


                                   </td>
                               </tr>
                               @endforeach
                           </tbody>
                       </table>

                </div>
                <div class="flex justify-center mt-10">
                    {{ $data->links() }}
                   </div>
         </div>




        </div>

