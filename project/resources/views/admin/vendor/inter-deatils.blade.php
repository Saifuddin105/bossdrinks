@extends('layouts.admin')

@section('styles')

<style type="text/css">
    .table-responsive {
    overflow: hidden;
}
table#example2 {
    margin-left: 10px;
}

</style>

@endsection

@section('content')
@php
$persionalInfo = json_decode($data->persional_info);
$businessInfo = json_decode($data->business_info);
@endphp
                    <div class="content-area">
                        <div class="mr-breadcrumb">
                            <div class="row">
                                <div class="col-lg-12">
                                        <h4 class="heading">{{ __("Vendor Details") }} <a class="add-btn" href="{{ url()->previous() }}"><i class="fas fa-arrow-left"></i> {{ __("Back") }}</a></h4>
                                        <ul class="links">
                                            <li>
                                                <a href="{{ route('admin.dashboard') }}">{{ __("Dashboard") }} </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin-vendor-index') }}">{{ __("Vendors") }}</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin-vendor-show',$data->id) }}">{{ __("Details") }}</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                            <div class="add-product-content1 customar-details-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="product-description">
                                            <div class="body-area">
                                            <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="user-image">
                                                            @if($data->is_provider == 1)
                                                            <img src="{{ $data->photo ? asset($data->photo):asset('assets/images/noimage.png')}}" alt="No Image">
                                                            @else
                                                            <img src="{{ $data->photo ? asset('assets/images/users/'.$data->photo):asset('assets/images/noimage.png')}}" alt="{{ __("No Image") }}">                                            
                                                            @endif
                                                        <a href="javascript:;" class="mybtn1 send" data-email="{{ $data->email }}" data-toggle="modal" data-target="#vendorform">{{ __("Send Message") }}</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                    <div class="table-responsive show-table">
                                                        <table class="table">
                                                        <!-- <h4>Persional Information<h4> -->
                                                        <tr>
                                                            <th>{{ __("Name") }}</th>
                                                            <td>{{ $data->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{ __("Email") }}</th>
                                                            <td>{{ $data->email }}</td>
                                                        </tr>
                                                        @if(isset($persionalInfo->contact_name))
                                                        <tr>
                                                            <th>{{ __("Contact Persion") }}</th>
                                                            <td>{{ $persionalInfo->contact_name }}</td>
                                                        </tr>
                                                        @endif
                                                     @if($persionalInfo !== null)
                                                     <tr><td>Home Address</td></tr>
                                                     @endif
                                                        @if(isset($persionalInfo->address_1))
                                                        <tr>
                                                            <th>{{ __("Address 1") }}</th>
                                                            <td>{{ $persionalInfo->address_1 }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($persionalInfo->address_2))
                                                        <tr>
                                                            <th>{{ __("Address 2") }}</th>
                                                            <td>{{ $persionalInfo->address_2 }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($persionalInfo->address_3))
                                                        <tr>

                                                            <th>{{ __("Address 3") }}</th>
                                                            <td>{{ $persionalInfo->address_3 }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($persionalInfo->home_tel_no))
                                                        <tr>

                                                            <th>{{ __("Contact No") }}</th>
                                                            <td>{{ $persionalInfo->home_tel_no }}</td>
                                                        </tr>
                                                        @endif
                                                      

                                                        
                                                        </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="table-responsive show-table">
                                                    <table class="table">
                                                        @if(isset($businessInfo->busi_vat))
                                                        <tr>
                                                        <tr><td>Business Information</td></tr>
                                                            <th>{{ __("VAT Number") }}</th>
                                                            <td>{{ $businessInfo->busi_vat }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($businessInfo->busi_tel_no))
                                                        <tr>
                                                            <th>{{ __("Business Contact No") }}</th>
                                                            <td>{{ $businessInfo->busi_tel_no }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($businessInfo->ownership))
                                                        <tr>
                                                            <th>{{ __("Ownership") }}</th>
                                                            <td>{{ $businessInfo->ownership }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($businessInfo->licensed_alcohol))
                                                        <tr>
                                                            <th>{{ __("Licensed Alcohol") }}</th>
                                                            <td>{{ $businessInfo->licensed_alcohol }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($businessInfo->trade_type))
                                                        <tr>
                                                            <th>{{ __("Trade Type") }}</th>
                                                            <td>{{ $businessInfo->trade_type }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($businessInfo->busi_name))
                                                        <tr>
                                                        <tr><td>Business Address</td></tr>

                                                            <th>{{ __("Business Name") }}</th>
                                                            <td>{{ $businessInfo->busi_name }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($businessInfo->busi_country))
                                                        <tr>
                                                            <th>{{ __("Business Location") }}</th>
                                                            <td>{{ $businessInfo->busi_country }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($businessInfo->busi_address1))
                                                        <tr>
                                                            <th>{{ __("Address 1") }}</th>
                                                            <td>{{ $businessInfo->busi_address1 }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($businessInfo->busi_address2))
                                                        <tr>
                                                            <th>{{ __("Address 2") }}</th>
                                                            <td>{{ $businessInfo->busi_address2 }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($businessInfo->busi_address3))
                                                        <tr>
                                                            <th>{{ __("Address 3") }}</th>
                                                            <td>{{ $businessInfo->busi_address3 }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(isset($businessInfo->busi_address3))
                                                        <tr>
                                                            <th>{{ __("Post Code") }}</th>
                                                            <td>{{ $businessInfo->busi_post_code }}</td>
                                                        </tr>
                                                        @endif
                                                        
                                                        <tr>
                                                            <th>{{ __("Joined") }}</th>
                                                            <td>{{ $data->created_at->diffForHumans() }}</td>
                                                        </tr>
                                                     
                                                        <tr>
                                                            <td>
                                                                    @if($data->checkStatus())
                                                                    <a class="badge badge-success verify-link" href="javascript:;">Verified</a>
                                                                    <a class="set-gallery1" href="javascript:;" data-toggle="modal" data-target="#setgallery"><input type="hidden" value="{{ $data->verifies()->where('status','=','Verified')->first()->id }}">(View)</a>
                                                                    @else 
                                                                    <a class="badge badge-danger verify-link" href="javascript:;">Pending</a>
                                                                    @endif
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                        </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

{{-- MESSAGE MODAL --}}
<div class="sub-categori">
    <div class="modal" id="vendorform" tabindex="-1" role="dialog" aria-labelledby="vendorformLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="vendorformLabel">{{ __("Send Message") }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            <div class="modal-body">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-form">
                                <form id="emailreply1">
                                    {{csrf_field()}}
                                    <ul>
                                        <li>
                                            <input type="email" class="input-field eml-val" id="eml1" name="to" placeholder="{{ __("Email") }} *" value="" required="">
                                        </li>
                                        <li>
                                            <input type="text" class="input-field" id="subj1" name="subject" placeholder="{{ __("Subject") }} *" required="">
                                        </li>
                                        <li>
                                            <textarea class="input-field textarea" name="message" id="msg1" placeholder="{{ __("Your Message") }} *" required=""></textarea>
                                        </li>
                                    </ul>
                                    <button class="submit-btn" id="emlsub1" type="submit">{{ __("Send Message") }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

{{-- MESSAGE MODAL ENDS --}}


{{-- GALLERY MODAL --}}

<div class="modal fade" id="setgallery" tabindex="-1" role="dialog" aria-labelledby="setgallery" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">{{ __('Attachments') }}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">

                    <div class="top-area">
                            <div class="row">
                                <div class="col-sm-12 d-inline-block">

                                        <h5> Details: <small id="detail"></small></h5>
                                </div>

                            </div>
                        </div>

				<div class="gallery-images">
					<div class="selected-image">
						<div class="row">


						</div>
					</div>
				</div>
			</div>


			</div>
		</div>
	</div>


{{-- GALLERY MODAL ENDS --}}


@endsection

@section('scripts')

<script type="text/javascript">
$('#example2').dataTable( {
  "ordering": false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false,
      'responsive'  : true
} );
</script>

<script type="text/javascript">
	
	// Gallery Section Update
	
	
		$(document).on("click", ".set-gallery1" , function(){
			var pid = $(this).find('input[type=hidden]').val();
			$('#pid').val(pid);
			$('.selected-image .row').html('');
				$.ajax({
						type: "GET",
						url:"{{ route('admin-vr-show') }}",
						data:{id:pid},
						success:function(data){
                        $('#detail').html(data[2]);
						  if(data[0] == 0)
						  {
							$('.selected-image .row').addClass('justify-content-center');
							  $('.selected-image .row').html('<h3>{{ __("No Images Found.") }}</h3>');
						   }
						  else {
							$('.selected-image .row').removeClass('justify-content-center');
							  $('.selected-image .row h3').remove();      
							  var arr = $.map(data[1], function(el) {
							  return el });
	
							  for(var k in arr)
							  {
							$('.selected-image .row').append('<div class="col-sm-6">'+
											'<div class="img gallery-img">'+
												'<a class="img-popup" href="'+'{{asset('assets/images/attachments').'/'}}'+arr[k]+'">'+
												'<img  src="'+'{{asset('assets/images/attachments').'/'}}'+arr[k]+'" alt="gallery image">'+
												'</a>'+
											'</div>'+
										  '</div>');
							  }                         
						   }
	 
							$('.img-popup').magnificPopup({
							type: 'image'
						  });
	
						 $(document).off('focusin');
	
						}
	
	
					  });
		  });
	
	

	
	// Gallery Section Update Ends	
	
	</script>

@endsection
