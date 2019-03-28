

<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                        </div><br />
                    @endif
                    @if (\Session::has('failure'))
                        <div class="alert alert-danger">
                            <p>{{ \Session::get('failure') }}</p>
                        </div><br />
                    @endif
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <form action="{{url('home')}}" method="post" class="form-horizontal">
            @csrf
            <div class="form-group form-group-lg">
                <label class="col-sm-6 control-label" for="formGroupInputLarge">
                    <h1><span class="red-color">Sign up</span> for the latest news</h1>
                </label>




                <div class="col-sm-3">
                    <input type="text" id="subscribe" name="email" class="form-control input-lg" placeholder="Enter your e-mail">
                </div>
                <div class="col-sm-1">
                    <input type="submit" value="Sign Up" class="btn btn-large pink">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>
    </div>
</section>