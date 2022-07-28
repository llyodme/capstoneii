<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
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
                </div>
            </div>
        </div>
    </div>
</div>
    

</x-app-layout>
