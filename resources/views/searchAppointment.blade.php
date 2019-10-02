@extends('master')

@section('content')

<div class="content-wrapper">

	<!-- content header (page header) -->

	<section class="content-header">


    </section>

  <!-- Main content -->

    <section class="content">

      <div class="row">

        <div class="col-xs-12">

          <div class="box">

            <div class="box-header">

              <h3 class="box-title">Appointment result column</h3>

            </div>

            <!-- /.box-header -->

            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">

                <thead>

                <tr>

                  <th>Id</th>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Addres Line1</th>
                  <th>Addres Line2</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Country</th>
                  <th>Pincode</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Services</th>
                  <th>Age</th>
                  <th>Price</th>
                  <th>Discount</th>
                  <th>Total</th>

                </tr>

                </thead>

                <tbody>

                @foreach($appointment_mst as $post)

                <tr>

                  <td>{{$post['id']}}</td>

                  <td>{{$post['name']}}</td>
                  <td>{{$post['contact']}}</td>
                  <td>{{$post['address1']}}</td>
                  <td>{{$post['address2']}}</td>
                  <td>{{$post['city']}}</td>
                  <td>{{$post['state']}}</td>
                  <td>{{$post['country']}}</td>
                  <td>{{$post['pincode']}}</td>
                  <td>{{$post['date']}}</td>
                  <td>{{$post['date']}}</td>
                  <td>{{$post['services_name']}}</td>
                  <td>{{$post['age']}}</td>
                  <td>{{$post['price']}}</td>
                  <td>{{$post['discount']}}</td>
                  <td>{{$post['totalPrice']}}</td>

                  

                </tr>
                
                @endforeach

                </tbody>

                <tfoot>

                <tr>

                <th>Id</th>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Addres Line1</th>
                  <th>Addres Line2</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Country</th>
                  <th>Pincode</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Services</th>
                  <th>Age</th>
                  <th>Price</th>
                  <th>Discount</th>
                  <th>Total</th>
                </tr>

                </tfoot>

              </table>

            </div>

            <!-- /.box-body -->

          </div>

          <!-- /.box -->

        </div>

        <!-- /.col -->

      </div>

      <!-- /.row -->

    </section>

    <!-- /.content -->

</div>



   @endsection