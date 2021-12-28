@extends('layouts.admin')

@section('styles')

<style type="text/css">
    .table-responsive {
    overflow-x: hidden;
}
table#example2 {
    margin-left: 10px;
}

</style>

@endsection

@section('content')

                    <div class="content-area">
                        <div class="mr-breadcrumb">
                            <div class="row">
                                <div class="col-lg-12">
                                        <h4 class="heading">{{ __("Ambassador Details") }} <a class="add-btn" href="{{ url()->previous() }}"><i class="fas fa-arrow-left"></i> {{ __("Back") }}</a></h4>
                                        <ul class="links">
                                            <li>
                                                <a href="{{ route('admin.dashboard') }}">{{ __("Dashboard") }} </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin-ambassedor-index') }}">{{ __("Ambassadors") }}</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin-user-show',$data->id) }}">{{ __("Details") }}</a>
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
                                             
                                                    <div class="col-md-4">
                                                    <div class="table-responsive show-table">
                                                        <table class="table">
                                                        <tr>
                                                            <th>{{ __("ID#") }}</th>
                                                            <td>{{$data->id}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{ __("First Name") }}</th>
                                                            <td>{{$data->first_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{ __("Email") }}</th>
                                                            <td>{{$data->email}}</td>
                                                        </tr>
                                                        <tr>
                                                                <th>{{ __("Last Name") }}</th>
                                                                <td>{{$data->last_name}}</td>
                                                            </tr>
                                                       
                                                            <tr>
                                                                <th>{{ __("Description") }}</th>
                                                                <td>{{$data->description}}</td>
                                                            </tr>


                                                        </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="table-responsive show-table">
                                                    <table class="table">
                                                            
                                                            @if($data->facebook != null)
                                                            <tr>
                                                                <th>{{ __("Facebook") }}</th>
                                                                <td>{{$data->facebook}}</td>
                                                            </tr>
                                                            @endif
                                                            
                                                            @if($data->instagram != null)
                                                            <tr>
                                                                <th>{{ __("Instagram") }}</th>
                                                                <td>{{$data->instagram}}</td>
                                                            </tr>
                                                            @endif
                                                            
                                                            @if($data->youtube != null)
                                                            <tr>
                                                                <th>{{ __("Youtube") }}</th>
                                                                <td>{{$data->youtube}}</td>
                                                            </tr>
                                                            @endif
                                                            
                                                            @if($data->twitter != null)
                                                            <tr>
                                                                <th>{{ __("Twitter") }}</th>
                                                                <td>{{$data->twitter}}</td>
                                                            </tr>
                                                            @endif
                                                            @if($data->website != null)
                                                            <tr>
                                                                <th>{{ __("Website") }}</th>
                                                                <td>{{$data->website}}</td>
                                                            </tr>
                                                            @endif
                                                            @if($data->zip != null)
                                                            <tr>
                                                                <th>{{ __("Zip Code") }}</th>
                                                                <td>{{$data->zip}}</td>
                                                            </tr>
                                                            @endif
                                                            <tr>
                                                                <th>{{ __("Joined") }}</th>
                                                                <td>{{$data->created_at->diffForHumans()}}</td>
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

@endsection

@section('scripts')

<script type="text/javascript">
$('#example2').dataTable( {
  "ordering": false,
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false,
      'responsive'  : true
} );
</script>


@endsection