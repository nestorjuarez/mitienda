<div >
   <div class="container mx-auto">
    <table class="table-auto">
        <thead>
          <tr>
            <th>Name</th>
            <th>Precio</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->regular_price}}</td>
                <td>1961</td>
          </tr>
         @endforeach

        </tbody>
       
      </table>
      <div class="wrap-pagination-info">
        {{ $products->links() }} 

      </div>
   </div>
    
      ​
</div>
