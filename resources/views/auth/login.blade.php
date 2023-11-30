<x-layout>
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
    
    <!-- Inline CSS based on choices in "Settings" tab -->
    <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
    
    <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
    <div class="bootstrap-iso">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="post" action="/login">
                        @csrf
                        <div class="form-group ">
                            <label class="control-label requiredField" for="name">
                                Name
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <input class="form-control" id="name" name="name" type="text"/>
                        </div>
                        <div class="form-group ">
                            <label class="control-label requiredField" for="email">
                                Email
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <input class="form-control" id="email" name="email" type="email"/>
                        </div>
                        <div class="form-group ">
                            <label class="control-label requiredField" for="password">
                                Password
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <input class="form-control" id="password" name="password" type="password"/>
                        </div>
                        <div class="form-group">
                            <div>
                                <button class="btn btn-primary " name="submit" type="submit">
                                    Invia
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>