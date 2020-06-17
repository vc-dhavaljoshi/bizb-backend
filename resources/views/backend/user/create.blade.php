<x-backend.layouts.backend>
    <!-- Hero -->
    <x-backend.elements.page-header title="Create user" />
    <!-- END Hero -->
    <!-- Page Content -->
    <div class="content">
        <!-- Info -->
        <x-backend.elements.card is-div is-rounded is-bordered with-header>
            <x-slot name="title">Personal information</x-slot>
            <div class="block-content">
                            <form action="{{ route('backend.users.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Basic Elements -->
                                <h2 class="content-heading pt-0">Basic</h2>
                                <div class="row push">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="example-text-input">Name</label>
                                            <input type="text" class="form-control @if($errors->has('name')) is-invalid  @endif" id="example-text-input" value="{{ old('name') }}" name="name" placeholder="">
                                            @if($errors->has('name'))
                                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="example-email-input">Email</label>
                                            <input type="email" class="form-control @if($errors->has('email')) is-invalid  @endif" id="example-email-input" value="{{ old('email') }}"  name="email" placeholder="">
                                            @if($errors->has('email'))
                                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">    
                                         <div class="form-group">
                                            <label for="example-email-input">Username</label>
                                            <input type="text" class="form-control @if($errors->has('username')) is-invalid  @endif" id="example-email-input" value="{{ old('username') }}"  name="username" placeholder="">
                                            @if($errors->has('username'))
                                                <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                                            @endif
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">    
                                        <div class="form-group">
                                            <label for="example-email-input">Mobile</label>
                                            <input type="text" class="form-control @if($errors->has('mobile')) is-invalid  @endif" id="example-email-input" value="{{ old('mobile') }}"  name="mobile" placeholder="">
                                            @if($errors->has('mobile'))
                                                <div class="invalid-feedback">{{ $errors->first('mobile') }}</div>
                                            @endif
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">    
                                        <div class="form-group">
                                            <label for="example-password-input">Password</label>
                                            <input type="password" class="form-control @if($errors->has('password')) is-invalid  @endif" id="example-password-input" name="password" placeholder="">
                                             @if($errors->has('password'))
                                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">    
                                        <div class="form-group">
                                            <label for="example-password-input">Confirm Password</label>
                                            <input type="password" class="form-control @if($errors->has('confirm_password')) is-invalid  @endif" id="example-password-input" name="confirm_password" placeholder="">
                                             @if($errors->has('confirm_password'))
                                                <div class="invalid-feedback">{{ $errors->first('confirm_password') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" name="submit" name="submit">
                                    </div>
                                </div>
                            </form>
                        </div>

        </x-backend.elements.card>
        <!-- END Info -->
    </div>
    <!-- END Page Content -->
</x-backend.layouts.backend>
