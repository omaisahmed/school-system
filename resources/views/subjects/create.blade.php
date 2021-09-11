<x-app-layout>

    <!-- Start right Content here -->
    
                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
    
                    @include('partials.navigation')

                    <div class="page-content-wrapper ">

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/subjects">Subjects</a></li>
                        <li class="breadcrumb-item active">Add Subject</li>
                    </ol>
                </div>
                
                  <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('subjects.index') }}"> Back</a>
                </div>
                <h4 class="page-title mt-3">Add New Subject</h4>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <form action="{{ route('subjects.store') }}" method="POST">
                   @csrf
                        <div class="form-group mb-0">
                            <label class="mb-2 pb-1">Class</label>
                            <div>
                            <select name="class" class="select2 form-control mb-3 custom-select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                @foreach($ClassSub as $ClassSubjects)
                                <option value="{{ $ClassSubjects->class }}">{{ $ClassSubjects->class }}</option>
                                @endforeach
                            </select>
                            </div>
                        
                        </div>

                        <div class="form-group mt-2">
                            <label class="mb-2 pb-1">Subject</label>
                            <input type="text" name="subject" class="form-control" required placeholder="Subject"/>
                        </div>

                   
                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset"  class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->

        
    </div> <!-- end row -->                              

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->


                @include('partials.footer')

            </div>
            <!-- End Right content here -->
          
</x-app-layout>