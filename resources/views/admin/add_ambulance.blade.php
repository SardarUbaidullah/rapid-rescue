@extends('admin.nav_side')
@section('admin')

      <div class="container-fluid">
        <h1>Add a Ambulance</h1>
        <form>
          <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Vehicle Number</label>
            <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
          </div>
          <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Equipment Level</label><br>
            <label for="" class="mx-3">Basic</label><input type="radio" name="eqp">

            <label for="" class="mx-3" >Advance</label><input type="radio" name="eqp">

          </div>
          <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Ambulance Availiability</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Add</a>
          
        </form>
      </div>

      @endsection
      
    </div>
  </div>
  <script src="./admin/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./admin/assets/js/sidebarmenu.js"></script>
  <script src="./admin/assets/js/app.min.js"></script>
  <script src="./admin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./admin/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="./admin/assets/js/dashboard.js"></script>
</body>

</html>