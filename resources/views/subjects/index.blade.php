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
                                                <li class="breadcrumb-item active"><a href="/subjects">Subjects</a></li>
                                                
                                            </ol>
                                        </div>
                                        
                                        <div class="pull-left">
                                          <a class="btn btn-primary" href="{{ route('subjects.create') }}"><i class="fa fa-plus"> Add Subject</i></a>
                                         </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                        @if ($message = Session::get('success'))
                                          <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                          </div>
                                        @endif

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th class="Bold">No</th>
                                                    <th class="Bold">Class</th>
                                                    <th class="Bold">Subject</th>
                                                    <th class="Bold">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($subjects as $subject)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $subject->class }}</td> 
                                                        <td>{{ $subject->subject }}</td>  
                                                        <td><form action="{{ route('subjects.destroy',$subject->id) }}" method="POST">
                                                          <a class="btn btn-primary" href="{{ route('subjects.edit',$subject->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            @endforeach
                                                   
                                                </tbody>
                                            </table>

                                            {{ $subjects->links() }}

                                          
            
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