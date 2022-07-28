<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile Settings') }} <br>
            <a class="badge badge-info text-white">Name: {{$user->name}}</a> <br>
            @if ($user->roles->isNotEmpty())
                @foreach ($user->roles as $role)
                    <span class="badge badge-success">
                       Role: {{ $role->name }}
                    </span>
                @endforeach
            @endif
        </h2>
        </h2>
    </x-slot>
<div class="container-fluid">
    <div class="row">
        <div class="col-12-md  d-flex justify-content-center">
            <div class="card mt-4 " style="width: 30rem;">
                <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                     <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('admin-profile-settings.update', $user = Auth::user()) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <x-label value="{{ __('Email') }}" />
                            <input type="email" value="{{$user->email}}" name="email" class="form-control" id="inputEmail4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <x-label value="{{ __('Name:') }}" />
                            <input type="name" value="{{$user->name}}" name="name" class="form-control" id="inputName">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- Password -->
                                <div>
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" name="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    autocomplete="new-password" />
                                </div>
                            </div> 
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                 <!-- Confirm Password -->
                                <div>
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" name="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('role.index') }}">
                                            {{ __('Back') }}
                                        </a>
                                        <x-button class="ml-4">
                                            {{ __('Save') }}
                                        </x-button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
</x-app-layout>
