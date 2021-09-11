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
                                                <li class="breadcrumb-item active"><a href="/users">Users</a></li>
                                                
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Users</h4>
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

                                            <table class="table" id="my-table">
                                                <thead>
                                                    <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Role</th>
                                                    <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                               
                                                    <tr>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email}}</td>
                                                        <td>{{ $user->password}}</td>
                                                        <td>{{ $user->role }}</td>
                                                        <td><form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                          <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                           
                                                   
                                                </tbody>
                                            </table>

                                          
            
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