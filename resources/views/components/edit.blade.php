<div class="bg-slate-100 h-screen">

    <div class="max-w-[1300px] mx-auto p-4 bg-[#fff]">
        <h1 class="text-center text-[30px]">Update Product</h1>
        <form action=" {{route('update',$id)}} " method="PUT">
            @csrf

            <label for="product_id" class="block mt-10">Product_id</label>
            <input type="text" class="border border-gray-500  h-[40px] w-[100%]  rounded-md" name="product_id" id="product_id">

            <label for="name" class="block mt-10">Name</label>
            <input type="text" name="name" class="border border-gray-500  h-[40px] w-[100%]  rounded-md " id="name">

            <label for="description" class="block mt-[30px]">Description</label> <br>
             <textarea name="description"  class="border border-gray-500 w-[100%] h-[100px]  rounded-md" id="des" ></textarea><br>

            <label for="price" class="block mt-[30px]">Price</label>
            <input type="text" name="price" class="border border-gray-500  h-[40px] w-[100%] rounded-md" id="price">


            <label for="stock" class="block mt-[30px]">Stock</label>
            <input type="text" name="stock" class="border border-gray-500 h-[40px] w-[100%]  rounded-md" id="stock">

            <label for="image" class="block mt-[30px]">Image</label>
            <input type="file" name="image" class="border border-gray-500  h-[40px] w-[100%]  rounded-md" id="image">

         <button class="bg-[#3f3fda] text-white px-4 py-1 rounded-[5px] font-[600] border-none mt-10">Update</button>
        </form>
    </div>


</div>

