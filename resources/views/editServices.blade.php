@extends('master')

@section('content')

<div class="content-wrapper">

	<!-- content header (page header) -->

	<section class="content-header">

		<h1>Create Services</h1>

	</section>

	<!-- main content -->

	<section class="content">

    <form method="post" action="{{action('ServicesController@update', $servicesId)}}" enctype='multipart/form-data'>

    {{csrf_field()}}

			 <input name="_method" type="hidden" value="PATCH">

		<!--select2 example -->

		<div class="box box-default">

			<div class="box-body">

				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label>Services</label><br>

							<input type="text" name="services" value="{{$service->services}}" class="form-control" style="width:100%;" >

						</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">

							<label>Price</label><br>

							<input type="text" name="price" value="{{$service->price}}" class="form-control" style="width:100%;" >

						</div>

					</div>

					

				</div>			

			</div>

			<div class="box-body">

				<div class="row">

					<div class="col-lg-2">

						<button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>

					</div>

				

                    <div class="col-lg-2">

					<button type="remove" class="btn btn-success btn-block btn-flat"><a href="{{ URL::previous() }}">Cancel</a></button>

					</div>

				</div>

			</div>

		</div>

        </form>

	</section>

  

	<!-- content header (page header) -->

	<section class="content-header">

    </section>

  <!-- Main content -->

    <ssection class="content">

      <div class="row">

        <div class="col-xs-12">

          <div class="box">

            <div class="box-header">

              <h3 class="box-title">Services result column</h3>

            </div>

            <!-- /.box-header -->

            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">

                <thead>

                <tr>

                  <th>Id</th>

                  <th>Services</th>
                  <th>Price</th>

                  <th>Action</th>

                </tr>

                </thead>

                <tbody>

                @foreach($servicesmst as $post)

                <tr>

                  <td>{{$post['servicesId']}}</td>

                  <td>{{$post['services']}}</td>
                  <td>{{$post['price']}}</td>

                  <td> <a href="{{action('ServicesController@edit', $post['servicesId'])}}" class="#"><i class="fa fa-edit"></i></a> | <a class="#" data-toggle="modal" data-target="#modal-default-{{$post['servicesId']}}"><i class="fa fa-remove"></i></a></td>

                </tr>
                <div class="modal fade" id="modal-default-{{$post['servicesId']}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Confirm</h4>
                      </div>
                      <div class="modal-body">
                        <p>Are you sure you want to delete record?</p>
                      </div>
                      <div class="modal-footer">
                          <form method="post" action="{{action('ServicesController@destroy', $post['servicesId'])}}">
                            {{csrf_field()}} <input name="_method" type="hidden" value="DELETE"> 
                        <button type="submit" class="btn btn-primary">Yes</button>
                      </form>
                      </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                @endforeach

                </tbody>

                <tfoot>

                <tr>

                <th>Id</th>

                   <th>Services</th>
                  <th>Price</th>

                  <th>Action</th>

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