@extends('master')

@section('content')

<div class="content-wrapper">

	<!-- content header (page header) -->

	<section class="content-header">

		<h1>Create Discount</h1>

	</section>

	<!-- main content -->

	<section class="content">

    <form method="post" action="{{url('discount')}}" enctype='multipart/form-data'>

		 {{csrf_field()}}

		<!--select2 example -->

		<div class="box box-default">

			<div class="box-body">

				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label>Title</label><br>

							<input type="text" name="title" required class="form-control" style="width:100%;" >

						</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">

							<label>Percentage</label><br>

							<input type="text" name="percentage" required class="form-control" style="width:100%;" >

						</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">

							<label>Condition</label><br>
							<select name="condition" class="form-control" style="width:100%;">
							<option value="">please select</option>
							<option value="<"><</option>
							<option value=">">></option>
							</select>
							

						</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">

							<label>Age</label><br>

							<input type="number"  min="1" max="100" name="age" class="form-control" style="width:100%;" >

						</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">

							<label>From</label><br>

							<input type="date" name="from" class="form-control" style="width:100%;" >

						</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">

							<label>to</label><br>

							<input type="date" name="to" class="form-control" style="width:100%;" >

						</div>

					</div>

					

				</div>			

			</div>

			<div class="box-body">

				<div class="row">

					<div class="col-lg-2">

						<input type="submit" class="btn btn-primary btn-block btn-flat">

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

    <section class="content">

      <div class="row">

        <div class="col-xs-12">

          <div class="box">

            <div class="box-header">

              <h3 class="box-title">Discount result column</h3>

            </div>

            <!-- /.box-header -->

            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">

                <thead>

                <tr>

                  <th>Id</th>

                  <th>Title</th>
                  <th>Percentage</th>
                  <th>Condition</th>
                  <th>Age</th>
                  <th>From</th>
                  <th>To</th>

                  <th>Action</th>

                </tr>

                </thead>

                <tbody>

                @foreach($discountmst as $post)

                <tr>

                  <td>{{$post['id']}}</td>

                  <td>{{$post['title']}}</td>
                  <td>{{$post['percentage']}}</td>
                  <td>{{$post['condition']}}</td>
                  <td>{{$post['age']}}</td>
                  <td>{{$post['from']}}</td>
                  <td>{{$post['to']}}</td>

                  <td> <a href="{{action('DiscountController@edit', $post['id'])}}" class="#"><i class="fa fa-edit"></i></a> | <a class="#" data-toggle="modal" data-target="#modal-default-{{$post['id']}}"><i class="fa fa-remove"></i></a></td>

                </tr>
                <div class="modal fade" id="modal-default-{{$post['id']}}">
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
                          <form method="post" action="{{action('DiscountController@destroy', $post['id'])}}">
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

                  <th>Title</th>
                  <th>Percentage</th>
                  <th>Condition</th>
                  <th>Age</th>
                  <th>From</th>
                  <th>To</th>

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