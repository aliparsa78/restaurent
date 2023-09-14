
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Foods</title>
    @include('Admin.link')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Admin/sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('Admin/navbar')
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Foods table</h4>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> Id </th>
                            <th> Food Name </th>
                            <th> Description </th>
                            <th> Price </th>
                            <th> Image </th>
                            <th> Status </th>
                            <th> Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach($foods as $food)
                            <tr>
                                <td>{{$food->id}}</td>
                                <td>{{$food->name}}</td>
                                <td>{{$food->description}}</td>
                                <td>{{$food->price}}</td>
                                <td>{{$food->price}}</td>
                                <td>{{$food->image}}</td>
                                <td>{{$food->status}}</td>
                                <td>
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>            
          </div>
          <!-- content-wrapper ends -->
          @include('Admin/footer')
        </div>

        <!-- main-panel ends -->
      </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    @include('Admin.scriptLink')
  </body>
</html>