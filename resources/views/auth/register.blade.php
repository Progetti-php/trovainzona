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
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                      </label>
                    <form method="post" action="/register">
                        @csrf
                        {{-- NOME --}}
                        <div class="form-group ">
                            <label class="control-label requiredField" for="name">
                                Nome
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <input class="form-control" id="name" name="name" placeholder="Paolo" type="text"/>
                        </div>
                        {{-- COGNOME --}}
                        <div class="form-group ">
                            <label class="control-label requiredField" for="surname">
                                Cognome
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <input class="form-control" id="surname" name="surname" placeholder="Rossi" type="text"/>
                        </div>
                        {{-- EMAIL --}}
                        <div class="form-group ">
                            <label class="control-label requiredField" for="email">
                                Email
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <input class="form-control" id="email" name="email" placeholder="esempio@gmail.com " type="email"/>
                        </div>
                        {{-- CELLULARE --}}
                        <div class="form-group ">
                            <label class="control-label requiredField" for="cell">
                                Cellulare
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <input class="form-control" id="cell" name="cell" placeholder="+39 " type="tel"/>
                        </div>
                        {{-- NUMERO FISSO --}}
                        <div class="form-group ">
                            <label class="control-label " for="tel">
                                Telefono Fisso
                            </label>
                            <input class="form-control" id="tel" name="tel" type="tel"/>
                        </div>
                        {{-- PASSWORD --}}
                        <div class="form-group ">
                            <label class="control-label requiredField" for="password">
                                Password
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <input class="form-control" id="password" name="password" type="password"/>
                        </div>
                        {{-- CONFERMA PASSWORD --}}
                        <div class="form-group ">
                            <label class="control-label requiredField" for="password_confirmation">
                                Conferma Password
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <input class="form-control" id="password_confirmation" name="password_confirmation" type="password"/>
                        </div>
                        {{-- C.A.P --}}
                        <div class="form-group ">
                            <label class="control-label requiredField" for="cap">
                                C.A.P
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <input class="form-control" id="cap" name="cap" type="text" size=5 maxlength=5 />
                            <span class="help-block" id="hint_number">
                                Codice di avviamento postale
                            </span>
                        </div>
                        {{-- BOTTONE REGISTAZIONE --}}
                        <div class="form-group">
                            <div>
                                <button class="btn btn-primary " name="submit" type="submit">
                                    Registrati!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>   
</x-layout>