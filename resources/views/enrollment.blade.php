@extends('layouts.app')
@section('content')
    
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Activities Enrollment</li>
            </ol>
            <h2>Activities Enrollment</h2>

        </div>
    </section>
    <!-- End Breadcrumbs -->

   
      
    <section class="inner-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Activities Details</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Activity Name</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($activities as $activity)
                                        <tr>
                                            <td>{{ $activity->id }}</td>
                                            <td>{{ $activity->acty_name }}</td>
                                            <td>{{ $activity->acty_desc }}</td>
                                            <td>{{ $activity->acty_start_date }}</td>
                                            <td>{{ $activity->acty_end_date }}</td>   
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div></br>







        

         <!-- activities-enrollment form-->
        <div class="container">
          <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">                              
                        <div class="card-header">Activities Erollment Form</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('enrollment-submit') }}"> 
                                    @csrf 
                                    
                                    <div class="form-group row">
                                        <label for="user_id" class="col-md-4 col-form-label text-md-right">User ID</label>
                                        
                                        <div class="col-md-6">
                                            <input id="user_id" type="text" class="form-control" name="user_id" 
                                                required autocomplete="user_id" autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="activity_id" class="col-md-4 col-form-label text-md-right">Activity:</label>
                                        
                                        <div class="col-md-6">
                                            <select name="activity_id" id="activity_id" class="form-control" 
                                                required autocomplete="activity_id" autofocus>
                                
                                                    <option value=""> </option>
                                                    @foreach($activities as $activity)
                                                            <option value="{{ $activity->id }}">{{ $activity->acty_name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="enroll_date" class="col-md-4 col-form-label text-md-right">Enrollment Date:</label>  
                                            
                                        <div class="col-md-6">                                                   
                                            <input type="hidden" name="enroll_date" value="{{date('Y-m-d')}}"> 
                                            {{date('Y-m-d')}}    
                                        </div>
                                    </div>                
                                                    <input type="hidden" name="enroll_status" value="1">

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Enroll
                                            </button>

                                            <button type="reset" class="btn btn-primary">
                                                Clear
                                            </button>
                                        </div>
                                    </div>                                          
                                </form>                                       
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>  
    <!-- End activities-enrollment form -->     
        <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        </div>
    
    </section>
@endsection

