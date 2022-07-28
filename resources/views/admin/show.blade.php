<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Profile') }} <br>
            <a class="badge badge-info text-white">{{$user->name}}</a>
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12-md  d-flex justify-content-center">
                <div class="card mt-4 " style="width: 30rem;">
                    <div class="card-body">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <x-label value="{{ __('Email') }}" />
                                    <input type="email" value="{{$user->email}}" disabled class="form-control" id="inputEmail4">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <x-label value="{{ __('Name:') }}" />
                                    <input type="name" value="{{$user->name}}" disabled class="form-control" id="inputName">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <x-label value="{{ __('Register as:') }}" />
                                    
                                    @if ($user->roles->isNotEmpty())
                                    @foreach ($user->roles as $role)
                                        <span class="badge badge-success">
                                            {{ $role->name }}
                                        </span>
                                    @endforeach
                                @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('admin-profile-settings.index') }}">
                                        <x-button>
                                        <a class="text-decoration-none text-reset" href="{{ route('role.edit',$user->id) }}">Edit user</a>
                                        </x-button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
