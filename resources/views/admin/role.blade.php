<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="container-xl">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <a href="{{ route('role.create') }}" class="btn btn-dark mb-3 font-weight-bold">
            Add User <span class="badge badge-dark">+</span>
            </a>
                    <table class="table" id="myTable">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>						
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        @if(!\Auth::user()->hasRole('admin') && $user->hasRole('admin')) @continue; @endif 
                            <tr>
                                <th scope="row">{{$user['id']}}</th>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['email']}}</td>                        
                                <td>
                                @if ($user->roles->isNotEmpty())
                                    @foreach ($user->roles as $role)
                                        <span class="badge badge-success">
                                            {{ $role->name }}
                                        </span>
                                    @endforeach
                                @endif
                                </td>

                                <td>
                                    <form action="{{ route('role.destroy',$user->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <a class="badge badge-primary text-white" href="{{ route('role.show',$user->id) }}">Show</a>
    
                                        <a class="badge badge-warning text-white" href="{{ route('role.edit',$user->id) }}">Edit</a>
   
                        
                                        <button type="submit" class="badge badge-danger font-weight-bold">Delete</button>
        
                                       
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>     
    </div>
</x-app-layout>
