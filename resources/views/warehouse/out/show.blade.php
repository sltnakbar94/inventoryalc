@extends(backpack_view('blank'))

@php
  $defaultBreadcrumbs = [
    trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
    $crud->entity_name_plural => url($crud->route),
    trans('backpack::crud.preview') => false,
  ];

  // if breadcrumbs aren't defined in the CrudController, use the default breadcrumbs
  $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
@endphp

@section('header')
	<section class="container-fluid d-print-none">
    	<a href="javascript: window.print();" class="btn float-right"><i class="la la-print"></i></a>
		<h2>
	        <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
	        <small>{!! $crud->getSubheading() ?? mb_ucfirst(trans('backpack::crud.preview')).' '.$crud->entity_name !!}</small>
	        @if ($crud->hasAccess('list'))
	          <small class=""><a href="{{ url($crud->route) }}" class="font-sm"><i class="la la-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a></small>
	        @endif
	    </h2>
    </section>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">

	<!-- Default box -->
	  	@if ($crud->model->translationEnabled())
            <div class="row">
                <div class="col-md-12 mb-2">
                    <!-- Change translation button group -->
                    <div class="btn-group float-right">
                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{trans('backpack::crud.language')}}: {{ $crud->model->getAvailableLocales()[request()->input('locale')?request()->input('locale'):App::getLocale()] }} &nbsp; <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($crud->model->getAvailableLocales() as $key => $locale)
                            <a class="dropdown-item" href="{{ url($crud->route.'/'.$entry->getKey().'/show') }}?locale={{ $key }}">{{ $locale }}</a>
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
	    @endif
        <div class="row">
            <div class="col-md-4">
                <div class="card no-padding no-border">
                    <div class="card-header">
                        Nomor DO : <strong>{{@$crud->entry->do_number}}</strong>
                    </div>
                    <div class="card-body">
                        @include('warehouse.out.form_content')
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card no-padding no-border">
                    @if (@$crud->entry->status == 0 && backpack_user()->hasRole('sales'))
                        <div class="card-header">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModalWarehouseOut">
                                <i class="fa fa-plus"></i> TAMBAH ITEM
                            </button>
                        </div>
                    @endif
                    <div class="card-body">
                        @include('warehouse.out.list_content')
                    </div>
                    @if (!empty(@$crud->entry->details->first()))
                        @include('warehouse.out.approval')
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md 12">
                @if (@$crud->entry->status != 0 && @$crud->entry->status != 3 && backpack_user()->hasAnyRole(['sales', 'purchasing', 'superadmin']))
                <div class="card no-padding no-border">
				@include('warehouse.out.call-output')
                </div>
                @endif
            </div>
        </div>
	</div>
</div>
@endsection
@include('warehouse.out.add-modal')
@include('warehouse.out.edit-modal')
@include('warehouse.out.revision-modal')


@section('after_styles')
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css') }}">
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/show.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
@endsection

@section('after_scripts')
	<script src="{{ asset('packages/backpack/crud/js/crud.js') }}"></script>
	<script src="{{ asset('packages/backpack/crud/js/show.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        function edit(delivery_order_id) {
        $.ajax({
            type: "post",
            url: "{{ backpack_url('Api/DeliveryOrderDetail') }}",
            data: {
                delivery_order_id: delivery_order_id,
                _token: '{{ csrf_token() }}'
            },
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    console.log(response)
                    var dsc = 0;
                    $('#editModalDeliveryOrderDetail').modal('show');
                    $('#price').val(response.data.price)
                    $('input[name=qty]').val(response.data.qty)
                    response.data.discount === null ? dsc = 0 : dsc = response.data.discount
                    $('input[name=discount]').val(dsc)
                    $('select[name=item_id]').val(response.data.item_id).trigger('change');
                }else{
                    swalError({
                        message: response.data.message,
                        response: response.data.error,
                    })
                }
            }
        });
    }
        $(document).ready(function() {
		$('.select2').select2({})
    } );
    $('#mySelect2').select2({
        dropdownParent: $('#myModal')
    });
    function swalError(message) {
        return swal({
                    title: 'Gagal!',
                    text: message,
                    icon: 'error'
                }).then(function () {
                    location.reload();
                })
    }

    function swalSuccess(message) {
        return swal({
                    title: 'Sukses!',
                    text: message,
                    icon: 'success'
                }).then(function () {
                    location.reload();
                })
    }
    </script>
@endsection
