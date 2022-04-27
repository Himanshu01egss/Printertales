@extends('layouts.admin')

@section('title', 'All Services')

@section('Admin header')

@section('Admin sidebar')


@section('content')
<style>
	    .form-border {
	        border: 2px solid #17365D;
	        border-radius: 5px;
	    }
	    .btn-theme-blue {
	        color: white;
	        padding: 8px 18px;
	        background: #17365D;
	        transition: 0.3s ease-in;
	        border-radius: 10px;
	    }
	    .btn-theme-blue:hover {
	        color: white;
	        transition: 0.3s ease-in;
	        background: #2a4c78;
	    }
	    .form input, .form textarea {
            -webkit-appearance: auto; 
        }
        label {
            color: #111;
        }
     /* Styles for signature plugin v1.2.0. */
        .kbw-signature {
        	display: inline-block;
        	border: 1px solid #a0a0a0;
        	-ms-touch-action: none;
        }
        .kbw-signature-disabled {
        	opacity: 0.35;
        }
         .kbw-signature { width: 100%; height: 200px;}
        #sig canvas, #sig2 canvas, #sig3 canvas{width: 100% !important;height: auto;}
        
        .font-small {
            font-size: small;
        }
        
        .input-group-text {
            background: white;
            border: none;
            font-size: 0.9rem;
        }
        .bordered-form-field {
          border: 1px solid #17365D;  
        }
        .bordered-form-side-field {
            border-left: 1px solid #17365D;
            border-right: 1px solid #17365D;
        }
        .form-control {
            border: none;
            font-size: 0.9rem;
        }
        .heading-block {
            font-size: 18px;
            padding: 5px 0px;
            background: #17365D;
            color: #fff;
        }
        .sm-border {
            border-bottom: 0;
            border-top: 0;
        }
        .sm-direction-col {
                flex-direction: row;
            }
            .sm-direction-col input {
                width: auto;
            }
        @media  screen and (max-width:767px) {
            .sm-direction-col {
                flex-direction: column;
            }
            .sm-direction-col input {
                width: 100% !important;
            }
            .sm-border {
                border-bottom: 1px solid #17365D;
                border-top: 1px solid #17365D;
            }
        }
        input {
            background: #FFF7C8 !important;
        }
	</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Service Form - {{ $serviceform->business_username }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">  Service Form </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
               
              </div>
              

              <div class="card-body">
                    <form action="javascript:void();" >
	            @if( Session::has('message') )
					<div class="alert alert-success" role="alert">
					{{ Session::get('message') }}
					</div>
					@endif
                @csrf
	        <div class="form-border">
	        <div class="heading-block">
	            <div class="form-section-heading text-center">
	                Funding Application
	            </div>
	        </div>
	        <div class="row m-0 p-0">
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Business Legal Name<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Username" name="business_username" value="{{ $serviceform->business_username }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Doing Business As:</span>
                              </div>
                              <input type="text" class="form-control" placeholder="Business Name" name="business_name" value="{{ $serviceform->business_name }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-side-field w-100">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Legal Entity:<i class="text-danger">*</i></span>
                              </div>
                              <div class="form-check form-check-inline pl-3">
                                  <input class="form-check-input" type="radio" name="legal_entity" id="inlineRadio1" value="Corporation" {{ ($serviceform->legal_entity=="Corporation")? "checked" : "" }}>
                                  <label class="form-check-label" for="inlineRadio1">Corporation</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="legal_entity" id="inlineRadio2" value="LLC" {{ ($serviceform->legal_entity=="LLC")? "checked" : "" }}>
                                  <label class="form-check-label" for="inlineRadio2">LLC</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="legal_entity" id="inlineRadio3" value="Sole Proprietership" {{ ($serviceform->legal_entity=="Sole Proprietership")? "checked" : "" }}>
                                  <label class="form-check-label" for="inlineRadio3">Sole Proprietership</label>
                                </div>
                              </div>
                        </div>
            	    </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Federal tax ID:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Federal tax ID" name="federal_taxid" value="{{ $serviceform->federal_taxid }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Business Phone:<i class="text-danger">*</i></span>
                              </div>
                              <input type="tel" minlength="8" maxlength="12" class="form-control" placeholder="Phone" name="business_phone" value="{{ $serviceform->business_phone }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Business Website:</span>
                              </div>
                              <input type="url" class="form-control" placeholder="Website" name="buisness_website" value="{{ $serviceform->buisness_website }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Mobile:<i class="text-danger">*</i></span>
                              </div>
                              <input type="tel" class="form-control" placeholder="Mobile No." name="business_mobile" value="{{ $serviceform->business_mobile }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Business Fax:</span>
                              </div>
                              <input type="text" class="form-control" placeholder="Fax No." name="business_fax" value="{{ $serviceform->business_fax }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email Address:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Email ID" name="business_email" value="{{ $serviceform->business_email }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Business Start Date:<i class="text-danger">*</i></span>
                              </div>
                              <input type="date" class="form-control" placeholder="Date" name="business_start_date" value="{{ $serviceform->business_start_date }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Physical Address:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Physical Address" name="business_address" value="{{ $serviceform->business_address }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group sm-direction-col">
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">City:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="City" name="business_city" value="{{ $serviceform->business_city }}" readonly>
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">State:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="State" name="business_state" value="{{ $serviceform->business_state }}" readonly>
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">Zip Code:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Zip Code" name="business_zip" value="{{ $serviceform->business_zip }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Mailing Address:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Mailing Address" name="business_mail_add" value="{{ $serviceform->business_mail_add }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group sm-direction-col">
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">City:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="City" name="business_city2" value="{{ $serviceform->business_city2 }}" readonly>
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">State:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="State" name="business_state2" value="{{ $serviceform->business_state2 }}" readonly>
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">Zip Code:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Zip Code" name="business_zip2" value="{{ $serviceform->business_zip2 }}" readonly>
                        </div>
            	    </div>
	            </div>
	        </div>
	        <div class="heading-block">
	            <div class="form-section-heading text-center">
	                Owner / Principal Information
	            </div>
	        </div>
	        <div class="row m-0 p-0">
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Name<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Name" name="owner_name" value="{{ $serviceform->owner_name }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">% of Ownwership:<i class="text-danger">*</i></span>
                              </div>
                              <input type="number" min="0" maxlength="2" class="form-control" placeholder="Percentage of Ownership" name="owner_percent" value="{{ $serviceform->owner_percent }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Home Address:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Home Address" name="owner_address" value="{{ $serviceform->owner_address }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group sm-direction-col">
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">City:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="City" name="owner_city" value="{{ $serviceform->owner_city }}" readonly>
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">State:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="State" name="owner_state" value="{{ $serviceform->owner_state }}" readonly>
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">Zip Code:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Zip Code" name="owner_zip" value="{{ $serviceform->owner_zip }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email:<i class="text-danger">*</i></span>
                              </div>
                              <input type="email" class="form-control" placeholder="Email ID" name="owner_email" value="{{ $serviceform->owner_email }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Mobile:<i class="text-danger">*</i></span>
                              </div>
                              <input type="tel" min-length="8" maxlength="12" class="form-control" placeholder="Phone" name="owner_phone" value="{{ $serviceform->owner_phone }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Date of Birth:<i class="text-danger">*</i></span>
                              </div>
                              <input type="date" class="form-control" placeholder="Date" name="owner_dob" value="{{ $serviceform->owner_dob }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Social Security#:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Social Security" name="owner_social_security" value="{{ $serviceform->owner_social_security }}" readonly>
                        </div>
            	    </div>
	            </div>
	        </div>
	        <div class="heading-block">
	            <div class="form-section-heading text-center">
	                2nd Owner / Principal Information
	            </div>
	        </div>
	        <div class="row m-0 p-0">
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Name</span>
                              </div>
                              <input type="text" class="form-control" placeholder="Username" name="owner2_name" value="{{ $serviceform->owner2_name }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">% of Ownership:<i class="text-danger">*</i></span>
                              </div>
                              <input type="number" min="0" maxlength="2" class="form-control" placeholder="Percent of Ownership" name="owner2_percent" value="{{ $serviceform->owner2_percent }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Home Address:</span>
                              </div>
                              <input type="text" class="form-control" placeholder="Home Address" name="owner2_address" value="{{ $serviceform->owner2_address }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group sm-direction-col">
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">City:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="City" name="owner2_city" value="{{ $serviceform->owner2_city }}" readonly>
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">State:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="State" name="owner2_state" value="{{ $serviceform->owner2_state }}" readonly>
                              <div class="input-group-prepend sm-border">
                                <span class="input-group-text" id="basic-addon1">Zip Code:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Zip Code" name="owner2_zip" value="{{ $serviceform->owner2_zip }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email:<i class="text-danger">*</i></span>
                              </div>
                              <input type="email" class="form-control" placeholder="Email ID" name="owner2_email" value="{{ $serviceform->owner2_email }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Mobile:<i class="text-danger">*</i></span>
                              </div>
                              <input type="tel" min-length="8" maxlength="12" class="form-control" placeholder="Phone" name="owner2_phone" value="{{ $serviceform->owner2_phone }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Date of Birth:<i class="text-danger">*</i></span>
                              </div>
                              <input type="date" class="form-control" placeholder="Date" name="owner2_dob" value="{{ $serviceform->owner2_dob }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Social Security#:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Social Security" name="owner2_social_security" value="{{ $serviceform->owner2_social_security }}" readonly>
                        </div>
            	    </div>
	            </div>
	        </div>
	        <div class="heading-block">
	            <div class="form-section-heading text-center">
	                Business Information
	            </div>
	        </div>
	        <div class="row m-0 p-0">
	            <div class="col-sm-12 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Business Description:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Business Description" name="business_i_description" value="{{ $serviceform->business_i_description }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rented or Owned:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Business Name" name="business_i_name" value="{{ $serviceform->business_i_name }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Open bankruptcy?<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Open Bankruptcy" name="business_i_bankrutcy" value="{{ $serviceform->business_i_bankrutcy }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-12 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rent/Mortgage Amount:<i class="text-danger">*</i></span>
                              </div>
                              <input type="number" class="form-control" placeholder="Rent/ Mortgage Amount" name="business_i_rent_amount" value="{{ $serviceform->business_i_rent_amount }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-12 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Landlord/Mortgage Company:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Landlord/Mortgage Company" name="business_i_landlord" value="{{ $serviceform->business_i_landlord }}" readonly>
                        </div>
            	    </div>
	            </div>
	        </div>
	        <div class="heading-block">
	            <div class="form-section-heading text-center">
	                Funding Information
	            </div>
	        </div>
	        <div class="row m-0 p-0">
	            <div class="col-sm-12 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">How much Capital is being requested?:<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Amount of Capital" name="funding_i_capital" value="{{ $serviceform->funding_i_capital }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-12 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">What is the Capital being requested for?<i class="text-danger">*</i></span>
                              </div>
                              <input type="number" min="0" maxlength="2" class="form-control" placeholder="Reason for Capital request" name="funding_i_capital_request" value="{{ $serviceform->funding_i_capital_request }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Visa/MasterCard Monthly Volume:<i class="text-danger">*</i></span>
                              </div>
                              <input type="number" class="form-control" placeholder="Monthy Volume" name="funding_i_monthly_volume" value="{{ $serviceform->funding_i_monthly_volume }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-6 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Total Monthly Sales (All Forms of Revenue):<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Total Monthly Sales" name="funding_i_total_sale" value="{{ $serviceform->funding_i_total_sale }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-12 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Gross Annual Sales (Last Years's Tax Return):<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Gross Annual Sales" name="funding_i_gross_sale" value="{{ $serviceform->funding_i_gross_sale }}" readonly>
                        </div>
            	    </div>
	            </div>
	            <div class="col-sm-12 p-0">
	                <div class="bordered-form-field">
        	            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Gross Annual Sales (Last Years's Tax Return):<i class="text-danger">*</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Yes/No, Current Outstanding Balance" name="funding_i_total_outstanding" value="{{ $serviceform->funding_i_total_outstanding }}" readonly>
                        </div>
            	    </div>
	            </div>
	        </div>
	        <div class="heading-block">
	            <div class="form-section-heading text-center">
	                Authorization Form
	            </div>
	        </div>
	        <p class="p-2 font-small">The Merchant and Owner(s)/officer(s) identified above (individually, an "Applicant") each represents, acknowledges and agrees that (1) all information and documents provided to Representative including credit card processor statements are true, accurate and complete, (2) Applicant will immediately notify Representative of any change in such information or financial condition, (3) Applicant authorizes Representative to disclose all information and documents that Representative may obtain including credit reports to other persons or entities (collectively, "Assignees") that may be involved with or acquire commercial loans having daily repayment features or purchases of future receivables including Merchant Cash Advance transactions, including without limitation the application therefor collectively, "Transactions"), and each Assignee is authorized to use such information and documents, and share such information and documents with other Assignees, in connection with potential Transactions, (4) Representative and each Assignee will rely upon the accuracy and completeness of such information and documents, (5) Representative, Assignees, and each of their representatives, successors, assigns and designees (collectively, "Recipients") are authorized to request and receive any investigative reports, credit reports, statements from creditors or financial institutions, verification of information, or any other information that a Recipient deems necessary, (6) Applicant waives and releases any claims against Recipients and any information-providers arising from any act or omission relating to the requesting, receiving or release of information, and (7) each Owner/officer represents that he or she is authorized to sign this form on behalf of Merchant. A copy of this authorization may be accepted as an original. The term "Representative" shall mean any funding source looking to offer, make available, or provide to the Merchant access to loans or merchant cash advances based on such Merchant's future receivables or sales and/or structured with a periodic repayment feature.</p>
	        <div class="row form-signature m-0">
	            <div class="col-sm-6 row m-0">
	                <div class="col-12">
	                    <p>Owner Signature</p>
	                </div>
	                <div class="col-12 p-0">
	                <div class="bordered-form-field">
                        <div class="">
                            <div id="sig" style="border-radius: 4px;"></div>
                                <!--<textarea id="signature64" name="authorization_owner_sign" style="display:none;" required></textarea>-->
                                <!-- <small id="clear" class="pr-4"><a class="text-primary" href="javascript:void(0);">Clear Sign</a></small> -->
                                 <img src="{{ $serviceform->authorization_owner_sign }}" style="width:40%;">
                        </div>
                        </div>
                    </div>
                    <div class="col-12 p-0">
            	        <div class="bordered-form-field">
                    	    <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Print name:</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Print name" name="authorization_owner_name" value="{{ $serviceform->authorization_owner_name }}" readonly>
                            </div>
                        </div>
	                </div>
	                <div class="col-12 p-0">
            	        <div class="bordered-form-field">
                    	    <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Date:<i class="text-danger">*</i></span>
                                </div>
                                <input type="date" class="form-control" placeholder="Date" name="authorization_owner_date" value="{{ $serviceform->authorization_owner_date }}" readonly>
                            </div>
                        </div>
	                </div>
	            </div>
	            <div class="col-sm-6 row m-0">
	                <div class="col-12">
	                    <p>Co-owner Signature</p>
	                </div>
	                <div class="col-12 p-0">
	                <div class="bordered-form-field">
                        <div class="">
                            <div id="sig2" style="border-radius: 4px;"></div>
                                <!--<textarea id="signature65" name="authorization_coowner_sign" style="display:none;" required></textarea>-->
                                <!-- <small id="clear2" class="pr-4"><a class="text-primary" href="javascript:void(0);">Clear Sign</a></small> -->
                                 <img src="{{ $serviceform->authorization_coowner_sign }}" style="width:40%;">
                        </div>
                        </div>
                    </div>
                    <div class="col-12 p-0">
            	        <div class="bordered-form-field">
                    	    <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Print name:</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Print name" name="authorization_coowner_name" value="{{ $serviceform->authorization_coowner_name }}" readonly>
                            </div>
                        </div>
	                </div>
	                <div class="col-12 p-0">
            	        <div class="bordered-form-field">
                    	    <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Date:<i class="text-danger">*</i></span>
                                </div>
                                <input type="date" class="form-control" placeholder="Date" name="authorization_coowner_date" value="{{ $serviceform->authorization_coowner_date }}" readonly>
                            </div>
                        </div>
	                </div>
	            </div>
	        </div>
	        <div class="text-success p-2">
	            *Note: All Fields Are Required on this Application before Submission.
	        </div>
	        </div>
	    
	    <div class="col-sm-6 row m-0 pt-3">
	                <div class="col-12">
	                    <p>Signature</p>
	                </div>
	                <div class="col-12 p-0">
                        <div class="">
                            <div id="sig3" style="border-radius: 4px;"></div>
                                <img src="{{ $serviceform->authorization_sign }}" style="width:40%;">
                        </div>
                    </div>
        </div>
                    
        </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
@endsection

@section('Admin footer')

