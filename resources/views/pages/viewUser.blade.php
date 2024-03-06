@include('includes.styles')
@include('includes.header')

 <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All userss with its roles</h3>
                            <a href="/addusers" class="btn btn-dark float-right">Add users</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-responsive-sm table-bordered table-striped table-responsive ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                          <th>Last Name</th>  
                                          <th>Nick Name</th>  
                                          <th>Address 1</th>  
                                          <th>Address 2</th>
                                        <th>Area</th>
                                        <th>Pincode</th>  
                                          <th>City</th> 
                                          <th>State</th>  
                                          <th>Country</th>  
                                        <th>Email</th>
                                         <th>Second Number</th>  
                                        <th>Birthdate</th>
                                          <th>Anniversary Date</th> 
                                          <th>Spouse First Name</th>
                                        <th>Spouse Last Name</th>
                                        <th>Spouse Birthdate</th>
                                        <th>Spouse Nickname</th>
                                        <th>Mobile Verified</th>
                                        <th>Email Verified</th>  
                                          <th>users Status</th>
                                        <th>Optin Status</th>  
                                          <th>Reference By</th> 
                                          <th>Created By</th> 
                                          <th>Created At</th> 
                                          <th>Updated At</th> 
                                        <th colspan="2" class="text-center">Actions</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                <tr id="updateUserRow_{{ $users->id }}">
                                            <td>{{ $users->id }}
                                            </td>
                                            <td>{{ $users->first_name. "  " .$users->last_name }}</td>
                                            </td>
                                              <td>{{ $users->last_name }}  
                                            </td>
                                              <td>{{ $users->nick_name }}
                                            </td>  
                                              <td>{{ $users->address_1 }}
                                            </td>  
                                              <td>{{ $users->address_2 }}
                                            </td>
                                            <td>{{ $users->area }}
                                            </td>
                                            <td>{{ $users->pincode }}  
                                              </td>  
                                              <td>{{ $users->city }}
                                            </td>  
                                              <td>{{ $users->state }}
                                            </td>
                                            <td>{{ $users->country }}
                                            </td>  
                                            <td>{{ $users->email }}
                                            </td>
                                              <td>{{ $users->second_number }}
                                            </td>  
                                            <td>{{ $users->birthdate }}
                                            </td>
                                             <td>{{ $users->anniversary_date }}
                                            </td>
                                            <td>{{ $users->spouse_first_name }}
                                            </td>
                                            <td>{{ $users->spouse_last_name }}
                                            </td>
                                            <td>{{ $users->spouse_birthdate }}
                                            </td>
                                            <td>{{ $users->spouse_nick_name }}
                                            </td>
                                            <td>{{ $users->mobile_verified }}
                                            </td>
                                            <td>{{ $users->email_verified }}
                                            </td>  
                                             <td>{{ $users->users_status }}
                                            </td>
                                            <td>{{ $users->optin_status }}
                                            </td>  
                                            <td>{{ $users->reference_by }}
                                            </td>
                                            <td>{{ $users->created_by }}
                                            </td>
                                            <td>{{ $users->created_at }}
                                            </td>
                                            <td>{{ $users->updated_at }}
                                            </td>  
                                           
                                            <td class="text-center"><input type="button" class="btn btn-secondary" value="Update"
                                                    onclick="sendUpdateusers({{ $users->id }})"></td>
                                            <td class="text-center"><input type="button" class="btn btn-danger" value="Delete"
                                                    onclick="deleteusers({{ $users->id }})"></td>
                                        </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>